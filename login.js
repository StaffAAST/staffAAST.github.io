function validate(){
var w = document.forms['myForm']['user'].value;
    if ((w == ""){
		document.getElementById('l1').style.borderColor = 'red';
		   alert("empty phone number");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}