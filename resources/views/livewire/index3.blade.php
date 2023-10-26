@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header d-sm-flex d-block">
								<ol class="breadcrumb mb-sm-0 mb-3">
									<!-- breadcrumb -->
									<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
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
								<div class="col-xl-12">
									<div class="card overflow-hidden">
										<div class="card-body">
											<div class="profile-bg h-250 cover-image" data-bs-image-src="{{asset('build/assets/images/photos/30.jpg')}}"></div>
											<div class="py-4 position-relative">
												<div class="profile-img">
													<img src="{{asset('build/assets/images/users/male/24.jpg')}}" class="avatar avatar-xxl br-7" alt="person-image">
												</div>
												<div class="mt-5 d-sm-flex align-items-center">
													<div>
														<h3 class="fw-semibold mb-1">Nama Perusahaan</h3>

													</div>
													<div class="ms-auto">
														<div class="d-md-flex">
															<div class="d-flex align-items-center me-5 mb-2">
																<span class="avatar avatar-md br-7 bg-gradient-primary"><i class="fe fe-briefcase"></i></span>
																<div class="ms-2">
																	<p class="mb-0 fw-semibold">Reviews</p>
																	<span class="text-muted">256</span>
																</div>
															</div>
															<div class="d-flex align-items-center me-5 mb-2">
																<span class="avatar avatar-md br-7 bg-gradient-warning"><i class="fe fe-cast"></i></span>
																<div class="ms-2">
																	<p class="mb-0 fw-semibold">Photos</p>
																	<span class="text-muted">204</span>
																</div>
															</div>
															<div class="d-flex align-items-center mb-2">
																<span class="avatar avatar-md br-7 bg-gradient-success"><i class="fe fe-users"></i></span>
																<div class="ms-2">
																	<p class="mb-0 fw-semibold">Followers</p>
																	<span class="text-muted">3.2K</span>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="text-wrap">
												<div class="panel tabs-style6">
													<div class="panel-head d-flex">
														<ul class="nav nav-tabs d-block d-sm-inline-flex">
															<li class="nav-item"><a class="nav-link active fw-bold" data-bs-toggle="tab" href="#style6tab1">About</a></li>
															<li class="nav-item"><a class="nav-link fw-bold" data-bs-toggle="tab" href="#style6tab2">Edit Profile</a></li>

														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 p-0">
										<div class="panel-body p-0">
											<div class="tab-content">
												<div class="tab-pane active p-0" id="style6tab1">
													<div class="card border-0">
														<div class="card-body p-0">
															<div class="p-4">
																<h3 class="card-title mb-0">Company Information</h3>
															</div>
															<div class="border-top"></div>
															<div class="p-4">
																<p class="mb-0 fw-semibold">
																 Detail : Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor laudantium ad impedit consequatur porro voluptatibus necessitatibus maiores magni culpa, reprehenderit obcaecati adipisci laborum nesciunt quidem doloribus dolorem exercitationem unde ipsa.
																</p>
																<p class="mb-0 fw-semibold">
																	Alamat : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum quod, beatae quas facere sapiente inventore omnis eius illum similique iste! Adipisci facere laboriosam cupiditate quasi tempore ipsum inventore? Perspiciatis, laborum.

                                                                </p>
																<p class="fw-semibold mb-0">
																	Parent :
																</p>
                                                                <p class="fw-semibold mb-0">
																	Head : employee id
																</p>
															</div>
															<div class="border-top"></div>
															<div class="p-4">
																<h6 class="text-uppercase fw-semibold mb-3">Type</h6>
																<span class="badge badge-gradient-primary mb-3 mb-sm-0">Head Office</span>

															</div>

															<div class="border-top"></div>
															<div class="p-4">

																<div class="d-md-flex">



                                                                    <div class="d-flex align-top me-5 mb-3 mb-sm-0">
																		<span><i class="fe fe-mail border p-3 rounded-circle fs-6 op7 text-dark"></i></span>
																		<div class="ms-3 mb-2">
																			<p class="mb-0 fw-semibold">Work email</p>
																			<span class="text-muted">alisonrobert@gmail.com</span>
																		</div>
																	</div>

																</div>
															</div>
															<div class="border-top"></div>
															<div class="p-4">

																<div class="d-md-flex">


																</div>
															</div>
														</div>
													</div>
												</div>



                                                {{-- CRUD --}}
												<div class="tab-pane p-0" id="style6tab2">
													<div class="card overflow-hidden border-0">
														<div class="card-body">
															<div class="d-flex">
																<div class="ms-auto">
																	<a href="javascript:void(0);" class="btn btn-sm btn-success mx-1">Update</a>
																	<a href="javascript:void(0);" class="btn btn-sm btn-danger">Discard</a>
																</div>
															</div>
															<form class="form-horizontal needs-validation" novalidate>
																<h6 class="text-uppercase fw-semibold mb-3">Name Office</h6>
																<div class="form-group">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">First Name</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control" id="validationCustom01"
                                                                     value="Mark" required>
                                                                  <div class="valid-feedback">
                                                                   Looks good!
                                                                      </div>
																		</div>
																	</div>
																</div>
																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">last Name</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control" id="validationCustom01"
                                                                                         value="Mark" required>
                                                              <div class="valid-feedback">
                                                                      Looks good!
                                                                                     </div>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<h6 class="text-uppercase fw-semibold mb-0">Your Photo</h6>
																			<span class="text-muted-dark">This will be displayed on Your Profile</span>
																		</div>
																		<div class="col-md-9 d-flex justify-content-between">
																			<img src="{{asset('build/assets/images/users/male/24.jpg')}}" class="avatar avatar-xl br-7" alt="person-image">
																			<div class="d-flex">
																				<a href="javascript:void(0);" class="mb-0 fw-semibold mx-2">Change</a>
																				<a href="javascript:void(0);" class="mb-0 fw-semibold">Delete</a>
																			</div>
																		</div>
																	</div>
																</div>


																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Detail</label>
																		</div>
																		<div class="col-md-9">


                                                                            <textarea class="form-control" id="validationTextarea"
                                                                            placeholder="Required example textarea" required></textarea><div class="valid-feedback">
                                                    Looks good!
                                                </div>
																		</div>
																	</div>
																</div>



                                                                <h6 class="text-uppercase fw-semibold mb-3">Addres</h6>
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Subdistrict</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="Designation" value="UI/UX Designer">
																		</div>
																	</div>
																</div>
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">City</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="Designation" value="UI/UX Designer">
																		</div>
																	</div>
																</div>
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Province</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="Designation" value="UI/UX Designer">
																		</div>
																	</div>
																</div>
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Pos code</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="Designation" value="UI/UX Designer">
																		</div>
																	</div>
																</div>

                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Type</label>
																		</div>
																		<div class="col-md-9">
																			<select class="form-select select2" id="validationCustom04" required>
                                                                                <option selected disabled value="">Choose...</option>
                                                                                <option>Company</option>
                                                                                <option>Head Office</option>
                                                                                <option>Regional office </option>
                                                                                <option>Department </option>
                                                                                <option>Unit </option>
                                                                                <option>Sub unit </option>

                                                                            </select>
																		</div>
																	</div>
																</div>


																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Parent structure</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="Email"
																				value="info@Rob.in">
																		</div>
																	</div>
																</div>
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Head</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="Email"
																				value="info@Rob.in">
																		</div>
																	</div>
																</div>

																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>


							<!-- END ROW -->

@endsection

@section('scripts')

        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')


		<!-- GALLERY JS -->
		<script src="{{asset('build/assets/plugins/gallery/picturefill.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lightgallery.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lightgallery-1.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-pager.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-autoplay.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-fullscreen.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-zoom.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-hash.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-share.js')}}"></script>

@endsection
