@extends('layouts.app')

@section('content')
    
@if ($about)    

    {{-- Desktop View --}}
    <div class="desktop" style="background-image: url('{{ asset($about->photo ? $about->photo->original : "N/A") }}'); background-size: cover;">
        <div class="row pt-5">
            <div class="offset-1 col-4 text-center">
                <p>{{ $about->content }}</p>            
            </div>
        </div>
    </div>



    {{-- Phone View --}}
    <div class="phone">
        <img class="margin_pic d-block w-100" src="{{ asset($about->photo ? $about->photo->original : "N/A") }}" alt="">
        <div class="row m-3">
            <h3>{{ $about->title }}</h3>
        </div>
        <div class="row m-2">
            <p>{{ $about->content }}</p>
        </div>
    </div>
    
@endif


@endsection