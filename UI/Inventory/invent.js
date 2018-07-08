
var equipid=document.getElementById("equipid");
var state= document.getElementById("state");
var center=document.getElementById("center");
var priceperday=document.getElementById("priceperday");
var isallocated=document.getElementById("isallocated");
var type=document.getElementById("type");

function submitClick()
{
	var firebaseRef = firebase.database().ref("State/");
    var e=equipid.value;
    var s=state.value;
    var c=center.value;
    var t=type.value;
    var p=priceperday.value;
    var i=isallocated.value;


	firebaseRef.child(s).child(c).child(e).set({
		"isallocated":i,
		"Type":t,
		"PricePerDay":p,

	});

}