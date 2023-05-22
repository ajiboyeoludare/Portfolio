<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Codesmogul -  Website Developer and Mobile App Developer in Nigeria</title>
        <meta name="description" content="Codesmogul Personal Portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
       	<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/swipper.css">
        <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <style>
    @media (max-width: 767px) {
        .portfolio_area {
            
            padding: 30px;
        }
        .container {
            padding: 30px;
            
        }
    }
</style>
    </head>
    <script>
        
$(document).ready(function() {
  $("#contactForm").submit(function(e) {
    e.preventDefault(); // Prevent form submission

    var $submitButton = $(this).find("button[type='submit']");
    $submitButton.html('<i class="fa fa-spinner fa-spin"></i> Sending...').prop('disabled', true); // Add spinner and disable button

    // AJAX form submission
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function(response) {
        // Hide spinner and show delivery status
        $submitButton.html('Send Message <i class="fal fa-long-arrow-right"></i>').prop('disabled', false);
        $("#statusMessage")
          .css("color", "green")
          .html(response)
          .addClass("text-center"); // Add CSS classes for center alignment
          // Clear the form
        $("#contactForm")[0].reset();
      },
      error: function() {
        // Hide spinner and show error message
        $submitButton.html('Send Message <i class="fal fa-long-arrow-right"></i>').prop('disabled', false);
        $("#statusMessage")
          .css("color", "red")
          .html("Sorry, there was an error sending your message.")
          .addClass("text-center"); // Add CSS classes for center alignment
      }
    });
  });
});

    </script>
    <body>

        <!-- header_area_start -->
        <header class="transparent_header header_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-md-2 col-6">
                        <div class="header_logo">
                            <a href=""><img src="assets/img/logo/logo121.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-md-7 d-none d-lg-block">
                        <div class="main_menu">
                            <nav id="mobile-menu" class="mobile_menu">
                                <ul>
                                    <li class="active"><a href="">Home</a>
                                        
                                    </li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#portfolio">Portfolio</a>
                                        
                                    </li>
                                   
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-10 col-6">
                        <div class="header_right">
                            <div class="header_button d-none d-md-block"><a href="#contact" class="header_btn i_right">Let's Talk<i class="fal fa-long-arrow-right"></i></a></div>
                            <div class="humberger_sign open-mobile-menu">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header_area_start -->

        <!-- Sidebar for Mobile -->
        <div class="fix d-lg-none">
            <div class="side-info">
                <div class="offset-widget offset-logo mb-30 pb-20">
                    <div class="row align-items-center">
                        <div class="col-8"><a href="" class="mobile_logo"><img src="assets/img/logo/logo121.png" alt="Logo"></a></div>
                        <div class="col-4 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button></div>
                    </div>
                    
                </div>

                <div class="mobile-menu fix"></div>

                <div class="contact-infos mt-50 mb-30">
                    <div class="contact-list mobile_contact mb-30">
                        <h4>Contact Info</h4>
                        <span class="sidebar-address"><i class="fal fa-map-marker-alt"></i><span>NO 20, Trem Junction Ojere Abeokuta</span> </span>

                        <a href="tel:+2348142418633"><i class="fal fa-phone"></i><span>+2348142418633</span></a>
                        <a href="mailto:info@codesmogul.com" class="theme-3"><i class="far fa-envelope"></i><span><span>info@codesmogul.com</span></span></a>   

                    </div>

                    <div class="top_social footer_social offset_social mt-20 mb-30">
                        <a href="https://facebook.com/ajiboye.oludare"  class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/@jib_oh"  class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#"  class="linkedin"><i class="fab fa-linkedin"></i></a>
                       
                    </div>
                </div>

            </div>
        </div>

        <!-- Sidebar for Laptop -->
        <div class="fix d-none d-lg-block">
            
            <div class="offset-sidebar side-info">

                <div class="offset-widget offset-logo mb-30 pb-20">
                    <div class="row align-items-center">
                        <div class="col-8"><a href=""><img src="assets/img/logo/logo121.png" alt="Logo"></a></div>
                        <div class="col-4 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button></div>
                    </div>
                    
                </div>

                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20 d-none">About Us</h4>
                        <p class="mb-30">Hello, My name is Ajiboye Oludare. I am a full-stack software developer with a B.TECH degree in Computer Science. With a passion for building innovative and efficient solutions, Ajiboye has honed his skills in various technologies web Technologies. With over 4 years of experience in the industry, i am dedicated to delivering high-quality work and exceeding client expectations. I have worked on a variety of projects, ranging from simple websites to complex web applications, and i approached each project with the same level of attention to detail and commitment to excellence. I enjoy collaborating with clients and fellow developers to bring ideas to life.</p>
                        <a href="#contact" class="c-btn btn-round-02 d-none">Contact Me</a>
                    </div>
                </div>

                
            </div>
        </div>

        <div class="offcanvas-overlay"></div>
        <!-- slide-bar end -->


        <!-- main_area_start -->
        <main>
            <!-- slider_area-start -->
            <section class="slider_area fix">
                <div class="swiper-container2 slider_active">
                    <div class="swiper-wrapper2">
                        <div class="swiper-slide2 slider_single slider_height">
                            <div class="shape_circle horizontal_move100px"><img src="assets/img/hero/shape_circle.png" alt="shape"></div>
                            <div class="shape_dots upward_movement200px d-none d-md-block"><img src="assets/img/hero/shape_dots.png" alt="shape"></div>
                            <div class="shape_leftmiddle">
                                <div class="width_visible d-inline-block"><img src="assets/img/hero/shape_leftmiddle.png" alt="shape"></div>
                            </div>
                            <div class="shape_topright fix d-none d-lg-block">
                                <div class="shape_topright_inner top_right_visible"><img src="assets/img/hero/shape_topright.png" alt="shape"></div>
                            </div>
                            <div class="container">
                                <div class="row" id="about">
                                    <div class="col-12">
                                        <div class="slider_single_relative slider_height slider_single_home">
                                            
                                            <div class="slider_content p-rel pt-150p pt-md-0">
                                                <h2 class="slider_title">Hello <br>
                                                    I’m Ajiboye Oludare</h2>
                                                <p class="has_border_left">I am a Freelance full-stack software developer with a B.TECH degree in Computer Science. I have a passion for building innovative and an efficient Software solutions.</p>
                                                <a href="#contact" class="slider_btn i_right" style="background-color:#ff5041;color:white;">Contact Me<i class="fal fa-long-arrow-right"></i></a>
                                                 <div class="footer_social mt-30">
                                    <a class="facebook" href="https://facebook.com/ajiboye.oludare"  style="background-color:#000;color:#fff;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="facebook" href="https://twitter.com/@jiboh_code"  style="background-color:#000;color:#fff;"><i class="fab fa-twitter"></i></a>
                                    <a class="facebook" href="https://instagram.com/jiboh.codes/"  style="background-color:#000;color:#fff;"><i class="fab fa-instagram"></i></a>
                                   
                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider_area-end -->

            <!-- feature_area-start -->
            <div class="feature_area pt-120 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section_title text-center mb-75">
                                <h2 class="title_text">We Provide Best Solutions <br> For Your Agency</h2>
                            </div>
                        </div>
                    </div>

                    <div class="feature_motu_section mb-90">
                        <div class="feature_wrapper">
                            <div class="single_feature text-center mb-40">
                                <span class="feature_icon">
                                    <i class="fal fa-gem"></i>
                                    
                                </span>
                                <h5 class="feature_title"><a href="#contact">Web Design</a></h5>
                            </div>
                            <div class="single_feature text-center mb-40">
                                <span class="feature_icon"><i class="fal fa-laptop-code"></i></span>
                                <h5 class="feature_title"><a href="#contact">Web Development</a></h5>
                            </div>
                            <div class="single_feature text-center mb-40">
                                <span class="feature_icon"><i class="fal fa-layer-group"></i></span>
                                <h5 class="feature_title"><a href="#contact">Product Design</a></h5>
                            </div>
                            <div class="single_feature text-center mb-40">
                                <span class="feature_icon"><i class="fal fa-broadcast-tower"></i></span>
                                <h5 class="feature_title"><a href="#contact">IT Consulting</a></h5>
                            </div>
                            <div class="single_feature text-center mb-40">
                                <span class="feature_icon"><i class="fal fa-bullhorn"></i></span>
                                <h5 class="feature_title"><a href="#contact">Marketing</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="person_feature_area">
                        <div class="row align-items-center">
                            <div class="col-xxl-7 col-lg-5">
                                <div class="person_image_wrapper p-rel mb-30">
                                    <img src="assets/img/logo/mine.png" alt="img" class="feature_woman">
                                    <div class="person_image_wrap">
                                        <div class="person_image_wrap_inner rotate_hr_image">
                                            <img src="assets/img/hero/feature_illustration.png" alt="img" class="feature_illustration">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-lg-7">
                                <div class="person_feature_content pl-55 mb-30">
                                    <div class="section_title mb-30">
                                        <h2 class="title_text">Let’s Something Know About Myself</h2>
                                    </div>
                                    <p>My path to self employment, a natural evolution. After 4 years mastering my craft, I was still an employee and I simply had reached a ceiling of how much money I could earn in my career.</p>
                                    <ul class="feature_list mt-25">
                                        <li>Professional Services</li>
                                        <li>Exclusive Support Team</li>
                                        <li>Best Marketing Strategy</li>
                                    </ul>
                                    <div class="feature_button mt-50">
                                        <a href="#about" class="feature_btn icon_right i_right">Learn More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature_area-end -->

            <!-- portfolio_area-start -->
           
            <div  style="background-color:#D3D3D3;padding:40px;">
               
                                <h5 style="color:green;">Completed Projects Are Available For Show Off Upon request.</h5><br>
                                <h4 class=""> Over 50+ Completed Commercial Projects.</h4>
                            
                             
                    
                     
                </div>
            </div>
            <!-- portfolio_area-end -->

            <!-- skills_area-start -->
            <div class="skills_area pt-30">
                <div class="container">
                    <div class="skill_wrapper pb-100 border_bottom">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6">
                                <div class="skill_info mb-30">
                                    <div class="section_title mb-30">
                                        <h2 class="title_text">Creative &amp; Professional <br>Skills Experience</h2>
                                    </div>
                                    <p>With expertise in both front-end and back-end Web technologies, I am a skilled full-stack software developer with over 4 years of experience. My creative problem-solving skills and attention to detail allow me to deliver high-quality solutions that exceed client expectations.</p>
                                    <div class="skill_button mt-30">
                                        <a href="#contact" class="blog_btn i_right">Get Any Project <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6">
                                <div class="skill_item_wrapper mb-30">
                                    <div class="skill_progress_single mb-50">
                                        <span>Design  & Branding</span>
                                        <span class="progress_value">95%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" data-width="95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill_progress_single mb-50">
                                        <span>Web Design & Development</span>
                                        <span class="progress_value">95%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s" data-wow-delay="0.6s" role="progressbar" data-width="95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill_progress_single mb-50">
                                        <span>Business Strategy</span>
                                        <span class="progress_value">90%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s" data-wow-delay="0.7s" role="progressbar" data-width="90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- skills_area-end -->

            

            <!-- testimonial-area-start -->
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section_title text-center mb-80">
                                <h2 class="title_text">What Some Of My Clients Said <br> About Myself</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tstimonial_wrapper_width pb-120 p-rel">
                    <div class="testimonial_active">
                        <div class="swiper-container p-static team-active-3">
                            <div class="swiper-wrapper">
                                
                                <div class="swiper-slide single_testimonial">
                                    
                                     <div class="testimonial_content">
                                        <div class="author_details mb-20">
                                            <h4 class="t_title">Dr Kuvo</h4>
                                            <span class="t_subtitle">CEO Kuvowhites Medical Health & Spa</span>
                                        </div>
                                        <p>Working with Jiboye was an absolute pleasure. His positive attitude, collaborative approach, and proactive mindset made the entire development process smooth and enjoyable.
                                        </p> 
                                        <div class="rating">
                                       kuvowhites.com
                                       </div>
                                    </div>
                                    </div>
                                    <div class="swiper-slide single_testimonial">
                                    <div class="testimonial_content">
                                        <div class="author_details mb-20">
                                            <h4 class="t_title">Mr Yinka</h4>
                                            <span class="t_subtitle">CEO TEAA VENTURES LIMITED</span>
                                        </div>
                                        <p>I highly recommend Jiboye for any web development projects. His talent, dedication, and professionalism make him a valuable asset to any team. I look forward to working with them again in the future."
                                        </p> 
                                        <div class="rating">
                                       teaaventureslimited.com
                                       </div>
                                    </div>
                                </div>
                                <div class="swiper-slide single_testimonial">
                                    
                                    <div class="testimonial_content">
                                        <div class="author_details mb-20">
                                            <h4 class="t_title">Madam Debby</h4>
                                            <span class="t_subtitle">CEO DJ'S KITCHEN</span>
                                        </div>
                                        <p>Such a wonderguy guy. He knows his job. He paid very much attention to to every details and deliver my job.
                                        </p> 
                                        <div class="rating">
                                       djskitchen.com
                                       </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide single_testimonial">
                                    
                                    <div class="testimonial_content">
                                        <div class="author_details mb-20">
                                            <h4 class="t_title">Mr. Taiwo</h4>
                                            <span class="t_subtitle">OWNER FARMFIXERS FARM</span>
                                        </div>
                                        <p>Very good website. Nice user interface. I so much love what he delivered.
                                        </p> 
                                        <div class="rating">
                                       farmfixers.com
                                       </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide single_testimonial">
                                    
                                    <div class="testimonial_content">
                                        <div class="author_details mb-20">
                                            <h4 class="t_title">9jasinles</h4>
                                            <span class="t_subtitle">9jasingles.com</span>
                                        </div>
                                        <p>Nice website
                                        </p> 
                                        <div class="rating">
                                       9jasingles.com
                                       </div>
                                    </div>
                                </div>
                                
                                
                                

                            </div>
                            <div class="t_pagination">
                                <div class="swiper-button-prev slide-prev"><i class="far fa-long-arrow-alt-left"></i></div>
                                <div class="swiper-button-next slide-next"><i class="far fa-long-arrow-alt-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial area end -->

          
         <br><br>

            <!-- contact_area-start -->
            <div class="contact_area pt-120 pb-100" data-overlay="soft" data-opacity="9" data-background="assets/img/contact/contact_bg.jpg">
                <div class="contact_content_wrapper p-rel">
                    <div class="container" id="contact">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="section_title text-center mb-75 p-rel">
                                    <h2 class="title_text">Do You Have Any Project <br> Plz Say Hello </h2>
                                    
                                    <div class="c_shape_dots upward_movement200px d-none d-md-block"><img src="assets/img/hero/shape_dots.png" alt="shape"></div>
                                </div>
                            </div>
                        </div>
                        <form id="contactForm" action="send_email.php" method="POST">
  <h5><div id="statusMessage"></div><br></h5>
  <div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="contact_single name_input mb-30">
        <input type="text" name="fullName" placeholder="Your Full Name" required>
        <i class="fal fa-user"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="contact_single email_input mb-30">
        <input type="email" name="email" placeholder="Email Address" required>
        <i class="fal fa-envelope"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="contact_single message_input mb-30">
        <textarea name="message" id="message" cols="30" rows="1" placeholder="Write Message" required></textarea>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="submit_button mb-30">
        <button class="submit_btn i_right w_100" type="submit">Send Message <i class="fal fa-long-arrow-right"></i></button>
      </div>
    </div>
  </div>
