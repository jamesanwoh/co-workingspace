@extends('layouts.admin')

@section('content')
	<!--Main layout-->
<main style="margin-top: 58px">
  <div class="container pt-2">
    <!-- Section: Main chart -->
    <section class="mb-5">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>Delete Record Bookings</strong></h5>
        </div>
        <div class="row">
          <div class="col-sm-4">

        </div>
          <div class="col-sm-4">
            <div class= "card-body ml-5">


              <form action="{{url('destroyBooking/'.$user_role->id)}}" method="post">
                {{csrf_field()}}
              <div class="form-group">
                  <label for=""> RoomName</label>
                  <input type="text" class="form-control" name="RoomName" value="{{$user_role->RoomName}}">
                </div>
                  <div class="form-group">
                  <label for=""> RoomSize</label>
                  <input type="text" class="form-control" name="RoomSize" value="{{$user_role->RoomSize}}">
                </div>
                  <div class="form-group">
                  <label for=""> Username</label>
                  <input type="text" class="form-control" name="Vendorname" value="{{$user_role-> Vendorname}}" >
                </div>
                <div class="form-group">
                  <label for=""> Status</label>
                  <input type="text" class="form-control" name="Username" value="{{$user_role->Status}}" >
                </div>
                  <div class="form-group">
                  <label for=""> Price</label>
                  <input type="text" class="form-control" name="Price" value="{{$user_role->Price}}">
                </div>
                <div class = "form-group">
                <button type="submit" class="btn btn-danger">Delete</button>
               </div>
               </form>
            </div>
        </div>
            <div class="col-sm-4">

        </div>
      </div>
    </div>
    </section>
