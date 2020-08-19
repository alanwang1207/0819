<?php

if (isset($_POST["okButton"])) {
  $firstName = $_POST["firstName"];
  echo $firstName;
  $lastName = $_POST["lastName"];
  $cityId = $_POST["cityId"];
  $sql = <<<sqlstate
    insert into employee (firstName,lastName,cityId)
    values('$firstName','$lastName','$cityId')
  sqlstate;

  require("config.php");
  mysqli_query($link,$sql);
  header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <form method="post">
    <div class="form-group row">
      <label for="firstName" class="col-4 col-form-label ">First Name</label>
      <div class="col-8">
        <input id="firstName" name="firstName" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="lastName" class="col-4 col-form-label">Last Name</label>
      <div class="col-8">
        <input id="lastName" name="lastName" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">City</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="cityId" id="radio_0" type="radio" class="custom-control-input" value="2">
          <label for="radio_0" class="custom-control-label">Zhongli</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="cityId" id="radio_1" type="radio" class="custom-control-input" value="4">
          <label for="radio_1" class="custom-control-label">Taoyuan</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="cityId" id="radio_2" type="radio" class="custom-control-input" value="6">
          <label for="radio_2" class="custom-control-label">Pingtong</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="okButton" value="ok" type="submit" class="btn btn-primary">send</button>
      </div>
    </div>
  </form>

</body>

</html>
