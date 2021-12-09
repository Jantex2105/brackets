<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Brackets</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>
    <form method="post" id="ajax_form" action="">
        <div class="container" style="margin-top: 175px;">
            <div class="row">
                <div class="col-md-4">
                    <h3>Brackets</h3>
                    <input type="text" name="name" placeholder="Задайте выражение для проверки" class="form-control"><br>
                    <input class="btn btn-primary" type="button" id="btn" value="Отправить" />
                </div>
                <div class="col-md-3" style="border: 2px solid gray; height: 100%; min-width: 300px; max-width: 700px; width: 100%;min-height: 150px; border-radius: 8px;">
                    <h3>History</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Результат</th>
                                <th scope="col">Текст</th>
                            </tr>
                        </thead>
                    </table>
                    <tbody>
                        <?php
                            require_once 'php/connection.php';
                            $link = mysqli_connect('localhost', 'root', '', 'brackets') or die("Ошибка" . mysqli_error($link));
                            $query = mysqli_query($link, "SELECT * FROM history ORDER BY id DESC");
                            $num_rows = mysqli_num_rows($query);
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo '⠀<th scope="col"">'.$row['id'].'</th>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀'.'<td>'.$row['result'].'</td>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀'.'<td>'.$row['text'].'</td>'.'<br>';
                            }
                        ?>
                    </tbody>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </form>
</body>
</html>