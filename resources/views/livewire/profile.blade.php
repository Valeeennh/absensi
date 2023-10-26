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
													<img  src="{{asset('build/assets/images/mu.png')}}" class="avatar avatar-xxl br-7" alt="person-image">
												</div>
												<div class="mt-5 d-sm-flex align-items-center">
													<div>
														<h3 class="fw-semibold mb-1">Alison Robert</h3>
                                                        <p class="mb-0 fw-semibold text-muted-dark">Tanggal lahir</p>
                                                        <p class="mb-0 fw-semibold text-muted-dark">Gender</p>
														<div class="mb-2">
															<span class="badge badge-light fw-semibold text-dark fs-12">Fulltime</span>
															<span class="badge badge-light fw-semibold text-dark fs-12">Jobdesk</span>
														</div>
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
																<h3 class="card-title mb-0">Personal Information</h3>
															</div>
															<div class="border-top"></div>
															<div class="p-4">
																<p class="mb-0 fw-semibold">
																 Alison Robert.
																</p>
																<p class="mb-0 fw-semibold">
																	Tanggal lahir : 14-00-99
																</p>
                                                                <p class="mb-0 fw-semibold">
																	Jenis Kelamin : Laki-Laki
																</p>
																<p class="fw-semibold mb-0">
																	Alamat :
																</p>
															</div>
															<div class="border-top"></div>
															<div class="p-4">
																<h6 class="text-uppercase fw-semibold mb-3">Skills</h6>
																<span class="badge badge-gradient-primary mb-3 mb-sm-0">HTML</span>
																<span class="badge badge-gradient-primary mb-3 mb-sm-0">CSS</span>
																<span class="badge badge-gradient-primary mb-3 mb-sm-0">Javascript</span>
																<span class="badge badge-gradient-primary mb-3 mb-sm-0">Jquery</span>
																<span class="badge badge-gradient-primary mb-3 mb-sm-0">Adobe Photoshop</span>
																<span class="badge badge-gradient-primary mb-3 mb-sm-0">Figma</span>
															</div>

															<div class="border-top"></div>
															<div class="p-4">
																<h6 class="text-uppercase fw-semibold mb-3">Contact Details</h6>
																<div class="d-md-flex">
																	<div class="d-flex align-top me-5 mb-3 mb-sm-0">
																		<span><i class="fe fe-phone border p-3 rounded-circle fs-6 op7 text-dark"></i></span>
																		<div class="ms-3 mb-2">
																			<p class="mb-0 fw-semibold">Mobile</p>
																			<span class="text-muted">+(62)-88662666</span>
																		</div>
																	</div>
                                                                    <div class="d-flex align-top me-5 mb-3 mb-sm-0">
																		<span><i class="fe fe-phone border p-3 rounded-circle fs-6 op7 text-dark"></i></span>
																		<div class="ms-3 mb-2">
																			<p class="mb-0 fw-semibold">Home phone</p>
																			<span class="text-muted">+(62)-88662666</span>
																		</div>
																	</div>
																	<div class="d-flex align-top me-5 mb-3 mb-sm-0">
																		<span><i class="fe fe-mail border p-3 rounded-circle fs-6 op7 text-dark"></i></span>
																		<div class="ms-3 mb-2">
																			<p class="mb-0 fw-semibold">Private email</p>
																			<span class="text-muted">alisonrobert@gmail.com</span>
																		</div>
																	</div>
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
																<h6 class="text-uppercase fw-semibold mb-3">Social Media</h6>
																<div class="d-md-flex">
																	<div class="d-flex align-top me-4 mb-3 mb-md-0">
																		<span><i class="fe fe-gitlab border text-dark p-3 rounded-circle fs-6 op7"></i></span>
																		<div class="ms-3  mb-2">
																			<p class="mb-0 fw-semibold">Github</p>
																			<a href="javascript:void(0);" class="text-muted-dark">github.com/spruko</a>
																		</div>
																	</div>
																	<div class="d-flex align-top me-4 mb-3 mb-md-0">
																		<span><i class="fe fe-twitter border text-dark p-3 rounded-circle fs-6 op7"></i></span>
																		<div class="ms-3  mb-2">
																			<p class="mb-0 fw-semibold">Twitter</p>
																			<a href="javascript:void(0);" class="text-muted-dark">twitter.com/spruko.me</a>
																		</div>
																	</div>
																	<div class="d-flex align-top">
																		<span><i class="fe fe-linkedin border text-dark p-3 rounded-circle fs-6 op7"></i></span>
																		<div class="ms-3  mb-2">
																			<p class="mb-0 fw-semibold">Linkedin</p>
																			<a href="javascript:void(0);" class="text-muted-dark">spruko.com/</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane p-0" id="style6tab2">
													<div class="card overflow-hidden border-0">
														<div class="card-body">
															<div class="d-flex">
																<div class="ms-auto">
																	<a href="javascript:void(0);" class="btn btn-sm btn-success mx-1">Update</a>
																	<a href="javascript:void(0);" class="btn btn-sm btn-danger">Discard</a>
																</div>
															</div>
															<form class="form-horizontal">
																<h6 class="text-uppercase fw-semibold mb-3">User Name</h6>
																<div class="form-group">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">First Name</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="First Name" value="Alison">
																		</div>
																	</div>
																</div>
																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">last Name</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="Last Name" value="Robert">
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
																{{-- birth --}}
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark text-uppercase fw-semibold">Birth</label>
																		</div>
																		<div class="col-md-9">
																			<input placeholder="14/02/2002" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
																		</div>
																	</div>
																</div>



																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Gender</label>
																		</div>
																		<div class="col-md-9">
																			<select class="form-select select2" id="validationCustom04" required>
                                                                                <option selected disabled value="">Choose...</option>
                                                                                <option>Laki-laki</option>
                                                                                <option>Perempuan</option>

                                                                            </select>
																		</div>
																	</div>
																</div>
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Marital status</label>
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
																			<label class="form-label fw-semibold text-muted-dark">Employe status</label>
																		</div>
																		<div class="col-md-9">
																			<select class="form-select select2" id="validationCustom04" required>
                                                                                <option selected disabled value="">Choose...</option>
                                                                                <option>Fulltime </option>
                                                                                <option>Internship</option>
                                                                                <option>Permanent</option>
                                                                                <option>Part Time</option>
                                                                                <option>Contract</option>


                                                                            </select>
																		</div>
																	</div>
																</div>
                                                                <div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Department</label>
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
																			<label class="form-label fw-semibold text-muted-dark">Job tittle</label>
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
																			<label class="form-label fw-semibold text-muted-dark">Joined date</label>
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
																			<label class="form-label fw-semibold text-muted-dark">Termination date</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="Designation" value="UI/UX Designer">
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



																<h6 class="text-uppercase fw-semibold mb-3">Contact</h6>
																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Work email</label>
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
																			<label class="form-label fw-semibold text-muted-dark">Private email</label>
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
																			<label class="form-label fw-semibold text-muted-dark">Home phone</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="Website" value="@spruko.w">
																		</div>
																	</div>
																</div>
																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Mobile phone</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control"
																				placeholder="phone number" value="+125 3545654">
																		</div>
																	</div>
																</div>
																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label fw-semibold text-muted-dark">Status</label>
																		</div>
																		<div class="col-md-9">
																			<select class="form-select select2" id="validationCustom04" required>
                                                                                <option selected disabled value="">Choose...</option>
                                                                                <option>Active</option>
                                                                                <option>Deactive</option>

                                                                            </select>
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
