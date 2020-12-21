
window.onload = function()
{
	
	document.getElementById("copyright_main").innerHTML="Copyright &copy; 2020.Meet You. All rights reserved.";
	document.getElementById("aboutMe").innerHTML="About Meet you";
	
	
	document.getElementById("aboutMe").innerHTML="About Meet you";
	document.getElementById("aboutMeSub").innerHTML="Meet you is a platform that is aimed to help people in China and Australia to know each other.";
	
	
	document.getElementById("TouchOne").innerHTML="Sydney Meet You";
	document.getElementById("TouchTwo").innerHTML="Telephone :";
	document.getElementById("TouchThree").innerHTML="FAX :";
	document.getElementById("TouchFou").innerHTML="Email:";
	
	document.getElementById("postOne").innerHTML="Love story one";
	document.getElementById("postTwo").innerHTML="Love story two";
	document.getElementById("postThree").innerHTML="Love story three";
	document.getElementById("postFour").innerHTpostOneML="Love story four";
	document.getElementById("postFive").innerHTML="Love story five";
	document.getElementById("postSix").innerHTML="Love story six";
	
}

function Feedback()
{
	var name = document.getElementById("name").value
	var email = document.getElementById("email").value
	var phone = document.getElementById("phone").value
	var comment = document.getElementById("comment").value
	document.getElementById("show").innerHTML=comment;
	
}

