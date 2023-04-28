@extends("admin.adminheader")
@section("content")
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Event</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="eventForm" name="eventform" action="{{url('eventupdate/'.$event->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="eventname">Event Name: </label>
                    <input type="text" name="eventname" class="form-control" value="{{$event->eventname}}" id="eventname" placeholder="Enter Event name" required/>
                  </div>
                  <div class="form-group">
                    <label for="fromdate">From Date:</label>
                    <input type="date" name="fromdate" class="form-control" value="{{$event->fromdate}}" id="fromdate" placeholder="Enter Date" required/>
                  </div>
                  <div class="form-group">
                    <label for="todate">To Date:</label>
                    <input type="date" name="todate" class="form-control" value="{{$event->todate}}" id="todate" placeholder="Enter Date" required/>
                  </div>
                  <div class="form-group">
                    <label for="starttime">Start Time:</label>
                    <input type="time" name="starttime" class="form-control" value="{{$event->starttime}}" id="starttime" placeholder="Enter Time" required/> 
                  </div>
                  <div class="form-group">
                    <label for="endtime">End Time:</label>
                    <input type="time" name="endtime" class="form-control" value="{{$event->endtime}}" id="endtime" placeholder="Enter Time" required/>
                  </div>
                  <div class="form-group">
                    <label for="charges">Charges:</label>
                    <input type="text" name="charges" class="form-control" value="{{$event->charges}}" id="charges" placeholder="Enter charges" required/>
                  </div>
                  <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="description" name="description" class="form-control" value="{{$event->description}}" id="description" placeholder="Enter Description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="photo">Image:</label>
                    <input type="file" name="photo" class="form-control" value="{{$event->photo}}" id="photo" placeholder="" required/>
                  </div>
                 
                 
                  <!--<div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>-->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="Reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>

@endsection