<!DOCTYPE HTML>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
    include "db.php";
    $player = $_GET['player']; 
    $key = $player . " key1";
    $cursor = $db1->find(['name'=>$player]);
    $value = "Список футболистов указанной команды<ol>";
    foreach ($cursor as $document){
        $name = $document['name'];
        $coach = $document['coach'];
        $players = $document['players'];
        if(is_object($players)){
          $players = (array)$players;
          $players = (implode(", ", $players));
        }
         $value = $value . "<li>Имя: $name, наставник: $coach, игроки: $players </li>";
    }
    echo $value;
    echo "<script> localStorage.setItem('$key', '$value'); </script>"
?>
</body>
</html>