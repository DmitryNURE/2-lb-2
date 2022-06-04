<!DOCTYPE HTML>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
   include "db.php";
   $teams = $_GET['team']; 
   $key = $teams  . " key2";
   $cursor = $db2->find(['teams'=>$teams]);
   $value = "Список игр указанной команды <ol>";
   foreach ($cursor as $document){
       $date = $document['date'];
       $league = $document['league'];
       $teams = $document['teams'];
       $place = $document['place'];
       $team1 = $teams[0];
       $team2 = $teams[1];
       $score = $document['score'];
       $value = $value . "<li>Дата: $date, cтадион: $place, лига: $league команда1:$team1 счет:$score команда2:$team2 </li>";
   }
   $value .= "</value>";
   echo $value;
   echo "<script>localStorage.setItem('$key', '$value');</script>"
?>

