$(document).ready(function(){
    
    $('.input').focus(function(){
      $(this).parent().find(".label-txt").addClass('label-active');
    });
  
    $(".input").focusout(function(){
      if ($(this).val() == '') {
        $(this).parent().find(".label-txt").removeClass('label-active');
      };
    });

    $('#submit').click(function(){
        var image_name = $('#image').val();
        if(image_name == '')
        {
          alert("Please Select Image");
          return false;
        }
        else 
        {
          var extension = $('#image').val().split('.').pop().toLowerCase();
          if(jQuery.inArray(extension, ['jpg', 'jpeg', 'png']) == -1)
          {
            alert("Invalid Image File");
            $('#image').val('');
            return false;
          }
        }
    });

  
  });