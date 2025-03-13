@props(['title' => ''])

<x-base-layout :$title>
    @include('layouts.partials.header')
    {{ $slot }}
    <footer></footer>
</x-base-layout>