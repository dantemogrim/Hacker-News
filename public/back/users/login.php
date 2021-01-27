<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';


// Check if e-mail & passphrase exist in the post request.
if (isset($_POST['username'], $_POST['passphrase'])) {
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $passphrase = $_POST['passphrase'];

    // Check if any fields are empty.
    if (empty($username) || empty($passphrase)) {
        echo 'Fill out all of the fields.';
        exit();
    }

    // Check if the given email already exists within the database.
    $sql = "SELECT * FROM users WHERE username = :username";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $_SESSION['errors'][] = 'There is no account registered to that username.';
    }

    if (!password_verify($passphrase, $user['passphrase'])) {
        $_SESSION['errors'][] = "Wrong password!";
        redirect('/public/front/users/gui-ls-login.php');
    }

    // If all goes well, create a session for the user as logged in.
    if (isset($user['passphrase']) && password_verify($passphrase, $user['passphrase'])) {
        $_SESSION['loggedIn'] = [
            'username' => $user['username'],
            'avatar' => $user['avatar'],
            'email' => $user['email'],
            'bio' => $user['bio'],
            'id' => $user['id']
        ];
    }

    redirect('/public/index.php');
};

// If things go south, take the user back to the login page.
redirect('/gui-ls-login.php');
