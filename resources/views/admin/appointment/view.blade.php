@extends('admin.layout.app')
@section('content')

@php

$appdata = App\Models\Appointment::all();

@endphp
<div class="main-wrapper main-wrapper-1">

      <div class="main-content">
        <section class="section">
            <div class="section-body">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Simple Table</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-md">
                          <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Accept</th>
                            <th>Decline</th>
                            <th>Send sms</th>
                          </tr>
                          @php($i=1)
                          @foreach($appdata as $data)
                          <tr>
                            <td>{{$i++}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->doctor}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->message}}</td>
                            <td> <div class="badge badge-warning{{$data->status == 'approved'? 'status-success':'status-warning'}}">{{$data->status}}</div></td>

                            <td>

                             <a href="{{route('approve.appointment',$data->id)}}" class="btn btn-success">Approve</a>
                            </td>
                            <td>
                                <a href="{{route('declined.appointment',$data->id)}}" class="btn btn-danger">Decline</a>
                               </td>
                               <td>
                                <a href="{{route('declined.appointment',$data->id)}}" class="btn btn-primary">SMS</a>
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
