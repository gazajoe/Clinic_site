@extends('admin.layout.app')
@section('content')


@php


@endphp
<div class="main-wrapper main-wrapper-1">

      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Contact message </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>S/N</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                        @php($i=1)

@foreach($contact as $item)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->subject}}</td>
                          <td>{{$item->message}}</td>
                          <td><a href="{{route('edit.spec', $item->id)}}" class="btn btn-primary">Send Message</a>
                          	
                            
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
