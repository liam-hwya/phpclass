


    <?php require 'partials/header.view.php'; ?>

    <ul>
    
        <?php foreach($tasks as $task): ?>

            <li>
            
                <?php
                
                    if($task->completed){


                        echo "<strike>$task->description</strike>";

                    }else{

                        echo "$task->description";

                    }
                
                ?>
            
            </li>

        <?php endforeach; ?>
    
    </ul>


    <?php require 'partials/footer.view.php'; ?>

