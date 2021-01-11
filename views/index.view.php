


    <?php require 'partials/header.view.php'; ?>

    <ul>
    
        <?php foreach($users as $user): ?>

            <li><?= $user->username ?></li>

        <?php endforeach; ?>
    
    </ul>
   
    <h1>User Form</h1>

    <form action="users" method="POST">
    
        <input type="text" name="username">

        <button type="submit">Add</button>

    </form>


    <?php require 'partials/footer.view.php'; ?>

