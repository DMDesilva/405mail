@extends ('layout.common2')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Edit Rack Details</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item">Racks</li>
                <li class="breadcrumb-item active">Edit Rack Details</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Rack Details</h4>
                    <h6 class="card-subtitle">Fill this form with correct details.</h6>
                    <form class="form p-t-20" method="post" action="/rackdetailedit/{{$rack->id}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Rack Name</label>
                                    <input type="text" id="rack" name="rack" value="{{$rack->rack}}" class="form-control" placeholder="Rack name">
                                    <small class="form-control-feedback"> Enter Rack Name </small> </div>

                                <div class="form-group">
                                    <label class="control-label">Rack Id</label>
                                    <input type="text" id="rackid" name="rackid" value="{{$rack->rackid}}" readonly class="form-control" placeholder="Rack Id">
                                    <small class="form-control-feedback"> Enter Rack Id </small> </div>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
                        <a href="/rackview" class="btn btn-inverse waves-effect waves-light" >Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@stop
