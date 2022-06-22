		<!-- footer starts -->
		<footer class="page-footer bg-grey-dark-key">
			<div class="container">
				<!-- End of .footer-top -->
				<div class="footer-mid">
					<div class="row align-items-center">
						<div class="col-md">
							<div class="footer-logo-container">
								<a href="index.html">
									<img src="{{asset('storage/uploads')}}/@isset($setting->logo){{$setting->logo}}@endisset"  alt="footer logo" class="footer-logo">
								</a>
							</div>
							<!-- End of .brand-logo-container -->
						</div>
						<!-- End of .col-md-6 -->
						<div class="col-md-auto">
							<div class="footer-social-share-wrapper">
								<div class="footer-social-share">
									<div class="axil-social-title">Find us here</div>
									<ul class="social-share social-share__with-bg">
										<li><a href="@isset($setting->facebook){{$setting->facebook}}@endisset"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="@isset($setting->twitter){{$setting->twitter}}@endisset"><i class="fab fa-twitter"></i></a></li>
										<li><a href="@isset($setting->youtube){{$setting->youtube}}@endisset"><i class="fab fa-youtube"></i></a></li>
										<li><a href="@isset($setting->linkdin){{$setting->linkdin}}@endisset"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- End of .footer-social-share-wrapper -->
						</div>
						<!-- End of .col-md-6 -->
					</div>
					<!-- End of .row -->
				</div>
				<!-- End of .footer-mid -->
				<div class="footer-bottom">
					{{-- <ul class="footer-bottom-links">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Accessibility & CC</a></li>
						<li><a href="#">AdChoices</a></li>
						<li><a href="#">Advertise with us</a></li>
						<li><a href="#">Papr Store</a></li>
						<li><a href="#">Newsletters</a></li>
						<li><a href="#">Transcripts</a></li>
						<li><a href="#">License Footage</a></li>
						<li><a href="#">Sitemap</a></li>
					</ul> --}}
					<!-- End of .footer-bottom-links -->
					<p class="axil-copyright-txt">
						© 2019. All rights reserved by Your Company.
					</p>
				</div>
				<!-- End of .footer-bottom -->
			</div>
			<!-- End of .container -->
		</footer>
		<!-- End of footer -->
	</div>
	<!-- End of .main-content -->
	<!-- Javascripts
    	======================================= -->
	<!-- jQuery -->
	<script src="{{asset('assets')}}/js/vendor/jquery.min.js"></script>
	<script src="{{asset('assets')}}/js/vendor/jquery-migrate.min.js"></script>
	<!-- jQuery Easing Plugin -->
	<script src="{{asset('assets')}}/js/vendor/easing-1.3.js"></script>
	<!-- Waypoints js -->
	<script src="{{asset('assets')}}/js/vendor/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('assets')}}/js/vendor/owl.carousel.min.js"></script>
	<!-- Slick Carousel JS -->
	<script src="{{asset('assets')}}/js/vendor/slick.min.js"></script>
	<!-- Bootstrap js -->
	<script src="{{asset('assets')}}/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="{{asset('assets')}}/js/vendor/isotope.pkgd.min.js"></script>
	<!-- Counter up js -->
	<script src="{{asset('assets')}}/js/vendor/jquery.counterup.js"></script>
	<!-- Magnific Popup js -->
	<script src="{{asset('assets')}}/js/vendor/jquery.magnific-popup.min.js"></script>
	<!-- Nicescroll js -->
	<script src="{{asset('assets')}}/js/vendor/jquery.nicescroll.min.js"></script>
	<!-- IF ie -->
	<script src="https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2"></script>
	<!-- Plugins -->
	{{-- <script src="assets/js/plugins.js"></script> --}}
	<!-- Custom Script -->
	<script src="{{asset('assets')}}/js/main.js"></script>
</body>
</html>