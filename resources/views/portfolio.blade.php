@extends('layouts.app')

@section('content')

{{-- Desktop View --}}

<div class="row desktop">
    
    <div class="col-6">
        <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic1.jpg') }}" alt=""></a>
        <h5 class="text-center">DUMMY TEXT</h6>
    </div>
    
    <div class="col-12 col-lg-6">
        <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic2.jpg') }}" alt=""></a>
        <h5 class="text-center">DUMMY TEXT</h6>
    </div>

    <div class="col-12 col-lg-6">
        <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic3.jpg') }}" alt=""></a>
        <h5 class="text-center">DUMMY TEXT</h6>
    </div>

</div>


{{-- Phone View --}}

<div class="phone">

    <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic1.jpg') }}" alt=""></a>
    <h5 class="text-center">DUMMY TEXT</h6>

    <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic2.jpg') }}" alt=""></a>
    <h5 class="text-center">DUMMY TEXT</h6>

    <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic3.jpg') }}" alt=""></a>
    <h5 class="text-center">DUMMY TEXT</h6>

</div>


@endsection
