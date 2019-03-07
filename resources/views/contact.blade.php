@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div style="background-image: url('{{ asset('img/contact/pic4.jpg') }}'); background-size: cover;" id="contactDesktop">
    <div class="row pt-5">
        <div class="offset-2 col-4 contact_info_layout text-center">
            <p class="contact_txt">
                dummy text: dummy text
            </p>
            <p class="contact_txt">
                dummy text: dummy text
            </p>
            <p class="contact_txt">
                dummy text: dummy text
            </p>
            <p class="contact_txt">
                dummy text: dummy text
            </p>
        </div>
    </div>
</div>



{{-- Phone View --}}
<div id="phoneShow">
    <img class="carousel_pic d-block w-100" src="{{ asset('img/contact/pic4.jpg') }}" alt="">
    <div class="row pt-5">
        <div class="col-4 contact_info_layout text-center">
            <p class="contact_txt">
                dummy text: dummy text
            </p>
            <p class="contact_txt">
                dummy text: dummy text
            </p>
            <p class="contact_txt">
                dummy text: dummy text
            </p>
            <p class="contact_txt">
                dummy text: dummy text
            </p>
        </div>
    </div>
    
</div>

@endsection