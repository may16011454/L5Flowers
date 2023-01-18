
<?php 
    session_start(); 
    require_once 'inc/functions.php';

    if (!isset($_SESSION['user']))
    {
        redirect('login', ["error" => "You must be logged in to see this page"]);
    }

    $title = 'Users Page'; 
?>

<h1 class="bg-dark text-light">Welcome <?= $_SESSION['user']['firstname'] ?? 'Member' ?>!</h1>

<?php require __DIR__ . "/index.php"; ?>

