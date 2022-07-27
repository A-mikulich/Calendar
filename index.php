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

$("#datepicker").datepicker({
     onSelect:function(selectedDate)
     {
          alert(selectedDate);
     }
});
</script>
 <body>
  <form action="index1_1.php" method="POST">
  <label>FIO</label>
  <input type="text" name="FIO"></br>
  <label>INN</label>
  <input type="text" name="INN"></br>
  <label>Номер телефона</label>
  <input type="text" name="phone"></br>
  <label>E-mail</label>
  <input type="text" name="e_mail"></br>
  <label>Дата посещения</label>
  <input type="text" id="datepicker" name="date_v"></br>
  <input type="submit" value="Выбрать время">
  </form>
 </body>
</html>


