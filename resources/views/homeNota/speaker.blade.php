<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <title>{{ $speaker->first_name }} {{ $speaker->last_name }}) |NOTA inclusion</title>
   <meta name="robots" content="index,follow">
   <meta name="description" content="{{ $speaker->titles }}">
   @include('layoutPublic.header')
</head>

<body>

   @include('layoutPublic.topbar')
   <main class="speaker-page">
      <section>
         <div class="container">
            <div class="d-flex justify-content-start mb-4">
               <a href="{{url('talent/')}}" class="go-back-btn"><i class="fa-solid fa-chevron-left me-2"></i> Go Back</a>
            </div>

            <div class="row">
               <div class="col-md-3">
                  <div class="sticky-top" style="top: 15px;">
                     <img src="{{ $speaker->speaker_photo }}" alt="Mark Travis" class="img-fluid">
                     <a href="" class="btn btn-lg btn-purple btn-block rounded-pill px-5 mt-3 text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hire this Speaker</a>
                  </div>
               </div>
               <div class="col-md-9 speaker-detail-container">
                  <div class="p-0 px-md-5">
                     <h1 class="mt-4 mt-sm-0">{{ $speaker->first_name }} {{ $speaker->last_name }} <span>{{ $speaker->pronouns }}</span></h1>
                     <h5><i>{{ $speaker->titles }}</i></h5>
                     <hr>
                     @if($speaker->startprice && $speaker->limitprice)
                     <h5>Price range: {{ $speaker->startprice }} - {{ $speaker->limitprice }}</h5>
                     @endif


                     <h5>Fields of expertise:</h5>
                     <div class="speaker-tags-container mt-4">
                        <? $categories = explode(",", $speaker->categories); ?>
                        @foreach ($categories as $categorie)
                        <a href="javascript:void(0)" class="nota-tag"><?= \App\Categories::getName($categorie) ?> </a>
                        @endforeach

                        @if($speaker->topics !=null)
                        <? $topics = explode(",", $speaker->topics); ?>
                        @foreach ($topics as $topic)
                        <a href="javascript:void(0)" class="nota-tag"><?= \App\Topics::getName($topic) ?></a>
                        @endforeach
                        @endif


                        <!--<a href="" class="nota-tag">DEI Elementals</a>
                        <a href="" class="nota-tag">Inclusive Leadership</a>
                        <a href="" class="nota-tag">Black History Month</a>
                        <a href="" class="nota-tag">DEI Elementals</a>
                        <a href="" class="nota-tag">Inclusive Leadership</a>

                        <a href="" class="nota-tag">diversity_equity_inclusion</a>
                        <a href="" class="nota-tag">mental_health</a>
                        <a href="" class="nota-tag">racial_equity</a>
                        <a href="" class="nota-tag">intersectionality</a>
                        <a href="" class="nota-tag">allyship</a>
                        <a href="" class="nota-tag">leadership_development</a>
                        
                        <a href="" class="nota-tag">disability_awareness</a>
                        <a href="" class="nota-tag">women_history_month</a>
                        <a href="" class="nota-tag">military_month</a>
                        <a href="" class="nota-tag">micro_aggressions</a>
                        <a href="" class="nota-tag">social_activism</a>
                        <a href="" class="nota-tag">unconscious_bias</a>
                        
                        <a href="" class="nota-tag">empathy_workplace</a>
                        <a href="" class="nota-tag">bussiness_leadership</a>
                        <a href="" class="nota-tag">female_empowerment</a>
                        <a href="" class="nota-tag">women_in_leadership</a>
                        <a href="" class="nota-tag">self_love</a>
                        <a href="" class="nota-tag">healing</a>
                        
                        <a href="" class="nota-tag">health_wellness</a>
                        <a href="" class="nota-tag">workplace_employee_wellness</a> -->
                     </div>

                     <div class="speaker-descroption mt-4">
                        <p> <?= $speaker->description ?></p>
                     </div>

                  </div>
               </div>
            </div>



         </div>
      </section>

      <section class="speaker-video-container py-0 py-sm-5">
         <div class="container p-0 p-sm-auto">
            @foreach ($videos as $video)
            <div class="video-container">
               <?=
               $video->iframe
               ?>
            </div>
            @endforeach
         </div>
      </section>

      <section>
         <div class="container">
            <h3 class="nota-title mb-5">What our clients say about this speaker</h3>
         </div>
         <div class="testimonials-slider-container">
            <div class="testimonials-carousel">
               @foreach ($testimonials as $testimonial)
               <div class="item">
                  <div class="speaker-testimonial">
                     <div class="quotes"><i class="fa-solid fa-quote-left fa-2x"></i><i class="fa-solid fa-quote-right fa-2x"></i></div>
                     <h6 class="testimonials-text"><?= $testimonial->testimonial ?></h6>
                     <p class="testimonials-author h6"> {{ $testimonial->author }}</p>
                  </div>
               </div>
               @endforeach
               <!--<div class="item">
                  <div class="speaker-testimonial">
                     <div class="quotes"><i class="fa-solid fa-quote-left fa-2x"></i><i class="fa-solid fa-quote-right fa-2x"></i></div>
                     <h6 class="testimonials-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eaque aut aperiam laborum officia ea cupiditate odit odio. Reiciendis quam laboriosam facere commodi id omnis illo provident eos voluptas similique?</h6>
                     <p class="testimonials-author h6">- ERG Lead at Ubisoft</p>
                  </div>
               </div>

               <div class="item">
                  <div class="speaker-testimonial">
                     <div class="quotes"><i class="fa-solid fa-quote-left fa-2x"></i><i class="fa-solid fa-quote-right fa-2x"></i></div>
                     <h6 class="testimonials-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eaque aut aperiam laborum officia ea cupiditate odit odio. Reiciendis quam laboriosam facere commodi id omnis illo provident eos voluptas similique?</h6>
                     <p class="testimonials-author h6">- Director of Financials Engines</p>
                  </div>
               </div>-->

            </div>
         </div>
         <div class="d-flex justify-content-center">
            <a href="" class="btn btn-lg btn-purple rounded-pill px-5 mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hire this Speaker</a>
         </div>
      </section>
      @if($experiences)
      <section>
         <div class="container">
            <hr class="mb-5">
            <h3 class="nota-title mt-5 mb-4">Experiences offered</h3>
            @foreach($experiences as $experiente)
            <div class="row">

               <div class="col-sm-6 col-xl-4">
                  <a href="{{ url('$experience->id') }}">
                     <div class="experience-card">
                        <div class="experience-card-photo" style="background-image: url({{ $experience->cover }})"></div>
                        <div class="experience-card-info">
                           <h6 class="experience-card-title">{{ $experience->title }}
                           </h6>
                           <p class="experience-card-excerpt">{{ $experience->description }}</p>
                           <div class="experience-card-author-container mt-3 pt-3">
                              <img src="{{ $speaker->cover }}" alt="">
                              <div>
                                 <small>With</small>
                                 <p class="experience-card-author"><strong>{{ $speaker->first_name }} {{ $speaker->last_name }}</strong> {{ $speaker->pronouns }}</p>
                                 <p class="experience-card-titles">{{$speaker->titles}}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>

               <!--<div class="col-sm-6 col-xl-4">
                  <a href="../experience/">
                     <div class="experience-card">
                        <div class="experience-card-photo" style="background-image: url(../resources/img/experience-photo.jpg)"></div>
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
               </div>-->

            </div>
            @endforeach
         </div>
      </section>
      @endif

      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-0">

                  <div class="row g-0">
                     <div class="col-md-6 nota-bg-light">
                        <div class="d-flex flex-column justify-content-between p-5 h-100">
                           <div>
                              <img width="120" src="https://notainclusion.com/wp-content/uploads/2023/06/logo.png" alt="Notainclusion Logo" class="">
                              <h2 class="speaker-modal-title mt-3">¡Great, you want to hire <span>{{ $speaker->first_name }} {{ $speaker->last_name }}!</span></h2>
                           </div>
                           <img src="https://notainclusion.com/wp-content/uploads/2023/07/nota_portada.png" alt="Notainclusion s peakers" class="img-fluid">
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
                                    <label for="fullnameS" class="form-label">Full name</label>
                                    <input type="text" placeholder="" id="fullnameS" name="fullname" class="form-control" required="">
                                 </div>
                                 <input type="hidden" name="speakers" id="speaker" class="form-control" value="{{ $speaker->first_name }} {{ $speaker->last_name }}">

                                 <div class="form-group">
                                    <label for="companyS" class="form-label">Company name</label>
                                    <input type="text" class="form-control" name="company" id="companyS" required="">
                                 </div>

                                 <div class="form-group">
                                    <label for="emailS" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="emailS" required="">
                                 </div>
                                 <div class="form-group">
                                    <label for="messageS" class="form-label">Your message</label>
                                    <textarea class="form-control mb-0" name="message" id="messageS" rows="4" required="">I want to hire {{ $speaker->first_name }} {{ $speaker->last_name }}</textarea>
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
                              <div id="contact-btnS" class="ms-2"><button type="submit" class="btn btn-sm btn-purple rounded-pill px-4 popbtn">Submit</button></div>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <script type="text/javascript">
      $(".testimonials-carousel").slick({
         centerMode: true,
         centerPadding: '300px',
         infinite: true,
         arrows: true,
         autoplay: true,
         autoplaySpeed: 3000,
         speed: 500,
         slidesToShow: 1,
         slidesToScroll: 1,
         prevArrow: '<i class="fa-solid fa-arrow-left-long"></i>',
         nextArrow: '<i class="fa-solid fa-arrow-right-long"></i>',
         responsive: [{
               breakpoint: 1025,
               settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '150px',
                  slidesToShow: 1
               }
            },
            {
               breakpoint: 769,
               settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '150px',
                  slidesToShow: 1
               }
            },
            {
               breakpoint: 480,
               settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '0px',
                  slidesToShow: 1
               }
            }
         ]
      });
   </script>

</body>

</html>