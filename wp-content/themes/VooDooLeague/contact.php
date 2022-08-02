<?php 
    
    /*
        TEMPLATE NAME: Contact
    */
    
    get_header();
?>
    
    <header class="main_menu single_page_menu menu_fixed animated faceInDown">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <?php get_template_part('nav'); ?>
                </div>
            </div>
        </div>
    </header>
    
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact-section section_padding">
      
      <div class="container">
        
        <div class="typography">
          <h2>Our shop</h2>
        </div>
        
        <div class="row">
          <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2960.1483334938957!2d-89.98271168455177!3d42.10429387920485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880827bd8aadcc99%3A0x7b53a66c8f07627d!2s8%20W%20State%20St%20%2338%2C%20Mt%20Carroll%2C%20IL%2061053%2C%20EE.%20UU.!5e0!3m2!1ses!2ses!4v1645791686285!5m2!1ses!2ses" width="1110" height="458" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        
        <br/><br/><br/>
        
        <div class="row">
          
          <div class="col-12">
            <div class="typography">
              <h2>Get in Touch</h2>
            </div>
          </div>
          
          <div class="col-lg-8">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                      onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                      placeholder='Enter Message'></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="button-contactForm btn_1">Send Message </button>
              </div>
            </form>
          </div>
      
          <div class="col-lg-4">
            <div class="typography">
              <h2>Contact</h2>
            </div>
            <br/>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="dashicons dashicons-admin-home"></i></span>
              <div class="media-body">
                <h3>8 State Route 38 Mount Carroll,il, 61053 United States</h3>
                <p>Visit our offices</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="dashicons dashicons-smartphone"></i></span>
              <div class="media-body">
                <h3>(415)523-0057</h3>
                <p>Our contact phone</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="dashicons dashicons-email"></i></span>
              <div class="media-body">
                <h3>contact@voodooleague.com</h3>
                <p>Write us if you need help!</p>
              </div>
            </div>
          </div>
      
        </div>
    
      </div>
    
    </section>
    
<?php
    get_footer();
?>