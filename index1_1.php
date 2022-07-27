<?php
require 'db.php';
$time_work = ['9:00', '9:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30'];

$date_record = str_replace('/', '', $_POST['date_v']);
$dbh = DB::getDB();
$sth = $dbh->prepare("SELECT time_broni FROM info WHERE date_broni = $date_record");
$sth->execute();
$time_r = $sth->fetchAll(PDO::FETCH_COLUMN);

$arr3[] =  array_diff($time_work, $time_r);

$first_element=array_shift($arr3);

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
<script>
$(function(){
     $("#datepicker").datepicker();
});
</script>
 <body>
  <form action="" method="POST">
  <label>FIO</label>
  <input type="text" name="FIO" value="<?php echo $_POST['FIO'] ?>"></br>
  <label>INN</label>
  <input type="text" name="INN" value="<?php echo $_POST['INN'] ?>"></br>
  <label>Номер телефона</label>
  <input type="text" name="phone" value="<?php echo $_POST['phone'] ?>"></br>
  <label>E-mail</label>
  <input type="text" name="e_mail" value="<?php echo $_POST['e_mail'] ?>"></br>
  <label>Дата посещения</label>
  <input type="text" name="date_v"  value="<?php echo $_POST['date_v'] ?>" readonly></br>
  <label>Время посещения</label>
  <select name="time_z">
    <?php foreach ($first_element as $n=>$opt) {?>
    <option value="<?php echo $opt?>"><?php echo $opt?></option><?php 
}?>
   </select></br>
  <input type="submit" value="Отправить" name="otpr">
  </form>
 </body>
</html>

<?php
if( isset( $_POST['otpr'] ) ) {
$fio = $_POST['FIO'];
$inn = $_POST['INN'];
$phone = $_POST['phone'];
$e_mail = $_POST['e_mail'];
$date_broni = str_replace('/', '', $_POST['date_v']);
$time_broni = $_POST['time_z'];

$dbh = DB::getDB();
$sth = $dbh->prepare("INSERT INTO `info` SET `fio` = :fio, `inn` = :inn, `phone` = :phone, `e_mail` = :e_mail, `date_broni` = :date_broni, `time_broni` = :time_broni");
$sth->execute(array('fio' => $fio, 'inn' => $inn, 'phone' => $phone, 'e_mail' => $e_mail, 'date_broni' => $date_broni, 'time_broni' => $time_broni ));


header("Location: index.php");
}


?>