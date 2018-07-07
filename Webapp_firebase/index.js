
var first_name=document.getElementById("first_name");
var last_name= document.getElementById("last_name");
var intials=document.getElementById("intials");
var gender=document.getElementById("gender");
var dob=document.getElementById("dob");
var street= document.getElementById("street");
var city=document.getElementById("city");
var state=document.getElementById("state");
var mob_no=document.getElementById("mob_no");
var alt_no= document.getElementById("alt_no");
var photo=document.getElementById("photo");
var submitBtn=document.getElementById("submitBtn");

function submitClick()
{
	var firebaseRef = firebase.database().ref("abcd");

	var f=first_name.value;
	var l=last_name.value;
	var i=intials.value;
	var g=gender.value;
	var d=dob.value;
	var s=street.value;
	var c=city.value;
	var st=state.value;
	var mob=mob_no.value;
	var alt=alt_no.value;
	var ph=photo.value;

	firebaseRef.child(mob).set({
		"first_name":f,
		"last_name":l,
		"intials":i,
		"gender":g,
		"dob":d,
		"street":s,
		"city":c,
		"state":st,
		"mob_no":mob,
		"alt_no":alt

	});

}