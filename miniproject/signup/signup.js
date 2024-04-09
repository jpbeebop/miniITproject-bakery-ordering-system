function showHintPswNotMatching(){
    document.getElementById("promptSignUp").style.display="none";
    document.getElementById("emailExist").style.display="none";
    document.getElementById("pswNotMatch").style.display="block";
    document.getElementById("weakPassword").style.display="none";
    document.getElementById("emptyFields").style.display="none";
    document.getElementById("invalidName").style.display="none";
    document.getElementById("invalidEmail").style.display="none";
    document.getElementById("invalidPhone").style.display="none";
}

function showEmailExist(){
    document.getElementById("promptSignUp").style.display="none";
    document.getElementById("pswNotMatch").style.display="none";
    document.getElementById("emailExist").style.display="block";
    document.getElementById("weakPassword").style.display="none";
    document.getElementById("emptyFields").style.display="none";
    document.getElementById("invalidName").style.display="none";
    document.getElementById("invalidEmail").style.display="none";
    document.getElementById("invalidPhone").style.display="none";
}

function showHintWeakPassword(){
    document.getElementById("promptSignUp").style.display="none";
    document.getElementById("pswNotMatch").style.display="none";
    document.getElementById("emailExist").style.display="none";
    document.getElementById("weakPassword").style.display="block";
    document.getElementById("emptyFields").style.display="none";
    document.getElementById("invalidName").style.display="none";
    document.getElementById("invalidEmail").style.display="none";
    document.getElementById("invalidPhone").style.display="none";
}

function showHintEmptyFields(){
    document.getElementById("promptSignUp").style.display="none";
    document.getElementById("pswNotMatch").style.display="none";
    document.getElementById("emailExist").style.display="none";
    document.getElementById("weakPassword").style.display="none";
    document.getElementById("emptyFields").style.display="block";
    document.getElementById("invalidName").style.display="none";
    document.getElementById("invalidEmail").style.display="none";
    document.getElementById("invalidPhone").style.display="none";
}

function showHintInvalidName(){
    document.getElementById("promptSignUp").style.display="none";
    document.getElementById("pswNotMatch").style.display="none";
    document.getElementById("emailExist").style.display="none";
    document.getElementById("weakPassword").style.display="none";
    document.getElementById("emptyFields").style.display="none";
    document.getElementById("invalidName").style.display="block";
    document.getElementById("invalidEmail").style.display="none";
    document.getElementById("invalidPhone").style.display="none";
}

function showHintInvalidEmail(){
    document.getElementById("promptSignUp").style.display="none";
    document.getElementById("pswNotMatch").style.display="none";
    document.getElementById("emailExist").style.display="none";
    document.getElementById("weakPassword").style.display="none";
    document.getElementById("emptyFields").style.display="none";
    document.getElementById("invalidName").style.display="none";
    document.getElementById("invalidEmail").style.display="block";
    document.getElementById("invalidPhone").style.display="none";
}

function showHintPhoneNumber(){
    document.getElementById("promptSignUp").style.display="none";
    document.getElementById("pswNotMatch").style.display="none";
    document.getElementById("emailExist").style.display="none";
    document.getElementById("weakPassword").style.display="none";
    document.getElementById("emptyFields").style.display="none";
    document.getElementById("invalidName").style.display="none";
    document.getElementById("invalidEmail").style.display="none";
    document.getElementById("invalidPhone").style.display="block";
}


/*$(document).ready(funtion(){

    $('#submitLogin').submit(function(e){
        e.preventDefault();

        var allTheData = $(".submitLogin").serialize();

        alert(allTheData);
    
        $.ajax({
            url: "submit.php",
            type: "post",
            data: allTheData ,
            success: function (response) {
               // you will get response from your php page (what you echo or print) 
               alert(response);
    
    
               if(response === "success"){
                       //showHintSuccess();
                       alert("eh");
               }
                  else if(response === "fail"){
                      showEmailExists(); ///here
                      //alert("userIDExist");
                  }
                  else{
                      showHintPswNotMatching();
                      //alert("notMatching");
                  }
                      
                      
            }
    
        });
    })
})*/

function submitSignUpData(){

    document.getElementById("submitSignUp").addEventListener('submit', function(event){
       
            event.preventDefault();

            var allTheData = $("#submitSignUp").serialize();

            //alert(allTheData);

            
            $.ajax({
                url: "submit.php",
                type: "post",
                data: allTheData ,
                success: function (response) {
                // you will get response from your php page (what you echo or print) 
                //alert(response);


                if(response === "success"){
                    alert("Registered Successfully");
                    redirectToLogin();
                        //showHintSuccess();
                        //alert("eh");
                }

                else if(response === "fail"){
                        showEmailExist(); ///here
                        //alert("userIDExist");
                    }

                else if(response === "notMatching"){
                        showHintPswNotMatching();
                        //alert("notMatching");
                    }
                
                else if(response === "weak password"){
                    showHintWeakPassword();
                }

                else if(response === "empty fields"){
                    showHintEmptyFields();
                }

                else if(response === "invalid name"){
                    showHintInvalidName();
                }

                else if(response === "invalid email"){
                    showHintInvalidEmail();
                }

                else if(response === "invalid phone"){
                    showHintPhoneNumber();
                }
                        
                        
                }

            });

    });

	
}

function redirectToLogin(){
	window.location.href="../login/login2.html";
}