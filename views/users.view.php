<?php require('partials/head.php'); ?>

<ul> 
    <?php foreach ($tasks as $task): ?>
    
        <li>
            <?php if ($task->completed): ?>  
                <strike><?= $task->description; ?></strike>  
            <?php else: ?>
                <?= $task->description;?> 
            <?php endif; ?>
        </li>  
    <?php endforeach; ?>
</ul>

<ul> 
    <?php foreach ($users as $user): ?>
    
        <li>
            <?= $user->username;?> 
        </li>  
    <?php endforeach; ?>
</ul>

<form method="POST" action="/users">
    <input name="username"></input>
    <input name="email"></input>
    <input name="password"></input>
    <button type="submit">Submit</button> 
</form>
    
<?php require('partials/footer.php'); ?>