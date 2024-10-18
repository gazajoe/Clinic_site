@extends('admin.layout.app')
@section('content')


<div class="main-wrapper main-wrapper-1">

      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-10 col-lg-10">
                <div class="card">
                  <div class="card-header">
                    <h4>Blog categories</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>S/N</th>
                          <th>Name</th>
                          <th>Date Created</th>
                          <th>Action</th>
                        </tr>
                        @php($i=1)

@foreach($category as $item)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$item->category_name}}</td>
                          <td>{{$item->created_at}}</td>
                          <td><a href="{{route('edit.category', $item->id)}}" class="btn btn-primary">Edit</a>
                          	<a href="{{route('delete.category',$item->id)}}" class="btn btn-danger">Delete</a>
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