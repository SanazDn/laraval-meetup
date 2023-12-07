<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('layouts.menu')
    <div class="container mx-auto mt-1">
        <!-- <h1 class="text-3xl font-bold mb-6 text-center">Meetups</h1> -->

        <!-- Meetup List -->
        @include('meetup-list')
    </div>
@endsection
