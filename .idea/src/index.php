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

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
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
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
        accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
        dolor sit amet.

        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
        feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
        delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
        commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</p>
</div>

<section></section>
<footer class="footer-distributed">

    <div class="footer-right">

        <a href="https://github.com/Amazingklaus49"><i class="fa fa-github"></i><img style="width: 35px; height: 35px" src="images/github.png"></a>
        <a href="https://www.kbw.ch/startseite"><i class="fa fa-kbw"></i><img style="width: 35px; height: 35px" src="images/kbw.png"></a>
        <a href="#"><i class="fa fa-linkedin"></i><img style="width: 35px; height: 35px" src="images/twitter.png"></a>
        <a class="wiki" href="https://lotr.fandom.com/de/wiki/Der_Herr_der_Ringe_Wiki"><i class="fa fa-wiki"></i><img style="width: 35px; height: 35px" src="images/wiki.png"></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="index.php">Home</a>

            <a href="abfrage.php?number=1&correct=0">Abfrage</a>

            <a href="multiple.php?number=1&correct=0"">Multiple-Choice</a>

            <a href="zuordnen.php">Zuordnen</a>

            <a href="mailto:sutter.marc@hispeed.ch">Contact</a>
        </p>

        <p>Marc Sutter & Samuel Wachter IDPA &copy; 2023</p>
    </div>
</footer>
</body>
</html>