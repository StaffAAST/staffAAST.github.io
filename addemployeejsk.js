function validate(){
    var i = document.forms['addemp']['fn'].value;
    if ((i == ""){
		document.getElementById('e1').style.borderColor = 'red';
		   alert("empty first name");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}
	
    var p = document.forms['addemp']['ln'].value;
    if ((p == ""){
		document.getElementById('e2').style.borderColor = 'red';
		   alert("empty last name");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}
	
	  var k = document.forms['addemp']['em'].value;
    if ((k == ""){
		document.getElementById('e3').style.borderColor = 'red';
		   alert("empty email");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}
	  var a = document.forms['addemp']['ph'].value;
    if ((a == ""){
		document.getElementById('e4').style.borderColor = 'red';
		   alert("empty phone number");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}
}