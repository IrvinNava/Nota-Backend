<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <title>Talent | Nota Inclusion</title>
   @include('layoutPublic.header')
</head>

<body>

   @include('layoutPublic.topbar')

   <main>

      <section>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-5">
                  <h1 class="speakers-title"><span class="nota-text-gradient">Speakers</span> Catalog</h1>
               </div>
               <div class="col-md-7">
                  <div class="speakers-mosaic-container">
                     <div id="spkr-m-1" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-2" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-3" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-4" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-5" class="spekrs-mosaic-item"></div>
                  </div>
                  <div class="speakers-mosaic-container">
                     <div id="spkr-m-6" class="spekrs-mosaic-item nota_bg_1"></div>
                     <div id="spkr-m-7" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-8" class="spekrs-mosaic-item nota_bg_2"></div>
                     <div id="spkr-m-9" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-10" class="spekrs-mosaic-item"></div>
                  </div>
                  <div class="speakers-mosaic-container">
                     <div id="spkr-m-11" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-12" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-13" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-14" class="spekrs-mosaic-item"></div>
                     <div id="spkr-m-15" class="spekrs-mosaic-item"></div>

                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="nota-bg-collections pt-0">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-3"></div>
               <div class="offset-md-3 col-md-6">
                  <div class="filters-widget mb-4">
                     <input type="text" class="form-control" name="search" data-search placeholder="Search for experience, topic or keyword...">
                     <a href="javascript:void(0);" class="btn btn-blue ms-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div>
               </div>
            </div>

            <div class="row">

               <div class="col-md-3">

                  <div class="collections-filters sticky-top mb-3 mb-md-0" style="top: 20px;">

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

                                    @foreach ($categories as $cat)
                                       <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="diversity_equity_inclusion" id="{{$cat->id}}">
                                       <label class="form-check-label" for="diversity_equity_inclusion">{{$cat->title}}</label>
                                    </div>
                                    @endforeach
                                    <!--<div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="diversity_equity_inclusion" id="diversity_equity_inclusion">
                                       <label class="form-check-label" for="diversity_equity_inclusion">DE&I (Diversity, Equity, & Inclusion)</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="mental_health" id="mental_health">
                                       <label class="form-check-label" for="mental_health">Racial Equity</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="mental_health" id="mental_health">
                                       <label class="form-check-label" for="mental_health">Mental Health</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="disability_awareness" id="disability_awareness">
                                       <label class="form-check-label" for="disability_awareness">Disability Awareness</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="intersectionality" id="intersectionality">
                                       <label class="form-check-label" for="intersectionality">Intersectionality</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="allyship" id="allyship">
                                       <label class="form-check-label" for="allyship">Allyship</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="leadership_development" id="leadership_development">
                                       <label class="form-check-label" for="leadership_development">Leadership Development</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="pride_month" id="pride_month">
                                       <label class="form-check-label" for="pride_month">LGBTQIA+ Pride Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="women_history_month" id="women_history_month">
                                       <label class="form-check-label" for="women_history_month">Women's History Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="black_history_month" id="black_history_month">
                                       <label class="form-check-label" for="black_history_month">Black History Month</label>
                                    </div>


                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="hispanic_month" id="hispanic_month">
                                       <label class="form-check-label" for="hispanic_month">Hispanic Heritage Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="asian_month" id="asian_month">
                                       <label class="form-check-label" for="asian_month">Asian American and Pacific Island Heritage Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="military_month" id="military_month">
                                       <label class="form-check-label" for="military_month">Military Family Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="awareness_month" id="awareness_month">
                                       <label class="form-check-label" for="awareness_month">Breast Cancer Awareness Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="micro_aggressions" id="micro_aggressions">
                                       <label class="form-check-label" for="micro_aggressions">Micro-aggressions</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="juneteenth" id="juneteenth">
                                       <label class="form-check-label" for="juneteenth">Juneteenth</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="unconscious_bias" id="unconscious_bias">
                                       <label class="form-check-label" for="unconscious_bias">Unconscious Bias</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="arab__month" id="arab__month">
                                       <label class="form-check-label" for="arab__month">National Arab Heritage Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="social_activism" id="social_activism">
                                       <label class="form-check-label" for="social_activism">Social Activism</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="empathy_workplace" id="empathy_workplace">
                                       <label class="form-check-label" for="empathy_workplace">Empathy in the Workplace</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="native_american_month" id="native_american_month">
                                       <label class="form-check-label" for="native_american_month">National Native American Heritage Month</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="female_empowerment" id="female_empowerment">
                                       <label class="form-check-label" for="female_empowerment">Female Empowerment</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="women_in_leadership" id="women_in_leadership">
                                       <label class="form-check-label" for="women_in_leadership">Women in Leadership</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="self_love" id="self_love">
                                       <label class="form-check-label" for="self_love">Self-love</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="healing" id="healing">
                                       <label class="form-check-label" for="healing">Healing</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="health_wellness" id="health_wellness">
                                       <label class="form-check-label" for="health_wellness">Health and wellness</label>
                                    </div>


                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="workplace_employee_wellness" id="workplace_employee_wellness">
                                       <label class="form-check-label" for="workplace_employee_wellness">Workplace and Employee wellness</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="bussiness_leadership" id="bussiness_leadership">
                                       <label class="form-check-label" for="bussiness_leadership">Business leadership + management</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="neurodiversity" id="neurodiversity">
                                       <label class="form-check-label" for="neurodiversity">Neurodiversity</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="education" id="education">
                                       <label class="form-check-label" for="education">Education</label>
                                    </div>
                                    -->
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>

                     <a href="javascript:void(0);" id="" class="btn btn-lg btn-blue btn-block">
                        <div class="d-flex justify-content-between align-items-center">
                           <div><i class="fa-solid fa-magnifying-glass me-2"></i> Apply search</div><i class="fa-solid fa-caret-right ms-2"></i>
                        </div>
                     </a>

                  </div>

               </div>

               <div class="col-md-9">

                  <div class="nota-empty-container d-none">
                     <div class="nota-empty">There are no results for the search you performed</div>
                  </div>

                  <div class="experiences-container">
                     <div class="row">
                        @foreach ($speakers as $speaker)
                        <? $fullname = App\Helpers\Helper::to_slug($speaker->first_name.' '.$speaker->last_name );?>

                        <?$url = "speaker/".$speaker->id."/".$fullname;?>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                           <a href="{{ url($url) }}">
                              <div class="speaker-card">
                                 <div class="speaker-card-photo">
                                 <img src="{{$speaker->speaker_photo}}" class="img-fluid" alt="">
                              </div>
                                 <div class="speaker-card-info">
                                    <h6 class="speaker-card-title">{{$speaker->first_name}} {{$speaker->last_name}}<span>{{$speaker->pronouns}}</span></h6>
                                    <p class="speaker-card-titles">{{$speaker->titles}}</p>
                                    <p class="speaker-card-link mt-2">View Profile<i class="fa-solid fa-chevron-right ms-2"></i></p>
                                 </div>
                              </div>
                           </a>
                        </div>

                        @endforeach

                     </div>

                     <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-lg btn-blue rounded-pill px-5 mt-5">Load more speakers</a>
                     </div>

                  </div>
               </div>

            </div>
         </div>
      </section>

   </main>

   @include('layoutPublic.footer')
   @include('layoutPublic.assets')
   <script >
      
      $(document).ready(function () {
   console.log("Speakers.js");

   var body = $("body");

   setTimeout( function(){
      let hash = window.location.hash;
      let finalHash = hash.replace('#','');
      if (hash.length) {
         $("#filters .btn").removeClass("active");
         // $container.isotope({ filter: finalHash });
         $("li[data-filter='"+finalHash+"']").addClass("active");
      }
   },500);

});
   </script>

</body>

</html>