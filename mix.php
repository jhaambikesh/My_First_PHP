<?php
    $hour = 5;
?>

<!DOCTYPE html>
<head>
    <title> My Webpage </title>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1> Time Of Day </h1>
    </header>

    <main>
        <?php if ($hour >=5 and $hour < 12) : ?>
        <h4> Good Morning. </h4>
        <?php elseif ($hour >=12 and $hour < 17) : ?>
        <h4> Good Afternoon. </h4>
        <?php elseif ($hour >=17 and $hour < 22) : ?>
        <h4> Good Evening. </h4>
        <?php elseif ($hour >= 22 and $hour < 24) : ?>
        <h4> Good Night. </h4>
        <?php else : ?>
        <h4> Not a valid hour. </h4>
        <?php endif;?>
    </main>
    <footer>
        Ambikesh Jha
    </footer>
</body>
</html>


