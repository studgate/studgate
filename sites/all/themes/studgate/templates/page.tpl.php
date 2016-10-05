

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">Studgate Inc.</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
               <li class="hidden">
                   <a href="#page-top"></a>
               </li>
               <li><a class="page-scroll" href="#mainNav">Home</a></li>
               <li><a class="page-scroll" href="#whoweare">About Us</a></li>
               <li><a class="page-scroll" href="#guaranteed">Services</a></li>
               <li><a class="page-scroll" href="#portfolio">Work</a></li>
               <li><a class="page-scroll" href="#clients">Partners</a></li>
               <li><a class="page-scroll" href="#contact">Contact</a></li>
               <li><a class="page-scroll btn btn-xl" title="Coming Soon!!" href="http://www.studgate.com/v1/?q=blog">Blog</a></li>
          </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

    <section id="company_logo" class="company_logo">
      <div class="container">
         <div class="row">
            <h1 class="logo"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
         </div>
      </div>
    </section>

    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <div class="inner_page_header">
        <div class="container">
            <h1><?php print $title; ?></h1>
        </div>
    </div>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div class="container">
      <div class="row">
          <?php if ($messages): ?>
            <div id="messages"><div class="section clearfix">
              <?php print $messages; ?>
            </div></div> <!-- /.section, /#messages -->
          <?php endif; ?>

          <?php if ($tabs): ?>
           <div class="tabs">
              <?php print render($tabs); ?>
           </div>
          <?php endif; ?>

          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
           <ul class="action-links">
              <?php print render($action_links); ?>
           </ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
       </div>
    </div>
    
    <!-- Contact Section -->
   <section id="contact">
      <div class="container">

           <!-- contact info section -->
           <div class="row text-center">
               <div class="col-md-3">
                   <span class="fa-stack fa-4x">
                       <i class="fa fa-circle fa-stack-2x text-primary"></i>
                       <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                   </span>
                   <h4 class="service-heading">Location</h4>
                   <h6>We're based in Boston but we are in NY, LA &amp; Hong Kong</h6>
               </div>
               <div class="col-md-3">
                   <span class="fa-stack fa-4x">
                       <i class="fa fa-circle fa-stack-2x text-primary"></i>
                       <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                   </span>
                   <h4 class="service-heading">Phone</h4>
                   <h6>Have a question? Call us now </h6>
                   <h5> <a href="tel:6173956842">617.395.6842</a></h5>
               </div>
               <div class="col-md-3">
                   <span class="fa-stack fa-4x">
                       <i class="fa fa-circle fa-stack-2x text-primary"></i>
                       <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                   </span>
                   <h4 class="service-heading">E-Mail</h4>
                   <h6>Drop Us and Email! </h6>
                   <h5><a href="info@studgate.com">info@studgate.com</a></h5>
               </div>
               <div class="col-md-3">
                   <span class="fa-stack fa-4x">
                       <i class="fa fa-circle fa-stack-2x text-primary"></i>
                       <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                   </span>
                   <h4 class="service-heading">Working Hours</h4>
                   <h6>We are open </h6>
                   <h5> Mon - Fri: 8am - 6pm</h5>
               </div>
           </div>

           <div class="row border">
              <div class="col-lg-4">
                 <h2> Studgate Inc.</h2>
                 <p>We are a digital & marketing firm that specializes in the creation of full featured sites &amp; mobile apps.</p>

                 <p>We are dedicated, experienced, &amp; use the newest technologies available to provide our clients the best.</p>

                 <p class="social-buttons">
                    <a href="https://www.facebook.com/studgate" rel="external" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/studgate_inc" rel="external" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://github.com/studgateinc" rel="external" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="https://dribbble.com/studgate" rel="external" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="https://plus.google.com/+StudgateIncQuincy" rel="external" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                 </p>
              </div>

              <div class="col-lg-4">
                 <h2>Projects</h2>
                 <div class="row" id="portfolio">
                    <div class="col-md-6 col-sm-6 portfolio-item">
                        <a href="#portfoliofriendlishapp" class="portfolio-link" data-toggle="modal">
                           <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <span>View</span>
                                </div>
                           </div>
                           <img src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/friendlish_app.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                           <h4>Friendlish</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 portfolio-item">
                        <a href="#portfoliofindtalents" class="portfolio-link" data-toggle="modal">
                           <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <span>View</span>
                                </div>
                           </div>
                           <img src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/findtalents_app.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                           <h4>FindTalents</h4>
                        </div>
                    </div>
                 </div>
              </div>
               <div class="col-lg-4">
                  <h2>Newsletter</h2>
                  <p>Enter your email address to sign up for updates, win gifts, blog entries, new projects, etc.</p>
                  <?php print render($page['footer_newsletter']); ?>
                   <form name="signupMessage" id="signupForm" novalidate>
                        <div class="form-group">
                           <input type="email" class="form-control" placeholder="Enter your email address *" id="email" required data-validation-required-message="Please enter your email address.">
                           <p class="help-block text-danger"></p>
                        </div>

                        <div class="clearfix"></div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-xl">Subscribe</button>
                   </form>
               </div>
           </div>
      </div>
   </section>

   <footer>
      <div class="container">
           <div class="row">
               <div class="col-md-8">
                   <span class="copyright">&copy; <?php print gmdate( "Y" ); ?> Studgate Inc. All Rights reserved.</span>
               </div>

               <div class="col-md-4">
                   <!-- <ul class="list-inline quicklinks">
                       <li><a href="#">Privacy Policy</a>
                       </li>
                       <li><a href="#">Terms of Use</a>
                       </li>
                   </ul> -->
               </div>
           </div>
      </div>
   </footer>

   <!-- Portfolio Modals -->

   <!-- Portfolio Modal 1 -->
   <div class="portfolio-modal modal fade" id="portfoliofriendlishwebsite" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2>Friendlish Website </h2>
                              <p class="item-intro text-muted">The website for the Friendlish App</p>
                              <img class="img-responsive img-centered" src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/friendlish-big.png" alt="">
                              <p>The landing page website for the Friendlish App can be viewed at <a href="http://frienldish.com" rel="external">friendlish.com</a>. You can download the app <a href="https://itunes.apple.com/us/app/friendlish/id991231615?ls=1&mt=8">Download Friendlish</a>. The website is a simple responsive web design with some php and no backend. </p>

                              <ul class="list-inline">
                                   <li>Date: September 2015</li>
                                   <li>Client: Our Own</li>
                                   <li>Category: Web Design, PHP, Responsive Design</li>
                              </ul>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
   </div>

   <!-- Portfolio Modal 2 -->
   <div class="portfolio-modal modal fade" id="portfolioimi" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                              <h2>IMI Inc.</h2>
                              <p class="item-intro text-muted">IMI Inc. new Drupal website</p>
                              <img class="img-responsive img-centered" src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/imi-preview.png" alt="">
                              <p><a href="http://imipcb.com" rel="external">IMI Inc.</a> is the website for IMI upgraded using Drupal. The new website is backed by Drupal 8 & custom build from the ground up because Drupal 8 is not as stable as we want it to but we did.
                                  In addition with Drupal 8, we used, PSD+HTML+Bootstrap+responsive design which help keep the website consistent in desktop, tablet & mobile devices. </p>
                              <p>You can visit IMI <a href="http://imipcb.com" rel="external">here</a>.</p>

                              <ul class="list-inline">
                                   <li>Date: August 2016</li>
                                   <li>Client: IMI Inc.</li>
                                   <li>Category: Drupal 8, PHP, Bootstrap, PHP 5, Responsive Design</li>
                              </ul>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
   </div>

   <!-- Portfolio Modal 3 -->
   <div class="portfolio-modal modal fade" id="portfoliobelpower" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2>BelPower Solutions</h2>
                              <p class="item-intro text-muted">Custom site built on top Drupal</p>
                              <img class="img-responsive img-centered" src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/belpower-preview.png" alt="">
                              <p>BelPower Solutions was built for Power-One before they got acquired by <a href="http://belpowersolutions.com/" rel="external">BelPower</a>. The website was built extensively in Drupal with a lot of custom work.</p>
                              <p>This is a very advanced site which took 6 months to build & continued support after, visit <a href="http://belpowersolutions.com" rel="external">BelPower Solutions</a>.</p>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
   </div>

   <!-- Portfolio Modal 4 -->
   <div class="portfolio-modal modal fade" id="portfolioabb" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2>ABB</h2>
                              <p class="item-intro text-muted">Built in Drupal & converted to Sitefinity</p>
                              <img class="img-responsive img-centered" src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/abb-preview.png" alt="">
                              <p>ABB's power converters and inverters was built using Drupal and converted all features into <a href="http://www.sitefinity.com/" rel="external">sitefinity CMS</a>. You can visit the website here <a href="http://new.abb.com/power-converters-inverters/solar" rel="external">Power Converters/Inverters</a>.  </p>
                              <p>Our flexibility and skills allowed us to convert all the importand features from Drupal to an entire different content management system without losing any important feature.</p>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
   </div>

   <!-- Portfolio Modal 5 -->
   <div class="portfolio-modal modal fade" id="portfoliofriendlishapp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2>Friendlish App</h2>
                              <p class="item-intro text-muted">iPhone App built with Objective-C</p>
                              <img class="img-responsive img-centered" src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/friendlish_app-preview.png" alt="">
                              <p><a href="http://www.friendlish.com" rel="external">Friendlish</a> is about connecting with the people who matter to you the most. We will help you stay connected with friends from Facebook & Contacts. The app will allow you to import friends and help facilitate the ability to set custom events and different types of reminders (call, facebook message, email or text).</p>
                              <p>You can download the App here <a href="https://itunes.apple.com/us/app/friendlish/id991231615?ls=1&mt=8" rel="external">Friendlish App</a>.</p>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
   </div>

   <!-- Portfolio Modal 6 -->
   <div class="portfolio-modal modal fade" id="portfoliostudgate" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2>Studgate Site</h2>
                              <p class="item-intro text-muted">Our old website built in Drupal</p>
                              <img class="img-responsive img-centered" src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/studgate-preview.png" alt="">
                              <p>This is our old Drupal site built from the ground up using Drupal. We built the custom modules, social integration, multiple content types, client integration, forms, etc.</p>
                              <p>You can still access the old website at <a href="http://www.studgate.com/v1" rel="external">studgate.com</a>.</p>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
   </div>

   <!-- Portfolio Modal 7 -->
   <div class="portfolio-modal modal fade" id="portfoliofindtalents" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                              <!-- Project Details Go Here -->
                              <h2>Findtalents</h2>
                              <p class="item-intro text-muted">Our new app coming soon</p>
                              <img class="img-responsive img-centered" src="<?php print base_path() . path_to_theme() ?>/assets/images/portfolio/findtalents_app-preview.png" alt="">
                              <p>Findtalents is our next app, we're working very hard to release the app to the public and we're doing a lot of beta testing to improve functionality and fix bugs.</p>
                              <p>If you would like to participate in beta testing, visit <a href="http://www.findtalents.com" rel="external">findtalents.com</a> to sign up</p>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
   </div>

   <!-- guarantee info modal -->
   <div class="modal fade" id="ourGuaranteed" tabindex="-1" role="dialog"
        aria-labelledby="ourGuaranteed" aria-hidden="true">
      <div class="modal-dialog">
           <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                   <button type="button" class="close"
                      data-dismiss="modal">
                          <span aria-hidden="true">&times;</span>
                          <span class="sr-only">Close</span>
                   </button>
                   <h4 class="modal-title" id="ourGuaranteed">
                      Satisfaction Guaranteed!!
                   </h4>
               </div>

               <!-- Modal Body -->
               <div class="modal-body">
                  <div class="row">
                     <div class="col-xs-6">
                       <p>We do our best to complete your project in a timely manner & within budget. We won't give up or consider the project finished until you're completely
                          satisfied with the end result.</p>
                          <p class="alert alert-success small">Any idea you share with us is protected under client non-disclosure agreement (NDA). We will not share,
