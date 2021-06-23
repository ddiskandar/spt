@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50']) !!}></textarea>