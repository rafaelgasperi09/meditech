@props(['options' => [], 'selected' => null, 'name'])

<select name="{{ $name }}" {{ $attributes->merge(['class' => 'border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm']) }}>
    <option value="">Seleccione</option>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>
