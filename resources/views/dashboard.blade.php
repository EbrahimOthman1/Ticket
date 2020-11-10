@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard<span class="float-right"><a href="/listings/create" class="btn btn-success btn-xs">Add Ticket</a></span><br><br><span class ="float-right"><a href="/users/create" class="btn btn-success btn-xs">Add User</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <h3>Your Tickets </h3>

                     @if(count($listings))
                       <table class="table table-striped">
                         @foreach($listings as $listing)
                          <tr> <th>Title</th>
                           <td>{{$listing->title}}</td>
                           @role('Editor')
                           <td><a class="btn btn-info float-right" href="/listings/{{$listing->id}}/edit">Edit</a> </td>
                           @endrole
                           <td><a class="btn btn-info float-right" href="/listings/{{$listing->id}}/delete">Delete</a> </td>
                         </tr>

                         <tr>
                          <th> Body </th>
                           <td>{{$listing->body}}</td>
                         </tr>
                         <tr>
                          <th> status </th>
                           <td>{{$listing->status}}</td>
                          </tr>
                         <tr>
                          <th> Dead_Line </th>
                           <td>{{$listing->dead_line}}</td>
                          </tr>
                          <tr>
                           <th> Assign_to </th>
                            <td>{{$listing->assigned_to}}</td>
                           </tr>

                         @endforeach
                       </table>
                     @endif
                </div>
            </div>
        </div>
    </div>
@endsection
