<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <center>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <img src="{{asset('images/logo-journey.png')}}" alt="" width="50%">
    </center>
</body>
</html>
<script>
    let timeout;

    function submit() {
        timeout = setTimeout(alertFunc, 800);
    }

    function alertFunc() {
        window.location.replace("/beranda");
    }
    submit();

</script>
