@extends('front.body.app')
@section('content')
@php
 $post =App\Models\Blog::limit(3)->get();
 $cat =App\Models\Blog_category::all();

@endphp
<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$details->title}}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{asset($details->image)}}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#">Admin</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">{{$details->created_at}}</a>
              </div>
              <span class="divider">|</span>
              <div>
                <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-comment-count">
                <a href="#">8 Comments</a>
              </div>
            </div>
            <h2 class="post-title h1">{{$details->title}}</h2>
            <div class="post-content">
              <p>{!!$details->description!!}</p>

            
            </div>
            <div class="post-tags">
              <a href="#" class="tag-link">{{$details->tags}}</a>
            </div>
          </article> <!-- .blog-details -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Categories</h3>
               @foreach($cat as $item)
              <ul class="categories">
               
                <li><a href="#">{{$item->category_name}}</a></li>
               
              </ul>
               @endforeach
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
               @foreach ($post as $blog )
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="{{asset($blog->image)}}" alt="">
                </a>
               
                     <div class="content">
                  <h5 class="post-title"><a href="{{route('blog.details',$blog->id)}}">{{$blog->title}}</a></h5>
                  
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span>{{$blog->created_at}}</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                  
                  </div>
                </div>
               
              </div>
               @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

                
        
 


@endsection