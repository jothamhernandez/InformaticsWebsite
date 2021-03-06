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
									<li><a href="https://drive.google.com/open?id=17JLkch17gstYlVbROxQ0ATUip_ZSH-GV" target="_blank">Senior High School Application Form</a></li>
									<li><a href="https://drive.google.com/open?id=1tX9CH3F6G6Gi6glAkcT4QEfT6niBgc6b" target="_blank">Bachelor's Degree Application Form</a></li>
									<li><a href="#" target="_blank">Applicant for Employment Form</a></li>
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
<div class="scroll-up-button" style="background:rgba(150,150,150,.8); border-radius:100%; padding:2px;">
	<img src="https://www.informatics-inculab.com/wp-content/uploads/2018/12/arrow-up-01-512.png" class="">
</div>
</footer>
		<script>
			(function(){
				jQuery('#content').offset({top: jQuery("#masthead").height()});
				var $ = jQuery;
				$(document).ready(function() {
					$(".scroll-up-button").click(function() {
					  $("html, body").animate({ scrollTop: 0 },1500);
					  return false;
					});
					$(window).scroll(function(e){
						if($(window).scrollTop() > 10){
						   $('.scroll-up-button').fadeIn();   
						}else{
							$('.scroll-up-button').fadeOut();
						}
					})
					// var child = $('.dropdown');
					// console.log(child.children()[0].href);
					$('.btn-admission').click(function(){
						// console.log($($(this).find('.dd-admission')))
						// $('.dd-admission').animate({height:'0px'})
						var sibling = $(this).siblings()[1];
						$('.dd-admission').not(sibling).slideUp();
						$(sibling).slideToggle();
						// var height = $(sibling).css('height');
						// if(height != '2px'){
						// 	$(sibling).animate({height:'0px'})
						// }else{
						// 	$(sibling).animate({height:'530px'})
						// }
					})
					if ( $(window).width() > 768 ) {
						$('.dropdown').click(function(){
							document.location.href =$(this).children()[0].href;
						})
					} // This will simulate a resize to trigger the initial run.
					$('[data-action=link]').on('click', function(){
						window.location = $(this).data('link');
					});
					var dropsearch = false;
					$('#search-icon-2,#search-icon-1').on('click',function(){
						dropsearch = !dropsearch;
						if(dropsearch){
						   $('header form').animate({height:'38px'})
						  }else{
							$('header form').animate({height:'0px'})  
						  }
					});
					window.sr = ScrollReveal();
					sr.reveal('h1',{duration:2300});
					sr.reveal('.reasons',{interval:300,delay:1000,duration:500})
					sr.reveal('article',{interval:500,origin:'bottom',distance:'140px',duration:1200})
					sr.reveal('.up-anim',{origin:'bottom',distance:'300px',duration:1800})
					sr.reveal('#search-icon-wrap-2',
					{
						rotate:{
							x:20,
							y:20
						},
						origin:'right',
						duration:1000,
						distance:'140px'
					})
					sr.reveal('.programs-rotate',{
						rotate:{
							x:200,
							z:10
						},
						duration:1200,
						interval:200,
						delay:800,
						origin:'top'
					})
					sr.reveal('.even',{interval:1000,delay:1700,origin:'right',distance:'200px',duration:1000})
					sr.reveal('.odd',{interval:1000,delay:1200,origin:'left',distance:'200px',duration:1000})
					sr.reveal('.senior-img',{interval:1000,delay:700,origin:'left',distance:'100px',duration:1000});
					sr.reveal('.senior-text',{interval:1000,delay:1200,origin:'right',distance:'100px',duration:1000});
				});
			})();
		</script>
	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
