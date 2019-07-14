@extends ('layout.common2')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">View Publisher Details</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item">Publisher</li>
                <li class="breadcrumb-item active">View Publisher Details</li>
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
                    <h4 class="card-title">View Publisher Details</h4>
                    
                    <form action="" method="post" class="form p-t-20" enctype="multipart/form-data">
                           

                        <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group"> 
                            <input type="hidden" name="id" id="id" value="{{$publishers->id}}" class="form-control">
                                <label class="control-label">Publisher Name</label>
                                <input type="text" name="publishername" readonly value="{{$publishers->Publisher}}" id="publishername" class="form-control" placeholder="Publisher name">
                               </div>

                            <div class="form-group">
                                <label class="control-label">Publisher Id</label>
                                <input type="text" id="publisherid"  name="publisherid" readonly value="{{$publishers->pub_id}}" class="form-control" placeholder="Publisher Id">
                                 </div>

                                <div class="form-group">
                                <label class="control-label">Publisher Contact</label>
                                <input type="text" id="pcontact" name="pcontact" readonly value="{{$publishers->contact}}" class="form-control" placeholder="Publisher Contact">
                                </div>

                        </div>



                        <div class="col-lg-4 " >
                        <div class="form-group">
                                <label class="control-label">Publisher Email</label>
                                <input type="text" id="pemail" name="pemail" value="{{$publishers->email}}" readonly class="form-control" placeholder="Publisher E mail">
                               </div>

                                <div class="form-group">
                                <label class="control-label">Publisher Address</label>
                                <textarea class="form-control" rows="7" name="address" readonly placeholder="Publisher Address ..."> {{$publishers->address}}</textarea>
                               </div>

                        </div>

                        

                        </div>
                        <a href="/publisherview" class="btn btn-inverse waves-effect waves-light" >Back </a>
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
