function sendMessage(){

    alert("Sending message, please wait...")

    document.getElementById("sendMessage").addEventListener('submit', function(event){
       
            event.preventDefault();

            var allTheData = $("#sendMessage").serialize();

            //alert(allTheData);

            
            $.ajax({
                url: "sendEmail.php",
                type: "post",
                data: allTheData ,
                success: function (response) {
                // you will get response from your php page (what you echo or print) 
                //alert(response);

                if(response === "success"){
                        alert("message sent!");
                }

                else if(response === "failed"){
                        alert("Ops, something is wrong with the server. Please try again later.");
                    }

                else if(response === "empty message"){
                    alert("Please fill in the message!");
                }

                else if(response === "no session"){
                    window.location.href="../login/login2.html";
                }

                        
                }

            });

    });

	
}