console.log("uploader");
function agregar_controles() {
  $('.editor-control').html('<a href="#" class="btn btn-danger btn-xs btn-eliminar btn-circle"><i class="fa fa-trash"></i></a>' +
  '&nbsp;<a href="#" class="btn btn-info btn-xs btn-mover btn-circle"><i class="fa fa-arrows"></i></a>' +
  '&nbsp;<a href="#" class="btn btn-primary2 btn-xs btn-circle btn-resize"><i class="fa fa-arrows-h"></i></a>');
}

function linkFilesMuseografia(id_file, id_exp) {
  if($("#id").length ){
    var id = $("#id").val();
  }
  else{
    var id = -1;
  }
    $.ajax({
        url: baseurl + 'exposiciones/linkMuseografia',
        type: 'POST',
        data: 'id_file='+id_file+'&id_exp='+id_exp,
        success: function(response) {
          var data = $.parseJSON(response);
          console.log(data);
          console.log(data.inserted);
          id_insertado = data.inserted;
          if($("#ids").length){
            var ids = $("#ids").val();
            ids = ids +  id_insertado +',';
            $("#ids").val(ids);
            console.log("insertados:" + $("#ids").val());
          }
        },
        error: function() {
            swal("Error", 'Se ha producido un error al procesar tu solicitud', "error");
        }
    });
}

function uploadFilesMuseografia(file) {
  var id_sala = null; 
  if($("#id_coleccion").length ){
     var id = $("#id_coleccion").val();
     var id_sala = $("#id").val();
  }
  else{
    if($("#id").length ){
      var id = $("#id").val();
    }
    else{
      var id = -1;
    }
  }
    $.ajax({
        url: baseurl + 'exposiciones/addMuseografia',
        type: 'POST',
        data: 'id='+id+'&id_sala='+id_sala+'&original='+file,
        success: function(response) {
          var data = $.parseJSON(response);
          console.log(data);
          console.log(data.inserted);
          id_insertado = data.inserted;
          if($("#ids").length){
            var ids = $("#ids").val();
            ids = ids +  id_insertado +',';
            $("#ids").val(ids);
            console.log("insertados:" + $("#ids").val());
          }
        },
        error: function() {
            swal("Error", 'Se ha producido un error al procesar tu solicitud', "error");
        }
    });
}

function uploadFilesWithdropzone(categoria, imagen){
    $.ajax({
      url: baseurl + 'contenido/uploadImage',
      type: 'POST',
      data: 'categoria=' + categoria + '&imagen=' + imagen,
      success: function (response) {
        var data = $.parseJSON(response);
        contenido = data.data;
        if (categoria!="museografia"){
          html = '<div id="item-" class="Gallery items col-sm-4">' +
            '<div class="editor-control"></div>' +
            '<div class="col-xs12 col-s4 t_align_j m_bottom_20 no-padding content-image">' +
            '<a href="' + contenido + '" data-lightbox="detalle-pieza">' +
            '<img src="' + contenido + '" class="img-responsive">' +
            '</a>' +
            '</div>' +
            '</div>';
          $('.contenido').append(html);
          agregar_controles();
        }
        else{
          console.log("museografia"+ contenido);
          uploadFilesMuseografia(contenido);
          html = '<div class="col-sm-3 animated-panel zoomIn ui-sortable-handle" style="animation-delay: 1.1s;">'+
          '<img src="'+contenido+'" class="img-thumbnail img-responsive">'+
          '<a href="#" class="btn btn-danger btn-block btn-drop-museografia btn-xs"><i class="fa fa-times"></i> Eliminar</a>'+
          '<input type="hidden" name="museografia_original[]" value="'+contenido+'">'+
          '<input type="hidden" name="museografia_mobile[]" value="'+contenido+'">'+
          '</div>';
          $('.vista-previa-museografia').append(html);
        }
      },
      complete: function (jqXHR, textStatus) {
        toastr.success(imagen, 'Se ha cargado correctamente la siguiente imagen: ');
        $('#confirmar-imagenes').removeAttr('disabled').html('Agregar Elemento');
        $('#loading').modal('hide');
        $('#modal-imagen').modal('hide');
     },
     error: function(response){
        toastr.error( imagen, 'No se ha podido subir la siguiente imagen al servidor: ');
     }
  });
}

function checkFileExt(filename){
  filename = filename.toLowerCase();
  return filename.split('.').pop();
}

Dropzone.prototype.defaultOptions.dictDefaultMessage = "Arrastre archivos a cualquier lugar para subirlos. <br> Tamaño máximo de archivo: 10 MB.";
Dropzone.prototype.defaultOptions.dictFallbackMessage = "Su navegador no soporta la funcionalidad de arrastrar archivos a pantalla, por favor dé clic en el área y elija el archivo desde el explorador";
Dropzone.prototype.defaultOptions.dictFileTooBig = "El peso del archivo es demasiado grande.";
Dropzone.prototype.defaultOptions.dictInvalidFileType = "El tipo de archivo seleccionado no está permitido";
Dropzone.prototype.defaultOptions.dictResponseError = "El servidor no se encuentra funcionando correctamente, contacte con el proveedor del servicion";
Dropzone.prototype.defaultOptions.dictCancelUpload = "Cancelar subida";
Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation = "¿Está seguro de que desea cancelar la subida del archivo?";
Dropzone.prototype.defaultOptions.dictRemoveFile = "Eliminar";
Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "No puede cargar más archivos.";

