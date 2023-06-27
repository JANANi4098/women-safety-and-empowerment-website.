<!DOCTYPE html>
<html>


<head>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style media="screen">
  h1 {
    color: white;
    text-align: center;
  }

  body {
    background-color: #EEF2FF;
    background-image: url(images/bgimg.png);
    background-size: cover;
  }

  background-image {
    opacity: 0.5;
  }

  input {
    text-align: center;
    font-size: 1.5rem;
  }

  .big-title {
    background-color: #FF004D;
    margin: 2%;
    padding: 1%;
  }

  ::placeholder {
    color: black;
    font-size: 1rem;
    text-transform: uppercase;
  }

  .storyimg {
    height: 4%;
    width: 8%;
  }

  .mainstory {
    text-align: center;
  }

  .button-24 {
    background: #FF004D;
    border: 1px solid #FF4742;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
    font-size: 16px;
    font-weight: 800;
    line-height: 16px;
    min-height: 40px;
    outline: 0;
    padding: 12px 14px;
    text-align: center;
    text-rendering: geometricprecision;
    text-transform: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
  }

  .button-24:hover,
  .button-24:active {
    background-color: initial;
    background-position: 0 0;
    color: #FF4742;
  }

  .button-24:active {
    opacity: .5;
  }

  #comment-box, #post {
    height: 50px;
    width: 500px;
    border-color: #FF004D;
    border-width: medium;
    border-radius: 10px;
    margin-left: 3%;
  }

  ul {
    margin: 50;
    padding: 70;
    color: black;
    border-style: solid;
    border-color: #287EC7;
    text-align: left;
    list-style: none;
    font: 1.5rem "Arial", san-serif;
    border: 80px;
  }

  li {
    border-style: solid;
    border-radius: 2px;
    border-color: red;
    text-align: left;
    word-wrap: break-word;
    padding: 1%;
    margin: 1%;
    background-color: white;
  }

  .submit {
    background-color: red;
    color: white;
    padding: 30px 50px;
    border-radius: 4px;
    font-size: 20px;
    border-color: red;
  }

  #mybutton {
    position: fixed;
    bottom: 50px;
    right: 700px;
  }

  </style>
</head>
<title>STORY</title>
<center>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comment Box</title>

</center>
<style>
  .button {
    font-size: 30px;

  }
</style>


<body>
  <center>
    <div class="big-title">
      <h1>STORY SECTION</h1>
    </div>
    <div class="">
      <img src="images/femaleicon.png" alt="" class="storyimg">
      <input type='text' style="height:50px;width:500px" id="comment-box" placeholder="Enter your story">
      <button class="button-24" role="button" style="height:50px;width:100px " id="post">Post</button>

    </div>
  </center>









  <ul id="unordered">
  </ul>






  <center>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </center>
  <script type="text/javascript">
  var post = document.getElementById("post");
  post.addEventListener("click", function() {
    var commentBoxValue = document.getElementById("comment-box").value;

    var li = document.createElement("li");
    var text = document.createTextNode(commentBoxValue);
    li.appendChild(text);
    document.getElementById("unordered").appendChild(li);

  });

  </script>
</body>
