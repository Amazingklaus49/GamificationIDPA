<html>
<head>
    <title>Gamification</title>
    <link rel="stylesheet" href="multiple.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "multiple_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT COUNT(id) FROM qa";
$query = mysqli_query($conn, $sql);
$solution = mysqli_fetch_assoc($query);
$maxQuestions = $solution['COUNT(id)'];
?>

<img class="titel" src="images/titel/titelmultiple.png">

<?php
if (isset($_GET["number"])) {
    $questionId = (int)$_GET["number"] ?? 0;
} else {
    echo "Fehler";
}
if (isset($_GET["correct"])) {
    $correct = (int)$_GET["correct"] ?? 0;
} else {
    echo "Fehler";
}

if($questionId == $maxQuestions+1) {
    header("Location:http://localhost:63342/GamificationIDPA/idpa_gamification/.idea/src/multipleDone.php?correct=$correct");
}

$sql = "SELECT question FROM qa WHERE id = '$questionId'";
$question = $conn->query($sql);

if ($question->num_rows > 0) {
    while ($row = $question->fetch_assoc()) {
        echo "<h2> Question: " . $row["question"] . "</h2>";
    }
}

$sql = "SELECT solution, fake1, fake2, fake3 FROM qa WHERE id = '$questionId'";
$question = $conn->query($sql);

if ($question->num_rows > 0) {
    while ($row = $question->fetch_assoc()) {
        $answersArray = [
        $solution = $row["solution"],
        $fake1 = $row["fake1"],
        $fake2 = $row["fake2"],
        $fake3 = $row["fake3"]
        ];
    shuffle($answersArray);
    }
}

?>
<form method="post" >
<div class="radioGroup">
    <div class="innerRadioGroup">
        <label class="radio">
            <input name="radio" type="radio" value="<?php echo array_values($answersArray)[0] ?>" checked>
            <?php echo "<span>".array_values($answersArray)[0]."</span>"?>
        </label>
        <label class="radio">
            <input name="radio" type="radio" value="<?php echo array_values($answersArray)[1] ?>">
            <?php echo "<span>".array_values($answersArray)[1]."</span>"?>
        </label>
        <label class="radio">
            <input name="radio" type="radio" value="<?php echo array_values($answersArray)[2] ?>">
            <?php echo "<span>".array_values($answersArray)[2]."</span>"?>
        </label>
        <label class="radio">
            <input name="radio" type="radio" value="<?php echo array_values($answersArray)[3] ?>">
            <?php echo "<span>".array_values($answersArray)[3]."</span>"?>
        </label>
    </div>
</div>
<button name="submit" type="submit" class="button">Überprüfen</button>
</form>

<p style="text-align: center">Korrekte Antworten: <?php echo $correct;?> / <?php echo $maxQuestions;?></p>

<?php

if (isset ($_POST['submit'])) {

    $value = $_POST['radio'];
    echo $userInput;
    if ($value == $solution) {
        $correct++;
        $questionId++;
    } else {
        $questionId++;
    }
    header("Location:http://localhost:63342/GamificationIDPA/idpa_gamification/.idea/src/multiple.php?number=$questionId&correct=$correct");
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

            <a href="abfrage.php?number=1&correct=0"">Abfrage</a>

            <a href="multiple.php?number=1&correct=0"">Multiple-Choice</a>

            <a href="highscores.php">HighScores</a>

            <a href="mailto:sutter.marc@hispeed.ch">Contact</a>
        </p>

        <p>Marc Sutter & Samuel Wachter IDPA &copy; 2023</p>
    </div>
</footer>
</body>
</html>