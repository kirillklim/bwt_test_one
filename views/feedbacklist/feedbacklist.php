<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Список фидбеков</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href="../css/style-feedback.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <meta name="description" content="Список фидбеков">
    <meta name="keywords" content="Список фидбеков"/>
</head>
<body>
<!-- menu -->

 <?php
   require_once(ROOT . '/views/menu/menu.php');
 ?>

 <div class="container">
        <div class="row">
                <div class="col-md-12">
                        <h1>Список фидбеков</h1>

                        <table border="1" class="table-feedbacklist">
                           <tr>
                            <th>Имя</th>
                            <th>Сообщение</th>
                            <th>Дата</th>
                           </tr>
                         <?php

                         foreach ($db->query($sql) as $row) {

                             echo "<tr><td>".$row['name'] ."</td><td>".$row['message']."</td><td>".$row['dwhen']."</td></tr>";
                         }

                         ?>
               </div>
        </div>
</div>


</table>

</body>
</html>