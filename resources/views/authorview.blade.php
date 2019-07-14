@extends ('layout.common2')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">View Authors</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Settings</li>

                <li class="breadcrumb-item active">Authors</li>
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
                    <h5 class="card-title text-right">Add Author
                       <a href="addauthor" class="btn btn-danger btn-circle" style="font-size:16px;">
                         <i class="fa fa-plus"> 
                         </i>
                       </a></h5>
                    
                    
                    <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <th>Author Name</th>
                                                <th>ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($authors as $author)
                                            <tr>
                                                <td>{{$author->authorname}}</td>
                                                <td>{{$author->id}}</td>
                                                
                                                
                                                <td>
                                                <a href="/viewauthor/{{$author->id}}" class="btn btn-info btn-circle" style="margin:5px;font-size:17px;"><i class="fa fa-th"></i> </button>
                                                <a href="/editauthor/{{$author->id}}" class="btn btn-warning btn-circle" style="margin:5px;"><i class="fa fa-pencil"></i> </button>
                                                <a href="" class="btn btn-danger btn-circle" style="margin:5px;"><i class="fa fa-times"></i> </button>
                                                
                                                </td>
                                            </tr>
                                    @endforeach
    
                                        </tbody>
                                    </table>
                                </div>

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
