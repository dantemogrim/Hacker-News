<!-- The header is put together with autoload which activates
the essential functionality of the site. -->
<?php require __DIR__ . '/views/header.php';
// Check if the user is logged in - otherwise redirect.
if (!isset($_SESSION['loggedIn'])) :
    redirect('/gui-login.php');
endif;


//if (isset($_SESSION['loggedIn'])) {
//    print_r($_SESSION['loggedIn']);
// Array with user info from the 'logged in' session.
//}
?>

<article>
    <!--<h1><?php //echo $config['title']; 
            ?></h1>-->

    <?php if (isset($_SESSION['loggedIn'])) : ?>
        <p>ARTICLES GO HERE</p>
    <?php endif; ?>
</article>

<article>(NEWS FEED)</article>

<?php require __DIR__ . '/views/footer.php'; ?>