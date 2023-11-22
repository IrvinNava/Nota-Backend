<?
$metadata = [
    'title' => '30 años | Museo Amparo',
    'description' => 'Te invitamos a compartir una fotografía que te hayas tomado en el Museo Amparo para formar un gran mosaico de historias. Cuéntanos de cuándo es la imagen, qué actividad realizaste en el Museo, con quién estabas y tu experiencia de visita.',
    'url' => '',
    'image' => 'http://443e3f4e7dd2b6a88a3f-b9c0667778661278083bed3d7c96b2f8.r88.cf1.rackcdn.com/amparo_online/portada-el-circulo-que-faltaba-home-1280x720-museo-amparo-puebla-08122020.png'
];
?>
@include('layout.header')
<body class="page-template-default page page-id-31 logged-in elementor-default elementor-page elementor-page-31">
    <div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
        @include('layout.topbar')

        <div class="principal-container form-content">
            <div class="principal-content">
                <nav class="Menu is-open">
                    <div class="center-block col-xs12 col-s12 col-l8 no-padding">
                        <a href="https://museoamparo.com" class="urlhome">
                            <img src="https://museoamparo.com/img/static/icon-logo/logo-amparo-white-1.png" class="Logo">
                        </a>
                    </div>
                </nav>
                <div class="center-block col-xs12 col-s12 col-l8 no-padding margentop">
                    <h1>¡Cumplimos 30 años y tú eres parte de nuestra historia!</h1>
                    <h2>¡El Amparo eres tú!</h2>
                </div>
            </div>
        </div>

        <div class="ma-anniversary-content">
            <div class="center-block col-xs12 col-s10 col-l6">
                <div class="col-xs12 t_align_j m_top_10">
                    <!-- <h3>¡Estamos celebrando 30 años de compartir el arte de nuestro país!</h4> -->
                    <h1 class="Name_section__title">¡Estamos celebrando 30 años de encuentro con nuestras raíces!</h1>
                    <ul class="margentop">
                        <li>30 años de recorrido al pasado.</li>
                        <li>30 años de exploración al arte y la educación.</li>
                        <li>30 años conociendo formas de expresión, costumbres, maneras de ver la muerte, la religión, la escritura y el lenguaje.</li>
                        <li>30 años de compartir y descubrir experiencias en los pasillos de nuestras salas de arte.</li>
                    </ul>
                    <hr>
                    <h2 class="Name_section__title2 margentop">El Museo Amparo cumple 30 años y quiere celebrarlo contigo, que formas parte de nuestra historia.</h2>
                    <div class="adorno"></div>
                    <p class="margentop">Te invitamos a compartir una fotografía que te hayas tomado en el <b>Museo Amparo</b> para formar un gran mosaico de historias. Cuéntanos de cuándo es la imagen, qué actividad realizaste en el Museo, con quién estabas y tu experiencia de visita.</p>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-m9">
                                <label for="inputEmail4">Nombre</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-m3">
                                <label for="inputPassword4">Edad actual</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-m6">
                            <label for="inputAddress">Ciudad actual de residencia</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-m6">
                            <label for="inputAddress">Fecha de la fotografía</label>
                            <input type="text" class="form-control" placeholder="DD/MM/AAAA">
                        </div>
                        <div class="form-group col-m6">
                            <label for="inputAddress">Evento al que acudiste</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-m6">
                            <label for="inputAddress">Motivo de tu visita</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">¿Quién te tomó esa foto?</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">¿Qué recuerdas de tu visita? ¿Qué descubriste?</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">¿Volviste al Museo en otra ocasión?</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group" style="display: none">
                            <label for="exampleFormControlFile1">Foto de tu visita</label><br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <br><small>La foto debe ser menor a 5MB</small>
                        </div>
                        <div class="form-group">
                            <input type="file" id="imageCropFileInput" multiple="" accept=".jpg,.jpeg,.png">
                            <input type="hidden" id="profile_img_data">
                            <div class="img-preview"></div>
                            <div id="galleryImages"></div>
                            <div id="cropper">
                                <canvas id="cropperImg" width="0" height="0"></canvas>
                                <a href="javascript:void(0);" class="btn btn-primary cropImageBtn" id="cropImageBtn"><i class="fa fa-check"></i> Cortar foto</a>
                            </div>
                        </div>
                        <div style="clear:both" class="algo"></div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Entiendo y acepto que la imagen y datos que estoy enviando, salvo mi correo electrónico, se harán públicos. Para más referencias visita nuestro <a href="https://museoamparo.com/politicas-de-privacidad" target="_blank">Aviso de privacidad</a>
                                </label>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary send-photo">Enviar</a>
                    </form>
                    <hr>
                    <div class="items">
                        <p>Recuerda seguir compartiéndonos tus momentos favoritos en redes sociales usando el hashtag <b>#MuseoAmparo</b>:</p>
                        <p>Facebook: <a data-cke-saved-href="https://www.facebook.com/MuseoAmparo.Puebla/" href="https://www.facebook.com/MuseoAmparo.Puebla/">/MuseoAmparo.Puebla</a> | Twitter: <a data-cke-saved-href="https://twitter.com/MuseoAmparo" href="https://twitter.com/MuseoAmparo">@MuseoAmparo</a> | Instagram: <a data-cke-saved-href="https://www.instagram.com/museoamparo/" href="https://www.instagram.com/museoamparo/">@museoamparo</a></p>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.min.css" integrity="sha512-w+u2vZqMNUVngx+0GVZYM21Qm093kAexjueWOv9e9nIeYJb1iEfiHC7Y+VvmP/tviQyA5IR32mwN/5hTEJx6Ng==" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.9/cropper.min.js" integrity="sha512-9pGiHYK23sqK5Zm0oF45sNBAX/JqbZEP7bSDHyt+nT3GddF+VFIcYNqREt0GDpmFVZI3LZ17Zu9nMMc9iktkCw==" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var c;
            var galleryImagesContainer = document.getElementById('galleryImages');
            var imageCropFileInput = document.getElementById('imageCropFileInput');
            var cropperImageInitCanvas = document.getElementById('cropperImg');
            var cropImageButton = document.getElementById('cropImageBtn');
            // Crop Function On change
            function imagesPreview(input) {
                var cropper;
                galleryImagesContainer.innerHTML = '';
                var img = [];
                if(cropperImageInitCanvas.cropper){
                    cropperImageInitCanvas.cropper.destroy();
                    cropImageButton.style.display = 'none';
                    cropperImageInitCanvas.width = 0;
                    cropperImageInitCanvas.height = 0;
                }
                if (input.files.length) {
                    var i = 0;
                    var index = 0;
                    for (let singleFile of input.files) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            var blobUrl = event.target.result;
                            img.push(new Image());
                            img[i].onload = function(e) {
                                // Canvas Container
                                var singleCanvasImageContainer = document.createElement('div');
                                singleCanvasImageContainer.id = 'singleImageCanvasContainer'+index;
                                singleCanvasImageContainer.className = 'singleImageCanvasContainer';
                                // Canvas Close Btn
                                var singleCanvasImageCloseBtn = document.createElement('button');
                                var singleCanvasImageCloseBtnText = document.createTextNode('Intentar de nuevo');
                                // var singleCanvasImageCloseBtnText = document.createElement('i');
                                // singleCanvasImageCloseBtnText.className = 'fa fa-times';
                                singleCanvasImageCloseBtn.id = 'singleImageCanvasCloseBtn'+index;
                                singleCanvasImageCloseBtn.className = 'singleImageCanvasCloseBtn';
                                singleCanvasImageCloseBtn.onclick = function() { removeSingleCanvas(this) };
                                singleCanvasImageCloseBtn.appendChild(singleCanvasImageCloseBtnText);
                                singleCanvasImageContainer.appendChild(singleCanvasImageCloseBtn);
                                // Image Canvas
                                var canvas = document.createElement('canvas');
                                canvas.id = 'imageCanvas'+index;
                                canvas.className = 'imageCanvas singleImageCanvas';
                                canvas.width = e.currentTarget.width;
                                canvas.height = e.currentTarget.height;
                                canvas.onclick = function() { cropInit(canvas.id); };
                                singleCanvasImageContainer.appendChild(canvas)
                                // Canvas Context
                                var ctx = canvas.getContext('2d');
                                ctx.drawImage(e.currentTarget,0,0);
                                // galleryImagesContainer.append(canvas);
                                galleryImagesContainer.appendChild(singleCanvasImageContainer);
                                while (document.querySelectorAll('.singleImageCanvas').length == input.files.length) {
                                    var allCanvasImages = document.querySelectorAll('.singleImageCanvas')[0].getAttribute('id');
                                    cropInit(allCanvasImages);
                                    break;
                                };
                                urlConversion();
                                index++;
                            };
                            img[i].src = blobUrl;
                            i++;
                        }
                        reader.readAsDataURL(singleFile);
                    }
                    // addCropButton();
                    // cropImageButton.style.display = 'block';
                }
            }
            imageCropFileInput.addEventListener("change", function(event){
                imagesPreview(event.target);
            });
            // Initialize Cropper
            function cropInit(selector) {
                c = document.getElementById(selector);
                console.log(document.getElementById(selector));
                if(cropperImageInitCanvas.cropper){
                    cropperImageInitCanvas.cropper.destroy();
                }
                var allCloseButtons = document.querySelectorAll('.singleImageCanvasCloseBtn');
                for (let element of allCloseButtons) {
                    element.style.display = 'block';
                }
                c.previousSibling.style.display = 'none';
                // c.id = croppedImg;
                var ctx=c.getContext('2d');
                var imgData=ctx.getImageData(0, 0, c.width, c.height);
                var image = cropperImageInitCanvas;
                image.width = c.width;
                image.height = c.height;
                var ctx = image.getContext('2d');
                ctx.putImageData(imgData,0,0);
                cropper = new Cropper(image, {
                    aspectRatio: 1 / 1,
                    preview: '.img-preview',
                    crop: function(event) {
                        // console.log(event.detail.x);
                        // console.log(event.detail.y);
                        // console.log(event.detail.width);
                        // console.log(event.detail.height);
                        // console.log(event.detail.rotate);
                        // console.log(event.detail.scaleX);
                        // console.log(event.detail.scaleY);
                        cropImageButton.style.display = 'block';
                    }
                });

            }
            // Initialize Cropper on CLick On Image
            // function cropInitOnClick(selector) {
            //   if(cropperImageInitCanvas.cropper){
            //       cropperImageInitCanvas.cropper.destroy();
            //       // cropImageButton.style.display = 'none';
            //       cropInit(selector);
            //       // addCropButton();
            //       // cropImageButton.style.display = 'block';
            //   } else {
            //       cropInit(selector);
            //       // addCropButton();
            //       // cropImageButton.style.display = 'block';
            //   }
            // }
            // Crop Image
            function image_crop() {
                if(cropperImageInitCanvas.cropper){
                    var cropcanvas = cropperImageInitCanvas.cropper.getCroppedCanvas({width: 600, height: 600});
                    // document.getElementById('cropImages').appendChild(cropcanvas);
                    var ctx=cropcanvas.getContext('2d');
                    var imgData=ctx.getImageData(0, 0, cropcanvas.width, cropcanvas.height);
                    // var image = document.getElementById(c);
                    c.width = cropcanvas.width;
                    c.height = cropcanvas.height;
                    var ctx = c.getContext('2d');
                    ctx.putImageData(imgData,0,0);
                    cropperImageInitCanvas.cropper.destroy();
                    cropperImageInitCanvas.width = 0;
                    cropperImageInitCanvas.height = 0;
                    cropImageButton.style.display = 'none';
                    var allCloseButtons = document.querySelectorAll('.singleImageCanvasCloseBtn');
                    for (let element of allCloseButtons) {
                        element.style.display = 'block';
                    }
                    urlConversion();
                    // cropperImageInitCanvas.style.display = 'none';
                } else {
                    alert('Primero selecciona la fotografía que quieres compartir.');
                }
            }
            cropImageButton.addEventListener("click", function(){
                image_crop();
            });
            // Image Close/Remove
            function removeSingleCanvas(selector) {
                selector.parentNode.remove();
                urlConversion();
            }
            // Dynamically Add Crop Btn
            // function addCropButton() {
            //   // add crop button
            //     var cropBtn = document.createElement('button');
            //     cropBtn.setAttribute('type', 'button');
            //     cropBtn.id = 'cropImageBtn';
            //     cropBtn.className = 'btn btn-block crop-button';
            //     var cropBtntext = document.createTextNode('crop');
            //     cropBtn.appendChild(cropBtntext);
            //     document.getElementById('cropper').appendChild(cropBtn);
            //     cropBtn.onclick = function() { image_crop(cropBtn.id); };
            // }
            // Get Converted Url
            function urlConversion() {
                var allImageCanvas = document.querySelectorAll('.singleImageCanvas');
                var convertedUrl = '';
                for (let element of allImageCanvas) {
                    convertedUrl += element.toDataURL('image/jpeg');
                    convertedUrl += 'img_url';
                }
                document.getElementById('profile_img_data').value = convertedUrl;
            }

        </script>

        @include('layout.footer')
        @include('layout.assets')
        <link rel="stylesheet" href="https://museoamparo.com/css/style.css">
        <link rel="stylesheet" href="https://museoamparo.com/css/animate.min.css" as="style">
        <link rel="stylesheet" href="https://museoamparo.com/css/embed.min.css" as="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" as="style">
        <link rel="stylesheet" href="https://museoamparo.com/css/main.min.css" as="style">
        <link rel="preload" href="https://museoamparo.com/css/vendor.css" as="style">
        <link rel="stylesheet" href="{{ asset('css/ma_aniversario.css') }}" />

    </body>
    </html>
