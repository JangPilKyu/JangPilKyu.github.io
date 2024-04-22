<!DOCTYPE html>
<html>
<head>
    <title>1번 팩토리얼 계산기</title>
</head>
<body>
    <form method="post" action="">
        <label>input number:</label>
        <input type="number" name="n" id="n" required>
        <input type="submit" value="ok">
    </form>
    <?php
    if(isset($_POST['n'])){
        $n = $_POST['n'];
        $sum = 0;
        for($prod=1;$prod<=$n;$prod++){
            $sum += $prod;
            echo "$prod";
            if($prod < $n)
            echo " + ";

        }
        echo" = $sum</p>";
        }
    ?>
       
       <?php
    if(isset($_POST['n'])){
        $n = $_POST['n'];
        $sum = 1;
        for($prod=1;$prod<=$n;$prod++){
            $sum *= $prod;
            echo "$prod";
            if($prod < $n)
            echo " * ";

        }
        echo" = $sum</p>";
        }
    ?>
    </body>
    </html>