@extends('layouts.app')

@section('content')

<div class="row h-100">
    <div class="col bg-dark h-100 p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade h-100 position-relative" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <div style="
                        background-image: url({{asset('images/pexels-toni-cuenca-585753.jpg')}});
                        background-size:cover;
                        background-position: top"
                        class="d-block w-100 h-100">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div style="
                        background-image: url({{asset('images/pexels-tom-swinnen-1309778.jpg')}});
                        background-size:cover;
                        background-position: center"
                        class="d-block w-100 h-100">
                    </div>
                </div>
            </div>
            <div class="position-absolute"
            style="
            bottom: 3rem;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 3;
            text-align: center;
            color: var(--bs-white);">
                <h3>Coffee Mode</h3>
                <a href="#coffee-menu" class="btn btn-primary">Get Your Coffee</a>
            </div>
        </div>
    </div>
</div>

<div id="coffee-menu" class="row h-100 d-flex align-items-center"
    style="
    background-image: url({{asset('images/pexels-adam-lukac-773958.jpg')}});
    background-size:cover;
    background-position: center;
    background-blend-mode: overlay;
    background-color: var(--bs-dark);
    overflow-y: auto">

    <div class="col-lg-3 col-md-6 bg-light bg-opacity-75 h-50 d-flex align-items-end justify-content-center p-0"
    style="
    background-image: url({{asset('images/pexels-rodolfo-quirós-1727123.jpg')}});
    background-size:cover;
    background-position: center;">
        <div class="p-3 text-center bg-dark bg-opacity-25 w-100">
            <h3 class="text-light">Amricano</h3>
            <button type="button" class="btn btn-outline-light w-100">Add</button>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 bg-light bg-opacity-75 h-50 d-flex align-items-end justify-content-center p-0"
    style="
    background-image: url({{asset('images/pexels-anastasia-belousova-3556686.jpg')}});
    background-size:cover;
    background-position: center;">
        <div class="p-3 text-center bg-dark bg-opacity-25 w-100">
            <h3 class="text-light">Latte</h3>
            <button type="button" class="btn btn-outline-light w-100">Add</button>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 bg-light bg-opacity-75 h-50 d-flex align-items-end justify-content-center p-0"
    style="
    background-image: url({{asset('images/pexels-pixabay-459306.jpg')}});
    background-size:cover;
    background-position: center;">
        <div class="p-3 text-center bg-dark bg-opacity-25 w-100">
            <h3 class="text-light">Cappuccino</h3>
            <button type="button" class="btn btn-outline-light w-100">Add</button>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 bg-light bg-opacity-75 h-50 d-flex align-items-end justify-content-center p-0"
    style="
    background-image: url({{asset('images/pexels-szabó-viktor-3220996.jpg')}});
    background-size:cover;
    background-position: center;">
        <div class="p-3 text-center bg-dark bg-opacity-25 w-100">
            <h3 class="text-light">Cortado</h3>
            <button type="button" class="btn btn-outline-light w-100">Add</button>
        </div>
    </div>
</div>

<div id="contact-us" class="row min-vh-100  d-flex align-items-center"
    style="
    background-image: url({{asset('images/pexels-aksonsat-uanthoeng-1078850.jpg')}});
    background-size:cover;">
    <div class="col h-75 p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card bg-dark w-100 border-0" style="--bs-bg-opacity: 0.3">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="text-light mb-1">{{__('Name')}}</label>
                                    <input class="form-control py-3 bg-light border-0 text-light" type="text" name="name" id="name" style="--bs-bg-opacity: 0.3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="text-light mb-1">{{__('Email')}}</label>
                                    <input class="form-control py-3 bg-light border-0 text-light" type="email" name="email" id="email" style="--bs-bg-opacity: 0.3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="text-light mb-1">{{__('Message')}}</label>
                                    <textarea class="form-control py-3 bg-light border-0 text-light" name="message" id="message" style="--bs-bg-opacity: 0.3" rows="10" required></textarea>
                                </div>
                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <button class="btn btn-outline-light" type="submit">Send</button>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
