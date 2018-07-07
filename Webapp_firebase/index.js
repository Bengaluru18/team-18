
var emailid=document.getElementById("emailid");
var password= document.getElementById("password");
var repassword=document.getElementById("repassword");
var submitBtn=document.getElementById("submitBtn");

function submitClick()
{
	var firebaseRef = firebase.database().ref();
	var e = emailid.value;
	var p = password.value;
	firebaseRef.push().set(e);
	firebaseRef.push().set(p);

}