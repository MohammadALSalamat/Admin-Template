@extends ('Admin-Side.layouts.admin-desgin')
@section('content')
    <div class="page-wrapper mt-4 bg-gray-800">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-gray-800 mb-2 >
                                                                                                                                                                                                                            <div class="
            row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tables</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Users</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body bg-gray-900">
                        <h5 class="card-title text-gray-400 cursor-pointer">Basic Datatable</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered bg-gray-800">
                                <thead class="bg-gray-800 border-gray-800">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a href="#" class="flip-link"><button type="button"
                                                    class="btn btn-light hvr-sweep-left px-4">
                                                    Edit
                                                </button></a>
                                            <a href="#" class="flip-link"><button type="button"
                                                    class="btn btn-danger hvr-sweep-left px-4"">
                                                        Delete

                                                    </button></a>
                                                <a href=" #" class="flip-link"><button type="button"
                                                        class="btn btn-info hvr-sweep-left px-4"">
                                                        ban
                                                    </button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>End-Name</th>
                                            <th>End-Position</th>
                                            <th>End-Office</th>
                                            <th>End-Age</th>
                                            <th>End-Start date</th>
                                            <th>End-Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>

            </div>
@endsection
