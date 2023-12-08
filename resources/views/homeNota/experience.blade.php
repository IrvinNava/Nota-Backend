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

<body>

   @include('layoutPublic.topbar')

   <main class="experience-page">
      <section>
         <div class="container">

            <div class="row">

               <div class="col-md-8 col-xxl-9">

                  <div class="experience-cover" style="background-image: url(https://notainclusion.com/demo/resources/img/experience-photo.jpg);">
                     <div class="experience-cover-content">
                        <div class="row">
                           <div class="col-12 col-lg-10 col-xxl-8">
                              <h1 class="h2 mt-4 mt-sm-0">Unmasking Microaggressions: <span>An Interactive Discussion</span></h1>
                              <hr class="my-4">
                              <div class="experience-tags-container mt-4">
                                 <a href="" class="nota-tag">DEI Elementals</a>
                                 <a href="" class="nota-tag">Inclusive Leadership</a>
                              </div>
                           </div>
                           <div class="d-none d-md-block col-2 col-lg-2 col-xxl-4"></div>
                        </div>
                     </div>
                  </div>

                  <hr class="my-5">

                  <div class="experience-description mt-5">
                     <h3 class="nota-title mb-4">Experience overview</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? </p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? </p>
                  </div>

                  <section class="experience-takeaways mt-5 mb-4 mb-sm-0 p-5">

                     <h4 class="text-purple fw-700 mb-4">Key takeaways</h4>

                     <?php
                     for ($x = 0; $x <= 2; $x += 1) {
                        echo '
                        <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-circle-check fa-2x me-3 text-purple"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. lorem</p>
                        </div>
                        ';
                     }
                     ?>

                  </section>

               </div>

               <div class="col-md-4 col-xxl-3">
                  <div class="sticky-top" style="top: -260px;">

                     <a href="../speaker/">
                        <div class="speaker-card">
                           <div class="experience-speaker-card-photo" style="background-image: url('https://notainclusion.com/assets/img/speaker/mark_travis_rivera.png')"></div>
                           <div class="speaker-card-info">
                              <h6 class="speaker-card-title">Mark Travis Rivera <span>(he/him)</span></h6>
                              <p class="speaker-card-titles">Psychologist, Military Veteran</p>
                              <p class="speaker-card-link mt-2">View Profile<i class="fa-solid fa-chevron-right ms-2"></i></p>
                           </div>
                        </div>
                     </a>

                     <div class="experience-formats-container p-4">
                        <h6 class="mb-2">Experience formats</h6>
                        <div class="row">
                           <div class="col"><i class="fa-solid fa-circle-check text-success me-1"></i>Virtual</div>
                           <div class="col"><i class="fa-solid fa-circle-check text-success me-1"></i>In person</div>
                        </div>
                        <hr>
                        <h6>People count</h6>
                        <ul>
                           <li><i class="fa-solid fa-people-group me-1"></i>Best for teams up to 60 people</li>
                        </ul>
                        <hr>
                        <h6>Duration</h6>
                        <ul>
                           <li><i class="fa-solid fa-clock me-1"></i>90 min</li>
                        </ul>
                     </div>

                     <a href="#" class="btn btn-lg btn-purple btn-block rounded-pill px-5 mt-3 text-center"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get this experience</a>

                  </div>
               </div>

            </div>

         </div>
      </section>

      <section class="nota-bg-collections">
         <div class="container">
            <hr class="mb-5">
            <h3 class="nota-title mt-5 mb-4">Experiences offered</h3>

            <div class="row">

               <div class="col-sm-6 col-xl-4">
                  <a href="{{url('experience/')}}">
                     <div class="experience-card">
                        <div class="experience-card-photo" style="background-image: url(https://notainclusion.com/demo/resources/img/experience-photo.jpg)"></div>
                        <div class="experience-card-info">
                           <h6 class="experience-card-title">Unmasking Microaggressions: An interactive Discussion
                           </h6>
                           <p class="experience-card-excerpt">During this interactive experience, participants
                              will become more aware of how their biases impact interactions</p>
                           <div class="experience-card-author-container mt-3 pt-3">
                              <img src="https://notainclusion.com/assets/img/about/a3.png" alt="">
                              <div>
                                 <small>With</small>
                                 <p class="experience-card-author"><strong>Dr. Ryan Warner</strong> (he/him)</p>
                                 <p class="experience-card-titles">Psychologist, Military Veteran</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
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
                              <h2 class="speaker-modal-title mt-3 mb-5">¡Great! You chose:<span>[Experience name]</span></h2>
                           </div>
                           <!-- ELI AQUÍ ABAJO PORFA IGUAL DEBE CAMBIAR LA IMAGEN POR LA QUE SE HAYA GUARDADO PARA LA EXPERIENCE POR FAVOR, AL TERMINAR PORFA BORRA ESTE COMENTARIO JEJE -->
                           <img src="https://notainclusion.com/demo/resources/img/experience-photo.jpg" alt="Notainclusion Experience" class="img-fluid rounded-3">
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

</body>

</html>