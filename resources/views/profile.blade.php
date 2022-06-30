@extends('layouts2.master')
@section('content')
    		<!-- Banner starts -->
		<section class="banner banner__default bg-grey-light-three">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="author-details-block">
							<div class="media post-block post-block__mid m-b-xs-0">
								<a href="#" class="align-self-center">
									<img style="width:100% !important" class="m-r-xs-30" src="{{asset('assets/img/instagram-post-4.jpg')}}" alt="author image">
									<div class="grad-overlay__transparent overlay-over"></div>
                                </a>
								<div class="media-body">
									<h2 class="h4 m-b-xs-15">{{$user->name}}</h2>
									<p class="mid">{{$user->email}}</p>
									<div class="post-metas">
										<ul class="list-inline">
											{{-- <li><a href="#"><i class="fal fa-user-edit"></i>Total Post (7)</a></li> --}}
											{{-- <li><a href="#"><i class="fal fa-comment"></i>Comments (12)</a></li> --}}
										</ul>
									</div>
									{{-- <div class="author-social-share">
										<ul class="social-share social-share__with-bg">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-behance"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div> --}}
									<!-- End of .author-social-share -->
								</div>
								<!-- End of  .media-body -->
							</div>
							<!-- End of .media -->
						</div>
						<!-- End of .author-details-block -->
					</div>
					<!-- End of .col-lg-8 -->
				</div>
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .banner -->
@endsection