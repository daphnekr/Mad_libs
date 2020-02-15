<!DOCTYPE html>
<html>
<head>
    <title>Onkunde</title>
    <link rel="stylesheet" type="text/css" href="stylee.css" media="screen" />
</head>
    <body>

        <?php
            $kunnenErr = $persoonErr =  "";
            $kunnen = $persoonErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["kunnen"])) {
            $kunnenErr = " * Required";
        } else {
            $kunnen = test_input($_POST["kunnen"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$kunnen)) {
            $kunnenErr = " Only letters and white space allowed";
            }
            else{
                echo "<form action = 'onkunde.php' method='post'>";
            }
        }
        if (empty($_POST["persoon"])) {
            $persoonErr = " * Required";
        } else {
            $persoon = test_input($_POST["persoon"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$persoon)) {
            $persoonErr = " Only letters and white space allowed";
            }
            else{
                echo "<form action = 'onkunde.php' method='post'>";
            }
        }
        
    }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
            <div class="grid-item item1">
            <img src ="header.png" alt="header">
            </div>
		<div class="grid-container">
            
			<div class="grid-item item2">
				<ul class = "menu1">
					<li><a href="#">Er eerst paniek...</a></li>
					<li><a href="#">Onkunde</a></li>
                </ul>
            </div>
            <div class="grid-item item3">
                <h1>Onkunde</h1>   
        </div>

            <div class="grid-item item4">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    Wat zou je graag willen kunnen?<br><br>

                    Met welk persoon kun je goed opschieten?<br><br>

                    <!--Wat is je favoriete getal? <input type="text" name="getal" required><br><br>

                    Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="vakantie" required><br><br>

                    Wat is je beste persoonlijke eigenschap?  <input type="text" name="beste" required><br><br>

                    Wat is je slechtste persoonlijke eigenschap? <input type="text" name="slechtste" required><br><br>

                    Wat is het ergste dat je kan overkomen? <input type="text" name="ergste" required><br><br>-->

                
            </div>
            <div class="grid-item item5">
                <input type="text" name="kunnen"><span class="error"><?php echo $kunnenErr;?></span> <br><br>
                <input type="text" name="persoon"><span class="error"><?php echo $persoonErr;?></span<br><br><br>
                <input type="submit">
            </div>
            </form>

			<div class="grid-item item6">
				<span>© 2019 - Daphne Kramer</span>
            </div>
    </div>

    </body>
</html>