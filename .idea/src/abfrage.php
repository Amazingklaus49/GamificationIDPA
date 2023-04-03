<html>
<head>
    <title>Gamification</title>
    <link rel="stylesheet" href="abfrage.css">
</head>


<body style="background-color: black">

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
$sql = "SELECT id, question, answer FROM QandA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Question: " . $row["question"] . " - Solutions: " . $row["answer"] . "<br>";
    }
} else {
    echo "0 results";
}
?>

<img class="titel" src="images/titel/titelabfrage.png">

<div class="break"></div>

<?php
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT question FROM QandA WHERE id = 1";
$result = $conn->query($sql);
echo "<h2>$result</h2>";
?>

<div class="form__group field">
    <input type="input" class="form__field" placeholder="Antwort" name="name" id='name' required/>
    <label for="name" class="form__label">Antwort</label>
</div>

<br>
<button class="button">Abfrage</button>

<br>

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

            <a href="abfrage.php">Abfrage</a>

            <a href="multiple.php">Multiple-Choice</a>

            <a href="zuordnen.php">Zuordnen</a>

            <a href="mailto:sutter.marc@hispeed.ch">Contact</a>
        </p>

        <p>Marc Sutter & Samuel Wachter IDPA &copy; 2023</p>
    </div>
</footer>
</body>
</html>