<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable List</title>
</head>

<body>
    <div class="card">
        <h3 class="card-title pt-3 pl-3">Note List</h3>
        <div class="card-body">
            <ul class="list-group">
                <?php foreach ($notes as $key => $note) : ?>
                    <li class="list-group-item"> <a href="print?id=<?= $note['id'] ?>"><?= $note['class'] . ' ' . $note['subject'] . ' ' . $note['week'] ?></a> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>

</html>