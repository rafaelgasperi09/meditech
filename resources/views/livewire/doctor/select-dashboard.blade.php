<div>
    <select wire:model="selectedOption1" class="form-control select">
        @foreach ($options1 as $option)
            <option>{{ $option }}</option>
        @endforeach
    </select>
</div>
