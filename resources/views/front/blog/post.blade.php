@extends('front.body.app')
@section('content')
@php
$cat =App\Models\Blog_category::all();

@endphp
<div class="page-banner overlay-dark bg-image" style="background-image: url(../health/assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">


            @foreach($blog as $item)
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">{{$item['category']['category_name']}}</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{asset($item->image)}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{route('blog.details',$item->id)}}">{{$item->title}}</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="{{asset($item->image)}}" alt="">
                      </div>
                      <span>Admin</span>
                    </div>
                    <span class="mai-time"></span>{{$item->created_at}}
                  </div>
                </div>
              </div>
            </div>
            @endforeach

      
           
           
                
            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
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
              @foreach($blog as $post)
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="{{asset($post->image)}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{route('blog.details',$post->id)}}">{{$post->title}}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span>{{$post->created_at}}</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                  </div>
                </div>
              </div>
              @endforeach


          
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->



@endsection