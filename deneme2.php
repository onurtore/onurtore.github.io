<?php
//if (file_exists('./token.txt')) {
    $authKey = file_get_contents("./token.txt");
    echo'{"AuthKey":'.json_encode($authKey).'}'; //Here ProductsData is just a simple String u can write anything instead
    header('Location: '.'mercedesapp://oauth2Callback?code='. $authKey);

//}
/*else{
    $text = htmlspecialchars($_GET["code"]);
    file_put_contents("./token.txt", $text);
    header('Location: '.'com.raywenderlich.Incognito:/oauth2Callback');
}
*/
?>
