<?php

require_once 'index.php';
if(isset($_GET['q'])){

    $q = $_GET['q'];
    $query = $es->search([
        'body' => [
            'query' => [
                'match' =>[
                    'title' => $q
                ]
            ]
        ]
    ]);

    print_r(json_encode($query));
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ElasticSearch | ES</title>
    </head>
    <body>
        <form action="search.php" method="get" autocomplete="off">
            <label>
                search for something
                <input type="text" name="q" />
            </label>
            <input type="submit" value="Search">
        </form>
    </body>
</html>

