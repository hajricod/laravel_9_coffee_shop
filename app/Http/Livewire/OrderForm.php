<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderForm extends Component
{
    public $title = [];
    public $inputTitle = 3;

    public $address = [];
    public $inputAddress = 3;
 
    // protected function rules()
    // {
    //     return [
    //         'title.*' => 'required|min:3',
    //     ];
    // }

    public function render()
    {
        return view('livewire.order-form');
    }

    public function createTitle() {
        
        $this->validate([
            'title.*' => 'required|min:3',
        ]);

        $this->title = [];
    }

    public function createAddress() {
        
        $data = $this->validate([
            'address.*' => 'required|min:3',
        ]);

       
        dd($data);
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}
