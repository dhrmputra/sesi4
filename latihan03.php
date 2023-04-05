<?php
    $usr = "";
    $ps = "";
    if(isset($_REQUEST["txUSER"])){
        $usr = $_REQUEST["txUSER"];
        $ps = $_REQUEST["txPASKY"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dengan request handle</title>
</head>
<body>

    <form method="POST" action="latihan03.php">
        <div>
            User Name 
            <input type="text" name="txUSER">
        </div>
        <div>
            Password 
            <input type="password" name="txPASKY">
        </div>
        <div>
            <button> Login </button>
        </div>
    </form>

    <div>
        Isi dari form : <br>
            1. Username : <?=$usr?> 🔥<br>
            2. Password : <?=$ps?> 🔥<br>
    </div>
</body>
</html>