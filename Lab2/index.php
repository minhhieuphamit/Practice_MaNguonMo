<!DOCTYPE html>
<html lang="vn">
<head>
    <title>OOP PHP</title>
    <link href="/site.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <?php
    require_once("userclass.php");
    $user = new User("Hieu Pham", "minhhieupham2002@minhhieuphamit.site");
    echo "<h2>User Information</h2>";
    echo "UserID: " . $user->getUserID() . "<br>";
    echo "Username: " . $user->getUsername() . "<br>";

    $user1 = new User("Hieu Pham 1", "minhhieupham2002@minhhieuphamit.site 1");
    echo "<h2>User Information</h2>";
    echo "UserID: " . $user1->getUserID() . "<br>";
    echo "Username: " . $user1->getUsername() . "<br>";
    ?>
</div>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Hieu Pham</p>
</body>