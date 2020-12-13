<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>

        <ul>
        
            <?php

                foreach($person as $key => $feature) : 

            ?>

                <li>

                    <small><?= $key ?></small>

                    <strong>

                        <?= $feature; ?>

                    </strong>
            
                </li>

            <?php

                endforeach

            ?>

        </ul>

    </header>
    
</body>
</html>



