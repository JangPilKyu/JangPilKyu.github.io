<!DOCTYPE html>
<html>
<head>
    <title>even odd number sum</title>
</head>
<body>
    <form method="post" action="">
        <label>input number:</label>
        <input type="number" name="count" id="count" required>
        <input type="submit" value="ok">
    </form>
    <?php
        if(isset($_POST['count'])){
            $count = $_POST['count'];
            echo "<p>$count 개만큼 생성된 랜덤 정수 : ";
            $array = array();
            $max = 0;
            for($i=0; $i<$count; $i++) {
                $array[$i] = rand(10, 100);
                echo "$array[$i] " ;
            }
            echo "</p>";
            echo "<p>오름차순으로 소팅한 정수 : ";
            for($i=0; $i<$count; $i++) {
            sort($array);
                echo "$array[$i] ";
            }
            echo "</p>";
        }
    ?>
    </body>
    </html>