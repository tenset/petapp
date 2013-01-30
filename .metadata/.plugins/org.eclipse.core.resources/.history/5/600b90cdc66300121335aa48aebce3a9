/**
 * @author Ten
 */
	
	
	var username = document.getElementById("username");
	var check = document.getElementById("check_username");
	username.onfocus = function(){
		//document.writeln(check.childNodes.length);
			username.onkeyup = function() {
				if(!check.hasChildNodes()) {
		var preloader = document.createElement("img");
		preloader.src = "images/ajax-loaders.gif";
		preloader.width = 15;
			preloader.height = 15;
		check.appendChild(preloader);
			}
		} //end of onfocus
		username.onblur = function() {
			//remove loader on blur
			if(check.childNodes.length == 1){
				var formerChild = check.removeChild(check.firstChild);
			} 
			showUser();
		} //end of onblur
	}
	
	function showUser() {
		var username = document.getElementById("username");
		if(username.value == ""){
			document.getElementById("check_username").innerHTML = "";
			return;
		}
		var params = "user_name=" + username.value;
		//cater for other browsers later
		var request = new XMLHttpRequest();
		request.open("POST","usernameAjax.php",true);
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//ajax calls
		request.onreadystatechange = function(){
			if(request.readyState == 4){
				if(request.status == 200){
					if(request.responseText != null ) {
						document.getElementById("check_username").innerHTML = request.responseText;
					}
					else alert("Ajax error: No data received")
				}
				else alert("Ajax error : "+request.statusText);
			}
		}
		request.send(params);
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	