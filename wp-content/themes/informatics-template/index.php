<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Informatics_Template
 */

get_header(); ?>


<div class="section-container-holder">
                <div class="section-container pb-md-5" style="overflow: hidden;">
                    <div class="overlay bg-grayscale" style="background: url('https://www.informatics-inculab.com/wp-content/uploads/2018/12/Info-Website-01-e1545009903960.jpg') no-repeat center center fixed; background-size:cover;"></div>
                    <div class="content py-5">
                        <div class="container mt-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-center white text-uppercase my-3">Why Choose Informatics?</h1>
                                    <p class="text-center white my-3">Informatics values your dreams as much as we
                                        value quality education. Thus, putting you first by
                                        providing a well-rounded curriculum that leads to employability and
                                        sustainability is our utmost
                                        priority.</p>
                                </div>
                                <div class="container my-3">
                                <div class="row">
                                <div class="col-4 text-center reasons" v-for="reason in reasons">
                                    <div class="px-3 py-2 mx-lg-5 px-sm-5">
                                        <div class="img-holder-main">
                                            <img :src="reason.icon" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <p class="white font font-italic font-weight-light">{{reason.why}}</p>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-informatics-blue no-border">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                include 'template-parts/whats-happening.php';
            ?>
            <div class="section-container-holder up-anim">
                <div class="section-container">
                    <div class="content py-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-center text-uppercase">Testimonials</h1>
                                </div>
                                <div class="col-md-12" style="overflow:hidden;">
                                    <div class="d-sm-flex flex-wrap">
                                        <div class="col-sm-6 col-md-6 col-lg-3 px-0" v-for="testimonial in testimonials">
                                            <div class="testimonial-container" :style="{'background-image': 'url('+testimonial.image+')'}">
                                                <div class="caption d-flex justify-content-center align-items-center">
                                                    <div>
                                                        <p>
                                                            {{testimonial.message}}
                                                        </p>
                                                        <p class="text-right">{{testimonial.person}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- #content -->
            <div class="section-container-holder up-anim">
                <div class="section-container">
                    <div class="content py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-uppercase text-center">Industry Partners</h1>
                                </div>
                                <div class="col-md-12">
                                    <informatics-slider :items="partners" slider-speed="5000"></informatics-slider>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<?php
get_footer();
?>
<script type="text/javascript">
                (function () {
                    
                    var $ = jQuery
					window.sr = ScrollReveal();
			        sr.reveal('#masthead',{ duration: 2000 ,origin:'bottom'});
					
                    $('.carousel').carousel({
                        interval: 30000
                    })

                    new Vue({
                        el: '#page',
                        data() {
                            return {
                                partners: [
                                    {
                                        link: 'https://www.informatics-inculab.com/wp-content/uploads/2018/12/acpi.png'
                                    },
                                    {
                                        link: 'https://www.informatics-inculab.com/wp-content/uploads/2018/12/Comptia-e1545010727697.jpg'
                                    },
                                    {
                                        link: 'https://www.informatics-inculab.com/wp-content/uploads/2018/12/cybersecurity.png'
                                    },
                                    {
                                        link: 'https://www.informatics-inculab.com/wp-content/uploads/2018/12/GDAP-1-e1545010821355.jpg'
                                    },
                                    {
                                        link: 'https://www.informatics-inculab.com/wp-content/uploads/2018/12/Google-Apps-for-Educ-e1545010754643.png'
                                    },
                                    {
                                        link: 'https://www.informatics-inculab.com/wp-content/uploads/2018/12/lcci.png'
                                    },
                                ],
                                testimonials: [
                                    {
                                        image: `https://www.informatics-inculab.com/wp-content/uploads/2018/12/Mark-Bernales.jpg`,
                                        message: `“I was looking for ways to graduate in a short span of time without compromising the quality of education and I think that’s how Informatics has helped me a lot.”`,
                                        person: `-Mark Bernales`
                                    },
                                    {
                                        image: `https://www.informatics-inculab.com/wp-content/uploads/2018/12/Norina-May.jpg`,
                                        message: `“Informatics made a big difference in my life.” Informatics did not fail her with her dream of working abroad through advanced approach of education.`,
                                        person: `-Dorina May Luna`
                                    },
                                    {
                                        image: `https://www.informatics-inculab.com/wp-content/uploads/2018/12/Jiovanney.jpg`,
                                        message: `“Informatics allowed me to grow professionally.” Informatics values every student and provide them the greatest services to make each one of them industry ready individuals.`,
                                        person: `-Jiovanney Emmanuel Bustamante`
                                    },
                                    {
                                        image: `https://www.informatics-inculab.com/wp-content/uploads/2018/12/Rupen.jpg`,
                                        message: `“Informatics is worldwide, students will definitely get jobs easily.” Informatics offered him a vast curriculum that allowed him to experience different subjects and broaden his horizons.`,
                                        person: `-Rupen Rajkarnikar`
                                    }
                                ],
                                reasons: [
                                    {
                                        icon: 'https://informatics.edu.ph/wp-content/themes/blankslate/assets/global.svg',
                                        why: 'Globally Recognized'
                                    },
                                    {
                                        icon: 'https://informatics.edu.ph/wp-content/themes/blankslate/assets/qualified.svg',
                                        why: 'International Qualified Graduates'
                                    },
                                    {
                                        icon: 'https://informatics.edu.ph/wp-content/themes/blankslate/assets/employment.svg',
                                        why: 'Guaranteed Employment'
                                    }
                                ]

                            }
                        },
                        mounted() {
                           
                        }
                    })
                })();
            </script>
