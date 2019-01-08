<?php
/*
* Template Name: Branches
*/

get_header(); ?>

    <div id="branch-vue">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="my-title mt-5 mb-5">COLLEGES</h2>
                        </div>
                        <div class="col-md-12 border rounded-top mt-2" v-for="branch in branches">
                            <div class="row py-2 pl-2 bg-gray cursor-pointer" v-on:click="clicked(branch)">
                                <div class="col-md-11 col-10">
                                    {{branch.name}}
                                </div>
                                <div class="col-md-1 col-2 text-right">
                                     <i class="fa fa-caret-right" :class="[branch.isActive ? 'rotatedown' : 'rotateback']"></i>
                                </div>
                            </div>
<!-- 							isActive ? activeClass : ''
							dropbranch -->
							<div class="beforedrop" :class="[branch.isActive ? 'dropbranch' : 'upbranch']">
								<div class="col-md-12 py-2 px-0">
									<div class="container">
										<div class="row">
											<div class="col-md-6 pt-90">
												<div :id="'branch-car-'+branch.id" class="carousel slide" data-ride="carousel">
												  <ol class="carousel-indicators">
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="0" class="active"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="1"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="2"></li>
												  </ol>
												  <div class="carousel-inner">
													<div v-for="slider in branch.sliderlinks" class="carousel-item" :class="{active: slider.isActive}">
													  <img class="d-block w-100 branch-slider-img" :src="slider.link" alt="First slide">
													</div>
												  </div>
												  <a class="carousel-control-prev" :href="'#branch-car-'+branch.id" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												  </a>
												  <a class="carousel-control-next" :href="'#branch-car-'+branch.id" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												  </a>
												</div>
											</div>
											<div class="col-md-6">
												<h4 class="mt-3">
													{{branch.name}}
												</h4>
												<div class="col-md-12 mt-3">
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-map-marker" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchaddress}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-phone" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchnumber}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-envelope" aria-hidden="true"></i> 
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchemail}}</p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<h5 class="my-3">Programs</h5>
													<div class="col-md-12 p-0">
														<div v-for="program in branch.programs">
                                                            <h6 class="font-weight-bold">
                                                                {{program.name}}
                                                            </h6>
                                                            <ul style="list-style: none; padding-left: 20px;">
                                                                <li v-for="course in program.courses"><a href="">{{course.name}}</a></li>
                                                            </ul>
                                                        </div>
													</div>
												</div>
												<div class="col-md-12 mt-3">
													<div class="row flex-column flex-md-row">
														<button class="btn btn-primary ml-md-3" type="submit">Download Application Form</button>
														<span class="align-middle py-2 mx-2 text-center">or</span>
														<button class="btn btn-primary" type="submit">Apply Online</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <h2 class="my-title mt-5 mb-5">INSTITUTES</h2>
                        </div>
                        <div class="col-md-12 border rounded-top mt-2" v-for="branch in institutes">
                            <div class="row py-2 pl-2 bg-gray cursor-pointer" v-on:click="clicked(branch)">
                                <div class="col-md-11 col-10">
                                    {{branch.name}}
                                </div>
                                <div class="col-md-1 col-2 text-right">
                                     <i class="fa fa-caret-right" :class="[branch.isActive ? 'rotatedown' : 'rotateback']"></i>
                                </div>
                            </div>
