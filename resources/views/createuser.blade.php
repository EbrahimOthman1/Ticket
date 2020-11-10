@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create New User<a href="/dashboard" class="btn btn-info btn-md float-right">Go back</a></div>

            <div class="card-body">
              <form method="post" action="{{url("users")}}" >
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label> Name </label>
                  <input type="text" class="form-control" placeholder="name" name="name">
                </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                  <label> Email </label>
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control" placeholder="password" name="password">
                  </div>
            </div>
            <div class="form-group">
                  <button class="btn btn-success" value="submit" name="submit">Submit</button>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection
