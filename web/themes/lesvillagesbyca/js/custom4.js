(function ($) {
  $(document).on("click", "input[type='reset']", function(e){
    e.preventDefault(); 
    // effacer le champs de saisie du formulaire
    $( "input[id^='edit-field-village-vocabulaire-target-id']" ).val( "" );
   // submit le formulaire avec ajax
    $("#views-exposed-form-recherche-villages-principal-block").submit(function(event){
        event.preventDefault(); //prevent default action 
        var post_url = $(this).attr("action"); //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method
      var form_data = new FormData(this); //Creates new FormData object
        $.ajax({
            url : post_url,
            type: request_method,
            data : form_data,
        contentType: false,
        cache: false,
        processData:false
        }).done(function(response){ //
          alert('OK')
        });
    });
  });
})(jQuery);