use or talk about your idea to anyone without your explicit permission.</p>
                    </div>
                     <div class="col-xs-6">
                        <p class="lead">All our <span class="text-success">Projects</span> include:</p>
                        <ul class="list-unstyled" style="line-height: 2">
                           <li><span class="fa fa-check text-success"></span> Documentation Manual in PDF</li>
                           <li><span class="fa fa-check text-success"></span> 3 Month Support </li>
                           <li><span class="fa fa-check text-success"></span> Responsive Design</li>
                           <li><span class="fa fa-check text-success"></span> Always stay within time frame</li>
                           <li><span class="fa fa-check text-success"></span> Project Management portal <small>(keep track)</small></li>
                        </ul>
                        <p><a href="" data-toggle="modal" data-target="#getStarted" data-whatever="Let's Get Started" class="btn btn-info btn-block">Let's Get Started</a></p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
   </div>

   <!-- Form Modal -->
     <div class="modal fade" id="getStarted" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <!-- Modal Header -->
                 <div class="modal-header">
                     <button type="button" class="close"
                        data-dismiss="modal">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                     </button>
                     <h4 class="modal-title" id="myModalLabel">
                        Let's Get Started
                     </h4>
                 </div>

                 <!-- Modal Body -->
                 <div class="modal-body">
                    <?php print render($page['lets_getstarted']); ?>
                    <form name="sentMessage" id="contactForm">
                   <div class="modal-body" style="padding: 5px;">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                             <p>Call Us at <a href="tel:6173956842">617.395.6842</a> or email us at <a href="mailto:info@studgate.com" rel="external">info@studgate.com</a> or <a href="mailto:ralph@studgate.com" rel="external">ralph@studgate.com</a> for faster response...</p>
                          </div>
                       </div>
                        <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   <label>First Name:</label>
                                   <input class="form-control" name="firstname" placeholder="First Name" type="text" required autofocus />
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                 <label>Last Name:</label>
                                   <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                              </div>
                          </div>

                          <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                 <label>Email:</label>
                                   <input class="form-control" name="email" placeholder=" ex: you@emailaddress.com" type="email" required />
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   <label>Phone:</label>
                                   <input id="phone#" name="phone#" placeholder=" ex: (xxx) xxx-xxxx" class="form-control input-md" required="" type="text">
                              </div>
                          </div>


                          <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <label>City:</label>
                                 <input id="city" name="city" placeholder="city of residence / company" class="form-control input-md" required="" type="text">
                              </div>

                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <label>Service:</label>
                                 <select id="service" name="service" class="form-control">
                                   <option value="Web Design">Web Design</option>
                                   <option value="Drupal">Drupal</option>
                                   <option value="Wordpress">Wordpress</option>
                                   <option value="Mobile App">Mobile App</option>
                                   <option value="*Other">*Other</option>
                                 </select>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                   <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required />
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                   <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="message" required></textarea>
                              </div>
                          </div>
                    </div>
                    <div class="panel-footer" style="margin-bottom:-14px;">
                       <input type="submit" class="btn btn-success" value="Send"/>
                           <!--<span class="glyphicon glyphicon-ok"></span>-->
                       <input type="reset" class="btn btn-danger" value="Clear" />
                           <!--<span class="glyphicon glyphicon-remove"></span>-->
                       <button style="float: right;" type="button" class="btn btn-primary btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                 </form>

                 </div>

                 <!-- Modal Footer -->
                 <div class="modal-footer">
                     All Fields required!!
                 </div>
             </div>
         </div>
     </div>

   <!-- jQuery -->
   <script src="<?php print base_path() . path_to_theme() ?>/assets/vendor/jquery/jquery.min.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="<?php print base_path() . path_to_theme() ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

   <!-- Plugin JavaScript -->
   <script src="<?php print base_path() . path_to_theme() ?>/assets/js/jquery.easing.min.js"></script>

   <!-- Contact Form JavaScript -->
   <script src="<?php print base_path() . path_to_theme() ?>/assets/js/jqBootstrapValidation.js"></script>
   <script src="<?php print base_path() . path_to_theme() ?>/assets/js/contact_me.js"></script>

   <!-- Theme JavaScript -->
   <script src="<?php print base_path() . path_to_theme() ?>/assets/js/studgate.js"></script>
   <script src="<?php print base_path() . path_to_theme() ?>/assets/js/site.js"></script>

   <script>
      $('#getStarted').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text(recipient)
        modal.find('.modal-body input#subject').val(recipient)
      })
   </script>
