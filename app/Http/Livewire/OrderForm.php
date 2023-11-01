<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderForm extends Component
{
    public $title = [];
    public $input = 5;
 
    protected function rules()
    {
        return [
            'title.*' => 'required|min:3',
        ];
    }

    public function render()
    {
        return view('livewire.order-form');
    }

    public function submit() {
        $this->validate();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
