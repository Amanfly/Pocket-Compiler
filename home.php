<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>RT-CS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style4.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <link rel="icon" type="image/png" href="img/Logo.png">
</head>
<body>
<div class="frame">
<ul class="topnav">
    <li class="active"><a href="Home_Page.php">Home</a></li>
    <li class="active"><a href="home.php">Compiler</a></li>
    <li class="active"><a href="What_New.php">What's New</a></li>
    <li class="active"><a href="Updates.php">Updates</a></li>
    <li class="active"><a href="login.php">Login</a></li>
    <li class="active"><a href="about.php">About</a></li>
  </ul>
</br>
</br>
<div class="icon-bar">
<form action="compile.php" id="form" name="f2" method="POST" style="position: relative; left: -7px;" >
<select class="form-control button" name="language">
<option>Choose Language</option>
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp">C++11</option>
<option value="java">Java</option>
<option value="python27">Python2.7</option>
<option value="python3">Python3</option>
</select>
<input type="file" accept="image/* file/*" id="file-input" value="Upload" class="button">
<button onclick="take_Snapshot()" class="button">Snapshot</button>
<input type="reset" class="button">
<input value="Download" type="button" onclick='doDL(document.getElementById("mytext").value)' class="button"/>
<input type="submit" id="st" class="btn btn-success button" value="Run Code">
<script>
  function take_Snapshot(){
    window.open("127.0.0.1:8000")
  }
</script>
</div>
<div class="form-group">
<textarea class="form-control" name="code" rows="35" cols="100"  id='mytext' style="background-color:#394356;position: relative;left: -8px;height: 101%;top: auto;width: 60%;"># Type your code here</textarea>

<script type='text/javascript'>
function doDL(s){
    function dataUrl(data) {return "data:x-application/text," + escape(data);}
    window.open(dataUrl(s));
}
</script>
<div class="label1">
  <h2> Input: </h2>
</div>
<textarea class="form-control Input1" name="input" rows="10" cols="50" id ="input" style="background-color:#394356;">Enter Your Input</textarea>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>
<div class="label2">
  <h2> Output: </h2>
</div>
<textarea id='div' class="form-control Input2" name="output" rows="10" cols="50" style="background-color:#394356;">Output</textarea>


</script>
</form>
</div>
<div class="fm">
<b>Beta Version-2021</b><br>
<b>Developed By Team Pocket Compiler</b>
</div>
</div>
</body>
</html>


