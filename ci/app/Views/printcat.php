
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print CAT</title>
</head>
<style>
    h6{
        margin-bottom: 0;
        margin-top: 0;
        padding-bottom: 0;
    }
    h5{
        margin-bottom: 0;
        margin-top: 0;
        padding-bottom: 0;
    }
    p{
        margin-bottom: 0;
        margin-top: 0;
        padding-bottom: 0;
    }
    .content{
        font-size: 11px;
        margin-top: 0;
        padding-top: 0;
        margin-left: 0;
    }
    ol{
        margin-left: 0;
        padding-inline-start: 15px;
    }
    .center{
        text-align: center;
    }
</style>

<body>
    <h5>AAIC Mid Term Test</h5>
    <p class=""><?=$subject?></p>
    <h6><?=$student['fname'].' '.$student['lname'].' of <i>'.$student['class'].'</i>'?></h6>
    <h6>Multiple Choice Questions</h6>
    <div class="content">
         <?= $obj?>
    </div>
    <h6>Fill in the gap Questions</h6>
    <div class="content">
         <?= $fig?>
    </div>
    <h6>Theory Questions</h6>
    <div class="content">
         <?= $thr?>
    </div>
   
</body>

</html>