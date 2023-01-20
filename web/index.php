<?php
    echo $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->cldb->news;
    $result = $collection->find(); //fix /home/alex/nlp/sema/php/vendor/mongodb/mongodb/src/Operation/Find.php:317
    echo $result;
    echo "Hello World!";
?>