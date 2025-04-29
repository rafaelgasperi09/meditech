@props(['value','required'=>false])

<label {{ $attributes->merge(['class' => 'block font-large text-sm text-gray-700']) }}>
   {{ $value ?? $slot }}  @if($required)<span class="star-red">*</span> @endif
</label>
