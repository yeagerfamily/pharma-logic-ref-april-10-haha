<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}


$name  = htmlspecialchars($_POST['dev_name']);
$stack = htmlspecialchars($_POST['dev_stack']);
$bio   = htmlspecialchars($_POST['dev_bio']) ?: "No bio provided.";
$date  = date("F j, Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Developer Profile - <?php echo $name; ?></title>
    <style>
        body { font-family: sans-serif; background: #f4f4f9; display: flex; justify-content: center; padding-top: 50px; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 350px; }
        .badge { background: #e1ecf4; color: #39739d; padding: 4px 8px; border-radius: 4px; font-size: 0.8em; }
        .back-link { display: block; margin-top: 20px; font-size: 0.9em; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Developer Profile</h1>
        <hr>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Role:</strong> <span class="badge"><?php echo $stack; ?></span></p>
        <p><strong>Bio:</strong> <em>"<?php echo $bio; ?>"</em></p>
        <p><small>Profile generated on: <?php echo $date; ?></small></p>
        
        <a href="index.php" class="back-link">&larr; Edit Details</a>
    </div>
</body>
</html>
