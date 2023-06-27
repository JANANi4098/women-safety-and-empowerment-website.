<!DOCTYPE html>
<?php


$con= new mysqli("localhost","root","","report");
?>
<html>

<head>
  <title>report</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style media="screen">
  /*body tag*/
  body {
    font-family: 'Bar low Condensed', sans-serif;
    background-image: linear-gradient(rgba(0, 0, 0, 0.1), #3551b5), url(images/reportbgimg.gif);
    background-size: cover;
  }

  /*report page heading decortion*/
  .re {
    margin-top: 50px;
    margin-left: 350px;
    width: 500px;
    height: 100px;
    background-color: red;
    border: 2px solid red;
    border-radius: 150px;
    text-align: center;
    color: white;
    font-weight: bold;
  }

  h1 {
    margin-top: 25px;
  }

  /*form tag*/
  .form {
    margin-top: 20px;
    margin-left: 370px;
    padding: 60px 30px;
    width: 100%;
    max-width: 500px;
    /*box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0px 0px 10px  0px #666;*/
  }

  /*text box1*/
  .textbb {
    position: absolute;
  }

  .input {
    padding: 10px;
    height: 70px;
    width: 400px;
    font-size: 20px;
    border-radius: 5px;
    box-sizing: border-box;
    outline: none;
    border: 2px solid black;
  }

  .plh {
    position: absolute;
    top: 10px;
    left: 8px;
    font-size: 20px;
    font-style: italic;
    padding: 0px 5px;
    color: #666;
    transform: 0.3s;
    pointer-events: none;
  }

  .input:focus+.plh {
    top: -20px;
    color: red;
  }

  /*text box 2*/
  .textbbb {
    position: absolute;
  }

  .input1 {
    padding: 10px;
    height: 70px;
    width: 400px;
    font-size: 20px;
    box-sizing: border-box;
    outline: none;
    border-radius: 5px;
    border: 2px solid black;
  }

  .plh1 {
    position: absolute;
    top: 10px;
    left: 8px;
    font-size: 20px;
    font-style: italic;
    padding: 0px 5px;
    color: #666;
    transform: 0.3s;
    pointer-events: none;
  }

  .input1:focus+.plh1 {
    top: -20px;
    color: red;
  }

  /*text area*/
  .ta {
    width: 400px;
    height: 110px;
    margin-left: 0px;
    border: 2px solid black;
    border-radius: 10px;
    font-size: 20px;
    font-style: italic;
  }

  /*button*/
  .bt {
    margin-left: 120px;
  }

  button {
    width: 150px;
    height: 60px;
    border: 1px solid red;
    border-radius: 20px;
    font-size: 25px;
    background-color: red;
    color: white;
    font-weight: bold;
    cursor: pointer;
  }

  button:hover {
    background-color: blue;
    box-shadow: 0px 0px 5px blue, 0px 0px 25px blue, 0px 0px 50px blue;
  }

  /*link tag*/
  a {
    color: black;
    margin-left: 400px;
    font-size: 20px;
    font-weight: bold;
  }

  </style>
</head>

<body>
  <div class="container">
    <div class="re">
      <h1>REPORT PAGE</h1>
    </div>
    <form class="form" action="store.php" method="post">
      <div class="textbb">
        <input name="cname" class="input" type="text" placeholder="Enter Account/Channel name">
      </div>
      <br><br><br><br><br>
      <div class="textbbb">
        <input name="pname" class="input1" type="text" placeholder="Enter A Proof Eg:Link To Post/Video">
      </div>

    <br><br><br><br><br>
    <textarea class="ta" name="dname" placeholder="Enter Description(Optional)" rows="100" cols="200"></textarea>
    <br><br><br><br>
    <div class="bt">
      <button class="cdn" name="submit">Report</button>
    </div>
    </form>
    <br><br><br>
    <a href="">Follow Our ig Community</a>
    <br><br><br><br>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
