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

            <div class="col-md-3 wp-bp-sidebar-width">
				<div class="mt-3r">
					<div class="widget-title">
						<h5 class="h6" style="margin:0px;">PROGRAMS</h5>
					</div>
					<?php wp_nav_menu(array('menu'=>'custom-side-menu','link_before' => '<span class="position-absolute" style="left:30px;"><i class="fas fa-caret-right"></i></span>') ); ?>
				</div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <?php get_template_part('template-parts/whats-happening','whats'); ?>
    <!-- /.container -->

<?php
get_footer();
