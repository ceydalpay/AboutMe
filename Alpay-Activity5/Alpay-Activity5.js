var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
};

function displayResults()
{
	var sum = 0;

	for(var i=0;i<scores.length;i++)
	{
		sum += scores[i];
	}

	var average = sum / scores.length;

	var highest = scores[0];

	var highestOne = names[0];

	for(var j=1; j<scores.length; j++)
	{
		if(scores[j]>highest)
		{
			highest=scores[j];
			highestOne=names[j];
		}
	}
	
	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score is "+average + "<br \>" + 
	"High score = " + highestOne + " with a score of " + highest
}

function displayScores()
{
	var HTML = "<h2> Scores </h2><br />";

	HTML += "<tr><th> Name </th>"
	HTML += "<th> Score </th> </tr>"

	for(var i=0; i<names.length; i++)
	{
		HTML += "<tr> <td>" + names[i] +"</td>";

		HTML += "<td>"+ scores[i] +"</td> </tr>"
	}

	document.getElementById("scores_table").innerHTML = HTML;
}

function addScore(){

	var name = document.getElementById("name").value;

	var score = parseInt(document.getElementById("score").value);

	if(name == "" || score<0 || score>100)
	{
		alert("You must enter a name and a valid score");
	}

	else{
	names.push(name);

	scores.push(score);

	}

}







