<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入泰山職訓場</title>
  <style>
    /* body {
      font-family: Arial, "Microsoft JhengHei", Helvetica, sans-serif;
      font-size: 1.2rem;
      line-height: 2rem;
    } */

    table {
      border: 1px solid #AAA;
      border-collapse: collapse;
      box-sizing: border-box;
      box-shadow: 1px 1px 4px lightslategray;
      width: 19vw;
      min-width: 18vw;
      margin-left: 10vw;
      margin-top: 1vh;

    }

    td {
      border: 1px solid #DDD;
      padding: 10px;
    }

    td input {
      font-size: 17px;
      border-color: transparent transparent #CCC transparent;

    }

    td button {
      border-radius: 5px;
      padding: 4px 8px;
      font-family: Arial, "Microsoft JhengHei", Helvetica, sans-serif;
      font-size: 1rem;
      background-color: #0000ff20;
    }

    h1 {
      margin-left: 10vw;
      /* margin-top: 8vh; */
    }

    .td1 {
      min-width: 50px;
      text-align: center;
    }
    .material-icons.md-48{
      font-size: 36px;
      color: orange;
    }
  </style>
  <script src="https://kit.fontawesome.com/fae004be8b.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>
<form action="api/reg.php" method="post" id="acc">
  <ul class="list-group col-md-4 mx-auto mt-5">
    <li class="list-group-item">帳號：<input type="text" name="acc" id="pw"></li>
    <li class="list-group-item">密碼：<input type="password" name="pw" id="pw"></li>
    <li class="list-group-item">
    <input type="submit" value="確認" class="btn btn-primary">
    <input type="submit" value="註冊" class="btn btn-danger">
    </li>
  </ul>
</form>

</body>

</html>