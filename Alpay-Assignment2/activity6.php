<!DOCTYPE html>

<html>
    <head>
         <link rel="stylesheet" href="styles.css">
    </head>

    <body>
    
    <?php
        $present= $_POST["present"];
        $presentCurrency = $_POST["presentCurrency"];
        $calculatedCurrency = $_POST["calculatedCurrency"];

        $rates = array();

        $rates = array("UsdToCad" => 1.25, "UsdToEur" => 0.91, "CadToUsd" => 0.80, "CadToEur" => 0.72,
        "EurToUsd" => 1.10, "EurToCad" => 1.38);

        if($presentCurrency == $calculatedCurrency){
             $calculated = $present;
        }

        else{

            if($presentCurrency == "usd"){

                if($calculatedCurrency == "eur"){
                    $calculated = $present * $rates["UsdToEur"];
                }

                elseif($calculatedCurrency == "cad"){
                    $calculated = $present * $rates["UsdToCad"];
                }

            }

            elseif($presentCurrency == "eur"){

                if($calculatedCurrency == "usd"){
                    $calculated = $present * $rates["EurToUsd"];
                }

                elseif($calculatedCurrency == "cad"){
                    $calculated = $present * $rates["EurToCad"];
                }

            }

            elseif($presentCurrency == "cad"){

                if($calculatedCurrency == "eur"){
                    $calculated = $present * $rates["CadToEur"];
                }

                elseif($calculatedCurrency == "usd"){
                    $calculated = $present * $rates["CadToUsd"];
                }

            }

        }

    ?>

    <form>
            <label class="numberLabel">From: </label><input class ="number" type="number" name="present" 
            value="<?php echo $present;?>">

            <label class="currency">Currency: </label> 
            <select class="selection" name="presentCurrency">
            <option <?php if($presentCurrency == 'usd'){echo("selected");}?> value="usd">US Dollar</option>
            <option <?php if($presentCurrency == 'cad'){echo("selected");}?> value="cad">Canadian Dollar</option>
            <option <?php if($presentCurrency == 'eur'){echo("selected");}?> value="eur">Euro</option>
            </select>

            <br>
            
            <label class="numberLabel">To: </label> <label class="number"> <?php echo $calculated;?> </label>

            <label class="currency">Currency: </label>  
            <select class="selection" name="calculatedCurrency">
            <option <?php if($calculatedCurrency == 'usd'){echo("selected");}?> value="usd">US Dollar</option>
            <option <?php if($calculatedCurrency == 'cad'){echo("selected");}?> value="cad">Canadian Dollar</option>
            <option <?php if($calculatedCurrency == 'eur'){echo("selected");}?> value="eur">Euro</option>
            </select>

            <br/><br/>

            <input type="submit" value="Convert">

        </form>
    </body>
</html>