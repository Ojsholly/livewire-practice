@extends('layouts.layout')

@section('title', 'Datatable')

@section('content')
<div class="container mx-auto mb-28">
    <h1 class="my-10 text-3xl text-center">Livewire Datatable</h1>
    @livewire('tables.datatable')
</div>

@endsection
