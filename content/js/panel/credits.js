$(document).ready(function () {
   var body = $("body");
   var creditsListContainer = $("#creditsListContainer");
    let element = document.querySelector('meta[name="csrf-token"]');
    let csrf = element && element.getAttribute("content");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $("#btnPreview").click(function () {
      let iconPreview = $("#icon-preview");
      creditsListContainer.toggleClass("credits-preview");
      if (iconPreview.hasClass("icon-eye")) {
         iconPreview.removeClass("icon-eye").addClass("icon-eye-slash");
      } else {
         iconPreview.removeClass("icon-eye-slash").addClass("icon-eye");
      }
   })

   $("#btnAddCredit").click(function () {
      creditsListContainer.append('<div class="col-6 credits-item"> <a href="javascript:void(0);" class="btn btn-danger p- btn-delete-credit"><i class="icon-delete"></i></a> <input type="text" class="form-control credit-entity-input" placeholder="Departamento ó Entidad" > <input type="text" class="form-control credit-name-input" placeholder="Nombre completo"> <input type="text" class="form-control credit-titles-input" placeholder="Cargo ó segundo nombre"> </div>');
   })

   body.on("click", ".btn-delete-credit", function () {
      $(this).parent(".credits-item").remove();
   });

   $('#btn-actualizar-registro-timeline').click(function (){
            let contenido = $("#creditsListContainer").html();
            let id = $("#registro-input-id").val();
                Cracknd.Ajax.SweetAlert('update', {
                    title: "¿Desea actualizar los créditos de la exposición digital?",
                    button_color: "#fcce54",
                    button_text: "Sí, actualizar"
                 }, '/administrador/update-creditos',  'creditos=' +contenido+'&id=' +id, function (data) {
                    window.location = BASEURL + '/administrador/exposiciones';
                });
           
        });
});