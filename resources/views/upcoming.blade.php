@extends('layouts.user')
 
@section('title', 'Up Coming')
 
@section('contents')
<div class="container mx-auto p-4 bg-gray-300 p-9">
    <div class="slideshow-container relative overflow-hidden">
        <div class="slide-wrapper flex transition-transform duration-500 ease-in-out" id="slideWrapper">
            <a href="{{ route('film1/film2') }}" class="slide w-full flex-shrink-0">
                <img src="images/film8.jpg" class="w-full h-80" alt="Film 7">
            </a>
            <a class="slide w-full flex-shrink-0">
                <img src="images/film7.jpg" class="w-full h-80" alt="Film 8">
            </a>
            <a class="slide w-full flex-shrink-0">
                <img src="images/film9.jpg" class="w-full h-80" alt="Film 9">
            </a>
        </div>

        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full cursor-pointer" onclick="prevSlide()">
            &#8249;
        </div>
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full cursor-pointer" onclick="nextSlide()">
            &#8250;
        </div>
    </div>

    <div class=" grid grid-cols-3 gap-4 mt-6">
        <a href="{{ route('film1/film3') }}" class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film11.jpg" alt="Film 11" class="w-full h-auto">
            <h6 class="text-center mt-2">Dua Hati Biru</h6>
        </a>
        <div class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film5.jpg" alt="Film 2" class="w-full h-auto">
            <h6 class="text-center mt-2">Pasar Setan</h6>
        </div>
        <a href="{{ route('film1/film1') }}"  class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
            <img src="images/film4.jpg" alt="Film 3" class="w-full h-auto">
            <h6 class="text-center mt-2">Perjalanan Pembuktian Cinta</h6>
        </a>
        
    </div>
    <div class="grid grid-cols-3 gap-3 mt-6">
        @foreach ($upcoming as $movie)
            <a href="{{ route('upcoming.show', $movie->id) }}" class="flex flex-col items-center bg-white border rounded-md p-2 shadow">
                <img src="{{ asset('images/'.$movie->image) }}" alt="{{ $movie->judul }}" class="w-full h-auto">
                <h6 class="text-center mt-2">{{ $movie->judul }}</h6>
            </a>
        @endforeach
    </div>
</div>

<script>
    let slideIndex = 0;
    const slideWrapper = document.getElementById('slideWrapper');
    const totalSlides = slideWrapper.children.length;

    function updateSlide() {
        const slideWidth = slideWrapper.children[0].clientWidth;
        slideWrapper.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    }

    function nextSlide() {
        slideIndex = (slideIndex + 1) % totalSlides;
        updateSlide();
    }

    function prevSlide() {
        slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
        updateSlide();
    }

    // Auto-slide every 3 seconds
    setInterval(nextSlide, 4000); // Change slide every 3 seconds
</script>

@endsection