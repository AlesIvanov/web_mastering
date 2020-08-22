<?php
//if(!empty($_POST)){
//    header("Location: {$_SERVER['PHP_SELF']}");
//    exit;
//}

if(isset($_POST['send'])){
    $numbers = [$_POST['number1'], $_POST['number2'], $_POST['number3']];

    if(!empty($_POST['sort'])) {
        if($_POST['sort'] == 'desc') {
            rsort($numbers);
        }else {
            sort($numbers);
        }
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <pre>
          <?php
              echo '<p>GET</p>';
              var_dump($_GET);
              echo '<p class="mt-5">POST</p>';
              var_dump($_POST);
              echo $numbers;
              var_dump($numbers);
          ?>
      </pre>

    <form action="/?login=yes" method="post" class="mt-3">
        Введите число: <input type="number" name="number1"><br>
        Введите число: <input type="number" name="number2"><br>
        Введите число: <input type="number" name="number3"><br>

        <select name="sort" id="" class="mt-3">
            <option selected value="nosort">Не сортировать</option>
            <option value="asc">По возрастанию</option>
            <option value="desc">По убыванию</option>
        </select>

        <input type="submit" value="Отправить" name="send">

    </form>
</div>
</body>
</html>