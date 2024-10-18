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
                    <h4>All doctors </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>S/N</th>
                          <th>Name</th>
                          <th>Specialty</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Ward</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                        @php($i=1)

@foreach($viewdoc as $item)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$item->name}}</td>
                          
                          <td>
                            @if ($item['specialty']!==null)
                                 {{$item['specialty']['name']}}
                            @endif
                           
                          </td>
                          
                      
                          <td>{{$item->email}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->ward}}</td>
                          <td>
                            
                            @if($item->image)
                            <img src="{{ asset('upload/images/'.$item->image) }}" alt="{{ $item->name }}" width="100">
                        @else
                            No Image
                        @endif
                    
                        </td>
                          <td><a href="{{route('edit.doctor',$item->id)}}" class="btn btn-primary">Edit</a>
                          	<a href="{{route('doctor.delete',$item->id)}}" class="btn btn-danger">Delete</a>
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