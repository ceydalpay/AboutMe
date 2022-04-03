<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Assignment 2</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <form action="activity6.php" method="post">
            <label class="numberLabel">From: </label> <input class="number" type="number" name="present" value=0>

            <label class="currency">Currency: </label> 
            <select class="selection" name="presentCurrency">
            <option value="usd">US Dollar</option>
            <option value="cad">Canadian Dollar</option>
            <option value="eur">Euro</option>
            </select>

            <br>
            
            <label class="numberLabel">To: </label> 
            <label class="number">0</label>

            <label class="currency">Currency: </label>  
            <select class="selection" name="calculatedCurrency">
            <option value="usd">US Dollar</option>
            <option value="cad">Canadian Dollar</option>
            <option value="eur">Euro</option>
            </select>

            <br/><br/>

            <input type="submit" value="Convert">

        </form>
    </body>
</html>