<html>
<head>
    <title>Gamification</title>
    <link rel="stylesheet" href="abfrage.css">

</head>

<body style="background-color: black">

<img class="titel" src="images/titel/titelabfrage.png">

<div class="break"></div>

<h2>Geben Sie Ihren Namen ein</h2>
<form class="forms" method="post">
    <div class="form__group field">
        <input type="input" class="form__field" placeholder="Username" name="userInput" id="name" required/>
        <label for="name" class="form__label">Username</label></div>
    <br>
    <button class="button" type="submit" name="submit">Abfrage</button>
    <br>
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "qanda_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["correct"])) {
    $score = $_GET["correct"];
} else {
    echo "Fehler";
}

$sql = "SELECT id, question, answer FROM QandA";
$question = $conn->query($sql);

$sql = "SELECT COUNT(id) FROM QandA";
$query = mysqli_query($conn, $sql);
$solution = mysqli_fetch_assoc($query);
$maxQuestions = $solution['COUNT(id)'];

if (isset ($_POST['submit'])) {
    $userInput = $_POST['userInput'];
    $sql = "INSERT INTO HighScore (username, score)
    VALUES ('$userInput', '$score');";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Highscore eingetragen!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "<h2>Highscores:</h2>";

$sql = "SELECT id, username, score FROM HighScore ORDER BY score DESC";
$highscores = $conn->query($sql);

if ($highscores->num_rows > 0) {
    // output data of each row
    while ($row = $highscores->fetch_assoc()) {
        echo " - Username: " . $row["username"] . " | Score: " . $row["score"] . " / $maxQuestions" . "<br>";
    }
} else {
    echo "0 results";
}

?>

<section></section>
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

            <a href="multiple.php">Multiple-Choice</a>

            <a href="zuordnen.php">Zuordnen</a>

            <a href="mailto:sutter.marc@hispeed.ch">Contact</a>
        </p>

        <p>Marc Sutter & Samuel Wachter IDPA &copy; 2023</p>
    </div>
</footer>
</body>
</html>