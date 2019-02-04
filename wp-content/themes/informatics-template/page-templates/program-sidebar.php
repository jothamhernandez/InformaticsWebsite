<?php
/*
* Template Name: Program-sidebar
*/

get_header(); ?>

    <div class="container-fluid fluid-2">
        <div class="row">
            <div class="col-md-9 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php get_template_part( 'template-parts/no-card-part', 'page' ); ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-3 wp-bp-sidebar-width program-sidebar">
				<div class="mt-3r">
					<div class="widget-title">
						<h5 class="h6" style="margin:0px;">PROGRAMS</h5>
					</div>
					<?php wp_nav_menu(array('menu'=>'custom-side-menu','link_before' => '<span class="position-absolute" style="left:30px;"><i class="fas fa-caret-right"></i></span>') ); ?>
                </div>
                <div class="mt-3 sticky-top " style="top:20%;">
                    <button id="programs-btn" class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold" style="font-size:24px;"><span>INQUIRE NOW </span><span><i class="fa fa-chevron-right"></i></button>
                    <div class="mt-4 position-relative program-contact-form">
<!--                       echo do_shortcode('[contact-form-7 id="1771" title="Program Form"]') -->
						<form id="program-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Name</label>
                            <input type="text" class="form-control" id="user-name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" id="user-email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Subject</label>
                                <select id="program-select" class="form-control" require>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
			<script>
        var $= jQuery;
         $('#program-form').submit(function(e){
             e.preventDefault();
            var my_user = {
                sender_email: $('#user-email').val(),
                receipient_email: 'hackerman0605@gmail.com',
				sender_name:$('#user-name').val(),
                message: $('#message').val()
            };
			 alert("Message SuccessFully Send");
				$('#user-email').val("");
				$('#user-name').val("");
				$('#message').val("");
			 var magic = "HAKDOOOOG";
			 
			 console.log("<?php echo magic; ?>");
//             fetch('https://system.informatics-inculab.com/api/inquiry',{
//                 method: 'POST',
//                 body: JSON.stringify(my_user),
// 				mode:'cors',
//                 headers:{
//                      'Accept': 'application/json',
//     				'Content-Type': 'application/json'
//                 }
//             }).then((response)=>{
//               return response.json();
//             }).then((myJson)=>{
	
//             }).catch((error)=>{
// 				console.log(error)
// 			})
         })
        </script>
    </div>
    <?php get_template_part('template-parts/whats-happening','whats'); 
         get_template_part('template-parts/download-content','dl');
    ?>
    <!-- /.container -->

<?php
get_footer();
