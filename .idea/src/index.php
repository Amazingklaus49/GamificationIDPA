<html>
<head>
    <title>Gamification</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<img class="titel" src="images/titel/titel1.png">

<?php
$servername = "localhost";
$username = "root";
$password = "1234";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<h2>Wählen Sie ein gewünschtes Programm aus </h2>

<table class="buttonGroup">
    <tr>
        <th class="button"><a href="abfrage.php?number=1&correct=0"><p>Abfrage</p></a>
        </th>
        <th class="button"><a href="multiple.php?number=1&correct=0""><p>Multiple-Choice</p></a>
        </th>
        <th class="button"><a href="highscores.php"><p>Highscores</p></a>
        </th>
    </tr>
</table>

<br><br><br><br><br><br><br><br>

<div class="text-field">
    <p>Dies ist das Produkt aus der IDPA, von Samuel Wachter und Marc Sutter. Es ist eine Web-app in Form einer
        Gamification. Der Begriff «Gamification» stammt aus dem englischem und bedeutet so viel wie, Spielifikation oder
        Spielifizierung und ist der Begriff für die spielerische Umsetzung einer Anwendung. Es werden spieltypische
        Elemente und Techniken in nicht spieltypische Umfelder eingesetzt, um das Engagement und die Motivation der
        Nutzer zu beeinflussen.
    </p>
<br>
    <p>
        Diese Website ist als ein Lern-Tool gedacht, dieses Tool ist in der Form einer Gamification gestaltet und
        erfüllt den Zweck, auf eine spielerische Art und Weise, den Nutzer beim Lernen zu unterstützen. Es gibt zwei
        Quiz Formate: eine Abfrage und eine Multiple Choice Funktion. Bei der Abfrage werden zuerst ein paar Wörter in
        der schwarzen Sprache abgefragt und danach werden noch ein paar simple Trivia Fragen gestellt. Die Multiple
        Choice fragen sind alle auf den Inhalt bezogen. Dazu gibt es nach jedem Durchlauf die Möglichkeit, sich mit
        Namen, auf einer Highscore-Liste einzutragen. Die Fragen basieren alle auf dem 1. Bande, der «Der Herr der
        Ringe» Trilogie, «Die Gefährten».
    </p>


</div>

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

            <a href="multiple.php?number=1&correct=0"">Multiple-Choice</a>

            <a href="highscores.php">HighScores</a>

            <a href="mailto:sutter.marc@hispeed.ch">Contact</a>
        </p>

        <p>Marc Sutter & Samuel Wachter IDPA &copy; 2023</p>
    </div>
</footer>
</body>
</html>