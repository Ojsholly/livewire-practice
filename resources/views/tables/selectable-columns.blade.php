@extends('layouts.layout')

@section('title', 'Selectable Columns')

@section('content')
<div class="container mx-auto">
    <h1 class="my-10 text-3xl text-center">Livewire Selectable Columns</h1>
    @livewire('tables.selectable-columns')
</div>
@endsection
