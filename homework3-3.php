<!DOCTYPE html>
<html>
    <head>
        <title>피보나치 수열</title>
    </head>
    <body>
        <form method="post" action="">
            <label>100이하의 정수를 넣어주세요.</label>
            <input type="number" name="num" id="num" required>
            <input type="submit" value="ok">
        </form>
        <?php      
            $plus_dummy = 0;
            $plus_dummy2 =1;
            $plus_result = 1;
            $divide_result = 0;
            if(isset($_POST['num'])) {
                $num = $_POST['num'];
                for($i=1; $i<=$num+1; $i++) {
                    if ($num+1 > 101){
                        exit;
                    }
                echo "</p>";
                    if ($i <= 100){
                        $plus_result=$plus_dummy+$plus_dummy2;
                        $divide_result=($plus_result+$plus_dummy)/$plus_result;
                    echo "<p>$i , $plus_result , $divide_result</p>";
                    }
                    $plus_dummy2 = $plus_dummy;
                    $plus_dummy = $plus_result;
                }

            }
        ?>
    </body>
    </html>