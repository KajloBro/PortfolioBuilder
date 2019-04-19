@extends('layouts.app')

@section('content')

{{-- Desktop View --}}

<div class="row desktop text-center mt-5">
    
    {{-- <div class="col-6">
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
    </div> --}}
    <div class="offset-4 col-4">
        <h4 class="mt-5">Coming soon</h4>
    </div>

</div>


{{-- Phone View --}}

<div class="phone">

    {{-- <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic1.jpg') }}" alt=""></a>
    <h5 class="text-center">DUMMY TEXT</h6>

    <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic2.jpg') }}" alt=""></a>
    <h5 class="text-center">DUMMY TEXT</h6>

    <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic3.jpg') }}" alt=""></a>
    <h5 class="text-center">DUMMY TEXT</h6> --}}

    <div class="col-12">
        <h4 class="mt-5">Coming soon</h4>
    </div>
</div>


@endsection
