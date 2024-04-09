$(document).ready(function () {
	//alert("dsdsdsd");
	getInfo();
	getSummary();
});


function getInfo() {

	$.ajax({

		url:"getInfo.php",
		type:"get",
		success: function(info){

			var infoArray = JSON.parse(info);

			/*for (var key in infoArray){

				if(infoArray.hasOwnProperty(key))
					alert(infoArray[key]);

			}*/

			document.getElementById("name").placeholder = infoArray["name"];

			document.getElementById("email").placeholder = infoArray["email"];

			document.getElementById("phone").placeholder = infoArray["hp"];

			}
	
	});
}

function getSummary(){

	$.ajax({

		url:"getSummary.php",
		type:"get",
		success: function(response){

			//alert(response);


			document.getElementById("summary").innerHTML=JSON.stringify(response);

		

			}
	
	});
}

function submitEditData(){
	

	document.getElementById("submitProfileUpdate").addEventListener('submit', function(event){
		
		event.preventDefault();

		var allTheData = $("#submitProfileUpdate").serialize();

			//alert(allTheData);

			$.ajax({
				url:"profileUpdate.php",
				type: "post",
				data: allTheData,
				success:function(response){

					//alert(response);

					if(response === "success"){
							alert("Profile updated successfully!");
							location.reload();
					}

					else if(response === "invalid name"){
						alert("invalid name!");
					}

					/*else if(response === "invalid email"){
						alert("invalid email format");
					}*/

					else if(response === "invalid phone"){
						alert("invalid phone number!");
					}

					else if(response === "empty"){
						alert("profile updated");
					}

					else if(response === "no session"){
						window.location.href="../login/login2.html";
					}

				}
			});
	})	
	
}

function logOut(){

	$.ajax({
		type:"GET",
		url:"../temp/killSession.php",
		success:function(response){
		
			window.location.href="../login/login2.html";
		}
	});

}


