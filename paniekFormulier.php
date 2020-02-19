<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Welk dier zou je nooit als huisdier willen hebben? <br><br><br>

    Wie is de belangrijkste persoon in je leven? <br><br><br>

    In welk land zou je graag willen wonen? <br><br><br>

    Wat doe je als je je verveelt? <br><br><br>

    Met welk speelgoed speelde je als kind het meest? <br><br><br>

    Bij welke docent spijbel je het liefste? <br><br><br>

    Als je &euro;100.000,- had, wat zou je dan kopen? <br><br><br>

    Wat is je favoriete bezigheid? <br><br><br>
</div>
<div class="grid-item item5">
    <input type="text" name="huisdier"><span class="error"><?php echo $huisdierErr;?></span> <br><br><br>
    <input type="text" name="persoon"><span class="error"><?php echo $persoonErr;?></span><br><br><br>
    <input type="text" name="land"><span class="error"><?php echo $landErr;?></span><br><br><br>
    <input type="text" name="verveelt"><span class="error"><?php echo $verveeltErr;?></span><br><br><br>
    <input type="text" name="speelgoed"><span class="error"><?php echo $speelgoedErr;?></span><br><br><br>
    <input type="text" name="docent"><span class="error"><?php echo $docentErr;?></span><br><br><br>
    <input type="text" name="euro"><span class="error"><?php echo $euroErr;?></span><br><br><br>
    <input type="text" name="bezigheid"><span class="error"><?php echo $bezigheidErr;?></span><br><br><br>
    <input type="submit">
</div>
</form>