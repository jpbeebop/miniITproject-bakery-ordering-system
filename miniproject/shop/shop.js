function submitOrder(){

   
    document.getElementById("submitOrder").addEventListener('submit', function(event){
       
            event.preventDefault();

            var allTheData = $("#submitOrder").serialize();

            //alert(allTheData);

            
            $.ajax({
                url: "shop.php",
                type: "post",
                data: allTheData ,
                success: function (response) {
                // you will get response from your php page (what you echo or print) 
                //alert(response);


                if(response === "success"){
                    alert("Ordered successfully!")
                        //showHintSuccess();
                        //alert("eh");
                }

                else if(response === "no order"){
                    alert("Please select the number before order!");
                }

                else if(response === "no session"){
                    window.location.href="../login/login2.html";
                }

                else if(response === "failed"){
                        alert("Please try again later") ///here
                        //alert("userIDExist");
                    
                }
                        
                        
                }

            });

    });

	
}