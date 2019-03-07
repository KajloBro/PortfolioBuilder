@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" data-pause="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel_pic d-block w-100" src="{{ asset('img/carousel/pic1.jpg') }}" alt="">
        </div>
        <div class="carousel-item">
            <img class="carousel_pic d-block w-100" src="{{ asset('img/carousel/pic2.jpg') }}" alt="">
        </div>
        <div class="carousel-item">
            <img class="carousel_pic d-block w-100" src="{{ asset('img/carousel/pic3.jpg') }}" alt="">
        </div>
    </div>
</div>



{{-- Phone View --}}
<div id="phoneShow">
    <img class="carousel_pic d-block w-100" src="{{ asset('img/carousel/pic1.jpg') }}" alt="">
    <img class="carousel_pic d-block w-100" src="{{ asset('img/carousel/pic2.jpg') }}" alt="">
    <img class="carousel_pic d-block w-100" src="{{ asset('img/carousel/pic3.jpg') }}" alt="">
</div>

@endsection