
// Code to refresh the document in the same page

$(function () {
    var mobile = 1;
    $(window).load(function () {

    });

    $( "#target" ).submit(function( event ) {

      var $form = $(this);
      // Serialize the data in the form
      var serializedData = $form.serialize();

       // Fire off the request to /form.php
      request = $.ajax({
          url: "Curl.php",
          type: "post",
          data: serializedData
      });

     // Callback handler that will be called on success
      request.done(function (response, textStatus, jqXHR){
          // Log a message to the console
          
          $('#result').empty();
          $('#result').append("<p>"+response+"</p>");

      });
      event.preventDefault();
    });

});
