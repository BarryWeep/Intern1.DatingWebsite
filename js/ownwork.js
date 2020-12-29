
window.onload = function()
{

	document.getElementById("aboutMe").innerHTML="About Meet you";
	document.getElementById("aboutMeSub").innerHTML="Meet you is a platform that is aimed to help people in China and Australia to know each other.";
	
	document.getElementById("TouchOne").innerHTML="Sydney Meet You";
	document.getElementById("TouchTwo").innerHTML="Telephone :";
	document.getElementById("TouchThree").innerHTML="FAX :";
	document.getElementById("TouchFou").innerHTML="Email:";
	
	document.getElementById("postOne").innerHTML="Love story one";
	document.getElementById("postTwo").innerHTML="Love story two";
	document.getElementById("postThree").innerHTML="Love story three";
	document.getElementById("postFour").innerHTML="Love story four";
	document.getElementById("postFive").innerHTML="Love story five";
	document.getElementById("postSix").innerHTML="Love story six";
	
	document.getElementById("copyright_main").innerHTML="Copyright &copy; 2020.Meet You. All rights reserved.";
	document.getElementById("aboutMe").innerHTML="About Meet you";

	Update_new();
	
	
	
}

window.onclick  = function()
{
	Update_new();
}


function Feedback()
{
	var name = document.getElementById("name").value
	var email = document.getElementById("email").value
	var phone = document.getElementById("phone").value
	var comment = document.getElementById("comment").value
	document.getElementById("show").innerHTML=comment;
	
}


function Update_new()
{
	
	document.getElementById("newone").innerHTML="Title: New Rule of living";
	//document.getElementById("newonedate").innerHTML.childNodes="January 15, 2016 /John Doe/Uncategorized";
	document.getElementById("newonedes").innerHTML="we adapted to the new reality, turning living rooms into offices and bedrooms into classrooms. For many, the morning commute came to be measured in metres not miles. And many didn't even have to travel that far. Our workplaces could often fit neatly in the palms of our disinfected hands.";
	
	
	document.getElementById("newtwo").innerHTML="Title: Covid-19 Vaccine";
	//document.getElementById("newtwodate").innerHTML="January 15, 2016 /John Doe/Uncategorized";
	document.getElementById("newtwodes").innerHTML="As the global race to produce a Covid-19 vaccine continues, China appears to have made huge strides, with vaccines from two front-runners - Sinovac and Sinopharm - already making their way abroad.";
	
	document.getElementById("newthree").innerHTML="Title: New Wine Taste";
	//document.getElementById("newthreedate").innerHTML="January 15, 2016 /John Doe/Uncategorized";
	document.getElementById("newthreedes").innerHTML="Nowhere has this been more pronounced than in China, where 54% of respondents to a Wine Intelligence survey in August said they were now buying more Chinese wine compared to pre-pandemic levels.";
	
	document.getElementById("newfour").innerHTML="Title: Chinese drone and chip makers";
	//document.getElementById("newfourdate").innerHTML="January 15, 2016 /John Doe/Uncategorized";
	document.getElementById("newfourdes").innerHTML="Chinese drone and chip makersWe're adding SMIC to the Entity List mostly because we need to make sure US intellectual property and manufacturing capabilities are not being used by SMIC's clients to continue to support the military-civil fusion efforts within China,a senior official in the US Commerce Department said.";
}

