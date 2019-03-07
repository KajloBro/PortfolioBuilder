@extends('layouts.app')

@section('content')

<div class="bgDarkWrap">
{{-- Desktop View --}}

<div class="row">
    
    <div class="col-12 col-lg-6">
        <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic1.jpg') }}" alt=""></a>
        <h5 class="text-center project_title_text">DUMMY TEXT</h6>
    </div>
    

    <div class="col-12 col-lg-6">
        <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic2.jpg') }}" alt=""></a>
        <h5 class="text-center project_title_text">DUMMY TEXT</h6>
    </div>


    <div class="col-12 col-lg-6">
        <a href=""><img class="portfolio_pic" src="{{ asset('img/carousel/pic3.jpg') }}" alt=""></a>
        <h5 class="text-center project_title_text">DUMMY TEXT</h6>
    </div>


</div>


@endsection
