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
                    <h4>Home page</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>S/N</th>
                          <th>Sub heading 1</th>
                          <th>Sub heading 2</th>
                          <th>Welcome Note</th>
                          <th>Background image</th>
                          <th>Action</th>
                        </tr>
                        @php($i=1)

@foreach($home as $item)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$item->subhead}}</td>
                          <td>{{$item->subhead2}}</td>
                          <td>{{$item->note}}</td>
                          
                          <td>
            
                           
                            @if($item->background_image)
                            <img src="{{ asset($item->background_image) }}" alt="{{ $item->background_image }}" width="10px" height="10px">
                        @else
                            No Image
                        @endif
                    
                    
                          <td>
                            <a href="{{route('edit.home', $item->id)}}" class="btn btn-primary">Details</a>
                          	<a href="{{route('delete.post',$item->id)}}" class="btn btn-danger">Delete</a>
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