<?php
/**
 * User: Fran van der Meide
 * Date: Date
 * Time: **:** PM
 * File: index.php
 */
?>
<?php
    $text1 = "Hallo ";
    $text2 = "een makkelijke taal ";
    $text3 = "toch zo'n makkelijke taal ";
    $text4 = "wat is ";
    $text5 = "PHP ";
    $text6 = "Nooit gedacht dat ";
    $text7 = "De installatie is best ingewikkeld ";
    $text8 = "Fijn ";
    $text9 = "? ";
    $text10 = ". ";
    $text11 = ", ";
    $text12 = "<br> ";
    $text13 = "is ";
    $text14 = "Vind je niet ";
    $text15 = "toch ";
    $text16 = "dat ";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="opdracht X">
    <meta name="keywords" content="keyword 1, keyword 2">
    <link rel="stylesheet" type="text/css" href="opdracht_2.2.css">
    <title>
        opdracht 2.2
    </title>
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="opdracht_2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="opdracht_2.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
</main>
<div>
    <?php echo $text1 . $text4 . $text4 . $text5 . $text3 . $text10 . $text12 . $text7 . $text8 . $text15. $text9 . $text12 . $text6 . $text5 . $text3 . $text13 ?>
</div>
<br>
<div>
    <?php echo $text1 . $text11 . $text12 . $text8 . $text15 . $text16 . $text5 . $text3 . $text13 . $text12 . $text7 . $text10 . $text14 . $text9?>
</div>

</body>
</html>

