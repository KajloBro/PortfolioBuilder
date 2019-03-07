@extends('layouts.app')

@section('content')

<div class="bgDarkWrap">
{{-- Desktop View --}}

<div class="row">
    <div class="col-6 p-0">
        <img class="portfolio_pic pl-3 pr-3" src="{{ asset('img/carousel/pic1.jpg') }}" alt="">
        <h4>Dummy text</h4>
    </div>
    

    <div class="col-6 p-0">
        <img class="portfolio_pic pl-3 pr-3" src="{{ asset('img/carousel/pic1.jpg') }}" alt="">
    </div>

    <div class="col-6 p-0">
        <img class="portfolio_pic pl-3 pr-3" src="{{ asset('img/carousel/pic1.jpg') }}" alt="">
    </div>

    <div class="col-6 p-0">
        <img class="portfolio_pic pl-3 pr-3" src="{{ asset('img/carousel/pic1.jpg') }}" alt="">
    </div>


</div>
    
@endsection
