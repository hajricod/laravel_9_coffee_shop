<?php

namespace App\Repositories\Session;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use App\Repositories\Contracts\BasketRepositoryContract;

class BasketRepository implements BasketRepositoryContract
{
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function all(): array 
    {
        return $this->session->get('basket', []);
    }

    public function add(int $id, int $qty): void
    {
        $product = Product::find($id);

        if($product->status && $product->stock > 0) {
           $this->session->put($this->identity($id), $qty);
        }
        
    }

    private function identity(int $id): string
    {
        return 'basket.'.$id;
    }

    public function getCurrentQty(int $id): int
    {
        return $this->session->get($this->identity($id), 0);
    }

    public function remove(int $id): void
    {
        $this->session->remove($this->identity($id));
    }
}