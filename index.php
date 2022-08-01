<?php
session_start();
if(!isset($_SESSION['captcha'])){
    $n = rand(1000, 9999);
    $_SESSION['captcha'] = $n;
}

if(!empty($_POST['code'])){
    $c = addslashes($_POST['code']);

    if($c == $_SESSION['captcha'])
        echo "<span style='color: green;'>Correct!</span><br>";
    else{
        $n = rand(1000, 9999);
        $_SESSION['captcha'] = $n;
    }
}
?>

<img src="imagem.php" width="100" height="50"><br>

<form method="POST">
    <input type="text" name="code">
    <input type="submit" value="Check">
</form>