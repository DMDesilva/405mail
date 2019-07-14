@extends ('layout.common2')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Reader Registration</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item">Reader</li>
                <li class="breadcrumb-item active">Reader Registration</li>
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
                    <h4 class="card-title">Reader Registration Form</h4>
                    <h6 class="card-subtitle">Fill this form with correct details.</h6>
                    <form action="/save_reader" method="post" class="form p-t-20" enctype="multipart/form-data">
                           {{csrf_field()}}

                        <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Reader Name</label>
                                <input type="text" name="readername" id="readername" class="form-control" placeholder="readername">
                                <small class="form-control-feedback"> Enter Reader name</small> </div>

                            <div class="form-group">
                                <label class="control-label">Reader Id</label>
                                <input type="text" id="readerid" name="reader_id" class="form-control" placeholder="Reader Id">
                                <small class="form-control-feedback"> Enter Reader Id </small> </div>

                            <div class="form-group">
                                <label class="control-label">Reader NIC</label>
                                <input type="text" id="readernic" name="reader_nic" class="form-control" placeholder="Reader NIC">
                                <small class="form-control-feedback"> Enter Reader NIC Number </small> </div>

                            <div class="form-group has-success">
                                <label class="control-label">Reader Contact</label>
                                <input type="text" id="contact" name="contact" class="form-control" placeholder="contact">
                                <small class="form-control-feedback">Enter Reader Contact Number</small> </div>

                        </div>


                        <div class="col-lg-4 " >
                            <div class="form-group has-success">
                                <label class="control-label">Reader Email</label>
                                <input type="email" id="mail" name="email" class="form-control" placeholder="E mail">
                                <small class="form-control-feedback">Enter Reader E Mail</small> </div>

                            <div class="form-group has-success">
                                <label class="control-label">Job</label>
                                <input type="text" id="job" name="job" class="form-control" placeholder="Job">
                                <small class="form-control-feedback">Enter Reader's Job</small> </div>


                            <div class="form-group has-success">
                                <label class="control-label">Address</label>
                                <textarea class="form-control" rows="5" name="address" placeholder="Reader Address ..."></textarea>
                                <small class="form-control-feedback">Enter Reader's Address</small> </div>

                        </div>

                            <div class="col-lg-3 " >
{{--                                <h4 class="card-title">File Upload5</h4>--}}
                                <label for="input-file-max-fs">Reader Image</label>
                                <input type="file" name="reader_image" id="input-file-max-fs input-file-now-custom-2" class="dropify"
                                data-default-file="upload/addbook/dummy.jpg"    data-max-file-size="5M" data-height="300"/>
                                <small class="form-control-feedback"> Select Image Size Less than 5MB </small>
                                <div class="progress m-t-30">
                            
                                        </div>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <a href="/readersview" class="btn btn-inverse waves-effect waves-light" >Cancel</a>
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

@section('js')
<script>
$.ajax
</script>
@endsection
