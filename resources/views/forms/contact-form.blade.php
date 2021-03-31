@extends('layouts.layout')

@section('title', 'Contact Form')

@section('content')
<div class="container mx-auto mb-28">
    <h1 class="my-10 text-3xl text-center">Livewire Contact Form</h1>
    @livewire('forms.contact-form')
</div>

@endsection
