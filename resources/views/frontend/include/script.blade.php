<script src="{{asset('assets-new-frontend')}}/assets/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('assets-new-frontend')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('assets-new-frontend')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('assets-new-frontend')}}/assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="{{asset('assets-new-frontend')}}/assets/js/script.js"></script>
    <script>
		$(document).ready(function () {
			// Toggle submenu on mobile view
			$('.has-submenu > a').on('click', function (e) {
				e.preventDefault();
				$(this).siblings('.submenu').slideToggle();
			});

			// Close submenu when clicking outside of it
			$(document).on('click', function (e) {
				if (!$(e.target).closest('.has-submenu').length) {
					$('.has-submenu .submenu').slideUp();
				}
			});
		});
	</script>
