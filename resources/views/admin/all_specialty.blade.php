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
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Designations </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>S/N</th>
                          <th>Name</th>
                          <th>Date Created</th>
                          <th>Updated At</th>
                          <th>Action</th>
                        </tr>
                        @php($i=1)

@foreach($data as $item)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->created_at}}</td>
                          <td>{{$item->updated_at}}</td>
                          <td><a href="{{route('edit.spec', $item->id)}}" class="btn btn-primary">Edit</a>
                          	<a href="{{route('delete.spec',$item->id)}}" class="btn btn-danger">Delete</a>
                          </td>
                          
                        </tr>

                        @endforeach
                      </table>
                    </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
</section>
</div>
</div>

@endsection