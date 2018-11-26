<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<footer>

	<div class="section-container-holder" style="background-color: #404040">
		<div class="section-container">
			<div class="content">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-5">
							<h4 class="white text-center m-2">INFORMATICS OFFICIAL NEWSLETTER</h4>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control m-2">
						</div>
						<div class="col-md-2 text-center">
							<button class="btn btn-informatics-blue no-border m-2">SUBSCRIBE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-container-holder" style="background-color: #333333">
		<div class="section-container">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div>
								<div class="link-header">Quick Links</div>
								<div class="link-content">
									<?php wp_nav_menu( array( 'theme_location' => 'quick-links' ) ); ?>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div>
								<div class="link-header">Quick Links</div>
							</div>
							<div class="link-content">
								<ul>
									<li><a href="https://drive.google.com/open?id=17JLkch17gstYlVbROxQ0ATUip_ZSH-GV">Senior High School Application Form</a></li>
									<li><a href="https://drive.google.com/open?id=1tX9CH3F6G6Gi6glAkcT4QEfT6niBgc6b">Bachelor's Degree Application Form</a></li>
									<li><a href="#">Applicant for Employment Form</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div>
								<div class="link-header">
									Facebook
								</div>
								<div class="link-content">
									<div class="fb-page" data-href="https://www.facebook.com/informaticsph/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/informaticsph/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/informaticsph/">Informatics Philippines</a></blockquote></div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div>
								<div class="link-header">
									Twitter
								</div>
								<div class="link-content">
									<a class="twitter-timeline" data-height="400" data-theme="dark" href="https://twitter.com/InformaticsPh?ref_src=twsrc%5Etfw">Tweets by InformaticsPh</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-container-holder p-3" style="background-color:#2b2b2b; color:#60686b">
		<div class="section-container">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							Copyright &copy; 2018 • Informatics Holdings Philippines, Inc. • All Rights Reserved 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>
		<script>
			(function(){
				jQuery('#content').offset({top: jQuery("#masthead").height()});
			})();
		</script>
	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
