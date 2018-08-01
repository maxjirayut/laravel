<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="store" method="post">
      {{ csrf_field() }}
      <input type="text" name="name" value=""><br>
      <input type="text" name="lasname" value=""><br>
      <input type="text" name="nicname" value=""><br>
      <input type="submit" name="" value="save">
    </form>
  </body>
</html>
