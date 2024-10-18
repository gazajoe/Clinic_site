@extends('front.body.app')
@section('content')

@php

 $home =App\models\Home::all();

@endphp

    <div class="page-hero bg-image overlay-dark" style="background-image:url(../health/assets/img/bg_image_1.jpg);" >


    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        @foreach($home as $subheads)
        <span class="subhead">{{$subheads->subhead}}</span>

        <h1 class="display-4">{{$subheads->subhead2}}</h1>
         @endforeach
        <a href="{{route('contact.page')}}" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Book</span> with a doctor</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection Tips</p>
            </div>
          </div>


          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy News</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            @foreach ($home as $notes )
                 <h1>{{$notes->note}}</h1>
            @endforeach

            <p class="text-gray-400 mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../health/assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
  @include('front.pages.doctors')
  @include('front.pages.news')

  @include('front.pages.appointment')

@endsection
