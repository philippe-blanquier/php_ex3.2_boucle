<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 3.2 boucle</title>
    </head>
    <body >
        <p>
            <?php
            $v1=0;
            for ($v2=1; $v2 <=100; $v2++)
            {
                if ($v1 <= 20)
                {
                    echo nl2br( $v1.'*'.$v2.'='.$v1*$v2."\n");
                    $v1++;
                }
            }
            ?>
       </p>
    </body>
</html>