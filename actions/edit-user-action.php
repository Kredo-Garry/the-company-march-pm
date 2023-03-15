<?php
    include '../classes/User.php';

    # Instantiate an object
    $user = new User;

    # Call the update method from User.php
    $user->update($_POST, $_FILES);
?>