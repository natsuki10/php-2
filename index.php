<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz問題</title>
</head>
<body>
    <h1>FizzBuzz問題</h1>
    <form method="post">
        <label for="fizz">FizzNum:</label>
        <input type="text" name="fizz_num" placeholder="整数値を入力してください"><br>
        <label for="fizz_num">BuzzNum:</label>
        <input type="text" name="buzz_num" placeholder="整数値を入力してください"><br>
        <input type="submit" name="submit" value="実行">
    </form>

    <?php 
        if(isset($_POST['submit'])) {
            $fizzNum = $_POST['fizz_num'];
            $buzzNum = $_POST['buzz_num'];
            if(!ctype_digit($fizzNum) || !ctype_digit($buzzNum)) {
                echo '整数値を入力してください';
            } elseif(!is_numeric($fizzNum) || !is_numeric($buzzNum)) {
                echo '整数値を入力してください';
            } elseif(empty($fizzNum) || empty($buzzNum)) {
                echo '整数値を入力してください';
            } else {
            $fizzNum = (int)$fizzNum;
            $buzzNum = (int)$buzzNum;

            for($i = 1; $i < 100; $i++) {
                if($i % $fizzNum === 0 && $i % $buzzNum === 0) {
                    echo 'FizzBuzz' .$i;
                    echo '<br>';
                } elseif($i % $fizzNum === 0) {
                    echo 'Fizz' .$i;
                    echo '<br>';
                } elseif($i % $buzzNum === 0) {
                    echo 'Buzz' .$i;
                    echo '<br>';
                }
            }
        }
    }
    ?>
</body>
</html>