<div id="coffee-menu" class="row h-100 d-flex align-items-center"
    style="
    background-image: url({{asset('images/pexels-adam-lukac-773958.jpg')}});
    background-size:cover;
    background-position: center;
    background-blend-mode: overlay;
    background-color: var(--bs-dark);
    overflow-y: auto">

    @foreach ($products as $product)
        <div class="col-lg-3 col-md-6 bg-light bg-opacity-75 h-50 d-flex align-items-end justify-content-center p-0"
        style="
        background-image: url({{asset($product['img'])}});
        background-size:cover;
        background-position: center;">
            <div class="p-3 text-center bg-dark bg-opacity-25 w-100">
                <h3 class="text-light">{{$product['title']}}</h3>
                <button wire:click.prevent="increase({{$product['id']}})" type="button" class="btn btn-outline-light w-100">Add</button>
            </div>
        </div>
    @endforeach
</div>