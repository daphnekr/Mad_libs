<!DOCTYPE html>
<html>
<head>
    <title>Onkunde</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
    <body>
            <div class="grid-item item1">
            <img src ="header.png" alt="header">
            </div>
		<div class="grid-container">
            
			<div class="grid-item item2">
				<ul class = "menu1">
					<li><a href="paniek1.php">Er eerst paniek...</a></li>
					<li><a href="onkunde.php">Onkunde</a></li>
                </ul>
            </div>
            <div class="grid-item item3">
                <h1>Onkunde</h1>   
        </div>

            <div class="grid-item item4">
            <?php
            $kunnenErr = $persoonErr = $getalErr = $vakantieErr = $besteErr = $slechtsteErr = $ergsteErr = "";
            $kunnen = $persoonErr = $getal = $vakantie = $beste = $slechtste = $ergste = "";
            $valid;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["kunnen"])) {
            $kunnenErr = " * Verplicht";
            $valid = true;
        } else {
            $kunnen = test_input($_POST["kunnen"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$kunnen)) {
            $kunnenErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["persoon"])) {
            $persoonErr = " * Verplicht";
            $valid = true;
        } else {
            $persoon = test_input($_POST["persoon"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$persoon)) {
            $persoonErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["getal"])) {
            $getalErr = " * Verplicht";
            $valid = true;
        }

        if (empty($_POST["vakantie"])) {
            $vakantieErr = " * Verplicht";
            $valid = true;
        } else {
            $vakantie = test_input($_POST["vakantie"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$vakantie)) {
            $vakantieErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }
        if (empty($_POST["beste"])) {
            $besteErr = " * Verplicht";
            $valid = true;
        } else {
            $beste = test_input($_POST["beste"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$beste)) {
            $besteErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["slechtste"])) {
            $slechtsteErr = " * Verplicht";
            $valid = true;
        } else {
            $slechtste = test_input($_POST["slechtste"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$slechtste)) {
            $slechtsteErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["ergste"])) {
            $ergsteErr = " * Verplicht";
            $valid = true;
        } else {
            $ergste = test_input($_POST["ergste"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$ergste)) {
            $ergsteErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if ($valid){
            include('onkundeFormulier.php');
        }
        else{
            include('onkundeTekst.php');
        }
        
    }else{
        include('onkundeFormulier.php');
    }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
			<div class="grid-item item6">
				<span>© 2019 - Daphne Kramer</span>
            </div>
    </div>

    </body>
</html>