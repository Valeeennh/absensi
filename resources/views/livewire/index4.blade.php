@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header d-sm-flex d-block">
                                <ol class="breadcrumb mb-sm-0 mb-3">
                                    <!-- breadcrumb -->
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tables</li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="javascript:void(0);" class="btn bg-secondary-transparent text-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="Rating">
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </a>
                                        <a href="{{url('lockscreen')}}" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="lock">
                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm" data-bs-toggle="tooltip"
                                            title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                                            <span>
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE-HEADER -->



                             <!-- ROW -->
                             <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Data Company</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">Name</th>
                                                            <th class="border-bottom-0">Office</th>
                                                            <th class="border-bottom-0">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td><a href="{{url('company')}}">detail</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td><a href="{{url('company')}}">detail</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td><a href="{{url('company')}}">detail</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td><a href="{{url('company')}}">detail</a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW -->









@endsection

@section('scripts')

        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
        @vite('resources/assets/js/select2.js')

        <!-- DATA TABLE JS -->
        <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/jszip.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
        @vite('resources/assets/js/table-data.js')


@endsection
