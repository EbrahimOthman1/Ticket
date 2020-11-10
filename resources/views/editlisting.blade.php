@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit New Ticket<a href="/dashboard" class="btn btn-info btn-md float-right">Go back</a></div>

            <div class="card-body">
              <form method="post" action="{{url("listings")}}">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label> Title </label>
                  <input type="text" class="form-control" placeholder="title" name="title">
                </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                  <label> Body </label>
                  <input type="text" class="form-control" placeholder="body" name="body">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label> Dead_Line </label>
                    <input type="date" class="form-control" placeholder="Dead_Line" name="dead_line">
                  </div>
            </div>
            <div class="col-md-12">
                  <div class="form-group">
                      <label> assigned_to </label>
                      <input type="text" class="form-control" placeholder="Assign_to" name="assigned_to">
                  </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label> Status </label>
                    <input type="number" class="form-control" placeholder="Status" name="status">
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
