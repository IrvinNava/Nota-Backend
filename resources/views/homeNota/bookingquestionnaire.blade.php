<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <title>Booking Questionnaire |NOTA Inclusion</title>
   <meta name="robots" content="index,follow">
   <meta name="description" content="">
   @include('layoutPublic.header')
</head>

<body>

   @include('layoutPublic.topbar')

   <main>

      <section>

         <div class="container">
            <div class="section-title mb-5" data-aos="fade-up">
               <h1>Find & <span class="nota-text-gradient">Experience</span> our amazing lineup of Speakers</h1>
            </div>

            <div class="row">

               <div class="col-md-12">


                  <!-- SmartWizard html -->
                  <div id="smartwizard" dir="rtl-">
                     <ul class="nav nav-progress">
                        <li class="nav-item">
                           <a class="nav-link" href="#step-1">
                              <div class="num">1</div>
                              <div class="smrtwzrd-tab-title">
                                 <p class="m-0">Type of speaker</p>
                                 <span>Talk about yout needs</span>
                              </div>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#step-2">
                              <span class="num">2</span>
                              <div class="smrtwzrd-tab-title">
                                 <p class="m-0">About your event</p>
                                 <span>What is the occasion?</span>
                              </div>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#step-3">
                              <span class="num">3</span>
                              <div class="smrtwzrd-tab-title">
                                 <p class="m-0">About you</p>
                                 <span>Who will we send the info to?</span>
                              </div>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#step-4">
                              <span class="num">4</span>
                              <div class="smrtwzrd-tab-title">
                                 <p class="m-0">Confirm search</p>
                                 <span>Last step</span>
                              </div>
                           </a>
                        </li>
                     </ul>

                     <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                           <form id="form-1" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                              <div class="col mt-4">
                                 <label for="first-name" class="form-label">What type of speaker are you looking for?</label>
                                 <div class="spkr-type-container mt-4">
                                    <div class="spkr-type-item">DE&I (Diversity, Equity, & Inclusion)</div>
                                    <div class="spkr-type-item">Racial Equity</div>
                                    <div class="spkr-type-item">Mental Health</div>
                                    <div class="spkr-type-item">Disability Awareness</div>
                                    <div class="spkr-type-item">Intersectionality</div>
                                    <div class="spkr-type-item">Allyship</div>
                                    <div class="spkr-type-item">Development</div>
                                    <div class="spkr-type-item">Leadership</div>
                                    <div class="spkr-type-item">LGBTQIA+ Pride Month</div>
                                    <div class="spkr-type-item">Women's History Month</div>
                                    <div class="spkr-type-item">Black History Month</div>
                                    <div class="spkr-type-item">Hispanic Heritage Month</div>
                                    <div class="spkr-type-item">Asian American and Pacific Island Heritage Month</div>
                                    <div class="spkr-type-item">Military Family Month</div>
                                    <div class="spkr-type-item">Breast Cancer Awareness Month</div>
                                    <div class="spkr-type-item">Micro-aggressions</div>
                                    <div class="spkr-type-item">Juneteenth</div>
                                    <div class="spkr-type-item">Unconscious Bias</div>
                                    <div class="spkr-type-item">Arab Heritage Month</div>
                                    <div class="spkr-type-item">Social Activism</div>
                                    <div class="spkr-type-item">Empathy in the Workplace</div>
                                    <div class="spkr-type-item">National Native American Heritage Month</div>
                                    <div class="spkr-type-item">Female Empowerment</div>
                                    <div class="spkr-type-item">Women in Leadership</div>
                                    <div class="spkr-type-item">Self-love</div>
                                    <div class="spkr-type-item">Healing</div>
                                    <div class="spkr-type-item">Health and wellness</div>
                                    <div class="spkr-type-item">Workplace and Employee wellness</div>
                                    <div class="spkr-type-item">Business leadership + management</div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                           <form id="form-2" class="row row-cols-1 ms-5 me-5 needs-validation mt-4" novalidate>
                              <div class="col">
                                 <label for="state" class="form-label mb-0">State of event:</label>
                                 <input type="text" class="form-control" id="state" required="">
                                 <div class="invalid-feedback">
                                    Please provide the state.
                                 </div>
                              </div>
                              <div class="col mt-2">
                                 <label for="city" class="form-label mb-0">City</label>
                                 <input type="text" class="form-control" id="city" required="">
                                 <div class="invalid-feedback">
                                    Please provide the city.
                                 </div>
                              </div>
                              <div class="col mt-2">
                                 <label for="co_name" class="form-label mb-0">What is your estimated budget?</label>
                                 <div class="my-2 budget-container">
                                    <input type="radio" class="btn-check" name="budget" id="budget1" required>
                                    <label class="btn btn-outline-info rounded-pill" for="budget1">$5k - $10k</label>

                                    <input type="radio" class="btn-check" name="budget" id="budget2">
                                    <label class="btn btn-outline-info rounded-pill" for="budget2">$10k - $20k</label>

                                    <input type="radio" class="btn-check" name="budget" id="budget3">
                                    <label class="btn btn-outline-info rounded-pill" for="budget3">$20k - $35k</label>

                                    <input type="radio" class="btn-check" name="budget" id="budget4">
                                    <label class="btn btn-outline-info rounded-pill" for="budget4">$35k - $50k</label>

                                    <input type="radio" class="btn-check" name="budget" id="budget5">
                                    <label class="btn btn-outline-info rounded-pill" for="budget5">$50k+</label>
                                    <div class="invalid-feedback">
                                       Please select your estimated budget.
                                    </div>
                                 </div>
                              </div>

                              <div class="col mt-2">
                                 <label for="phone" class="form-label mb-0">Duration of the event</label>
                                 <div class="my-2 budget-container">
                                    <input type="radio" class="btn-check" name="duration" id="duration1" required>
                                    <label class="btn btn-outline-info rounded-pill" for="duration1">30 min to 1 hr</label>

                                    <input type="radio" class="btn-check" name="duration" id="duration2">
                                    <label class="btn btn-outline-info rounded-pill" for="duration2">1 hr to 2 hrs</label>

                                    <input type="radio" class="btn-check" name="duration" id="duration3">
                                    <label class="btn btn-outline-info rounded-pill" for="duration3">Half day</label>

                                    <input type="radio" class="btn-check" name="duration" id="duration4">
                                    <label class="btn btn-outline-info rounded-pill" for="duration4">Full day</label>
                                    <div class="invalid-feedback">
                                       Please select an option.
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                           <form id="form-3" class="row row-cols-1 ms-5 me-5 needs-validation mt-4" novalidate>
                              <div class="col">
                                 <label for="name" class="form-label mb-0">Your name*</label>
                                 <input type="text" class="form-control" id="name" required="">
                                 <div class="invalid-feedback">
                                    Please provide your first name.
                                 </div>
                              </div>

                              <div class="col mt-2">
                                 <label for="email" class="form-label mb-0">Email*</label>
                                 <input type="email" class="form-control" id="email" required="">
                                 <div class="invalid-feedback">
                                    Please provide a valid email.
                                 </div>
                              </div>

                              <div class="col mt-2">
                                 <label for="co_name" class="form-label mb-0">Company name</label>
                                 <input type="text" class="form-control" id="co_name">
                              </div>

                              <div class="col mt-2">
                                 <label for="phone" class="form-label mb-0">Phone number</label>
                                 <input type="text" class="form-control" id="phone">
                              </div>
                           </form>
                        </div>
                        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">

                           <form id="form-4" class="row row-cols-1 mx-md-5 p-3 mt-4 needs-validation" novalidate>
                              <div class="col">
                                 <div class="mb-3 text-muted">Please confirm your information</div>

                                 <div id="order-details"></div>

                                 <h6 class="mt-3">Are you ready?</h6>
                                 <hr class="my-2">

                                 <div class="row gy-3">

                                    <div class="col mt-3">
                                       <input type="checkbox" class="form-check-input" id="save-info" required>
                                       <label class="form-check-label" for="save-info">I agree to the <a href="https://notainclusion.com/" target="_blank">terms and conditions</a></label>
                                    </div>

                                    <small class="text-muted"></small>

                                 </div>
                              </div>
                           </form>



                        </div>
                     </div>

                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>


               </div>

            </div>
         </div>
      </section>

      <?php include "../layout/clients-section.php"; ?>

      <?php include "../layout/speakers-section.php"; ?>

   </main>

   @include('layoutPublic.footer')
   @include('layoutPublic.assets')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <!-- CSS -->
   <link href="../resources/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

   <!-- JavaScript -->
   <script src="../resources/js/jquery.smartWizard.min.js" type="text/javascript"></script>

   <script>
      function onConfirm() {
         let form = document.getElementById('form-4');
         if (form) {
            if (!form.checkValidity()) {
               form.classList.add('was-validated');
               $('#smartwizard').smartWizard("setState", [3], 'error');
               $("#smartwizard").smartWizard('fixHeight');
               return false;
            }

            $('#smartwizard').smartWizard("unsetState", [3], 'error');
            myModal.show();
         }
      }

      function showConfirm() {
         const categories = [];
         $(".spkr-type-item").each(function() {
            if ($(this).hasClass("type-active"))
               categories.push($(this).html());
         });
         const state = $('#state').val();
         const city = $('#city').val();
         const budget = $('input[name="budget"]:checked').val();
         const duration = $('input[name="duration"]:checked').val();
         const name = $('#name').val();
         const email = $('#email').val();
         const company = $('#co_name').val();
         const phone = $('#phone').val();
         let html = `
                  <div class="row">
                                    <div class="col-12">
                                       <h6 class="mb-3 text-uppercase fw-bold">Type of speaker</h6>
                                       <hr class="my-2">
                                       <div class="row g-3">
                                          <div class="col-auto">
                                             
                                          <p><b>Subject:</b> ${categories}</p>

                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <h6 class="mt-3 text-uppercase fw-bold">About the event</h6>
                                       <hr class="my-2">
                                       <div class="row g-3">
                                          <div class="col-auto">

                                             <p class="mb-0"><b>State of event:</b> ${state}</p>
                                             <p class="mb-0"><b>City:</b> ${city}</p>
                                             <p class="mb-0"><b>Estimated budget:</b> ${budget}</p>
                                             <p class="mb-0"><b>Duration of the event:</b> ${duration}</p>

                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <h6 class="mt-3 text-uppercase fw-bold">About you</h6>
                                       <hr class="my-2">
                                       <div class="row g-3">
                                          <div class="col-auto">

                                             <p class="mb-0"><b>Name:</b> ${name}</p>
                                             <p class="mb-0"><b>Email:</b> ${email}</p>
                                             <p class="mb-0"><b>Company name:</b> ${company}</p>
                                             <p class="mb-0"><b>Phone number:</b> ${phone}</p>

                                          </div>
                                       </div>
                                    </div>
                                 </div>

                  `;
         $("#order-details").html(html);
         $('#smartwizard').smartWizard("fixHeight");
      }

      jQuery(document).ready(function() {

         $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {
            // Validate only on forward movement  
            console.log("leaveStep");
            if (stepDirection == 'forward') {
               let form = document.getElementById('form-' + (currentStepIdx + 1));
               if (form) {
                  if (!form.checkValidity()) {
                     form.classList.add('was-validated');
                     $('#smartwizard').smartWizard("setState", [currentStepIdx], 'error');
                     $("#smartwizard").smartWizard('fixHeight');
                     return false;
                  }
                  $('#smartwizard').smartWizard("unsetState", [currentStepIdx], 'error');
               }
            }
         });

         // Step show event
         $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
            $("#prev-btn").removeClass('disabled').prop('disabled', false);
            $("#next-btn").removeClass('disabled').prop('disabled', false);
            if (stepPosition === 'first') {
               $("#prev-btn").addClass('disabled').prop('disabled', true);
            } else if (stepPosition === 'last') {
               $("#next-btn").addClass('disabled').prop('disabled', true);
            } else {
               $("#prev-btn").removeClass('disabled').prop('disabled', false);
               $("#next-btn").removeClass('disabled').prop('disabled', false);
            }

            // Get step info from Smart Wizard
            let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
            $("#sw-current-step").text(stepInfo.currentStep + 1);
            $("#sw-total-step").text(stepInfo.totalSteps);

            if (stepPosition == 'last') {
               showConfirm();
               $("#btnFinish").prop('disabled', false);
            } else {
               $("#btnFinish").prop('disabled', true);
            }

            // Focus first name
            if (stepIndex == 1) {
               setTimeout(() => {
                  $('#first-name').focus();
               }, 0);
            }
         });

         // SmartWizard initialize
         // Smart Wizard
         $('#smartwizard').smartWizard({
            selected: 0,
            autoAdjustHeight: false,
            theme: 'arrows', // basic, arrows, square, round, dots
            transition: {
               animation: 'none'
            },
            toolbar: {
               showNextButton: true, // show/hide a Next button
               showPreviousButton: true, // show/hide a Previous button
               position: 'bottom', // none/ top/ both bottom
               extraHtml: `<button class="btn btn-success" id="btnFinish" disabled onclick="onConfirm()">Send</button>`
            },
            anchor: {
               enableNavigation: true, // Enable/Disable anchor navigation 
               enableNavigationAlways: false, // Activates all anchors clickable always
               enableDoneState: true, // Add done state on visited steps
               markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
               unDoneOnBackNavigation: true, // While navigate back, done state will be cleared
               enableDoneStateNavigation: true // Enable/Disable the done state navigation
            },
         });

         $(".spkr-type-item").click(function() {
            let thisItem = $(this);
            if (thisItem.hasClass("type-active")) {
               thisItem.removeClass("type-active");
               console.log("Remove");
            } else {
               thisItem.addClass("type-active");
               console.log("Add");
            }
         });

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