Dropzone.options.myAwesomeDropzoneDetail = {
  maxFiles: 100,
  init: function() {

    this.on("maxfilesexceeded", function(file)
    {
      this.removeFile(file);
    });

    this.on("complete", function(file){
    });

    this.on("error", function(file) {
      var preview = document.getElementsByClassName('dz-preview');
      preview = preview[preview.length - 1];
      var errornot = document.createElement('span');
      errornot.innerHTML = "Archivo no válido";
      preview.insertBefore(errornot, preview.firstChild);

      $("#myAwesomeDropzone").css("background-image", "none");
      $(".dz-error-mark").find('svg').remove();
      $(".dz-success-mark").css("display", "none")
    });

    this.on("success", function(file) {
      $(".dz-success-mark").css("display", "none");
      var preview = document.getElementsByClassName('dz-preview');
      preview = preview[preview.length - 1];
      $("#myAwesomeDropzoneDetail").css("background-image", "none");
      var removeButton = Dropzone.createElement("<button>Remove file</button>");
      var ext = checkFileExt(file.name);
      uploadFilesWithdropzone($('#categoria').val(), file.name);
    });

    this.on('addedfile', function(file){
      $('#confirmar-imagenes').attr('disabled', 'disabled').html('<i class="fa fa-spinner fa-pulse"></i> Cargando...');
    });
  
  }
};
Dropzone.options.myAwesomeDropzoneDetailPopup = {
  maxFiles: 1,
  init: function() {

    this.on("maxfilesexceeded", function(file)
    {
      this.removeFile(file);
    });

    this.on("complete", function(file){
    });

    this.on("error", function(file) {
      var preview = document.getElementsByClassName('dz-preview');
      preview = preview[preview.length - 1];
      var errornot = document.createElement('span');
      errornot.innerHTML = "Archivo no válido";
      preview.insertBefore(errornot, preview.firstChild);

      $("#myAwesomeDropzone").css("background-image", "none");
      $(".dz-error-mark").find('svg').remove();
      $(".dz-success-mark").css("display", "none")
    });

    this.on("success", function(file, dataUrl) {
      $('.background-pop-up').css('background-image', 'url('+dataUrl +')');
      $(".dz-success-mark").css("display", "none");
      var preview = document.getElementsByClassName('dz-preview');
      preview = preview[preview.length - 1];
      $("#myAwesomeDropzoneDetail").css("background-image", "none");
      var removeButton = Dropzone.createElement("<button>Remove file</button>");
      var ext = checkFileExt(file.name);
      uploadFilesWithdropzone("popup", file.name);
    });

    this.on('addedfile', function(file){
      $('#confirmar-imagenes').attr('disabled', 'disabled').html('<i class="fa fa-spinner fa-pulse"></i> Cargando...');
    });
  
  }
};

Dropzone.options.myAwesomeDropzoneSlider = {
  maxFiles: 1,
  init: function() {

    this.on("maxfilesexceeded", function(file)
    {
      this.removeFile(file);
    });

    this.on("complete", function(file){
    });

    this.on("error", function(file) {
      var preview = document.getElementsByClassName('dz-preview');
      preview = preview[preview.length - 1];
      var errornot = document.createElement('span');
      errornot.innerHTML = "Archivo no válido";
      preview.insertBefore(errornot, preview.firstChild);

      $("#myAwesomeDropzone").css("background-image", "none");
      $(".dz-error-mark").find('svg').remove();
      $(".dz-success-mark").css("display", "none")
    });

    this.on("success", function(file, dataUrl) {
      $('.background-pop-up').css('background-image', 'url('+dataUrl +')');
      $(".dz-success-mark").css("display", "none");
      var preview = document.getElementsByClassName('dz-preview');
      preview = preview[preview.length - 1];
      $("#myAwesomeDropzoneDetail").css("background-image", "none");
      var removeButton = Dropzone.createElement("<button>Remove file</button>");
      var ext = checkFileExt(file.name);
      uploadFilesWithdropzone("popup", file.name);
    });

    this.on('addedfile', function(file){
      $('#confirmar-imagenes').attr('disabled', 'disabled').html('<i class="fa fa-spinner fa-pulse"></i> Cargando...');
    });
  
  }
};

$(function (){
  $(".animated-panel a").click( function(){
    Dropzone.forElement("#myAwesomeDropzoneDetail").removeAllFiles();
    $('#confirmar-imagen').removeAttr('disabled').html('Agregar Elemento');
  });
});