<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.js"></script>
    <title>Тест</title>
</head>
<body>
<?php
include(__DIR__.'/header.php');
?>

<p class="mt-2">Виды транспорта</p>

<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Транспорт</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td></td>
    </tr>
  </tbody>
</table>

<a class="btn btn-primary float-right mb-4" href="{% url 'transport_add' %}" role="button">Редактировать</a>
</body>
</html>

