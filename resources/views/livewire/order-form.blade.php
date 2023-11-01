<form wire:submit.prevent="submit" class="text-light">
    @for ($i = 1; $i < $input; $i++)
    <div class="mb-3">
        <label for="title">Title</label>
        <input wire:model='title.{{$i}}' class="form-control" type="text" name="title" id="title">
        @error('title.'.$i) <span class="error">{{ $message }}</span> @enderror
    </div>
    @endfor
    <div class="mb-3">
        <button class="btn btn-primary" type="submit" @if(count($title) == 0) disabled @endif>Save</button>
    </div>
    <pre>
        @php print_r($title) @endphp
    </pre>
</div>
