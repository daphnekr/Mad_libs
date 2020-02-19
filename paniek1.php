<!DOCTYPE html>
<html>
<head>
    <title>Paniek</title>
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
					<li><a href="onkunde1.php">Onkunde</a></li>
                </ul>
            </div>
            <div class="grid-item item3">
                <h1>Er heerst paniek...</h1>   
        </div>

            <div class="grid-item item4">
            <?php
            $huisdierErr = $persoonErr = $landErr = $verveeltErr = $speelgoedErr = $docentErr = $euroErr = $bezigheidErr = "";
            $huisdier = $persoonErr = $land = $verveelt = $speelgoed = $docent = $euro = $bezigheid = "";
            $valid;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["huisdier"])) {
            $huisdierErr = " * Verplicht";
            $valid = true;
        } else {
            $huisdier = test_input($_POST["huisdier"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$huisdier)) {
            $huisdierErr = " Alleen letters en spaties toegestaan";
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

        if (empty($_POST["land"])) {
            $landErr = " * Verplicht";
            $valid = true;
        } else {
            $land = test_input($_POST["land"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$land)) {
            $landErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["verveelt"])) {
            $verveeltErr = " * Verplicht";
            $valid = true;
        } else {
            $verveelt = test_input($_POST["verveelt"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$verveelt)) {
            $verveeltErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }
        if (empty($_POST["speelgoed"])) {
            $speelgoedErr = " * Verplicht";
            $valid = true;
        } else {
            $speelgoed = test_input($_POST["speelgoed"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$speelgoed)) {
            $speelgoedErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["docent"])) {
            $docentErr = " * Verplicht";
            $valid = true;
        } else {
            $docent = test_input($_POST["docent"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$docent)) {
            $docentErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["euro"])) {
            $euroErr = " * Verplicht";
            $valid = true;
        } else {
            $euro = test_input($_POST["euro"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$euro)) {
            $euroErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if (empty($_POST["bezigheid"])) {
            $bezigheidErr = " * Verplicht";
            $valid = true;
        } else {
            $bezigheid = test_input($_POST["bezigheid"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$bezigheid)) {
            $bezigheidErr = " Alleen letters en spaties toegestaan";
            $valid = true;
            }
        }

        if ($valid){
            include('paniekFormulier.php');
        }
        else{
            include('paniekTekst.php');
        }
        
    }else{
        include('paniekFormulier.php');
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