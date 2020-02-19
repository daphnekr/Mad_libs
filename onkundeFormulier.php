<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    Wat zou je graag willen kunnen?<br><br><br>

                    Met welk persoon kun je goed opschieten?<br><br><br>

                    Wat is je favoriete getal?<br><br><br>

                    Wat heb je altijd bij je als je op vakantie gaat? <br><br><br>

                    Wat is je beste persoonlijke eigenschap? <br><br><br>

                    Wat is je slechtste persoonlijke eigenschap? <br><br><br>

                    Wat is het ergste dat je kan overkomen?<br><br><br>

                
            </div>
            <div class="grid-item item5">
                <input type="text" name="kunnen"><span class="error"><?php echo $kunnenErr;?></span> <br><br><br>
                <input type="text" name="persoon"><span class="error"><?php echo $persoonErr;?></span<br><br><br><br>
                <input type="text" name="getal"><span class="error"><?php echo $getalErr;?></span<br><br><br><br>
                <input type="text" name="vakantie"><span class="error"><?php echo $vakantieErr;?></span<br><br><br><br>
                <input type="text" name="beste"><span class="error"><?php echo $besteErr;?></span<br><br><br><br>
                <input type="text" name="slechtste"><span class="error"><?php echo $slechtsteErr;?></span<br><br><br><br>
                <input type="text" name="ergste"><span class="error"><?php echo $ergsteErr;?></span<br><br><br><br>
                <input type="submit">
            </div>
            </form>