<script>
    $(function(){
      $("#edit_Form").submit(function(e){
        var validated = true,
        gender = $("input[name='gender']");
        lastname = $("input[name='lastname']"),
        firstname = $("input[name='firstname']"),
        age = $("input[name='age']"),


        $(this).find(".error").remove();
        if(!gender.is(':checked')){
          validated = false;
          gender.parent().css("color", "red");
          gender.parent().parent().append("<span class='error'>Please select your gender</span>");
          $(".error").fadeIn(500);
        }else{
          gender.parent().css("color", "black");
          gender.parent().parent().find(".error").remove();
        }
        if(lastname.val().length < 3){
          validated = false;
          lastname.css("border-color", "red");
          lastname.parent().append("<span class='error'>Your last name cannot be less than 3 characters</span>");
          $(".error").fadeIn(500);
        }else{
          lastname.css("border-color", "green");
          lastname.parent().find(".error").remove();
        }
        if(firstname.val().length < 3){
          validated = false;
          firstname.css("border-color", "red");
          firstname.parent().append("<span class='error'>Your first name cannot be less than 3 characters</span>");
          $(".error").fadeIn(500);
        }else{
          firstname.css("border-color", "green");
          firstname.parent().find(".error").remove();
        }


        if(age.val() <18 || age.val() >150){
          validated = false;
          age.css("border-color", "red");
          age.parent().append("<span class='error'> Your age must be between 18 and 150</span>");
          $(".error").fadeIn(500);
        }else{
          age.css("border-color", "green");
          age.parent().find(".error").remove();
        }

        if( document.getElementById("avatar").files.length == 0 ){
                validated = false;
                $('#avatar').css("border-color", "red");
                $('#avatar').parent().append("<span class='error'>File is not chosen.</span>");
                $(".error").fadeIn(500);
            }else{
                cPassword.css("border-color", "green");
                cPassword.parent().find(".error").remove();
            }

        if(validated){
          msg = "Form submitted\n\n";
          msg += "Gender: " + $("input[name='gender']:checked").val() + "\n";
          msg += "FirststName: " + firstname.val() + "\n";
          msg += "LastName: " + lastname.val() + "\n";
          msg += "Age: " + age.val() + "\n";


          var confirmed= confirm(msg);
          if (confirmed)
          return true;
        else
             return false;
        }
        return false;
      })
    });
  </script>