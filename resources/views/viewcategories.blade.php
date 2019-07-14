@extends ('layout.common2')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">View Category Details</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item">Categories</li>
                <li class="breadcrumb-item active">View Category Details</li>
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
                    <h4 class="card-title">View Category Details</h4>
                    
                    <form class="form p-t-20" method="" action="">
                   
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Category Name</label>
                                    <input type="hidden" id="idc" value="{{$addcategory->id}}" class="form-control" name="idc" >
                                    <input type="text" id="firstName" class="form-control" readonly value="{{$addcategory->category}}" name="category" placeholder="Category name">
                                    </div>

                                <div class="form-group">
                                    <label class="control-label">Category Id</label>
                                    <input type="text" id="firstName" value="{{$addcategory->category_id}}" readonly name="category_id" class="form-control" placeholder="Category Id">
                                    </div>

                            </div>

                        </div>
                        <a href="/categoryview" class="btn btn-inverse waves-effect waves-light" >Back </a>
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
