@extends('layouts.layout')

@section('title', 'Infinite Scroll')

@section('content')
<div class="container mx-auto mb-28">
    <h1 class="my-10 text-3xl text-center">Livewire Infinite Scroll</h1>
    @livewire('tables.infinite-scroll')
</div>

@endsection
