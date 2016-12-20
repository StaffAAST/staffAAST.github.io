function validate(){
    var x = document.forms['addstudent']['fn'].value;
    if (x == "") {
		document.getElementById('s1').style.borderColor = 'red';
		   alert("empty first name");
        return false;
    }else{     
	
		window.open("http://www.w3schools.com");
	}
	
    var y = document.forms['addstudent']['ln'].value;
    if (y == "") {
		document.getElementById('s2').style.borderColor = 'red';
		   alert("empty last name");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}
	
	  var z = document.forms['addstudent']['em'].value;
    if ((z == ""){
		document.getElementById('s3').style.borderColor = 'red';
		   alert("empty email");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}
	  var u = document.forms['addstudent']['ph'].value;
	       if (u == ""){
		document.getElementById('s4').style.borderColor = 'red';
		   alert("empty phone number");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}
}