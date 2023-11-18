

<div class="dropdown mx-3">
    <button class="btn dropdown border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag text-light" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
        </svg>
        <span class="badge rounded-pill text-light">{{$qty}}</span>
    </button>
    <ul class="dropdown-menu rounded-0 p-0">
        @forelse ($products as $product)
        <li>
            <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                <div style="width: 150px">
                    <p class="m-0">Amricano</p>
                </div>
                <div style="width: 100px">
                    <span class="badge rounded-pill text-dark">x{{$product->qty}}</span>
                    <span class="badge rounded-pill text-dark">OMR {{currency($product->price * $product->qty)}}</span>
                </div>
            </a>
            {{-- <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                <div style="width: 150px">
                    <p class="m-0">Latte</p>
                </div>
                <div style="width: 100px">
                    <span class="badge rounded-pill text-dark">x1</span>
                    <span class="badge rounded-pill text-dark">OMR 1.500</span>
                </div>
            </a>
            <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                <div style="width: 150px">
                    <p class="m-0">Cappuccino</p>
                </div>
                <div style="width: 100px">
                    <span class="badge rounded-pill text-dark">x1</span>
                    <span class="badge rounded-pill text-dark">OMR 2.000</span>
                </div>
            </a>
            <a class="dropdown-item py-2 d-flex justify-content-between align-items-center" href="#">
                <div style="width: 150px">
                    <p class="m-0">Cortado</p>
                </div>
                <div style="width: 100px">
                    <span class="badge rounded-pill text-dark">x1</span>
                    <span class="badge rounded-pill text-dark">OMR 1.800</span>
                </div>
            </a> --}}
        </li>
        @empty
        <li class="text-center">
            {{__('Your basket is empty')}}
        </li>
        @endforelse
    </ul>
</div>
