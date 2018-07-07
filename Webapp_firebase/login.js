	function Validate()
	{
	var designation=document.getElementById("designation");
	var password= document.getElementById("password");
	var phone=document.getElementById("phone");

	var des=designation.value;
	var p=password.value;
	var ph=phone.value;

	var rootRef=firebase.database().ref().child(des);

	rootRef.on("child_added" , snap =>{
		var mob = snap.child("mob_no").val();
		var pass=snap.child("password").val();

		if (pass != p) {
            alert("Passwords do not match.");
            
        }else{
        	alert("Valid Username");
        }
	});
}