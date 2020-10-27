<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid Term test Printable List</title>
</head>

<body>
    <div class="card">
        <h3 class="card-title pt-3 pl-3">Mid Term test List</h3>
        <div class="card-body">
            <p>JSS 1</p>
            <ul class="list-group">
                <?php foreach ($js1list as $key => $test) : ?>
                    <li class="list-group-item"> <a href="catprint?id=<?= $test['id'] ?>"><?= $test['class'] . ' ' . $test['subject'] ?></a> </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="card-body">
            <p>JSS 2</p>
            <ul class="list-group">
                <?php foreach ($js2list as $key => $test) : ?>
                    <li class="list-group-item"> <a href="catprint?id=<?= $test['id'] ?>"><?= $test['class'] . ' ' . $test['subject'] ?></a> </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="card-body">
            <p>JSS 3</p>
            <ul class="list-group">
                <?php foreach ($js3list as $key => $test) : ?>
                    <li class="list-group-item"> <a href="catprint?class=JS3&id=<?= $test['id'] ?>"><?= $test['class'] . ' ' . $test['subject'] ?></a> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>

</html>