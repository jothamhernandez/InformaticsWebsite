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
                    <div class="overlay bg-grayscale bg-northgate"></div>
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
                                <div class="col-md-4 text-center reasons" v-for="reason in reasons">
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
            <div class="section-container-holder" id="whats-happening">
                <div class="section-container">
                    <div class="content py-5">
                        <div class="container-fluid" style="width:82%">
                            <div class="row">
                                <div class="col-md-12 text-center text-md-left">
                                    <h1 class="text-uppercase">What's Happening?</h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">


                                        <article class="col-md-4 mt-5 mt-md-3 px-5">
                                            <div class="post-entry" >
                                                <!-- <img class="img-fluid" alt="ASEAN Competition" src="https://www.informatics-inculab.com/wp-content/uploads/2018/12/Article-3.jpg"> -->
                                            <picture class="d-block w-100 img-fluid" >
                                                <source srcset="https://www.informatics-inculab.com/wp-content/uploads/2019/01/Article-3-e1546480819728.jpg">
                                                <img class="d-block w-100 img-fluid" src="https://www.informatics-inculab.com/wp-content/uploads/2019/01/Article-3-e1546480819728.jpg" alt="First Slide">
                                            </picture>
                                            </div>
                                            <div class="content-title mt-3">
                                                <h4>Informatics Philippines brings home Medallion of Excellence from
                                                    World Skills ASEAN Competition</h4>
                                            </div>
                                            <div class="content-excerpt">
                                                <p>Informatics Student Patrick Niel Noceja, together with his mentor
                                                    and Informatics IT<br>
                                                    Specialist Jotham Hernandez, bags Medallion of Excellence after
                                                    representing the country in the World<br>
                                                    Skills ASEAN Competition held in Bangkok, Thailand which concluded
                                                    last September 4, 2018.<br>
                                                    </p>
                                                    <div class="col-12 text-right ">
                                                         <a href="https://www.informatics-inculab.com/2018/09/14/informatics-philippines-brings-home-medallion-of-excellence-from-world-skills-asean-competition/#more-173"
                                                        class="more-link">Read More</a>
                                                    </div>
                                            </div>

                                        </article>
                                        <article class="col-md-4 mt-5 mt-md-3 px-5">
                                            <div class="post-entry">
                                            <picture class="d-block w-100 img-fluid" >
                                                <source srcset="https://www.informatics-inculab.com/wp-content/uploads/2019/01/Article-2-e1546480895882.jpg">
                                                <img class="d-block w-100 img-fluid" src="https://www.informatics-inculab.com/wp-content/uploads/2019/01/Article-2-e1546480895882.jpg" alt="First Slide">
                                            </picture>
                                            </div>
                                            <div class="content-title mt-3">
                                                <h4>Informatics Philippines’ seals new partnership with Philippine
                                                    Retirement Authority (PRA)</h4>
                                            </div>
                                            <div class="content-excerpt">
                                                <p>Informatics Philippines and Philippine Retirement Authority signed a
                                                    partnership<br>
                                                    agreement last September 13 that will provide new opportunities for
                                                    retirees.</p>
                                                    <div class="col-12 text-right">
                                                         <a href="https://www.informatics-inculab.com/2018/09/14/informatics-philippines-seals-new-partnership-with-philippine-retirement-authority-pra/#more-167"
                                                        class="more-link">Read More</a>
                                                     </div>
                                            </div>

                                        </article>
                                        <article class="col-md-4 mt-5 mt-md-3 px-5">
                                        <div class="post-entry">
                                            <!-- <img class="img-fluid" alt="ASEAN Competition" src="https://www.informatics-inculab.com/wp-content/uploads/2018/12/Article-1-e1545179122199.jpg"> -->
                                            <picture class="d-block w-100 img-fluid" >
                                                <source srcset="https://www.informatics-inculab.com/wp-content/uploads/2019/01/Article-1-e1546481401772.jpg">
                                                <img class="d-block w-100 img-fluid" src="https://www.informatics-inculab.com/wp-content/uploads/2019/01/Article-1-e1546481401772.jpg" alt="First Slide">
                                            </picture>
                                        </div>
                                            <div class="content-title mt-3">
                                                <h4>Congressman Yul Servo partners with Informatics College – Manila
                                                    for educational programs within his district.</h4>
                                            </div>
                                            <div class="content-excerpt">
                                                <p>Informatics is more than ready to make innovators as it sealed a
                                                    deal with Congressman Yul Servo after the latter paid Informatics
                                                    College – Manila a visit last September 13 to discuss scholarship<br>
                                                    programs for Manilenos.<br>
                                                
                                                    </p>
                                                    <div class="col-12 text-right">
                                                        <a href="https://www.informatics-inculab.com/2018/09/14/scholarship_with_info_manila/#more-164"
                                                        class="more-link">Read More</a>
                                                    </div>
                                            </div>

                                        </article>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5 text-center">
                                    
                                    <a href="<?php echo get_site_url();?>/whats-happening-v2">
                                        <button class="btn btn-informatics-blue no-border font-source-sans">See More</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-container-holder up-anim">
                <div class="section-container bg-white">
                    <div class="content py-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-center text-uppercase">Testimonials</h1>
                                </div>
                                <div class="col-md-12" style="overflow:hidden;">
                                    <div class="d-sm-flex flex-wrap">
                                        <div class="testimonial-container-parent col-sm-6 col-md-6 col-lg-3 p-5" v-for="testimonial in testimonials">
                                        <div class="testimonial-container">
                                            <!-- <div class="testimonial-container" :style="{'background-image': 'url('+testimonial.image+')'}"> -->
                                                <div class="img-circle-container" :style="{'background-image': 'url('+testimonial.image+')'}"></div>
                                                <div class="py-md-3 px-md-5 text-center d-flex justify-content-center align-items-center">
                                                    <div>
                                                        <p>
                                                            {{testimonial.message}}
                                                        </p>
                                                        <p class="text-right font-italic">{{testimonial.person}}</p>
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
                <div class="section-container bg-white">
                    <div class="content py-5">
                        <div class="container-fluid fluid-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-uppercase text-center">Industry Partners</h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="row d-flex align-items-center justify-content-start flex-nowrap">
                                        <div class="col-2 col-md-1">
                                             <div class="arrow-container-slider text-md-right">
                                                <i class='fas fa-chevron-left fa-chevron-2-right'></i>
                                            </div>
                                        </div>
                                        <div class="col-8 col-md-10">
                                             <informatics-slider :items="partners" slider-speed="5000"></informatics-slider>
                                        </div>
                                        <div class="col-2 col-md-1">
                                            <div class="arrow-container-slider">
                                                <i class='fas fa-chevron-right fa-chevron-2-right'></i>
                                            </div>
                                        </div>
                                    </div>
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
					
                    // $('.carousel').carousel({
                    //     interval: 30000
                    // })

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
                                        link: 'https://www.informatics-inculab.com/wp-content/uploads/2019/01/GDAP-e1546483628910.png'
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
