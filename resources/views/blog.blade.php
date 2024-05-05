@extends('layouts.front')

@section('title') {{$blogsettings->meta_title}} @endsection
@section('meta') {{$blogsettings->meta_description}} @endsection



@section('content')
  
  
   <div class="breadcrumb-area" style="background-color: #0d1421;">
       <h1 class="breadcrumb-title">{{$blogsettings->meta_title}}</h1>
       <ul class="page-list">
            <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">{{$blogsettings->breadcrumbs_anchor}}</a></li>
            <li class="separator separator-home"></li>
            <li class="item-current">{{$blogsettings->meta_title}}</li>
        </ul>
   </div>

   <div class="blog-section" style="background-color: #0d1421;">
      <div class="container">
      <div class="row">

@foreach($posts as $post)
<div class="col-md-4" >
    <article class="blog-single-post">
        <div class="blog_custom" >

            <div class="post-thumbnail">
                <a class="relative" href="{{URL::to('/')}}/post/{{$post->slug}}">
                    <div class="featured_image_blog">
                        <img class="lazy blog_post_image img-fluid" width="350" height="300" src="https://cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif" data-src="{{$post->photo ? '/images/media/' . $post->photo->file : '/img/200x200.png'}}" alt="{{$post->title}}">
                        <div class="flex-icon">
                            <div class="flex-icon-inside">
                                <i class="fas fa-link"></i>
                            </div>
                      </div>
                    </div>
                </a>
                <div class="post-categories" style="background-color: #1f2639;">
                   <p >{{$post->category->name}}</p>
                </div>
            </div>

            <div class="post-details" >
                <h3 class="post-name">
                    <a href="{{URL::to('/')}}/post/{{$post->slug}}" title="{{$post->title}}">{{$post->title}}</a>
                </h3>
                <div class="post-category-comment-date">                             
                   <span class="post-date"><i class="far fa-clock"></i> {{ date('d.M.Y', strtotime($post->created_at)) }}</span>
                   <span class="post-author">
                   <i class="far fa-user" ></i>
                   <a href="#0">{{$post->user->name}}</a>
                   </span>
                </div>
                

            </div>
        </div>
    </article>
</div>
@endforeach


</div>
      </div>
   </div>
   
 

@endsection