<!-- 							isActive ? activeClass : ''
							dropbranch -->
							<div class="beforedrop" :class="[branch.isActive ? 'dropbranch' : 'upbranch']">
								<div class="col-md-12 py-2 px-0">
									<div class="container">
										<div class="row">
											<div class="col-md-6 pt-90">
												<div :id="'branch-car-'+branch.id" class="carousel slide" data-ride="carousel">
												  <ol class="carousel-indicators">
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="0" class="active"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="1"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="2"></li>
												  </ol>
												  <div class="carousel-inner">
													<div v-for="slider in branch.sliderlinks" class="carousel-item" :class="{active: slider.isActive}">
													  <img class="d-block w-100 branch-slider-img" :src="slider.link" alt="First slide">
													</div>
												  </div>
												  <a class="carousel-control-prev" :href="'#branch-car-'+branch.id" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												  </a>
												  <a class="carousel-control-next" :href="'#branch-car-'+branch.id" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												  </a>
												</div>
											</div>
											<div class="col-md-6">
												<h4 class="mt-3">
													{{branch.name}}
												</h4>
												<div class="col-md-12 mt-3">
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-map-marker" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchaddress}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-phone" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchnumber}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-envelope" aria-hidden="true"></i> 
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchemail}}</p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<h5 class="my-3">Programs</h5>
													<div class="col-md-12 p-0">
														<div v-for="program in branch.programs">
                                                            <h6 class="font-weight-bold">
                                                                {{program.name}}
                                                            </h6>
                                                            <ul style="list-style: none; padding-left: 20px;">
                                                                <li v-for="course in program.courses"><a href="">{{course.name}}</a></li>
                                                            </ul>
                                                        </div>
													</div>
												</div>
												<div class="col-md-12 mt-3">
													<div class="row flex-column flex-md-row">
														<button class="btn btn-primary ml-md-3" type="submit">Download Application Form</button>
														<span class="align-middle py-2 mx-2 text-center">or</span>
														<button class="btn btn-primary" type="submit">Apply Online</button>
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
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
<script>
	(function(){
		new Vue({
			el:'#branch-vue',
			data(){
				return {
					branches:[
						{
							id:1,
							name:'Caloocan',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'380 Rizal Avenue Extension Corner 11th Avenue Grace Park, Metro Manila',
							branchnumber:'363-5178',
							branchemail:'info.caloocan@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology'
                                        },
                                        {
                                            name:'Bachelor of Science in Computer Science'
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration'
                                        }
                                    ]
                                }
								
							]
						},
						{
							id:2,
							name:'Cebu',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/cebu.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/cebu.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/cebu.jpg',
								isActive: false}
							],
							branchaddress:'C.L. Benedicto Bldg. J. De Vera Street Cebu City',
							branchnumber:'(032) 231-0380 / 419-1301',
							branchemail:'info.cebu@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Computer Science'
                                        },
                                        {
                                            name:'Bachelor of Science in Entrepreneurship'
                                        },
                                        {
                                            name:'Bachelor of Science in Information Systems'
                                        }
                                    ]
                                }
								
							]
						},
						{
							id:3,
							name:'EastWood',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/eastwood.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/eastwood.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/eastwood.jpg',
								isActive: false}
							],
							branchaddress:'185 E. Rodriguez Jr. Avenue (C5), Acropolis, Bgy. Bagumbayan, Quezon City',
							branchnumber:'(02) 667- 3093 to 95',
							branchemail:'info.eastwood@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology'
                                        },
                                        {
                                            name:'Bachelor of Science in Computer Science'
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration'
                                        },
										{
                                            name:'Bachelor of Science in Information Systems'
                                        }
                                    ]
                                }
							]
						},
						{
							id:4,
							name:'Cavite',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/cavite.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/cavite.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/cavite.jpg',
								isActive: false}
							],
							branchaddress:'Informatics Bldg. E. Aguinaldo Highway, Tanzang Luma V, Imus City, Cavite',
							branchnumber:'474-0389, 471-2310',
							branchemail:'info.cavite@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Accounting Information Systems'
                                        },
                                        {
                                            name:'Bachelor of Science in Management Accounting'
                                        },
                                        {
                                            name:'Bachelor of Science in Office Administration'
                                        }
                                    ]
                                },
								{
                                    name:'Diploma Programs',
                                    courses:[
                                        {
                                            name:'Diploma in Information Technology'
                                        },
                                        {
                                            name:'Diploma in Gaming and Animation'
                                        }
                                    ]
                                }
							]
						},
						{
							id:5,
							name:'Manila',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'2070 BDO Bldg. Recto Ave Quiapo, Manila',
							branchnumber:'(02) 488-3033-34 / (02) 488-3358',
							branchemail:'info.manila@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology'
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration'
                                        }
                                    ]
                                }
							]
						},
						{
							id:6,
							name:'Northgate',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'Indo China Drive, Northgate Cyberzone Filinvest Corporate City, Alabang Muntinlupa City, Metro Manila',
							branchnumber:'772-2474 / 772-3082 / 772-2476',
							branchemail:'info.northgate@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology'
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration'
                                        },
                                        {
                                            name:'Bachelor of Science in Computer Science'
                                        }
                                    ]
                                }
							]
						}
					],
					institutes:[
						{
							id:7,
							name:'Baguio',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/baguio.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/baguio.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2019/01/baguio.jpg',
								isActive: false}
							],
							branchaddress:'3/F Decibar Bldg., #65 Lower Bonifacio St., Baguio City',
							branchnumber:'(074) 442-3313',
							branchemail:'info.baguio@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)'
										}
                                    ]
                                },
								{
                                    name:'Diploma Programs',
                                    courses:[
                                        {
                                            name:'Diploma in Information Technology'
                                        },
                                        {
                                            name:'Computer Programming NC III'
                                        },
                                        {
                                            name:'Computer System Servicing NC II'
                                        },
                                        {
                                            name:'Visual Graphics Design NC III'
                                        },
                                        {
                                            name:'Web Development'
                                        },
										{
											name:'Web Design'
										}
                                    ]
                                }
								
							]
						},
						{
							id:8,
							name:'Cagayan De Oro',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'2nd level, Stary Bldg. Max Suniel St., Carmen, Cagayan De Oro',
							branchnumber:'323-2914',
							branchemail:'info.cdo@informatics.com.ph',
							programs:[
								{
                                    name:'Diploma Programs',
                                    courses:[
                                        {
                                            name:'Diploma in Computer Studies (Computer Science)'
										},
										 {
                                            name:'Diploma in Computer Studies (Multimedia and Internet)'
										},
										 {
                                            name:'Diploma Animation NC III'
										},
										 {
                                            name:'Diploma Contact Center Services NC II'
										},
										 {
                                            name:'Computer System Servicing NC II'
										}
                                    ]
                                },
								{
                                    name:'Certification Programs',
                                    courses:[
                                        {
                                            name:'Programmer Certification'
                                        },
                                        {
                                            name:'Multimedia Artist Certification'
                                        },
                                        {
                                            name:'Web Application Developer Certification'
                                        },
                                        {
                                            name:'Game Developer Certification'
                                        }
                                    ]
                                }
							]
						},
						{
							id:9,
							name:'Consolacion',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'MGM Building, North Road Consolacion 6001 Cebu',
							branchnumber:'564-2078, 564-3559',
							branchemail:'info.consolacion@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communication and Technology (ICT)'
										},
										 {
                                            name:'Accounting and Business Management Strand (ABM)'
										}
                                    ]
                                }
							]
						},
						{
							id:10,
							name:'Megamall',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'Level 5, Building A Baranggay, Wack Wack Mandaluyong City, Philippines 1550',
							branchnumber:'(02) 635-3608 / (02) 635-3615',
							branchemail:'info.megamall@informatics.com.ph',
							programs:[
								{
                                    
                                            name:'Corporate Learning Courses'
										},
										 {
                                            name:'Short Courses'
										
                                }
							]
						},
						{
							id:11,
							name:'Makati',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'Solaris One, 130 Dela Rosa St. Cor., Esteban St. Legaspi Village Upper Ground, Legazpi Village, Makati, 1229 Metro Manila',
							branchnumber:'(02) 635-3608 / (02) 635-3615',
							branchemail:'info.makati@informatics.com.ph',
							programs:[
								{
                                    
                                            name:'Corporate Learning Courses'
										},
										 {
                                            name:'Short Courses'
										
                                }
							]
						},
						{
							id:12,
							name:'Festival Alabang',
							isActive:false,
							sliderlinks:[
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: true},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false},
								{link:'http://dev.info-website.com/wp-content/uploads/2018/09/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'4th Level Festival Supermall, Filinvest Corporate City Alabang, Muntinlupa City',
							branchnumber:'02 771-0401',
							branchemail:'informaticsalabang@gmail.com',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                           
													name:'Information Communications and Technology Strand (ICT)'
												},
												{
													name:'Accounting and Business Management Strand (ABM)'
												
										}
                                    ]
                                },
								{
                                         name:'Corporate Learning Courses'
									},
								{
                                       name:'Short Courses'
								}
							]
						}
					]
				}
			},
			methods:{
				clicked(branch){
					this.unclicked(branch)
					branch.isActive = !branch.isActive
				},
				unclicked(bran){
					this.branches.forEach(branch=>{
						if(branch!=bran){
							branch.isActive = false;
						}
					})
					this.institutes.forEach(branch=>{
						if(branch!=bran){
							branch.isActive = false;
						}
					})
				}

		    }
		})
	})();
</script>
<?php
get_footer();
