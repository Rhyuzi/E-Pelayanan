			<!-- Sticky Footer -->
			<footer class="sticky-footer" style="margin-bottom: -250px;">
				<div class="container my-auto">
					<div class="copyright text-center my-auto"">
						<span>E-Kelurahan © 2019</span>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="<?= base_url();?>asset/js/jquery-3.3.1.slim.min.js"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script src="<?= base_url();?>asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= base_url();?>asset/js/main.js"></script>
	<script src="<?= base_url();?>asset/js/smoothscroll.js"></script>
	<script src="<?= base_url();?>asset/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>asset/js/jquery.min.js"></script>
	<script src="<?= base_url();?>asset/js/pooper.js"></script>
	<script src="<?= base_url();?>asset/js/jquery.js"></script>
	<script defer src="<?= base_url();?>asset/js/solid.js"></script>
	<script defer src="<?= base_url();?>asset/js/fontawesome.js"></script>
	<script src="<?= base_url();?>asset/js/modernizr.custom.js"></script>
	<script src="<?= base_url();?>asset/js/chart.js/Chart.min.js"></script>
    <script src="<?=base_url();?>asset/js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url();?>asset/js/demo/chart-bar-demo.js"></script>
    <script src="<?=base_url();?>asset/js/demo/chart-pie-demo.js"></script>

	<script type="text/javascript">
			$(document).ready(function () {
					$('#sidebarCollapse').on('click', function () {
							$('#sidebar, #content').toggleClass('active');
							$('.collapse.in').toggleClass('in');
							$('a[aria-expanded=true]').attr('aria-expanded', 'false');
					});
			});
			(function ($) {
				"use strict";
				// Auto-scroll
				$('#myCarousel').carousel({
					interval: 5000
				});

				// Control buttons
				$('.next').click(function () {
					$('.carousel').carousel('next');
					return false;
				});
				$('.prev').click(function () {
					$('.carousel').carousel('prev');
					return false;
				});

				// On carousel scroll
				$("#myCarousel").on("slide.bs.carousel", function (e) {
					var $e = $(e.relatedTarget);
					var idx = $e.index();
					var itemsPerSlide = 3;
					var totalItems = $(".carousel-item").length;
					if (idx >= totalItems - (itemsPerSlide - 1)) {
						var it = itemsPerSlide -
								(totalItems - idx);
						for (var i = 0; i < it; i++) {
							// append slides to end 
							if (e.direction == "left") {
								$(
									".carousel-item").eq(i).appendTo(".carousel-inner");
							} else {
								$(".carousel-item").eq(0).appendTo(".carousel-inner");
							}
						}
					}
				});
			})
			(jQuery);
	</script>
</body>
</html>