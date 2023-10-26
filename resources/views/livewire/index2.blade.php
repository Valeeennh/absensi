@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE HEADER -->
                            <div class="page-header d-sm-flex d-block">
                                <ol class="breadcrumb mb-sm-0 mb-3">
                                    <!-- breadcrumb -->
                                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Absensi</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>

                                        <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm" data-bs-toggle="tooltip"
                                            title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                                            <span>
                                                <i class="fa fa-plus"></i>
                                            </span> <span>Add new </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE HEADER -->




                            <!-- ROW -->
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-header border-bottom ">
                                            <h3 class="card-title mb-0">Data user</h3>

                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="data-table" class="table border p-0 text-nowrap mb-0">
                                                    <thead class="bg-light text-dark">
                                                        <tr>
                                                            <th
                                                                class="fw-semibold fs-14 border-bottom-0 w-5">
                                                                No</th>
                                                            <th
                                                                class="fw-semibold fs-14 border-bottom-0">
                                                                Nama</th>
                                                            <th
                                                                class="fw-semibold fs-14 border-bottom-0">
                                                                Position</th>
                                                            <th
                                                                class="fw-semibold fs-14 border-bottom-0">
                                                                Office</th>
                                                            <th
                                                                class="fw-semibold fs-14 border-bottom-0">
                                                                Age</th>
                                                            <th
                                                                class="fw-semibold fs-14 border-bottom-0">
                                                                Start date</th>
                                                             <th
                                                                class="fw-semibold fs-14 border-bottom-0">
                                                                End date</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <h6 class="mb-0 fw-semibold text-dark">#420153</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex contact-image">
                                                                    <img src="{{asset('build/assets/images/users/male/33.jpg')}}" class="avatar avatar-md brround" alt="person-image">
                                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Jake poole</h6>
                                                                        <span
                                                                            class="fs-12 text-muted">jacke123@gmail.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="fs-13 fw-semibold text-dark">Sofa</td>
                                                            <td class="fs-13 fw-semibold text-dark">$426.56</td>
                                                            <td class="fs-13 fw-semibold text-dark">20 </td>
                                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                            <td class="fs-15 fw-semibold">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                   <span
                                                                        class="fs-13 fw-semibold text-dark "><i class="fe fe-calendar me-2"></i>20-11-2020</span>
                                                                    <div class="dropdown">
                                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">

                                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                                            <li><a href="javascript:void(0);">Edit</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <h6 class="mb-0 fw-semibold text-dark">#243153</h6>
                                                                </div>
                                                            </td>
                                                            <td class="d-flex border-bottom-0">
                                                                <div>
                                                                    <span class="avatar avatar-md me-2"><img src="{{asset('build/assets/images/users/female/19.jpg')}}" alt="img" class="rounded-circle cover-image"></span>
                                                                </div>
                                                                <div class="flex-1 mt-1 lh-1">
                                                                    <h6 class="mb-1 fs-14 fw-semibold text-dark">Virginia Mak
                                                                    </h6>
                                                                    <span
                                                                        class="fs-12 text-muted">virginia456@gmail.com</span>
                                                                </div>
                                                            </td>

                                                            <td class="fs-13 fw-semibold text-dark">Watch</td>
                                                            <td class="fs-13 fw-semibold text-dark">$265.04</td>
                                                            <td class="fs-13 fw-semibold text-dark">20 </td>
                                                             <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                            <td class="fs-15 fw-semibold">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                   <span
                                                                        class="fs-13 fw-semibold text-dark "><i class="fe fe-calendar me-2"></i>20-11-2020</span>

                                                                    <div class="dropdown">
                                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">

                                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                                            <li><a href="javascript:void(0);">Edit</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <h6 class="mb-0 fw-semibold text-dark">#230153</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex contact-image">
                                                                    <img src="{{asset('build/assets/images/users/female/21.jpg')}}" class="avatar avatar-md brround" alt="person-image">
                                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Kylie north</h6>
                                                                        <span
                                                                            class="fs-12 text-muted">kylie@gmail.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="fs-13 fw-semibold text-dark">Coat</td>
                                                            <td class="fs-13 fw-semibold text-dark">$652.00</td>
                                                            <td class="fs-13 fw-semibold text-dark">20 </td>
                                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                            <td class="fs-15 fw-semibold">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <span
                                                                        class="fs-13 fw-semibold text-dark "><i class="fe fe-calendar me-2"></i>20-11-2020</span>

                                                                    <div class="dropdown">
                                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">

                                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                                            <li><a href="javascript:void(0);">Edit</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <h6 class="mb-0 fw-semibold text-dark">#124153</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex contact-image">
                                                                    <img src="{{asset('build/assets/images/users/male/13.jpg')}}" class="avatar avatar-md brround" alt="person-image">
                                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Jan Hodges</h6>
                                                                        <span class="fs-12 text-muted">jan@gmail.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="fs-13 fw-semibold text-dark">Shoes</td>
                                                            <td class="fs-13 fw-semibold text-dark">$200.56</td>
                                                            <td class="fs-13 fw-semibold text-dark">20 </td>
                                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                            <td class="fs-15 fw-semibold">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                   <span
                                                                        class="fs-13 fw-semibold text-dark "><i class="fe fe-calendar me-2"></i>20-11-2020</span>

                                                                    <div class="dropdown">
                                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">

                                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                                            <li><a href="javascript:void(0);">Edit</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <h6 class="mb-0 fw-semibold text-dark">#024153</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex contact-image">
                                                                    <img src="{{asset('build/assets/images/users/male/8.jpg')}}" class="avatar avatar-md brround" alt="person-image">
                                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Trevor Thomson
                                                                        </h6>
                                                                        <span
                                                                            class="fs-12 text-muted">trevor@gmail.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="fs-13 fw-semibold text-dark">T-shirts</td>
                                                            <td class="fs-13 fw-semibold text-dark">$364.56</td>
                                                            <td class="fs-13 fw-semibold text-dark"> 25 </td>
                                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                            <td class="fs-15 fw-semibold">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                   <span
                                                                        class="fs-13 fw-semibold text-dark "><i class="fe fe-calendar me-2"></i>20-11-2020</span>

                                                                    <div class="dropdown">
                                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">

                                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                                            <li><a href="javascript:void(0);">Edit</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bootom">
                                                            <td>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <h6 class="mb-0 fw-semibold text-dark">#420153</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex contact-image">
                                                                    <img src="{{asset('build/assets/images/users/female/23.jpg')}}" class="avatar avatar-md brround" alt="person-image">
                                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Emily Lewis</h6>
                                                                        <span
                                                                            class="fs-12 text-muted">emily@gmail.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="fs-13 fw-semibold text-dark ">Jeans</td>
                                                            <td class="fs-13 fw-semibold text-dark ">$56.035</td>
                                                            <td class="fs-13 fw-semibold text-dark"> 25 </td>
                                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                                            <td class="fs-15 fw-semibold">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                   <span
                                                                        class="fs-13 fw-semibold text-dark "><i class="fe fe-calendar me-2"></i>20-11-2020</span>

                                                                    <div class="dropdown">
                                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">

                                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                                            <li><a href="javascript:void(0);">Edit</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL END -->
                            </div>
                            <!-- END ROW -->


