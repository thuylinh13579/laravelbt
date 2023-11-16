<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/sum" method="POST">
  @csrf
  <input type="number" name="num1">
  <input type="number" name="num2">
  <button type="submit">Tính tổng</button>
</form>

</body>
</html>