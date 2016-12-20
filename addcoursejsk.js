function validate(){
var q = document.forms['addco']['s_id'].value;
    if ((q == ""){
		document.getElementById('sid').style.borderColor = 'red';
		   alert("empty phone number");
        return false;
    }else{
		window.open("http://www.w3schools.com");
	}