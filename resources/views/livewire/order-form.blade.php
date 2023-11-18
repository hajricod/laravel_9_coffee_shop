
<div class="row py-5">
    <div class="col-md-6">
        <form wire:submit.prevent="createTitle" class="text-light">
            <div class="mb-3">
                <input wire:model='inputTitle' class="form-control" type="number">
            </div>
            @for ($i = 0; $i < $inputTitle; $i++)
            <div class="mb-3">
                <label for="title">Title</label>
                <input wire:model='title.{{$i}}' class="form-control" type="text" name="title.{{$i}}" id="title.{{$i}}">
                @error('title.'.$i) <span class="error">{{ $message }}</span> @enderror
            </div>
            @endfor
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" @if(count($title) == 0) disabled @endif>Save</button>
            </div>
            <pre>
                @php print_r($title) @endphp
            </pre>
        </form>
    </div>
    <div class="col-md-6">
        <form wire:submit.prevent="createAddress" class="text-light">
            <div class="mb-3">
                <input wire:model='inputAddress' class="form-control" type="number">
            </div>
            @for ($i = 0; $i < $inputAddress; $i++)
            <div class="mb-3">
                <label for="address">Address</label>
                <input wire:model='address.{{$i}}' class="form-control" type="text" name="address.{{$i}}" id="address.{{$i}}">
                @error('address.'.$i) <span class="error">{{ $message }}</span> @enderror
            </div>
            @endfor
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" @if(count($address) == 0) disabled @endif>Save</button>
            </div>
            <pre>
                @php print_r($address) @endphp
            </pre>
        </form>
    </div>
</div>


