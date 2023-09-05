<?php

$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    echo "The Request Method Is Post And Username Is " . $user;
    if (in_array($user, $admins))
        echo "<br> This Username $user Is Admin";
}
?>

<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>