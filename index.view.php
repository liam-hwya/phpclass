<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
<<<<<<< HEAD

        <li>

            Task Title = <?= ucwords($task['title']) ?>

        </li>

        <li>

            Task Assigned To = <?= ucwords($task['assigned_to']) ?>

        </li>

        <li>

            Task Status = 

            <?php 

                // echo ($task['completed']) ? "Complete" : "Incomplete";

                if($task['completed']) {

                    echo "Complete";

                }else{

                    echo "Incomplete";

                }

            ?>

        </li>


=======
    
        <li>
        
            Task Title : <?= ucwords($task['title']); ?>
        
        </li>

        <li>
        
            Task Assigned To : <?= ucwords($task['assigned_to']); ?>
        
        </li>

        <li>
        
            Task Status : 

            <?php 

                echo ($task['completed'])? "Complete" : "Incomplete";

                // if($task['completed']){

                //     echo "Complete";

                // }else{

                //     echo "Incomplete";

                // }

            ?>
        
        </li>
    
>>>>>>> adaed468a2580ca1d1c14b395f2d1c7d81b5ac5a
    </ul>
    
</body>
</html>



