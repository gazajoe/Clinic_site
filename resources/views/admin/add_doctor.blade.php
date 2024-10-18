@extends('admin.layout.app')
@section('content')

@php

$data = App\Models\Specialty::all();

@endphp
<div class="main-wrapper main-wrapper-1">

      <div class="main-content">
       
        <section class="section">
            <div class="section-body">
              <div class="row">
                <div class="col-12 col-md-10 col-lg-10">
                  <div class="card">

                    <form method="POST" action="{{route('store.doctor')}}" enctype="multipart/form-data">
                        @csrf

                    <div class="card-header">
                      <h4>Add Doctor</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Doctor name</label>
                        <input type="text"  class="form-control" name="name">
                      </div>
                      
                      <div class="form-group">
                        <label>Doctor's Specialty</label>
                        <select class="form-control" name="specialty_id">
                            <option>Select</option>
                            @foreach($data as $spec)
                          <option value="{{$spec->id}}">{{$spec->name}}</option>
                          @endforeach
                          
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email"  class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" name="phone" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Ward No.</label>
                        <input type="text" name="ward" placeholder=" No.302" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>File Image</label>
                        <input type="file"  name ="image" class="form-control">
                      </div>
                    </div>

                    <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                  </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
</div>
    
                      


@endsection