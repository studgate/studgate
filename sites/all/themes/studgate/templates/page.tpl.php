

    <section id="top_bar" class="top_bar">
       <div class="container">

         <div class="row">
            <div class="col-sm-6">
               <ul>
                  <li> <i class="fa fa-envelope-o"></i> <a href="">info@americanhomeenergypartners.com</a></li>
                  <li><i class="fa fa-mobile"></i> <a href="tel:6171234567">617.123.4567</a></li>
               </ul>
            </div>
            <div class="col-sm-6">
               <ul class="list-inline list-social">
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-google-plus">
                 <a href="#"><i class="fa fa-search"></i></a>
                </li>
            </ul>
            </div>
         </div>
      </div>
    </section>

    <section id="company_logo" class="company_logo">
      <div class="container">
         <div class="row">
            <h1 class="logo"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
         </div>
      </div>
    </section>


    <div class="container">
        <nav class="navbar nav navbar-default">
          <div class="navbar-header">
             <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <?php endif; ?>
          </div>

          <div class="collapse navbar-collapse js-navbar-collapse">
             <?php print render($page['header']); ?>
          </div>
          <!-- /.nav-collapse -->
        </nav>
    </div>

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

    <!-- <section id="blog" class="blog">
      <div class="container">
         <div class="row">
            <?php //print render($page['blog_featured']); ?>
         </div>
      </div>
   </section> -->

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <a href="<?php print $front_page; ?>"><img src="<?php print base_path() . path_to_theme() ?>/assets/img/footer_company_logo.png"></a>
                  <?php print render($page['footertop_first']); ?>
               </div>
               <div class="col-md-3">
                  <h3>Our Company</h3>
                  <?php print render($page['footertop_middle']); ?>
               </div>
               <div class="col-md-3">
                  <h3>Products &amp; Technologies</h3>
                  <?php print render($page['footertop_last']); ?>
               </div>
               <div class="col-md-3">
                  <h3>Newsletter Signup</h3>
                  <p>Need more info? Then signup to receive industry insights and product launches, delivered direct to your inbox.</p>
                  <?php print render($page['newsletter']); ?>

                  <!-- <form>
                     <div class="input-group">
                       <input type="text" class="form-control" placeholder="Enter your email address">
                       <span class="input-group-btn">
                         <button class="btn btn-default" type="button">Subscribe</button>
                       </span>
                     </div>
                  </form> -->
               </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
           <div class="row">
             <div class="col-md-6">
               <p>&copy; <?php print date('Y'); ?> American Energy. All Rights Reserved.</p>
            </div>
            <div class="col-md-6">
               <?php print render($page['footer_secondcolumn']); ?>
            </div>
         </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php print base_path() . path_to_theme() ?>/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php print base_path() . path_to_theme() ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php print base_path() . path_to_theme() ?>/assets/js/ahep.js"></script>
    <script type="text/javascript">
      jQuery(document).on('click', '.mega-dropdown', function(e) {
         e.stopPropagation()
      })
    </script>
