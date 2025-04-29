@props(['options' => [], 'selected' => null, 'name'])

<select name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }}>
    <option value="">Seleccione</option>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ in_array($value,$selected) ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>
