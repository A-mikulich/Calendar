<?php
require 'db.php';

$dbh = DB::getDB();
$sth = $dbh->prepare("SELECT * FROM info");
$sth->execute();
$info = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Использование фрейма</title>
 </head>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <body>
  <form action="" method="">
    <table width="100%" border="1">
        <tr>
            <th>Дата записи</th>
            <th>Время записи</th>
            <th>Запись</th> 
            <th>ИНН</th>
            <th>Номер телефона</th> 
        </tr>
        <?php foreach($info as $value){ ?>
        <tr>
            <td><?php echo $value['date_broni']; ?></td>
            <td><?php echo $value['time_broni']; ?></td>
            <td><?php echo $value['fio']; ?></td>
            <td><?php echo $value['inn']; ?></td>
            <td><?php echo $value['phone']; ?></td>
        </tr>
    <?php }?>
    </table>
  </form>
 </body>
</html>