@endsection

@section('scripts')

        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>

        <!-- APEXCHART JS -->
        <script src="{{asset('build/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>

        <!-- DATA TABLES JS -->
        <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
        <script src="{{asset('build/assets/plugins/time-picker/toggles.min.js')}}"></script>

        <!-- FLATPICKER JS -->
        <script src="{{asset('build/assets/plugins/flatpickr/flatpickr.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')


        <!-- DATEPICKER JS -->
        <script src="{{asset('build/assets/plugins/spectrum-date-picker/spectrum.js')}}"></script>
        <script src="{{asset('build/assets/plugins/spectrum-date-picker/jquery-ui.js')}}"></script>
        <script src="{{asset('build/assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

        <!-- MULTIPLE SELECT JS -->
        <script src="{{asset('build/assets/plugins/multipleselect/multiple-select.js')}}"></script>
        <script src="{{asset('build/assets/plugins/multipleselect/multi-select.js')}}"></script>

        <!-- INTERNAL COLOR PICKER JS -->
        <script src="{{asset('build/assets/plugins/colorpicker/pickr.es5.min.js')}}"></script>
        @vite('resources/assets/js/colorpicker.js')


        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
        @vite('resources/assets/js/select2.js')


        @vite('resources/assets/js/form-elements.js')

        <!-- INDEX JS -->
        @vite('resources/assets/js/index1.js')


@endsection
