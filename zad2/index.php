<?php
// Spremanje varijabli
$title = "Da Vincijev kod";
$link = "https://hr.wikipedia.org/Da_Vincijev_kod";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.">
    <meta name="keywords" content="Da Vinci, kod, kriminalistički triler, Dan Brown">
    <meta name="author" content="Vaše ime">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>
    <p>
        <a href="<?php echo $link; ?>" target="_blank">Više o Da Vincijevom kodu</a>
    </p>
</body>
</html>
