<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php echo $this->extend('layouts/default'); ?>

    <?php echo $this->section('content'); ?>
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li>
                <?= $task->name;?>
                <?= $task->description;?>
                <?= $task->done;?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php echo $this->endSection(); ?>
</body>
</html>