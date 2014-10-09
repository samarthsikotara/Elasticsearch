<?php

    require_once 'index.php';
    if(!empty($_POST)){
        if(isset($_POST['title'],$_POST['body'], $_POST['keywords'])){
            $title = $_POST['title'];
            $body = $_POST['body'];
            $keywords = explode(',',$_POST['keywords']);
            //$i++;
            $indexed = $es->index([
                'index' => 'roofz',
                'type' => 'roof',
                'body' => [
                    'title' => $title,
                    'body' => $body,
                    'keywords' => $keywords
                ]
            ]);

            if($indexed){
                print_r(json_encode($indexed));
            }
        }
    }

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add ElasticSearch | ES</title>
</head>
<body>
<form action="add.php" method="post" autocomplete="off">
    <label>
        title
        <input type="text" name="title" />
    </label><br />
    <label>
        body
        <textarea name="body" rows="8"></textarea>
    </label><br />
    <label>
        Keywords
        <input type="text" name="keywords" />
    </label><br />

    <input type="submit" value="Add">
</form>
</body>
</html>

