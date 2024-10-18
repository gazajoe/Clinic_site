@extends('admin.layout.app')

@section('content')
<div class="main-wrapper main-wrapper-1">

    <div class="main-content">
        <div class="row">
            <div class="col-12">
              <div class="card">

                <form action="{{route('update.post', $blogpost->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                
                <div class="card-header">
                  <h4>Create Post</h4>
                </div>
                <div class="card-body">
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="title" value="{{$blogpost->title}}">
                    </div>
                  </div>

                  @php

                  $category = App\Models\Blog_category::all();

                  @endphp

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Blog Category</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric" name="category_id" >
                        <option>Select Category</option>
                        @foreach($category as $cat)
                        <option value="{{$cat->id}}" {{$cat->id == $blogpost->category_id ? "selected":''}}>{{$cat->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                    <div class="col-sm-8 col-md-7">
                        <input name="tags"  class="form-control" value="{{$blogpost->tags}}"  type="text" data-role="tagsinput" >
                    </div>
                  </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="summernote-simple" name="description">{!!$blogpost->description!!}</textarea>
                    </div>
                  </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control" name="image">
                      <br>
                       <img src="{{asset($blogpost->image)}}" width="100" height="100">
                    </div>

                   

                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary">Publish</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>



    </div>
</div>
@endsection