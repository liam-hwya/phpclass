<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>

        <?php foreach($tasks as $task): ?>

            <?php
            
                if($task->isComplete()){

                    echo "<li><strike>".$task->getDescription()."</strike></li>";

                }else{

                    echo "<li>".$task->getDescription()."</li>";

                }
            
            ?>

        <?php endforeach; ?>


    </ul>
    
</body>
</html>



