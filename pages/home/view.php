<section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                    <h1 class="home-title">HI! I'm <span>Muhammad Farid H</span></h1>
                    <h2 class="home-subtitle">Web Developer & Database Analyst from Ponorogo,Jawa Timur</h2>
                    <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-4">
              <div class="person-about">
              <?php
              	$query=mysqli_query($mysqli,"SELECT * FROM is_about WHERE about_id=1");
              	while($data=mysqli_fetch_assoc($query)){
              		?>


                <h3 class="about-subtitle"><?php echo $data['title'];?></h3>

                <p><?php echo $data['content']; ?></p>

                <?php
              	}
                ?>
                <?php
                $query=mysqli_query($mysqli,"SELECT * FROM is_materi WHERE materi_id=9");
                while($data=mysqli_fetch_assoc($query)){
                  ?>

                <a class="waves-effect waves-light btn-large brand-bg white-text" href="materi/<?php echo $data['nama_file']; ?>" download><i class="mdi-content-archive left"></i> Download Resume</a>
                <?php } ?>
              </div>
            </div>
            <!-- about me description -->
            <?php
              	$query=mysqli_query($mysqli,"SELECT * FROM is_user WHERE user_id=6");
              	while($data=mysqli_fetch_assoc($query)){
              		?>

            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="images/user/<?php echo $data['avatar']; ?>" alt="">
              </div>
            </div>
            <!-- about me image -->

            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Personal Information</h3>

                <h5><span>Name :</span><?php echo $data['fullname']; ?></h5>
                <h5><span>Age :</span> <?php echo $data['age']; ?> Years</h5>
                <h5><span>Phone :</span><?php echo $data['phone']; ?></h5>
                <h5><span>Email :</span><?php echo $data['email']; ?></h5>
                <h5><span>Address :</span><?php echo $data['address']; ?></h5>
              </div>

              <div class="about-social">
                <ul>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                   </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <?php
        	}
            ?>
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
      <section id="skill" class="root-sec white skill-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="clearfix skill-inner">
              <div class="col-sm-12 col-md-3">
                <div class="skill-left">
                  <h2 class="title">Skills</h2>
                  <p class="regular-text">Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.</p>
                </div>
              </div>

              <!-- skills container -->
              <div class="col-sm-12 col-md-6 col-md-offset-1">
                <div class="skill-right">
                  <div id="skillSlider" class="clearfix skill-graph">

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">PHP</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="60%">
                            <div class="skill-visiable">
                              <span class="skill-title">JavaScript</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">60%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">Database</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">HTML</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="70%">
                            <div class="skill-visiable">
                              <span class="skill-title">CSS</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">70%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    
                    <!-- /single skill-->

                    <!-- single skill -->
                    
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="90%">
                            <div class="skill-visiable">
                              <span class="skill-title">Wordpress</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">90%</span>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- /skills container -->
            </div>
          </div>
          <div class="btn-wrapp skl-ctrl">
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
          </div>
        </div>
      </div>
        <!-- .container end -->
      </section>

      <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
          <div class="row">
            <div class="experience-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head experience-text">
                    <div class="col-sm-12">
                      <h2 class="title">Experience</h2>
                      <p class="regular-text"></p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" 			data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">November 2015 - Current</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" height="70px" src="images/logo2.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Web Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Pradesga Indonesia</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Web Developer<i class="mdi-navigation-close right"></i></span>
                                  <p>Pradesga Indonesia</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">January 2017 - Current</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/logo1.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Web Developer & Database Analyst<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Bappeda Ponorogo</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Web Developer & Database Analyst<i class="mdi-navigation-close right"></i></span>
                                  <p>Bappeda Ponorogo</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp exp-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
        <div class="container">
          <div class="row">
            <div class="education-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head education-text">
                    <div class="col-sm-12">
                      <h2 class="title">Education</h2>
                      <p class="regular-text"></p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="educationSlider" class="clearfix card-element-wrapper">

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2004 - 2010</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/grad-cap.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Elementary School<i class="mdi-navigation-more-vert right"></i></span>
                                <p>SDN 1 Sawoo</p>
                              </div>
                              <!-- Reveal content-->
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Elementary School<i class="mdi-navigation-close right"></i></span>
                                  <p>SDN 1 Sawoo</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education end -->

                          <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2010 - 2013</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/grad-cap.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Junior High School<i class="mdi-navigation-more-vert right"></i></span>
                                <p>SMPN 1 Sawoo</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Junior High School<i class="mdi-navigation-close right"></i></span>
                                  <p>SMPN 1 Sawoo</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2013 - 2016</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/grad-cap.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Senior High School<i class="mdi-navigation-more-vert right"></i></span>
                                <p>SMK TI Global Ponorogo</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Senior High School<i class="mdi-navigation-close right"></i></span>
                                  <p>SMK TI Global Ponorogo</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                     
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp edu-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="title">PORTFOLIO</h2>
                
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
      </div>
      <div id="portfolioModal" class="modal white">
        <div class="model-img"></div>
        <div class="modal-content">
          
        </div>

        <div class="modal-footer">
          <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">Close</a>
        </div>
      </div>

      <div class="portfolio-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="clearfix protfolio-item" id="protfolio-msnry">
              
              <!-- Single Portfolio-->
             
                <!--/ single portfolio -->
				<?php
              	$query=mysqli_query($mysqli,"SELECT * FROM is_portfolio LIMIT 9");
              	while($data=mysqli_fetch_assoc($query)){
              		?>
                <!-- Single Portfolio-->
                <li class="single-port-item category-1 category-3 category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="images/portfolio/<?php echo $data['image']; ?>" data-title="<?php echo $data['title']; ?>"  data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="images/portfolio/<?php echo $data['image']; ?>" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title"><?php echo $data['title']; ?></h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <?php
            }
                ?>
               

              </ul>
              <!-- portfolio load more button-->
                     </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
      <div class="container">
        <div class="row">
          <div class="blog-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head blog-text">
                  <div class="col-sm-10">
                    <h2 class="title">Blog</h2>
                    <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
                  </div>
                </div>

                
                <div class="clearfix card-element-wrapper" id="blog-posts">
                <?php 
                $query=mysqli_query($mysqli,"SELECT * FROM is_article a ,is_category_article b WHERE a.is_category_article_id=b.category_article_id  LIMIT 9");
                while($data=mysqli_fetch_assoc($query)){
                  ?>

                ?>
                  <article class="col-sm-6 col-md-4 single-card-box single-post">
                    <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                      <div class="card-image">
                        <div class="card-img-wrap">
                          <div class="blog-post-thumb waves-effect waves-block waves-light">
                            <a href="blog-single-<?php echo $data['article_id']; ?>"><img class="activator" src="images/article/<?php echo $data['file_image']; ?>" alt="">
                            </a>
                          </div>
                          <div class="post-body">
                            <a href="blog-single-<?php echo $data['article_id']; ?>" class="post-title-link brand-text"><h2 class="post-title"><?php echo $data['judul']; ?></h2></a>
                            
                            <?php
                            echo "<p class='post-content'>".substr($data['isi'],0,300).'</p>';
                             ?>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix card-content">
                        <a href="#" class="left js-favorite" title="Love this"><i class="fa fa-tags"></i><span class="numb"><?php echo $data['name']; ?></span></a>
                        <a href="blog-single-<?php echo $data['article_id']; ?>" class="brand-text right waves-effect">Read More</a>
                      </div>
                    </div>
                  </article> 
                  <?php } ?>
                </div>
                <div class="clearfix left-align">
                  <div class="col-sm-12">
                    <a href="blog" class="waves-effect waves-light btn-large load-more">See More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container -->
    </section>

    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contact</h2>
                    
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Map Start -->
                   <!-- Map end -->

                <!-- Contact Form start -->
                  <div class="col-sm-12">
                             
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                      <form id="contactForm" novalidate>
                        <div class="input-field">
                          <input id="name" type="text" name="name" class="validate input-box">
                          <label for="contact_name" class="input-label">Name</label>
                        </div>
                        <div class="input-field">
                          <input id="email" type="email" name="email" class="validate input-box">
                          <label for="email" class="input-label">Email</label>
                        </div>
                        
                        <div class="input-field textarea-input">
                          <textarea id="textarea1" name="message" class="validate materialize-textarea" style="height: 22px;"></textarea>
                          <label for="textarea1" class="input-label">Message</label>
                        </div>
                        <div class="input-field submit-wrap clearfix">
                          <button type="submit" name="send" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                          <div class="right form-loader-area">
                            <svg class="circular size-20" height="20" width="20">
                              <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                            </svg>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    