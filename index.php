<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANQUE| Site Officiel</title>
    <style>
        body{
            background: white;
        }
        .main{
            width: 400px;
            height: 450px;
            background: gray;
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
            <form action="login.php" method="post">
                <h3>MA BANQUE EN LIGNE</h3>
                <label for="pseudo">Identifiant</label><br />
                <input type="text" name="pseudo" id="pseudo" required minlength="6" maxlength="12"><br /><br />
                <label for="pass">Mot de passe</label><br />
                <input type="password" name="pass" id="pass" required minlength="4" maxlength="50"><br /><br />
                <button type="submit" name="send" id="send">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>