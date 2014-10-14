<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function generateRandom() {
/*API URL*/
var requestStr = "http://randomword.setgetgo.com/get.php";

        $.ajax({
            type: "GET",
            url: requestStr,
            dataType: "jsonp",
            jsonpCallback: 'displayRandomWord'
        });

}

function displayRandomWord(json_data) {
	document.getElementById("random_place").innerHTML = json_data.Word;
}
</script>
</head>

<?php
echo "Your random word is... <div id='random_place'>NULL</div><br />";
?>
<p onclick="generateRandom()">Click to generate random word</p>
