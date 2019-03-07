@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div class="desktop" style="background-image: url('{{ asset('img/contact/pic4.jpg') }}'); background-size: cover;">
    <div class="row pt-5">
        <div class="offset-2 col-4 contact_info_layout text-center">
            <p>dummy text: dummy text</p>
            <p>dummy text: dummy text</p>
            <p>dummy text: dummy text</p>
            <p>dummy text: dummy text</p>
        </div>
    </div>
</div>



{{-- Phone View --}}
<div class="phone">
    <img class="margin_pic d-block w-100" src="{{ asset('img/contact/pic4.jpg') }}" alt="">
    <div class="row m-3">
        <div class="col-4 text-center">
            <p>dummy text: dummy text</p>
            <p>dummy text: dummy text</p>
            <p>dummy text: dummy text</p>
            <p>dummy text: dummy text</p>
        </div>
    </div>
    
</div>

@endsection