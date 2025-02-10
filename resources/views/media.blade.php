@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold text-center">Media Gallery</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        @foreach (['sample1.jpg', 'sample2.jpg', 'sample3.jpg'] as $image)
            <figure class="text-center bg-white p-4 shadow rounded-lg">
                <img src="{{ asset('images/' . $image) }}"
                    onerror="this.onerror=null; this.src='{{ asset('images/no-image.png') }}';" alt="Sample Image"
                    class="mx-auto h-64 w-auto object-cover rounded">
                <figcaption class="text-gray-600 mt-2">{{ ucfirst(str_replace('.jpg', '', $image)) }}</figcaption>
            </figure>
        @endforeach
    </div>
</div>
@endsection
