@extends ('layout.common2')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Book Registration</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item">Books</li>
                <li class="breadcrumb-item active">BooK Registration</li>
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
                    <h4 class="card-title">BooK Registration Form</h4>
                    <h6 class="card-subtitle">Fill this form with correct details.</h6>
                    <form action="/save_book" method="post" class="form p-t-20" enctype="multipart/form-data">
                           {{csrf_field()}}

                        <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Book Name</label>
                                <input type="text" name="bookname" id="bookname" class="form-control" placeholder="Book name">
                                <small class="form-control-feedback"> Enter Book Name </small> </div>

                            <div class="form-group">
                                <label class="control-label">Book Id</label>
                                <input type="text" id="bookid" name="book_id" class="form-control" placeholder="Book Id">
                                <small class="form-control-feedback"> Enter Book Id </small> </div>

                            <div class="form-group has-success">
                                <label class="control-label">Book Category</label>
                              
                                <select class="form-control" name="book_category" id="book_category">
                                     @foreach ($categoris as $categoris)
                                        <option value="{{categoris->id}}">{{categoris->category}}</option>
                                     @endforeach
                                </select>

                                <!-- <input type="text" id="book_category" name="book_category" class="form-control" placeholder="Category"> -->
                                <small class="form-control-feedback"> Select Book Category </small> </div>

                        </div>
                        
                       




                        <div class="col-lg-4 " >
                            <div class="form-group has-success">
                                <label class="control-label">Author</label>
                                <input type="text" id="book_author" name="book_author" class="form-control" placeholder="Author">
                                <small class="form-control-feedback"> Select Author </small> </div>

                            <div class="form-group has-success">
                                <label class="control-label">Publisher</label>
                                <select class="form-control custom-select" name="book_publisher" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Publisher 1">Publisher 1</option>
                                    <option value="Publisher 2">Publisher 2</option>
                                    <option value="Publisher 3">Publisher 5</option>
                                    <option value="Publisher 4">Publisher 4</option>
                                </select>
                                <small class="form-control-feedback"> Select Publisher </small> </div>


                            <div class="form-group has-success">
                                <label class="control-label">Rack</label>
                                <select class="form-control custom-select" name="book_rack" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Rack 1">Rack 1</option>
                                    <option value="Rack 2">Rack 2</option>
                                    <option value="Rack 3">Rack 5</option>
                                    <option value="Rack 4">Rack 4</option>
                                </select>
                                <small class="form-control-feedback"> Select Rack </small> </div>

                        </div>

                            <div class="col-lg-3 " >
{{--                                <h4 class="card-title">File Upload5</h4>--}}
                                <label for="input-file-max-fs">Cover Image</label>
                                <input type="file" name="book_image" id="input-file-max-fs input-file-now-custom-2" class="dropify"
                                data-default-file="upload/addbook/dummy.jpg"    data-max-file-size="5M" data-height="300"/>
                                <small class="form-control-feedback"> Select Image Size Less than 5MB </small>
                                <div class="progress m-t-30">
                            
                                        </div>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <a href="/bookview" class="btn btn-inverse waves-effect waves-light" >Cancel</a>
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

<!-- @section('js')
<script>

</script>
@endsection -->
