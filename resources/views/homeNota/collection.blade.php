<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <title>Collection |NOTA Inclusion</title>
   <meta name="robots" content="index,follow">
   <meta name="description" content="">
   @include('layoutPublic.header')
</head>

<body>

   @include('layoutPublic.topbar')

   <main>

      <section>
         <div class="container">
            <div class="d-flex justify-content-start mb-4">
               <a href="{{url('experiences-list/')}}" class="go-back-btn"><i class="fa-solid fa-chevron-left me-2"></i> Go Back</a>
            </div>

            <div class="row">

               <div class="col-md-4 col-xxl-3">
                  <div class="sticky-top" style="top: 25px;">

                     <div class="experience-formats-containe speaker-card">
                        <div class="experience-speaker-card-photo" style="height:350px; background-image: url(https://notainclusion.com/assets/img/speaker/dena-simmons.png)"></div>
                        <div class="speaker-card-info">
                           <h5 class="nota-title mb-0 text-uppercase">Hispanic Heritage Month</h5>
                           <small class="text-black-50">10 experiences</small>
                        </div>
                     </div>

                     <hr class="mt-4 mb-4">

                     <div class="experience-formats-containe p-">
                        <p align="justify" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero harum rem deleniti ratione earum praesentium enim modi est dicta, assumenda tempora cupiditate optio alias quos officia nihil et soluta quasi? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                     </div>

                  </div>
               </div>

               <div class="col-md-8 col-xxl-9">

                  <h4 class="nota-title mb-4">Collection experiences</h4>
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

            </div>
         </div>
      </section>

   </main>

   @include('layoutPublic.footer')
   @include('layoutPublic.assets')

</body>

</html>