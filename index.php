<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ2</title>
    <script>
        function change1() {
    let key = document.getElementById("league").value;
    let result = localStorage.getItem(key);
    document.getElementById('res').innerHTML = result;
}
function change2(){
    let key = document.getElementById("player").value;
    key = key + " key1";
    let result = localStorage.getItem(key);
    document.getElementById('res').innerHTML = result;
}
function change3() {
    let key = document.getElementById("team").value;
    key = key + " key2";
    let result = localStorage.getItem(key);
    document.getElementById('res').innerHTML = result;
}
    </script>
</head>
<body>
<h3>Кириленко Дмитро, КІУКІ-19-4, Вар№7</h3>
<form method="get" action="1.php">
<p>Таблица чемпионата лиги <select name="league" id="league" onchange="change1()">
            <?php
                include 'db.php';
                $table = $db2->distinct("league");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
            ?>
    </select>
    <button> ОК </button></p>
</form>

<form method="get" action="2.php">
<p>Список футболистов указанной команды <select name="player" id="player" onchange="change2()">
            <?php
                include 'db.php';
                $table = $db1->distinct("name");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
            ?>
    </select>
    <button> ОК </button></p>
</form>
<form method="get" action="3.php">
<p>Список игр, в которых участвовала выбранная команда <select name="team" id="team" onchange="change3()">
            <?php
                include 'db.php';
                $table = $db2->distinct("teams");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
            ?>
    </select>
    <button> ОК </button> </p>
</form>
<p>localStorage</p>
<div id="res"></div>
</body>

</html>