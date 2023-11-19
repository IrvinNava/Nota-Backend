$(document).ready( function(){

    const body = $("body");

    let sidebarSection = $("body").data("sidebar");
    if (sidebarSection.length) {
        $("#"+sidebarSection).addClass("active");
    }

    // DataTables
    let dataTable = $('.dataTable');
    if (dataTable.length) {
        dataTable.DataTable();
    }

    // Select2
    let select2 = $('.select2');
    if (select2.length) {
        select2.select2();
    }

    let abc = $("#speakersList");
    // let speakersAdded = $("#speakersAdded");

    let videosList = $("#videosList");
    if (videosList.length) {
        $("#addVideoBtn").click( function(){
            videosList.append('<div class="video-item mb-2"><textarea class="form-control video-textarea" name="name" rows="4"></textarea><button class="btn btn-soft-danger remove-video" type="button"><span class="fa-solid fa-trash"/></button></div>');
        });
        body.on("click", ".remove-video", function(){
            $(this).parents(".video-item").remove();
        });
    }

    let testimonialsList = $("#testimonialsList");
    if (videosList.length) {
        $("#addTestimonialsBtn").click( function(){
            testimonialsList.append('<div class="card p-2 testimonial-item mb-2"> <textarea class="form-control" name="speaker_item_testimonial" rows="4" cols="80" placeholder="Testimonial text..."></textarea> <input type="text" name="speaker_item_author" class="form-control" placeholder="Testimonial autor"> <a href="javascript:void(0);" class="btn btn-soft-danger remove-testimonial" type="button"><span class="fa-solid fa-trash fs--"></span></a> </div>');
        });
        body.on("click", ".remove-testimonial", function(){
            $(this).parents(".testimonial-item").remove();
        });
    }

    let keyList = $("#keyList");
    if (keyList.length) {
        $("#addKeyBtn").click( function(){
            keyList.append('<div class="key-item mb-2"> <input type="text" class="form-control key-input" name="key_input"> <a href="javascript:void(0);" class="btn btn-soft-danger remove-key"><span class="fa-solid fa-trash fs--"></span></a> </div>');
        });
        body.on("click", ".remove-key", function(){
            $(this).parents(".key-item").remove();
        });
    }

    if (abc.length) {
        // dragula([document.getElementById(speakersList), document.getElementById(speakersAdded)]);
        dragula([document.getElementById("speakersList"), document.getElementById("speakersAdded")], {
            revertOnSpill: true
        })
        .on('drag', function(el) {
            // add 'is-moving' class to element being dragged
            el.classList.add('is-moving');
        })
        .on('dragend', function(el) {
            // remove 'is-moving' class from element after dragging has stopped
            el.classList.remove('is-moving');
            // add the 'is-moved' class for 600ms then remove it
            window.setTimeout(function() {
                el.classList.add('is-moved');
                window.setTimeout(function() {
                    el.classList.remove('is-moved');
                }, 600);
            }, 100);
        });

    }

});
