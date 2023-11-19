$(function (){
   let select2_inputs = $('.select2');
   if(select2_inputs.length)
       select2_inputs.select2();

   let inputs_datetimepicker = $('.input-datetimepicker');
   if(inputs_datetimepicker.length)
       inputs_datetimepicker.datetimepicker({
           lang: 'es',
           timepicker: false,
           format: 'd/m/Y',
           donetext: 'Listo'
       });

       let links_container = $('.links-container');
       if (links_container.length) {
           $('#add-link').click( function(){
               links_container.append('<div class="link-item"> <div class="d-flex justify-content-between"> <div class="input-group input-group-sm"> <input id="articulo-input-evento" name="links[]" type="text" class="form-control"> </div> <a href="javascript:void(0);" class="btn btn-danger btn-sm delete-link" ><i class="icon-trash"></i></a></div><div></div>');
           });
           links_container.on('click', '.delete-link', function(){
              let id = $(this).data('id');
              console.log('id:' + id);
              Cracknd.Ajax.SweetAlert('delete', {
                  title: "¿Desea el link del registro?",
                  button_color: "#dc3545",
                  button_text: "Sí, eliminar"
              }, '/administrador/drop-link', { id: id }, function (response) {
                   window.location = BASEURL + '/administrador/timeline/editar/'+id;
              });
           });
       }
});
