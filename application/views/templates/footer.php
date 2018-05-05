<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Download our mobile Apps</h4>
						<div class="d-apps">
							
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2015 Govihar . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="<?php echo base_url('./assets/js/jquery.flexslider.js'); ?>"></script>
	<script src="<?php echo base_url('./assets/js/easyResponsiveTabs.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('./assets/js/jquery-ui.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('./assets/js/script.js'); ?>"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>	
	<link rel="stylesheet" href="<?php echo base_url('./assets/css/jquery-ui.css'); ?>" />
		<script src="<?php echo base_url('./assets/js/jquery-ui.js'); ?>"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>	
</body>
</html>