@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div style="background-image: url('{{ asset('img/about/pic5.jpg') }}'); background-size: cover;" id="contactDesktop">
    <div class="row pt-5">
        <div class="offset-1 col-4 text-center">
            <p class="contact_txt">
               &Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.
            </p>
            <p class="contact_txt">
               &Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.
            </p>
            <p class="contact_txt">
               &Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.
            </p>
        </div>
    </div>
</div>



{{-- Phone View --}}
<div id="phoneShow">
    <div class="container">
    <img class="carousel_pic d-block w-100" src="{{ asset('img/about/pic5.jpg') }}" alt="">

        <div class="row m-3">
            <h3 class="project_title_text">About Patricija</h3>
        </div>
        <div class="row m-2">
            <p class="contact_txt">
                &Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repellat alias inventore laudantium, eveniet quas tempore deserunt dolores repellendus dolorem molestiae, adipisci cum assumenda quasi quidem reprehenderit? Perspiciatis, fugiat modi.
            </p>
            <p class="contact_txt">
                &Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repellat alias inventore laudantium, eveniet quas tempore deserunt dolores repellendus dolorem molestiae, adipisci cum assumenda quasi quidem reprehenderit? Perspiciatis, fugiat modi.
            </p>
            <p class="contact_txt">
                &Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repellat alias inventore laudantium, eveniet quas tempore deserunt dolores repellendus dolorem molestiae, adipisci cum assumenda quasi quidem reprehenderit? Perspiciatis, fugiat modi.
            </p>
        </div>
    </div>
    
</div>

@endsection