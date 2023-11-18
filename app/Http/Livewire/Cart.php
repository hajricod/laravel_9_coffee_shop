<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class Cart extends Component
{
    public $itemsUnchecked = [];

    public $visible = true;

    public $basket = [];

    public $products = [];

    public $total = 0.00;

    public $qty = 0;

    protected $listeners = [
        'basketUpdated'=> 'hydrate',
        'toggleBasket' => 'toggle'
    ];

    public function hydrate(): void
    {

        $this->qty    = array_sum(basket()->all());
        $this->basket = basket()->all();

        $this->products = tap($this->products(), function (Collection $products) { 
                $this->total = $products->sum('total'); 
            }
        )->toArray();

        $this->home();
        
    }

    public function home()
    {
        if(Session::has('basket') && count(Session::get('basket')) > 0) { 
            
        }else {
            return redirect("/");
        }
    }

    // private function products(): Collection
    // {
    //     if(empty($this->basket)) {
    //         return new Collection;
    //     }

    //     return Product::whereIn('id', array_keys($this->basket))
    //     ->get()
    //     ->map(function (Product $product){
    //         return (object) [
    //             'id'                => $product->id,
    //             'name'              => $product->name,
    //             'name_en'           => $product->name_en,
    //             'description'       => $product->description,
    //             'description_en'    => $product->description_en,
    //             'price'             => $this->checkDiscount($product->price_omr, $product->discount),
    //             'qty'               => $qty = $this->basket[$product->id],
    //             'image'             => getFirstImage($product->id),
    //             'total'             => $this->checkDiscount($product->price_omr, $product->discount) * $qty
    //         ];
    //     });
    // }

    // protected function checkDiscount($price, $discount) : float
    // {

    //     if($discount > 0) {
    //         return discount($price, $discount);
    //     }

    //     return $price;
    // }

    public function toggle(): void
    {
        $this->visible = !$this->visible;
    }

    public function remove(int $id): void
    {
        basket()->remove($id);
        $this->update();
    }

    private function update(): void
    {
        $this->emit('basketUpdated');

        if($this->qty == 0) {
            $this->emit('toggleBasket');
        }

    }

    public function increase(int $id): void
    {
        basket()->add($id, $this->basket[$id] + 1);
        $this->update();
    }

    public function decrease(int $id): void
    {
        if (($qty = $this->basket[$id] - 1) < 1) {
            $this->remove($id);
        } else {
            basket()->add($id, $qty);
            $this->update();
        }
    }

    public function checkProduct($id) {

        if(in_array($id, $this->itemsUnchecked)) {
            $index = array_search($id, $this->itemsUnchecked, true);
            unset($this->itemsUnchecked[$index]);
        }else {
            $this->itemsUnchecked[] = $id;
        }

        $this->update();
        
    }

    public function checkout() {
    
        foreach ($this->itemsUnchecked as $id) {

            basket()->remove($id);
        
        }

        $this->update();

        return redirect('checkout/create');
    }

    public function render() : View
    {
        return view('livewire.cart');
    }
}
