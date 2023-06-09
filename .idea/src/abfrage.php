<html>
<head>
    <title>Gamification</title>
    <link rel="stylesheet" href="abfrage.css">

    <script type="text/javascript">
        function timedMsg() {
            var t = setTimeout("document.getElementById('myMsg').style.display='none';", 2000);
        }
    </script>
</head>

<body style="background-color: black">

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
?>

<img class="titel" src="images/titel/titelabfrage.png">

<div class="break"></div>

<?php
/*$sql = "SELECT * FROM QandA";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows( $result );
$idArray = array();
for ($i = 1; $i <= $rowcount; $i++){
    array_push($idArray, $i);
}
$questionId = array_rand($idArray, 1);*/

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
    header("Location:http://localhost:63342/GamificationIDPA/idpa_gamification/.idea/src/abfrageDone.php?correct=$correct");
}

$sql = "SELECT question FROM QandA WHERE id = '$questionId'";
$question = $conn->query($sql);

if ($question->num_rows > 0) {
    while ($row = $question->fetch_assoc()) {
        echo "Frage: " . $row["question"] . "<br>";
    }
}

?>

<form class="forms" method="post">
    <div class="form__group field">
        <input type="input" class="form__field" placeholder="Antwort" name="userInput" id="name" required/>
        <label for="name" class="form__label">Antwort</label></div>
    <br>
    <button class="button" type="submit" name="submit">Abfrage</button>
    <br>
    <p>Korrekte Antworten: <?php echo $correct;?> / <?php echo $maxQuestions;?></p>
</form>

<?php
$sql = "SELECT answer FROM QandA WHERE id ='$questionId'";
$query = mysqli_query($conn, $sql);
$solution = mysqli_fetch_assoc($query);
$solutionString = $solution['answer'];


if (isset ($_POST['submit'])) {

    $userInput = $_POST['userInput'];
    echo $userInput;
    if ($userInput == $solutionString) {
        $correct++;
        $questionId++;
    } else {
        $questionId++;
    }
    header("Location:http://localhost:63342/GamificationIDPA/idpa_gamification/.idea/src/abfrage.php?number=$questionId&correct=$correct");
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