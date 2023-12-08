<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <title>Experience |NOTA Inclusion</title>
   <meta name="robots" content="index,follow">
   <meta name="description" content="">
   @include('layoutPublic.header')
</head>

<body style="overflow-x: hidden;">

   @include('layoutPublic.topbar')

   <main>

      <section>

         <div class="container">
            <div class="section-title mb-5" data-aos="fade-up">
               <h1>Talent Recommendations for <span class="nota-text-gradient">Ingrid Harb</span></h1>
            </div>

            <div class="row">

               <div class="col-md-12">
                  <div class="nota-empty-container d-none">
                     <div class="nota-empty">There are no results for the search you performed</div>
                  </div>

                  <div class="experiences-container">
                     <div class="row">

                        <?php
                        for ($x = 0; $x <= 3; $x += 1) {
                           echo '
                     <div class="col-sm-6 col-md-4 col-xl-3">
                     <a href="../speaker/">
                        <div class="speaker-card">
                           <div class="speaker-card-photo">
                           <img src="https://notainclusion.com/assets/img/speaker/mark_travis_rivera.png" class="img-fluid" alt="">
                        </div>
                           <div class="speaker-card-info">
                              <h6 class="speaker-card-title">Dr. Claudia Romo Edelman <span>(he/him)</span></h6>
                              <p class="speaker-card-titles">Psychologist, Military Veteran</p>
                              <p class="speaker-card-link mt-2">View Profile<i class="fa-solid fa-chevron-right ms-2"></i></p>
                           </div>
                        </div>
                     </a>
                  </div>
                  ';
                        }
                        ?>
                     </div>
                  </div>

                  <div class="d-flex justify-content-center mt-5">
                     <a href="#" class="btn btn-purple rounded-pill px-5"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">I'm interested</a>
                  </div>

               </div>

            </div>
         </div>
      </section>

      <!-- ======= Our Clients Section ======= -->
      <section class="clients pb-0 pb-md-5 overflow-hidden">
         <div class="container" data-aos="fade-up">
            <div class="section-title mb-5">
               <h2>Companies working with <span class="nota-text-gradient">NOTA</span></h2>
               <h4>We partner with employers committed to learning and development</h4>
            </div>

            <div class="marquee_row">
               <div class="marquee_parent">
                  <div class="marquee-block">
                     <div class="marquee-inner">
                        <span>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo1x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo2x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo3x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo4x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod1x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod4x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod2x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod3x.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/tommy-hilfiger-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/fti-consulting-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo-blue-as.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/myclearwater.jpg" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/bd.svg" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/rr-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/wilson-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/berdon.jpg" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/ubisoft.png" class="img-fluid" alt="">
                           </div>
                        </span>
                        <span>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo1x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo2x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo3x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo4x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod1x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod4x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod2x.png" class="img-fluid" alt="client-logo">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logod3x.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/tommy-hilfiger-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/fti-consulting-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/logo-blue-as.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/myclearwater.jpg" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/bd.svg" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/rr-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/wilson-logo.png" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/berdon.jpg" class="img-fluid" alt="">
                           </div>
                           <div class="marquee-item">
                              <img src="https://notainclusion.com/assets/img/hm/ubisoft.png" class="img-fluid" alt="">
                           </div>
                        </span>
                     </div>
                  </div>
               </div>
            </div>

            <!-- <div class="col-lg-12 text-center fg mt-4"> -->
            <!-- <p class="mb-4">Companies can no longer afford to overlook <span>cultural shortcoming</span> by falling back on statistics or quotas. Instead, they must <span>humanize</span> the numbers and open the conversation internally.</p> -->
            <!--<button type="button" class="btn btn-primary btn1" data-bs-toggle="modal" data-bs-target="#staticBackdropget">CONTACT US</button>-->
            <!-- </div> -->
         </div>
      </section>
      <!-- End Our clients Section -->

      <section class="speaker-video-container">
         <div class="container">

            <div class="section-title mb-5">
               <h2 class="text-start"><span class="nota-text-gradient">Our work</span> speaks for itself</h2>
            </div>

            <div class="divilife-3-col-feature-blurb-slider">

               <div class="et_pb_module et_pb_blurb et_pb_blurb_0 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Nota Inclusion worked with us to present our Diversity Day event to City of Clearwater staff and was tremendous. Their dedication and creative was instrumental in us having many positive reviews about of Diversity Day celebration… their professional demeanor made working with her truly a pleasure.</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/sherman-stroman.jpg" class="testimonial-photo"></p>
                              <p>&nbsp;</p>
                              <div class="testimonial-author">
                                 <h5>Sherman Stroman, M.Ed.</h5>
                                 <h6>Diversity &amp; Inclusion Manager</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="et_pb_module et_pb_blurb et_pb_blurb_1 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Had the opportunity to work with Nota Inclusion on a virtual Town hall that focused on cultural diversity in the workplace. It was such a pleasure to work with an individual who had the experience and knowledge on topic that is encompassing of many intricate things. Nota Inclusion brings such a high level of professionalism, candor and possesses the ability to connect with people. Looking forward to work with their again.</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/hugues-jacques.jpg" class="testimonial-photo"></p>
                              <p>&nbsp;</p>
                              <div class="testimonial-author">
                                 <h5>Hugues Jacques-Louis</h5>
                                 <h6>Market Manager at Tommy Hilfiger- PVH Retail Inclusion &amp; Diversity BRG Committee Chair</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="et_pb_module et_pb_blurb et_pb_blurb_2 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Nota Inclusion recently partnered with our ERG to launch an action-oriented webinar on activating allyship for Black History Month. Throughout the process, Nota Inclusion was receptive to feedback, empathetic towards our employees’ needs, and results driven. Their sincerity and passion for her work have a ripple effect, and we’re excited to continue our partnership!</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/testi6.jpg" class="testimonial-photo"></p>
                              <p>&nbsp;</p>
                              <div class="testimonial-author">
                                 <h5>Pammi Bhullar, MBA</h5>
                                 <h6>Diversity, Equity, Inclusion (DEI) Leader | Colleague Empowerment | Talent Development</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="et_pb_module et_pb_blurb et_pb_blurb_3 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Ingrid’s passion is infectious and her spirit indomitable. Nielsen’s Women Business Resource Group, Women in Nielsen (WIN), first began working with Ingrid in early 2021. Many of our representatives attended her galvanizing event, the Women’s Ambassador Forum in Spring of 2021. This forum served as a model and inspiration for our own leadership summit, which we held in September 2021. The WIN BRG and Nielsen have continued to work with Ingrid, supporting such initiatives as “Coding for a Change”, not only because we believe in Ingrid’s mission but because she is an inspiration to each and every one of us. She brings light to every project and hope to every story.</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/testi4.jpg" class="testimonial-photo"></p>
                              <p>&nbsp;</p>
                              <div class="testimonial-author">
                                 <h5>Tuesday Hagiwara</h5>
                                 <h6>Global Director of Content Marketing at Nielsen</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="et_pb_module et_pb_blurb et_pb_blurb_4 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Ingrid is an incredibly powerful uplifting speaker. I admire her amazing work as an activist for women and passion to champion the women empowerment movement across the globe. I worked with her during our first global summit for the WIN (Women In Nielsen) resource business group, hosting over seven hundred associates globally. She is phenomenal, engaging, personable, energetic and so knowledgeable. She knows how to get people to connect even in a virtual format. I am already looking forward to finding another opportunity to partner again with Ingrid.</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/testi3.jpg" class="testimonial-photo"></p>
                              <p>&nbsp;</p>
                              <div class="testimonial-author">
                                 <h5>Gina Bokas</h5>
                                 <h6>Director of Technology at Nielsen</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="et_pb_module et_pb_blurb et_pb_blurb_5 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Nota Inclusion worked with the Women in Leadership committee at Edelman Financial Engines to host our Q2 event for all 1,500+ employees. Nota Inclusion was passionate, personable, and professional. They has access to an incredible network of speakers. From the event content to logistical planning, to day-of execution, Ingrid was a fantastic partner. Together we created an educational, unique, and impactful event for EFE employees around inclusion and allyship. I would not hesitate to work with Nota Inclusion again. I highly recommend their expertise. There is a NEED for her expertise!</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/testi2.jpg" class="testimonial-photo"></p>
                              <p>&nbsp;</p>
                              <div class="testimonial-author">
                                 <h5>Kim Kardash</h5>
                                 <h6>Senior Inights Manager at Edelman Financial Engines</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="et_pb_module et_pb_blurb et_pb_blurb_6 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Ingrid is a very dynamic speaker. doing wonderful work as an activist for women. I worked with her to do a seminar for International Women’s Day for a group of female executives. She was engaging, personable, fun and so knowledgeable. She knows how to get people to connect even in a zoom virtual format. I am already looking forward to finding another opportunity to partner again with NOTA.</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/testi1.jpg" class="testimonial-photo"></p>
                              <p>&nbsp;</p>
                              <div class="testimonial-author">
                                 <h5>Kye Mitchell</h5>
                                 <h6>Chief Operations Officer Kforce</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="et_pb_module et_pb_blurb et_pb_blurb_7 divilife-3-col-feature-blurb et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_light slick-slide">
                  <div class="et_pb_blurb_content">
                     <div class="et_pb_blurb_container">
                        <div class="et_pb_blurb_description">
                           <div class="testimonial-text">Nota Inclusion worked with us in coordinating and executing L’Oreal USA’s annual Equity Event this year. Their incredible passion and knowledge in the area of gender equity combined with her network of female activists, entrepreneurs and influential voices enabled us in delivering our first 2-day virtual Equity Event with the top 200 leaders of our organization. Nota Inclusion took the time to understand our key objectives and then proceeded to masterfully manage all aspects of speaker engagements, creative and production that resulted in a flawless execution of the event. Thank you Nota Inclusion and I look forward to our continued partnership!</div>
                           <div class="testimonial-container">
                              <p><img decoding="async" src="https://notainclusion.com/assets/img/hm/testi.jpg" class="testimonial-photo"></p>
                              <div class="testimonial-author">
                                 <h5>Soniya Sheth</h5>
                                 <h6>L’Oreal Executive Committee Member – 21 Years General Management / Marketing / Talent Management / Organizational Change</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>

         </div>
      </section>

      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-0">

                  <div class="row g-0">
                     <div class="col-md-6 nota-bg-light">
                        <div class="d-flex flex-column justify-content-between p-5 h-100">
                           <div>
                              <img width="120" src="https://notainclusion.com/wp-content/uploads/2023/06/logo.png" alt="Notainclusion Logo" class="">
                              <h2 class="speaker-modal-title mt-3 mb-5">¡Great, Let's start with your contact details<span></span></h2>
                           </div>
                           <img src="https://notainclusion.com/wp-content/uploads/2023/10/inclusive_thinking.png" alt="Notainclusion s peakers" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-6">

                        <div class="d-flex justify-content-end py-4 px-4">
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="pb-3 px-5">
                           <form id="phpcontactformSpeaker" class="php-email-form2" data-recaptcha-site-key="6LeJtWscAAAAADaftEpstS3-Vir26QO1cysjDewK">
                              <div class="row">
                                 <div class="form-group">
                                    <label for="fullnameP" class="form-label">Full name</label>
                                    <input type="text" placeholder="" id="fullnameP" name="fullname" class="form-control" required="">
                                 </div>
                                 <input type="hidden" name="speakers" id="proposal" class="form-control" value="">

                                 <div class="form-group">
                                    <label for="companyP" class="form-label">Company name</label>
                                    <input type="text" class="form-control" name="company" id="companyP" required="">
                                 </div>

                                 <div class="form-group">
                                    <label for="emailP" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="emailP" required="">
                                 </div>
                                 <div class="form-group">
                                    <label for="messageP" class="form-label">Your message</label>
                                    <textarea class="form-control mb-0" name="message" id="messageP" rows="4" required=""></textarea>
                                 </div>

                                 <div>
                                    <div class="loading mt-3"><i class="fa-solid fa-spinner fa-spin-pulse"></i> Loading</div>
                                    <div class="error-message mt-3">
                                       <div class="alert alert-danger" role="alert">
                                          ¡Oh! It looks like something has gone wrong. You can try again.
                                       </div>
                                    </div>
                                    <div class="sent-message mt-3">
                                       <div class="alert alert-success" role="alert">
                                          <i class="fa-solid fa-check me-1"></i> Your message has been sent. Thank you!
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </form>

                           <div class="d-flex justify-content-end mt-3 mb-5">
                              <button type="button" class="btn btn-sm btn-light rounded-pill px-3" data-bs-dismiss="modal">Cancel</button>
                              <div id="contact-btnP" class="ms-2"><button type="submit" class="btn btn-sm btn-purple rounded-pill px-4 popbtn">Submit</button></div>
                           </div>

                           <div class="modal-recaptcha-text">
                              <p>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms</a> apply.</p>
                           </div>

                        </div>
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>

   </main>

   @include('layoutPublic.footer')
   @include('layoutPublic.assets')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <script>
      jQuery(document).ready(function() {
         jQuery('.divilife-3-col-feature-blurb-slider').slick({
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,

            prevArrow: '<i class="fa-solid fa-chevron-left slick-prev"></i>',
            nextArrow: '<i class="fa-solid fa-chevron-right slick-next"></i>',
            responsive: [{
                  breakpoint: 980,
                  settings: {
                     slidesToShow: 2
                  }
               },
               {
                  breakpoint: 767,
                  settings: {
                     slidesToShow: 1
                  }
               }
            ]
         });
      });
   </script>

</body>

</html>