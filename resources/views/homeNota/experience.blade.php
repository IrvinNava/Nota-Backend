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

                     <a href="" class="btn btn-lg btn-purple btn-block rounded-pill px-5 mt-3 text-center">Get this experience</a>

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
   </main>

   @include('layoutPublic.footer')
   @include('layoutPublic.assets')

</body>

</html>