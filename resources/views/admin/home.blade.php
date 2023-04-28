@extends("admin.adminheader")
@section("content")
<div class="row">
    <div class="col-lg-4">
        <div class="small-box bg-info">
            <div class="inner">
                <!-- <h3>150</h3> -->
                <h1>Event</h1>
            </div>
            <div class="icon">
            <i class="fas fa-laptop"></i>
            </div>
                <a href="{{url('/event')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                    <h1>Facility</h1>
                </div>
                <div class="icon">
                    <i class="fas fa-inbox"></i>
                </div>
                <a href="{{url('/facility')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-box bg-warning">
                <div class="inner">
                    <!-- <h3>44</h3> -->
                    <h1>Room</h1>
                </div>
                <div class="icon">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <a href="{{url('/room')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection