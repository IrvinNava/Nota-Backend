<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <title>Experiences |NOTA Inclusion</title>
   <meta name="robots" content="index,follow">
   <meta name="description" content="">
   @include('layoutPublic.header')
</head>

<body>

   @include('layoutPublic.topbar')

   <main>

      <section>
         <div class="container">
            <h3 class="nota-title mb-4">Our collections</h3>
            <div class="row collections-slider-container">
               <div class="collections-carousel">

                  <div class="item">
                     <a href="{{url('collection/')}}">
                        <div class="collection-card" style="background-image: url(https://notainclusion.com/assets/img/speaker/dena-simmons.png)">
                           <div class="collection-info">
                              <h3 class="collection-title">Hispanic Heritage Month</h3>
                              <p class="collection-number">10 experiences</p>
                              <span>Learn more <i class="fa-solid fa-chevron-right"></i></span>
                           </div>
                        </div>
                     </a>
                  </div>

                  <div class="item">
                     <a href="{{url('collection/')}}">
                        <div class="collection-card" style="background-image: url(https://notainclusion.com/assets/img/speaker/dena-simmons.png)">
                           <div class="collection-info">
                              <h3 class="collection-title">Black History Month</h3>
                              <p class="collection-number">10 experiences</p>
                              <span>Learn more <i class="fa-solid fa-chevron-right"></i></span>
                           </div>
                        </div>
                     </a>
                  </div>

                  <div class="item">
                     <a href="{{url('collection/')}}">
                        <div class="collection-card" style="background-image: url(https://notainclusion.com/assets/img/speaker/dena-simmons.png)">
                           <div class="collection-info">
                              <h3 class="collection-title">Pride Month</h3>
                              <p class="collection-number">10 experiences</p>
                              <span>Learn more <i class="fa-solid fa-chevron-right"></i></span>
                           </div>
                        </div>
                     </a>
                  </div>

                  <div class="item">
                     <a href="{{url('collection/')}}">
                        <div class="collection-card" style="background-image: url(https://notainclusion.com/assets/img/speaker/dena-simmons.png)">
                           <div class="collection-info">
                              <h3 class="collection-title">DEI Elementals</h3>
                              <p class="collection-number">10 experiences</p>
                              <span>Learn more <i class="fa-solid fa-chevron-right"></i></span>
                           </div>
                        </div>
                     </a>
                  </div>

                  <div class="item">
                     <a href="{{url('collection/')}}">
                        <div class="collection-card" style="background-image: url(https://notainclusion.com/assets/img/speaker/dena-simmons.png)">
                           <div class="collection-info">
                              <h3 class="collection-title">DEI Elementals</h3>
                              <p class="collection-number">10 experiences</p>
                              <span>Learn more <i class="fa-solid fa-chevron-right"></i></span>
                           </div>
                        </div>
                     </a>
                  </div>

                  <div class="item">
                     <a href="{{url('collection/')}}">
                        <div class="collection-card" style="background-image: url(https://notainclusion.com/assets/img/speaker/dena-simmons.png)">
                           <div class="collection-info">
                              <h3 class="collection-title">DEI Elementals</h3>
                              <p class="collection-number">10 experiences</p>
                              <span>Learn more <i class="fa-solid fa-chevron-right"></i></span>
                           </div>
                        </div>
                     </a>
                  </div>

               </div>
            </div>
         </div>
      </section>

      <section class="nota-bg-collections">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <h3 class="nota-title">All Experiences</h3>
               </div>
               <div class="offset-md-3 col-md-6">
                  <div class="filters-widget mb-4">
                     <input type="text" class="form-control" name="search" data-search placeholder="Search for experience, topic or keyword...">
                     <a href="javascript:void(0);" class="btn btn-blue ms-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-3">

                  <div class="collections-filters sticky-top" style="top: 20px;">

                     <a href="javascript:void(0);" id="btnAllCategories" class="btn btn-lg btn-filter btn-block"><i class="fa-solid fa-arrows-rotate me-2"></i>All categories</a>

                     <hr>

                     <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                 <i class="fa-solid fa-tag me-2"></i>By category
                              </button>
                           </h2>
                           <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                              <div class="accordion-body">

                                 <div class="checkbox-list">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month1">
                                       <label class="form-check-label" for="month1">Women’s History Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month2">
                                       <label class="form-check-label" for="month2">Black History Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month3">
                                       <label class="form-check-label" for="month3">PRIDE Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month4">
                                       <label class="form-check-label" for="month4">Hispanic Heritage Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month5">
                                       <label class="form-check-label" for="month5">AAPI Heritage</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month6">
                                       <label class="form-check-label" for="month6">Women’s History Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month7">
                                       <label class="form-check-label" for="month7">Black History Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month8">
                                       <label class="form-check-label" for="month8">PRIDE Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month9">
                                       <label class="form-check-label" for="month9">Hispanic Heritage Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="month10">
                                       <label class="form-check-label" for="month10">AAPI Heritage</label>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                 <i class="fa-solid fa-user me-2"></i> By Speaker
                              </button>
                           </h2>
                           <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                              <div class="accordion-body">

                                 <div class="checkbox-list">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="speaker1">
                                       <label class="form-check-label" for="speaker1">Lacey Henderson</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="speaker2">
                                       <label class="form-check-label" for="speaker2">Eboo Patel</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="speaker3">
                                       <label class="form-check-label" for="speaker3">Ingrid Harb</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="speaker4">
                                       <label class="form-check-label" for="speaker4"> Raven Solomon</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="speaker5">
                                       <label class="form-check-label" for="speaker5">Erin Gallaghern</label>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>

                     <a href="javascript:void(0);" id="" class="btn btn-lg btn-blue btn-block">
                        <div class="d-flex justify-content-between align-items-center">
                           <div><i class="fa-solid fa-magnifying-glass me-2"></i> Apply search</div>
                           <i class="fa-solid fa-caret-right ms-2"></i>
                        </div>
                     </a>

                     <hr>

                     <a href="javascript:void(0);" id="" class="btn btn-lg btn-filter btn-block"><i class="fa-solid fa-hashtag me-2"></i>DEI Elementals</a>

                  </div>

               </div>
               <div class="col-md-9">
                  <div class="nota-empty-container d-none">
                     <div class="nota-empty">There are no results for the search you performed</div>
                  </div>
                  <div class="experiences-container">
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

                     <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-lg btn-blue rounded-pill px-5 mt-5">Load more experiences</a>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </section>

   </main>

   @include('layoutPublic.footer')
   @include('layoutPublic.assets')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <script type="text/javascript">
      $(".collections-carousel").slick({
         infinite: true,
         arrows: true,
         autoplay: true,
         autoplaySpeed: 1000,
         speed: 500,
         slidesToShow: 4,
         slidesToScroll: 1,
         prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
         nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
         responsive: [{
               breakpoint: 500,
               settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
               }
            },
            {
               breakpoint: 769,
               settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
               }
            },
            {
               breakpoint: 1025,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
               }
            },
         ]
      });
   </script>

</body>

</html>