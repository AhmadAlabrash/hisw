@extends('layouts.front')

@section('title') {{$aboutsetting->meta_title}} @endsection
@section('meta') {{$aboutsetting->meta_description}} @endsection

@section('styles')
<link href="{{ asset('css/front/magnific.min.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')
  
  
   <div class="breadcrumb-area">
       <h1 class="breadcrumb-title">{!!$aboutsetting->meta_title!!}</h1>
       <ul class="page-list">
            <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">{{$aboutsetting->breadcrumbs_anchor}}</a></li>
            <li class="separator separator-home"></li>
            <li class="item-current">{{$aboutsetting->meta_title}}</li>
        </ul>
   </div>

   <div class="about-us">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-md-5">
       
                   <div class="simpleParallax-video">
                        <div class="simpleParallax">
                            <img width="500" height="665" src="/img/loading-blog.gif" class="lazy thumparallax img-fluid" data-src="{{$aboutsetting->about_image}}" alt="about-image">
                        </div>
                        <a class="popup-vimeo-video" href="{{$aboutsetting->about_ytlink}}">
                            <i class="far fa-play-circle"></i>
                        </a>
                    </div>
               </div>
               <div class="col-md-7">


                    <h4 class="about-heading1-home">{{$aboutsetting->about_subtitle}}</h4>
                    <h3 class="about-heading2-home">{!!$aboutsetting->about_title!!}</h3>

                    {!!$aboutsetting->about_description!!}

                    <a href="{{$aboutsetting->about_buttonlink}}" target="_self" class="btn btn-style1"><span>{{$aboutsetting->about_buttontext}}</span></a>
       
                   
               </div>
           </div>
       </div>
   </div>
   


    <div class="testimonial-section">

        <div class="testimonial-section-slider owl-carousel">

            @foreach($testimonials as $testimonial)
            <blockquote class="testimonial-slide">
                <div class="section_title">{{$testimonial->subtitle}}</div>
                <span class="testimonial_slider_title">{{$testimonial->title}}</span>
                    <div class="testimonial-area">
                        <div class="testimonial-layoutArea">
                           <p>{{$testimonial->description}}</p>
                        </div>
                    </div>
                <div class="testimonials_slider_name"> {{$testimonial->name}}<span> - {{$testimonial->position}}</span></div>
            </blockquote>
            @endforeach

        </div>

    </div>


    <div class="clients-section">
        <div class="container">
            
            <div class="clients-slider owl-carousel">
                  @foreach($clients as $client)
                  <div class="clients-slide">
                      <a title="{{$client->company_name}}" target="_blank" href="{{$client->company_link}}"><img class="client_image owl-lazy" data-src="{{$client->photo ? '/images/media/' . $client->photo->file : '/img/200x200.png'}}" alt="{{$client->company_name}}"></a>
                  </div>
                  @endforeach
            </div>
            
        </div>
    </div>



@endsection

