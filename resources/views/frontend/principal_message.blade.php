@extends('frontend.master')
@section('content')
	<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
			<div class="container main-area-bg">
                <br><br><br><br><br><br>

				<div class="row">
					<div class="col-md-9">
						<article>
							<div class="entry">
								{{-- <h1 class="heading">অধ্যক্ষের পরিচয়</h1> --}}
								<div class="clearfix">
									<div class="row">
										<div class="col-sm-4">
											<div class="clearfix">
												<img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->principal_image }}" alt="" width="225" height="224" class="alignleft size-full wp-image-3521" />
											</div>
											<div class="text-center mt-2 clearfix">
												<p><strong>{{ $setting->principal_name }}</strong></p>
											</div>
										</div>
										{{-- <div class="col-sm-8">
											{!! $setting->principal_bio !!}
										</div> --}}
									</div>
								</div>
								<br/>
								<div></div>
								{{-- <h1 class="heading mt-3">অধ্যক্ষের বাণী</h1> --}}
								<div>
									{!! $setting->principal_message !!}
									<p><strong>{{ $setting->principal_name }}</strong></p>
								</div>
							</div>
						</article>
					</div>
				<!-- End News section -->
				<!-- content-left -->
			<!-- End Column 8 -->
					@include('frontend.include.side-bar')
		</div>
	</div>
</section>


	</div><!-- #content -->
	<div class="container" style="display:none;">
		<div class="bottom-logos text-center">
			<div class="row">
				<div class="col-md-4">
					<div class="bottom-logo-one">
						<a href="http://www.ictd.gov.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/gov-logo.png" alt="" /></a>
						<h6>Information & Communication Technology Division</h6>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bottom-logo-one">
						<a href="http://www.bcc.net.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/bcc-logo.png" alt="" /></a>
						<h6>Bangladesh Computer Council</h6>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bottom-logo-one">
						<a href="http://www.jica.go.jp/english/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/jica-logo.png" alt="" /></a>
						<h6>Japan International Cooperation Agency</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
<section class="bottom-area" style="background:#ddd;margin:60px 0px 0px 0px;padding:40px 0px;display:none;">
	<div class="container">
		<div class="bottom-part">
			<div class="bottom-part1">
				<div class="bottom-contact-part text-black">
									</div>
			</div>
			<div class="bottom-part2">
				<div class="bottom-get-started-part">
									</div>
			</div>
		</div>
	</div>
</section>
	@endsection
