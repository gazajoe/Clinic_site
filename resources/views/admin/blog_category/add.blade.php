@extends('admin.layout.app')
@section('content')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="main-wrapper main-wrapper-1">
  <div class="main-content">
  
            <div class="row">
              <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                  <form  action="{{route('store.category')}}" Method ="post">
                    @csrf 

                  <div class="card-header">
                    <h4>Add Blog category</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">


                      <label>Category Name</label>
                      <input type="text" class="form-control" name ="category_name">
                                         @error('category_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                    </div>

                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                </div>
                </div>
                
                
</div>
  </div>

@endsection