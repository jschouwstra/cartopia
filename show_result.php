<?php
error_reporting(E_ALL & ~E_NOTICE);

require "connection.php";
require "model/Search.php";
$search = new Search($db);

if (isset($_POST['colorAudi']) && $_POST['colorAudi'] !== "") {
    $color = $_POST['colorAudi'];
} elseif (isset($_POST['colorBMW']) && $_POST['colorBMW'] !== "") {
    $color = $_POST['colorBMW'];
} elseif (isset($_POST['colorPeugeot']) && $_POST['colorPeugeot'] !== "") {
    $color = $_POST['colorPeugeot'];
} elseif (isset($_POST['colorFerrari']) && $_POST['colorFerrari'] !== "") {
    $color = $_POST['colorFerrari'];
} elseif (isset($_POST['colorPorsche']) && $_POST['colorPorsche'] !== "") {
    $color = $_POST['colorPorsche'];
}

if ($color == "blue") {
    $colorOutput = "blauw";
} elseif ($color == "red") {
    $colorOutput = "rood";
} elseif ($color == "white") {
    $colorOutput = "wit";
} elseif ($color == "black") {
    $colorOutput = "zwart";
}

extract($_POST,EXTR_OVERWRITE,'');
//$firstName = $_POST['firstName'];
//$lastName = $_POST['lastName'];
//$email = $_POST['email'];
//$birthdate = $_POST['birthdate'];
//$brandName = $_POST['brandName'];
//$budget = $_POST['budget'];

function validEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    </head>
    <body>
        <div class="container">
            <noscript>
            <br>
            <i>De functionaliteiten zijn beperkt omdat u Javascript niet ingeschakeld heeft.</i>
            </noscript>

            <?php
            $error_text = array();

            if ($lastName == "")
                $error_text[] = "Geen achternaam ingevoerd.";

            if ($email == "")
                $error_text[] = "Geen email ingevoerd.";

            if ($birthdate == "")
                $error_text[] = "Geen geboorte datum ingevoerd.";

            if ($budget == "")
                $error_text[] = "Geen budget ingevoerd.";
            
            if ($budget < 1)
                $error_text[] = "Budget moet meer dan 0 zijn.";

            if ($brandName == "")
                $error_text[] = "Geen merk ingevoerd.";

            if (!validEmail($email))
                $error_text[] = "E-mailadres niet geldig.";

            foreach ($error_text AS $error):
                echo "
                    <div class=\"row errorNoJavascript\">
                        <div class=\"col-md-3\">
                            <span style=\"background-color:red;\">" . $error . "</span>
                        </div>
                    </div>
                ";
            endforeach;

            if (!$error_text) {
                echo "           
            <h1>Zoek resultaat</h1>
            <div class=\"row\">
                <div class=\"col-md-3\">Voornaam</div>
                <div class=\"col-md-3\">
                " . $firstName . "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">Achternaam</div>
                <div class=\"col-md-3\">
                " . $lastName . "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">Geboorte datum</div>
                <div class=\"col-md-3\">
                " . $birthdate . "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">Email</div>
                <div class=\"col-md-3\">
                " . $email . "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">Merk auto</div>
                <div class=\"col-md-3\">
                " . $brandName . "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">Kleur</div>
                <div class=\"col-md-3\">
                " . $colorOutput . "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">Budget</div>
                <div class=\"col-md-3\">
                " . $budget . "
                </div>
            </div>
            ";


                $search->saveResult($db, $firstName, $lastName, $email, $birthdate, $brandName, $budget, $color);
                echo "<span class=\"label label-success\">Zoekopdracht is opgeslagen in de database </span>";
                echo "<br><br> <span class=\"btn btn-success\"><a style=\"color: white;\" href=\"search_history.php\">Zoek geschiedenis</a></span>";
            }
            ?>

    </body>
</html>
