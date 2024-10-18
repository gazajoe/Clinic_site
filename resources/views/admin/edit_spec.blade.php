@extends('admin.layout.app')
@section('content')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="main-wrapper main-wrapper-1">
  <div class="main-content">
  
            <div class="row">
              <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                  <form  action="{{route('update.spec',$editspec->id)}}" Method ="post">
                    @csrf 

                  <div class="card-header">
                    <h4>Edit Specialty</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Specialty Name</label>
                      <input type="text" class="form-control" name ="name" value="{{$editspec->name}}">
                                         @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                    </div>

                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>
                </div>
                </div>
                
                
</div>
  </div>

@endsection