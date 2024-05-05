@extends('layouts.front')

@section('title') {{$post->meta_title}} @endsection
@section('meta') {{$post->meta_description}} @endsection



@section('content')
  
  
   <div class="breadcrumb-area" style="background-color: #0d1421;">
       <h1 class="breadcrumb-title">{{$post->meta_title}}</h1>
   </div>

   <div class="post-content blog-page-section" style="background-color: #0d1421;">
   		<div class="container" style="background-color: #0d1421;">
   			<div class="row">

   				<div class="col-md-12" >
   					<article class="single-post blogloop-v2" >
	                   <div class="blog_custom" style="background-color: #0d1421;">
	                      <div class="post-thumbnail">
	                         <a href="{{URL::to('/')}}/post/{{$post->slug}}">
	                            <img class="blog_post_image img-fluid lazy" width="800" height="550" src="/img/loading-blog.gif" data-src="{{$post->photo ? '/images/media/' . $post->photo->file : '/img/200x200.png'}}" alt="{{$post->title}}">
	                          </a>
	                      </div>
	                      <span class="post-date">{{ date('d.M.Y', strtotime($post->created_at)) }}</span>
	                      <!-- POST DETAILS -->
	                      <div class="post-details" style="background-color: #0d1421;">
	                         <div class="post-details-holder" >
	                            <div class="post-author-avatar">
	                               <img alt="" src="/img/loading-blog.gif" data-src="{{$post->user->photo ? '/images/media/' . $post->user->photo->file : '/img/200x200.png'}}" class="avatar img-fluid lazy" height="120" width="120">
	                             </div>
	                            
	                            <h2 class="post-name">
	                                  {{$post->title}}                   
	                          
	                            </h2>

	                            <div class="post-category-comment-date">
	                               <span class="post-tags"><i class="fa fa-tag"></i>{{$post->category->name}}</span>
	                            </div>

	                            <div class="post-body">
	                               {!! $post->body !!}
	                            </div>
	                         </div>
	                      </div>
	                   </div>
	                </article>
   				</div>



			</div>



   		</div>
   		
   	</div>



@endsection

