@props(['disabled' => false, 'name' , 'label' => false])
<x-input-label for="{{$name}}" value="{{ $label ?$label : $name }}"/>
<input  name="{{$name}}" id="{{$name}}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm bg-black mt-3 w-full']) !!}>
