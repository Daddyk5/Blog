@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold mb-4">Contact Us</h2>

    <!-- Contact Form -->
    <form action="{{ route('contact.submit') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf <!-- This is required for Laravel POST requests -->

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="name" name="name"
                type="text" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="email" name="email"
                type="email" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="message"
                name="message" rows="4" required></textarea>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                Send
            </button>
        </div>
    </form>

    <!-- Display success message -->
    @if(session('success'))
        <div class="mt-4 p-4 bg-green-200 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
