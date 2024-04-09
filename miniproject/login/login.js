
function showHintLoginFailed(){
    document.getElementById("loginFailed").style.display="block";
}


function submitLoginData(){


    document.getElementById("submitLogin").addEventListener('submit', function(event){
       
            event.preventDefault();

            var allTheData = $("#submitLogin").serialize();

            //alert(allTheData);

            
            $.ajax({
                url: "login.php",
                type: "post",
                data: allTheData ,
                success: function (response) {
                // you will get response from your php page (what you echo or print) 
                //alert(response);
                console.log(response.trim() == "success!");


                if(response.trim() == "success!"){
                    //alert("ok");
                        redirectToHomePage();
              
                }

                else{
                    //alert("failed");
                    showHintLoginFailed();
                }
                        
                        
                }

            });

    });

	
}

function redirectToHomePage(){
	window.location.href="../index.php";
}


