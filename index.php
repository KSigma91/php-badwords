<?php
    $text_Main = 'Aenean egestas augue non faucibus porta. Maecenas mattis porttitor dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam consectetur arcu ut aliquet molestie. Vestibulum rhoncus ac libero vitae aliquam. Donec imperdiet elit eget mauris tempus semper. Fusce nec tellus eleifend, aliquet urna nec, aliquet velit. Phasellus ut luctus lectus. Sed ut sem at ipsum gravida tincidunt et non risus. Etiam ante purus, interdum sed pharetra sed, faucibus eu lectus. Nunc faucibus augue sed ex ultricies feugiat. Duis sed quam metus. Praesent auctor imperdiet lorem non vestibulum.';

    $filter = $_GET['words'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="" method="get">
        <label for="words"></label>
        <input type="text" name="words" id="words">
        <button>FILTRA</button>
    </form>

    <?= '<p>' . str_replace($filter, '***', $text_Main) . $filter . '</p>' ?>
    
    <?= '<h3>Lunghezza paragrafo censurato: ' . strlen($filter) . '</h3>' ?>
</body>
</html>