<?php
error_reporting(-1);
session_start();
if (isset($_POST['username'])) {
    $username = strip_tags($_POST["username"]);
    $password = strip_tags($_POST["password"]);

    include_once('database.php');

    if($conn) {
//        echo "Connection established.<br />";
//        var_dump($conn);
//        die();
        $sql = "SELECT username, wachtwoord from Users WHERE username = ? AND wachtwoord = ?";
        /* create a prepared statement */
        $stmt = $conn->prepare($sql);
        /* bind parameters for markers */
        $stmt->bind_param("ss", $username, $password);
        /* execute query */
        $stmt->execute();
        /* bind result variables */
        $stmt->bind_result($username);

        if ($stmt->fetch()) {

            $_SESSION['username'] = $username;
            header('location: ' . ['PHP_SELF']);
            $stmt->close();

            mysqli_close($conn);
            exit;
        } else {
            $falselogin = "Username or Password is incorrect.<br/>
		Try again.";
        }
    }
    else {
        echo "Connection could not be established.<br />";
        die(mysqli_connect_error());
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page_title; ?></title>

    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">

</head>
<body>
<div id="wrapper">

    <!--HEADER-->
    <header class="mainheader">
        <a href="index.php"><img src="images/gigstore_logo_new.jpg" alt="GIG-Store"/></a>
        <?php
        if (!isset($_SESSION['username'])) {
            ?>
            <form method="post" name="loginForm">
                <fieldset>
                    <legend>Inloggen</legend>
                    <div class="logindata">
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username"/><br/>
                    </div>
                    <div class="logindata">
                        <label for="password"> Password: </label>
                        <input type="password" name="password" id="password"/><br/>
                    </div>
                    <div class="logindata">
                        <input class="placeButtons" type="reset" value="Reset"/>
                        <input class="placeButtons" type="submit" value="Log in"/>
                        <a href="registreren.php" class="textLogin">Registreren</a>
                    </div>
                    <?php if (isset($_POST['username'])) { ?>
                        <div class="falselogin"><?php echo $falselogin; ?></div>
                    <?php } ?>
                </fieldset>
            </form>

            <?php
        } else {
            ?>
            <div class="logged-in">
                <p>Welcome: <?php echo $_SESSION['username']; ?><br/>
                    <a href="/GIG-store/logout.php">Log uit</a></p>
            </div>
            <?php
        }
        ?>

    </header>

    <nav class="nav-main">
        <div class="logo">GIG-Store</div>
        <ul>
            <li>
                <a href="index.php" class="nav-item">Nieuws</a>
                <div class="nav-content">
                </div>
            </li>
            <li>
                <a href="acties.php" class="nav-item">Acties</a>
                <!--						<div class="nav-content">-->
                <!--							<div class="nav-sub">-->
                <!--							</div>-->
                <!--						</div>-->
            </li>
            <li>
                <a href="contact.php" class="nav-item">Over ons</a>
            </li>
            <li>
                <a href="vacatures.php" class="nav-item">Vacatures</a>
                <!--						 <div class="nav-content">-->
                <!--							<div class="nav-sub">-->
                <!--							</div>-->
                <!--						</div>-->
            </li>
            <li>
                <a href="#" class="nav-item">Webshop</a>
                <div class="nav-content">
                    <div class="nav-sub">
                        <ul>
                            <li><a href="gitaren.php">Gitaren</a></li>
                            <li><a href="basgitaren.php">Basgitaren</a></li>
                            <li><a href="drums.php">Drumstellen</a></li>
                            <li><a href="keyboards.php">Keyboards</a></li>
                            <li><a href="studio.php">Studio-Apparatuur</a></li>
                        </ul>
                    </div>

                </div>
            </li>
            <li>
                <a href="winkelwagen.php"><img src="images/winkelwagen.gif" alt="winkelwagen" class="nav-item"/></a>
            </li>
        </ul>
    </nav>
    <!--HEADER-->