@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'form-control']) }}>
{{ $slot }}
</textarea>
