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
 * @package WP_Bootstrap_4
 */

get_header(); ?>
<div class="section-container-holder">
                <div class="section-container" style="overflow: hidden;">
                    <div class="overlay bg-grayscale" style="background-image: url('https://www.informatics-inculab.com/wp-content/uploads/2018/09/northgate.jpg');"></div>
                    <div class="content py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-center white text-uppercase my-3">Why Choose Informatics?</h1>
                                    <p class="text-center white my-5">Informatics values your dreams as much as we
                                        value quality education. Thus, putting you first by
                                        providing a well-rounded curriculum that leads to employability and
                                        sustainability is our utmost
                                        priority.</p>
                                </div>
                                <div class="col-6 col-sm-4 text-center offset-3 offset-sm-0" v-for="reason in reasons">
                                    <div class="px-3 py-2 mx-lg-5 px-sm-5">
                                        <img :src="reason.icon" alt="" class="img-fluid">
                                    </div>
                                    <p class="white">{{reason.why}}</p>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-informatics-blue no-border">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-container-holder">
                <div class="section-container">
                    <div class="content py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-uppercase text-center">What's Happening?</h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">


                                        <article class="col-md-4">
                                            <div class="post-entry" style="background-image:url('https://www.informatics-inculab.com/wp-content/uploads/2018/09/Article-3.jpg'); background-size: cover; background-position: top center;"></div>
                                            <div class="content-title">
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
                                                    <a href="https://www.informatics-inculab.com/2018/09/14/informatics-philippines-brings-home-medallion-of-excellence-from-world-skills-asean-competition/#more-173"
                                                        class="more-link">Read More</a></p>
                                            </div>

                                        </article>
                                        <article class="col-md-4">
                                            <div class="post-entry" style="background-image: url('https://www.informatics-inculab.com/wp-content/uploads/2018/09/Article-2.jpg'); background-size: cover; background-position: top center;"></div>
                                            <div class="content-title">
                                                <h4>Informatics Philippines’ seals new partnership with Philippine
                                                    Retirement Authority (PRA)</h4>
                                            </div>
                                            <div class="content-excerpt">
                                                <p>Informatics Philippines and Philippine Retirement Authority signed a
                                                    partnership<br>
                                                    agreement last September 13 that will provide new opportunities for
                                                    retirees.</p>
                                                <p> <a href="https://www.informatics-inculab.com/2018/09/14/informatics-philippines-seals-new-partnership-with-philippine-retirement-authority-pra/#more-167"
                                                        class="more-link">Read More</a></p>
                                            </div>

                                        </article>
                                        <article class="col-md-4">
                                            <div class="post-entry" style="background-image:url('https://www.informatics-inculab.com/wp-content/uploads/2018/09/Article-1.jpg'); background-size: cover; background-position: top center;"></div>
                                            <div class="content-title">
                                                <h4>Congressman Yul Servo partners with Informatics College – Manila
                                                    for educational programs within his district.</h4>
                                            </div>
                                            <div class="content-excerpt">
                                                <p>Informatics is more than ready to make innovators as it sealed a
                                                    deal with Congressman Yul Servo after the latter paid Informatics
                                                    College – Manila a visit last September 13 to discuss scholarship<br>
                                                    programs for Manilenos.<br>
                                                    <a href="https://www.informatics-inculab.com/2018/09/14/scholarship_with_info_manila/#more-164"
                                                        class="more-link">Read More</a></p>
                                            </div>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-container-holder">
                <div class="section-container">
                    <div class="content py-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-center text-uppercase">Testimonials</h1>
                                </div>
                                <div class="col-md-12">
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
            <div class="section-container-holder">
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
                    


                    new Vue({
                        el: '#page',
                        data() {
                            return {
                                partners: [
                                    {
                                        link: 'https://informatics.edu.ph/wp-content/uploads/2018/09/acpi.png'
                                    },
                                    {
                                        link: 'https://informatics.edu.ph/wp-content/uploads/2018/09/Comptia.png'
                                    },
                                    {
                                        link: 'https://informatics.edu.ph/wp-content/uploads/2018/09/cybersecurity.png'
                                    },
                                    {
                                        link: 'https://informatics.edu.ph/wp-content/uploads/2018/09/GDAP.png'
                                    },
                                    {
                                        link: 'https://informatics.edu.ph/wp-content/uploads/2018/09/Google-Apps-for-Educ.png'
                                    },
                                    {
                                        link: 'https://informatics.edu.ph/wp-content/uploads/2018/09/lcci.png'
                                    },
                                ],
                                testimonials: [
                                    {
                                        image: `https://informatics.edu.ph/wp-content/uploads/2018/09/Mark-Bernales.jpg`,
                                        message: `“I was looking for ways to graduate in a short span of time without compromising the quality of education and I think that’s how Informatics has helped me a lot.”`,
                                        person: `-Mark Bernales`
                                    },
                                    {
                                        image: `https://informatics.edu.ph/wp-content/uploads/2018/09/Norina-May.jpg`,
                                        message: `“Informatics made a big difference in my life.” Informatics did not fail her with her dream of working abroad through advanced approach of education.`,
                                        person: `-Dorina May Luna`
                                    },
                                    {
                                        image: `https://informatics.edu.ph/wp-content/uploads/2018/09/Jiovanney.jpg`,
                                        message: `“Informatics allowed me to grow professionally.” Informatics values every student and provide them the greatest services to make each one of them industry ready individuals.`,
                                        person: `-Jiovanney Emmanuel Bustamante`
                                    },
                                    {
                                        image: `https://informatics.edu.ph/wp-content/uploads/2018/09/Rupen.jpg`,
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
