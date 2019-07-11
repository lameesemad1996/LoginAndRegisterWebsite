var imported = document.createElement('jquery-3.4.1.min.js');
imported.src = '/js';
document.head.appendChild(imported);

$(document).ready(function(){
    
    /*$("#submit").click(function(){
        name = $("#name").val();
        email = $("#email").val();
        password = $("#password").val();

        $.ajax({
          type: "POST",
          url: "submit.php",
          data: "name=" + name + "&email=" + email + "&password=" + password,
          success: function (html) {
            if(html == 'true') {
              alert("Hello! I am an alert box!!");

              $("#add_err2").html('<div class="alert alert-success"> \
                                  <strong> Account </strong> processed. \ \
                                  </div>');
              window.location.href="profile.php";
            } else if (html == 'false') {
              $("#add_err2").html('<div class="alert alert-danger"> \
              <strong> Email Address </strong> already existing. \ \
              </div>');
            } else if (html == 'name') {
              alert("Hello! I am an alert box!!");

              $("#add_err2").html('<div class="alert alert-danger"> <strong> Name </strong> is required. </div>');
            } else if (html == 'eshort') {
              $("#add_err2").html('<div class="alert alert-danger"> \
              <strong> Email Address </strong> is required. \ \
              </div>');
            } else if (html == 'eformat') {
              $("#add_err2").html('<div class="alert alert-danger"> \
              <strong> Email Address </strong> format is not valid. \ \
              </div>'); 
            } else if (html == 'pshort') {
              $("#add_err2").html('<div class="alert alert-danger"> \
              <strong> Password </strong> must be at least 4 characters long. \ \
              </div>');
            } else {
              $("#add_err2").html('<div class="alert alert-danger"> \
              <strong> Error </strong> processing request. Please try again. \ \
              </div>');
            }

          },
          beforeSend: function() {
              $("#add_err2").html("loading...");
          } 

        });
        return false;
    });
    */

    $('.input').focus(function(){
      $(this).parent().find(".label-txt").addClass('label-active');
    });
  
    $(".input").focusout(function(){
      if ($(this).val() == '') {
        $(this).parent().find(".label-txt").removeClass('label-active');
      };
    });
    
    $('#submit').click(function(){
        
        $name = $("#name").val();
        $email = $("#email").val();
        $password = $("#password").val();
        
        if($name == "") {
          alert("Please enter your name!");
          window.location.href="index.php";
        }
        if($email == "")  {
          alert("Please enter your email!");
          window.location.href="index.php";
        }
        if($password == "") {
          alert("Please enter your passsword!");
          window.location.href="index.php";
        }
        
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