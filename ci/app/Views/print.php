<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print <?= $note['class'] . ' ' . $note['subject'] . ' ' . $note['week'] ?></title>
</head>
<style>
    .content{
        font-size: 11px;
    }
</style>

<body>
    <h5><?= $note['topic']?></h5>
    <div class="content">
         <?= $note['content']?>
    </div>
   
</body>

</html>