 document.forms[0].onsubmit = validate; 
 document.onclick = targetElement;
 document.onkeydown = keypress;
 
///validate form no input
	function validate() {
		var errors="";
		
		for(var i=0; i < 7; i++) {
				if(document.forms[0].elements[i].type == "text") {
					if(document.forms[0].elements[i].value == "") {
							errors += "Empty "+document.forms[0].elements[i].id+" field \n";
						}
					}
				else if(document.forms[0].elements[i].type == "password") {
					if(document.forms[0].elements[i].value == "") {
							errors +="Empty " +document.forms[0].elements[i].id+" field \n";
							
					}
					
				}
			}//end of for loop
				if(errors.length == 0){
					return true;
				}
				else {
					alert(errors);
					return false;
				}
		
		}// end of validate
	
	var fname = document.getElementById("firstname");
	var lname = document.getElementById("lastname");
	var email = document.getElementById("email");
	var username = document.getElementById("username");
	var password = document.getElementById("password");
	var cpassword = document.getElementById("confirm_password");
	
	
	
	function val_input(field_ID){
		switch(field_ID) {
		case "firstname":
			fname.onblur = function () {
			if(fname.value != "") {
				var getspan = document.getElementById("fspan");
				var pattern = /^\s*[A-z]{2,20}$/;
				if(!getspan.hasChildNodes()){
					if(!pattern.test(fname.value)) getspan.innerHTML = "Names must consist of at least 2 alphabets(only)"
				} else if (getspan.hasChildNodes() && pattern.test(fname.value)) {
						var RemoveWarn_Text = getspan.removeChild(getspan.firstChild); 
				}
			
			} //end of if statement
		}; //end of case 1;
		case "lastname":
			lname.onblur = function () {
			if(lname.value != "") {
				var getspan = document.getElementById("lspan");
				var pattern = /^\s*[A-z]{2,20}$/;
				if(!getspan.hasChildNodes()){
					if(!pattern.test(lname.value)) getspan.innerHTML = "Names must consist of at least 2 alphabets(only)"
				} else if (getspan.hasChildNodes() && pattern.test(fname.value)) {
						var RemoveWarn_Text = getspan.removeChild(getspan.firstChild); 
				}
			
			} //end of if statement
		};//end of case 2
		case "email":
			email.onblur = function () {
				if(email.value != "") {
					var getspan = document.getElementById("espan");
					var pattern = /^\s*[\w&$_-]+@\w+.\w{2,}(.\w+)?$/;
					if(!getspan.hasChildNodes()){
						if(!pattern.test(email.value)) getspan.innerHTML ="Please enter a valid email address"
					} else if(getspan.hasChildNodes() && pattern.test(email.value)) {
						var RemoveWarn_Text = getspan.removeChild(getspan.firstChild);
					}
				}
			};
		
		} //end of switch
		
	}//end of val_input
	
	
	//get the target elements
	function targetElement(e){
		var elem, evt = e ? e : event;
		if(evt.srcElement) elem = evt.srcElement;
		else if(evt.target) elem = evt.target;
		val_input(elem.id);
		return true;
		
	}
	
	function keypress(e){
		var evt = window.event || e;
		var key = evt.keyCode;
		if (key == 32){
			if(evt.preventDefault) evt.preventDefault();
			else evt.returnValue = false;
		}
	}
	
	