</form>

                    </div>
                </div>
            </div>
            <!-- contact_area-end -->
            <!-- testimonial area start -->
            
        </main>
        <!-- main_area_start -->


        <!-- footer_area-start -->
        <footer class="footer_area">
            <div class="footer_top_area pt-80 pb-50">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_widget mb-30">
                                <div class="footer_logo mb-40">
                                    <a href=""><img src="assets/img/logo/logo121.png" alt="footer-logo" style="width:200px;"></a>
                                </div>
                                <div class="footer_widget_info">
                                    <span class="footer_info_line">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span class="footer_info_text">NO 20, Trem Junction Ojere Abeokuta</span>
                                    </span>
                                    <span class="footer_info_line">
                                        <i class="fal fa-envelope-open-text"></i>
                                        <a class="footer_info_text" href="mailto:info@codesmogul.com">info@codesmogul.com</a>
                                    </span>
                                    <span class="footer_info_line">
                                        <i class="fal fa-phone"></i>
                                        <a class="footer_info_text" href="tel:+2348142418633">+2348142418633</a>
                                    </span>
                                </div>
                                <div class="footer_social mt-30">
                                    <a class="facebook" href="https://facebook.com/ajiboye.oludare" ><i class="fab fa-facebook-f"></i></a>
                                    <a class="facebook" href="https://twitter.com/@jiboh_code" ><i class="fab fa-twitter"></i></a>
                                    <a class="facebook" href="https://instagram.com/jiboh.codes/" ><i class="fab fa-instagram"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_widget mb-30 pl-20">
                                <div class="footer_widget_title mb-35">
                                    <h4 class="footer_title_text pr-35">Services</h4>
                                </div>
                                <div class="footer_widget_content">
                                    <ul class="footer_links">
                                        <li><a href="#contact">Web Design</a></li>
                                        <li><a href="#contact">Graphics Design</a></li>
                                        <li><a href="#contact"> Web Development</a></li>
                                        <li><a href="#contact">Digital Marketing</a></li>
                                        <li><a href="#contact">IT Consulting</a></li>
                                        <li><a href="#contact">Co-Working</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_widget mb-30">
                                <div class="footer_widget_title mb-35">
                                    <h4 class="footer_title_text">Newsletters</h4>
                                </div>
                                <div class="footer_widget_content">
                                    <p>Enter your email address below  to join our email list.</p>
                                    <form action="#">
                                        <div class="footer_subscription">
                                            <input type="email" placeholder="Enter Your Email">
                                            <button class="submit_btn i_right" type="submit"disabled>Send Message <i class="fal fa-long-arrow-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_widget mb-30">
                                <div class="footer_widget_title mb-45">
                                    <h4 class="footer_title_text text-end pr-35">Photo Gallery</h4>
                                </div>
                                <div class="footer_widget_gallery text-end">

                                    <a href="https://codesmogul.com/assets/img/logo/logo121.png" class="single_photo popup-image">
                                        <img src="https://codesmogul.com/assets/img/logo/logo121.png" alt="thumb">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                    <a href="https://codesmogul.com/assets/img/logo/mine.png" class="single_photo popup-image">
                                        <img src="https://codesmogul.com/assets/img/logo/mine.png" alt="thumb">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="copyright_border">
                        <div class="row align-items-center">
                            <center>
                            <div class="col-xxl-4 col-lg-4 text-center text-lg-start order-1 order-lg-0">
                                <p>&copy; 2023 Codesmogul. All Rights Reserved. </p><br>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
         <!-- footer_area-end -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

		<!-- JS here -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/swipper-bundle.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/mouse-wheel.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/appair.min.js"></script>
        <script src="assets/js/back-to-top.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>