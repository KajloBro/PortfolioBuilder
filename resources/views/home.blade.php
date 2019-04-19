@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div id="myCarousel" class="carousel slide carousel-fade desktop" data-ride="carousel" data-interval="4000" data-pause="false">
    <div class="carousel-inner">
        @php
        $isFirstIter = true;
        @endphp
        @foreach ($homeImgs as $img)       
            @if ($isFirstIter)
                <div class="carousel-item active">
                    <img class="full_screen_pic d-block w-100" src="{{ asset($img) }}" alt="">
                </div>
                @php
                    $isFirstIter = false;
                @endphp
            @else
                <div class="carousel-item">
                    <img class="full_screen_pic d-block w-100" src="{{ asset($img) }}" alt="">
                </div>    
            @endif
        @endforeach
    </div>
</div>



{{-- Phone View --}}
<div class="phone">
    @foreach ($homeImgs as $img)
        <img class="margin_pic d-block w-100" src="{{ asset($img) }}" alt="">
    @endforeach
</div>

@endsection