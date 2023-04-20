<html>
<head>
    <title>Gamification</title>
    <link rel="stylesheet" href="abfrage.css">

</head>

<body style="background-color: black">

<img class="titel" src="images/titel/titelabfrage.png">

<div class="break"></div>

<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "qanda_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, question, answer FROM QandA";
$question = $conn->query($sql);

$sql = "SELECT COUNT(id) FROM QandA";
$query = mysqli_query($conn, $sql);
$solution = mysqli_fetch_assoc($query);
$maxQuestions = $solution['COUNT(id)'];

echo "<h2>Highscores:</h2>";

$sql = "SELECT id, username, score FROM HighScore ORDER BY score DESC";
$highscores = $conn->query($sql);

if ($highscores->num_rows > 0) {
    while ($row = $highscores->fetch_assoc()) {
        echo " - Username: " . $row["username"] . " | Score: " . $row["score"] . " / $maxQuestions" . "<br>";
    }
} else {
    echo "nothing found";
}

?>

<section></section>

<br>

<img class="titel" src="images/titel/titelmultiple.png">

<div class="break"></div>

<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "multiple_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, question, solution FROM qa";
$question = $conn->query($sql);

$sql = "SELECT COUNT(id) FROM qa";
$query = mysqli_query($conn, $sql);
$solution = mysqli_fetch_assoc($query);
$maxQuestions = $solution['COUNT(id)'];

echo "<h2>Highscores:</h2>";

$sql = "SELECT id, username, score FROM HighScore ORDER BY score DESC";
$highscores = $conn->query($sql);

if ($highscores->num_rows > 0) {
    while ($row = $highscores->fetch_assoc()) {
        echo " - Username: " . $row["username"] . " | Score: " . $row["score"] . " / $maxQuestions" . "<br>";
    }
} else {
    echo "nothing found";
}

?>

<br><br><br><br>
<footer class="footer-distributed">

    <div class="footer-right">

        <a href="https://github.com/Amazingklaus49"><i class="fa fa-github"></i><img style="width: 35px; height: 35px"
                                                                                     src="images/github.png"></a>
        <a href="https://www.kbw.ch/startseite"><i class="fa fa-kbw"></i><img style="width: 35px; height: 35px"
                                                                              src="images/kbw.png"></a>
        <a href="#"><i class="fa fa-linkedin"></i><img style="width: 35px; height: 35px" src="images/twitter.png"></a>
        <a class="wiki" href="https://lotr.fandom.com/de/wiki/Der_Herr_der_Ringe_Wiki"><i class="fa fa-wiki"></i><img
                style="width: 35px; height: 35px" src="images/wiki.png"></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="index.php">Home</a>

            <a href="abfrage.php?number=1&correct=0">Abfrage</a>

            <a href="multiple.php?number=1&correct=0"">Multiple-Choice</a>

            <a href="highscores.php">HighScores</a>

            <a href="mailto:sutter.marc@hispeed.ch">Contact</a>
        </p>

        <p>Marc Sutter & Samuel Wachter IDPA &copy; 2023</p>
    </div>
</footer>
</body>
</html>