@extends ('layout.common2')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">View Book Details</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item">Books</li>
                <li class="breadcrumb-item active">View Book Details</li>
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
                    <h4 class="card-title">View Book</h4>
                    
                    <form action="" method="POST" class="form p-t-20" enctype="multipart/form-data">
                         
                           <input type="hidden" name="id" id="id" value="{{$addbooks->id}}" >
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Book Name</label>
                                <input type="text" name="bookname" id="bookname" value="{{$addbooks->bookname}}" class="form-control" placeholder="Book name">
                                 </div>

                            <div class="form-group">
                                <label class="control-label">Serial number</label>
                                <input type="text" id="bookid" name="book_id" value="{{$addbooks->book_id}}" class="form-control" placeholder="Serial number">
                               </div>

                            

                                <div class="form-group">
                                <label class="control-label">Book Category</label>
                                <input type="text" name="bookname" id="bookname" value="{{$addbooks->book_category}}" class="form-control" placeholder="Book name">
                                 </div>

                        </div>



                        <div class="col-lg-4 " >
                            <div class="form-group has-success">
                                <label class="control-label">Author</label>
                                <select class="form-control custom-select" name="book_author" value="{{$addbooks->book_author}}" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Author 1">Author 1</option>
                                    <option value="Author 2">Author 2</option>
                                    <option value="Author 3">Author 5</option>
                                    <option value="Author 4">Author 4</option>
                                </select>
                                 </div>

                            <div class="form-group has-success">
                                <label class="control-label">Publisher</label>
                                <input type="text" name="bookname" id="bookname" value="{{$addbooks->book_publisher}}" class="form-control" placeholder="Rack">
                                 </div>


                            <div class="form-group has-success">
                                
                                <label class="control-label">Rack</label>
                                <input type="text" name="book_rack" id="book_rack" value="{{$addbooks->book_rack}}" class="form-control" placeholder="Rack">
                                 </div>
                                
                                <div class="form-group">
                                <label class="text-left">Book Status</label>
                                <label class="control-label "> @if ($addbooks->status == 1)
                                <span class="btn btn-block btn-success" style="font-size:14px;">Available</span>
                                  @elseif ($addbooks->status == 0) 
                                <span class="btn btn-block btn-danger" style="font-size:14px;"> Not Available</span>
                                  @else  Lost @endif </label>
                                </div>


                        </div>

                            <div class="col-lg-3 " >
{{--                                <h4 class="card-title">File Upload5</h4>--}}
                                <label for="input-file-max-fs">Cover Image</label>
                                <input type="file" name="book_image" value="{{$addbooks->book_image}}"
                                 data-default-file="{{asset('upload/addbook/'.$addbooks->book_image)}}" id="input-file-now-disabled-1" class="dropify" disabled="disabled" data-height="300" data-show-remove="false"/>
                            
                                <div class="progress m-t-30">
                            
                                        </div>

                            </div>

                        </div>
                        <a href="/bookview" class="btn btn-inverse waves-effect waves-light" >Back </a>
                       
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
