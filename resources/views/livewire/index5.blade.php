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
																<h3 class="card-title mb-0">Timestamp</h3>
															</div>
															<div class="border-top"></div>


                                                                <form action="">

																	<div class="container mb-5">
																		<div class="center">
																			<div id="stopWatch">
																				<h3 id="title" class="mt-3">Stopwatch</h3>
																				<div class="row">
																					<div class="span12">
																						<div id="time" class="pointable h-100" style="font-weight:bold; width:100%; display:block;">00:00:00</div>
																					</div>
																				</div>
																				<div class="row">
																					<div id="divStart" class="span4 center">
                                                                                        <button type="button" class="btn btn-primary" id="btnStart" data-do="start">Start </button>
																					</div>
																				</div>
																				<div class="row hidden" id="divControls">
																					<div class="span4 center">
																						<div class="row">
																							<span class="span2 pull-left">
																								<button id="btnPause" class="btn btn-success mt-3" type="button">

																									Pause
																								</button>
																							</span>
																							<span class="span2 pull-left ">
																								<button id="btnStop" class="btn btn-success mt-3" type="button">

																									Reset
																								</button>
																							</span>
																						</div>
																					</div>
																				</div>
																			</div>

																		</div>
																	</div>


                                                                </form>

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

		<script type="text/javascript">
			$(document).ready(function(){

				function adjustHeight(){
					$('#lapListCont').height( ($(window).height() - $('#stopWatch').height() - $('#heightlap').height() - 110) + "px") ;
				}
				adjustHeight();
				$(window).on('resize', function(){
					adjustHeight();
				});

				var startTime;
				var timeout;
				var pauseTime = 0;
				var mils;
				var paused = false;
				var count = 0;
				$('#time').on('click', function(){
					if(mils != undefined){
						if(mils > 0){
							$('#lapInst').hide();
							var time = milToTime(mils);
							//alert(mils);
							time = formatTime(time);
							count += 1;
							$('#timeTable thead').show();
							$('#lapList').prepend('<tr class="timeRow"><td class="lapCount muted">' + count + ".</td><td>" +time.h +':'+time.m +':'+time.s + '.' + time.mils+  '</td></tr>');
							$('#lapListCont').animate({ scrollTop: 0 }, "fast");
						}
					}
				});

				$('#btnPause').on('click', function(){
					if(paused == false){
						paused = true;
						clearTimeout(timeout);
						pauseTime = mils;
						$(this).html('Resume');
						$('#time').addClass('paused');
					}else{
						paused = false;
						$(this).html('Pause');
						startTime = new Date();
						clock();
					}
				});
				$('#btnStop').on('click', function(){
						$('#title').slideDown();
						$('#lapInst').hide();
						$('#time').removeClass('paused');
						paused = false;
						clearTimeout(timeout);
						pauseTime = 0;
						mils = 0;
						$('#time').html('00:00:00');
						$('#btnClear').click();
						$('#divControls').fadeOut(function(){
							$('#divStart').fadeIn()
							$('#btnPause').html('Pause');
						});
				});
				$('#btnStart').on('click', function(){
						$('#title').slideUp(function(){
							adjustHeight();
						});
						var btn = $(this);
						startTime = new Date();
						clock();
						$('#divStart').fadeOut(function(){
							$('#divControls').fadeIn();
							$('#lapInst').fadeIn();
							$('#lapTimes').fadeIn();
						});
				});

				function clock() {
					$('#time').removeClass('paused');
					var curTime = new Date();
					mils = (curTime - startTime) + pauseTime;
					var time = milToTime(mils);
					formatTime(time);
					var outStr = time.h +':'+time.m +':'+time.s;
					document.getElementById('time').innerHTML=outStr;
					timeout = setTimeout(clock,20);
				}

				function formatTime(time){
					for(var i in time){
						if(i == "mils"){
							if(time[i] < 1){
								time[i] = "000";
							}else
							if(time[i] < 10){
								time[i] = "00" + time[i];
							}else
							if(time[i] < 100){
								time[i] = "0" + time[i];
							}
						}else if(time[i] < 10){
							time[i] = "0" + time[i];
						}
					}
					return time;
				}

				function milToTime(mil){
					mi = mil % 1000;
					seconds = parseInt(mil / 1000) % 60;
					minutes = parseInt(mil / 1000 / 60) % 60;
					hours = parseInt( mil / 1000 / 3600);
					return {s: seconds, m: minutes, h:hours, mils:mi};
				}

				$('#btnClear').on('click', function(){
					$('#lapList, #btnClear').fadeOut(function(){
						$('#lapList').html('').fadeIn();
						$('#timeTable thead').hide();
						//$('#lapInst').fadeIn();
						count = 0;
					});
				});
			});
			</script>

@endsection
