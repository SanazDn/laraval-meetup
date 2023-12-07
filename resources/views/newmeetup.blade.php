<!-- resources/views/newmeetup.blade.php -->

@extends('layouts.app')

@section('title', 'Add New Meetup')

@section('content')

@include('layouts.menu')

<div class="mt-5" >
        <form  method="post" action="{{ url('/api/meetups') }}" enctype="multipart/form-data" class="max-w-md bg-white p-6 mt-5 mx-auto rounded-md shadow-md items-center justify-center">
            @csrf

            <!-- <h1 class="text-3xl font-bold mb-6">Add New Meetup</h1> -->


            <!-- Meetup Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-600 text-sm font-semibold mb-2">Meetup Title</label>
                <input type="text" id="title" name="title" class="w-full border rounded-md p-2" required>
            </div>

            <!-- Meetup Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-600 text-sm font-semibold mb-2">Meetup Image</label>
                <input type="file" id="image" name="image" class="w-full border rounded-md p-2" accept="image/*" required>
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="block text-gray-600 text-sm font-semibold mb-2">Address</label>
                <input type="text" id="address" name="address" class="w-full border rounded-md p-2" required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-600 text-sm font-semibold mb-2">Description</label>
                <textarea id="description" name="description" class="w-full border rounded-md p-2" rows="4" required></textarea>
            </div>

            <!-- Add Meetup Button -->
            <div class="text-center">
                <button type="submit" class="bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-500">Add Meetup</button>
            </div>
        </form>
    </div>
@endsection