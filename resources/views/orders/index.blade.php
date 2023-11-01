@extends('layouts.app')

@section('content')

<div class="container text-light py-5">
    <div class="row py-5">
        <div class="col-md-8 offset-md-2">
            @livewire('order-form')
        </div>
    </div>
</div>

@endsection