
@php
$post = App\models\Blog::limit(3)->get();
@endphp


<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
     @foreach ($post as $posts )
        <div class="col-lg-4 py-2 wow zoomIn">
               
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="{{route('blog.details',$posts->id)}}">{{$posts->title}}</a>
              </div>
              <a href="{{route('blog.details',$posts->id)}}" class="post-thumb">
                @if ($posts->image)

                     <img src="{{asset($posts->image)}}" alt="">
                     @else
                     no image
                     
                @endif
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{route('blog.details',$posts->id)}}">{{$posts->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>admin</span>
                </div>
                <span class="mai-time"></span>{{$posts->created_at}}
              </div>
            </div> 
          
          </div>
           
        </div> 
         @endforeach
      </div>
    </div>
</div>
      