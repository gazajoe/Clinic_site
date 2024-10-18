

@extends('admin.layout.app')

@section('content')
<div class="main-wrapper main-wrapper-1">

    <div class="main-content">
        <div class="row">
            <div class="col-12">
              <div class="card">

                <form action="{{route('store.home')}}" method="post" enctype="multipart/form-data">
                    @csrf
                
                <div class="card-header">
                  <h4>home page</h4>
                </div>
                <div class="card-body">
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Head</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="subhead">
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Head2</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="subhead2">
                      </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Welcome Note</label>
                          <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="note">
                          </div>
                        </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Decription</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="summernote-simple" name="description"></textarea>
                    </div>
                  </div>


                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Background Image</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control" name="background_image">
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

