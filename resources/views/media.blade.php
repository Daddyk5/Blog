@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <figure class="text-center">
        <img src="{{ asset('images/sample1.jpg') }}" alt="Sample Image 1" class="mx-auto">
        <figcaption class="text-gray-600 mt-2">Sample Image 1</figcaption>
    </figure>

    <figure class="text-center mt-6">
        <img src="{{ asset('images/sample2.jpg') }}" alt="Sample Image 2" class="mx-auto">
        <figcaption class="text-gray-600 mt-2">Sample Image 2</figcaption>
    </figure>

    <figure class="text-center mt-6">
        <img src="{{ asset('images/sample3.jpg') }}" alt="Sample Image 3" class="mx-auto">
        <figcaption class="text-gray-600 mt-2">Sample Image 3</figcaption>
    </figure>
</div>
@endsection
