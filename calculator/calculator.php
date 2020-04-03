<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="calculator.css">
 <title>A Calculator</title>
</head>
<style type="text/css">
table{
 width:60%; background:blue; margin:0 auto; box-shadow:10px 10px 30px #ccc; border-bottom:20px solid black;
}
.result-box{
 width:57%; margin:0 auto; background: blue; height:100px; margin-top:20px; padding:20px; color:white;box-shadow:10px 10px 30px #ccc; font-family:verdana;
}



td{
font-size:20px; padding:10px; font-family:verdana; color:#fff;
}
input[type=text]{
 padding:10px; 
 width:140px; 
 font-size:20px;
 border: 1px solid #e5e5e5;
 border-radius: 3%;
 box-shadow: 0px 5px 0px 0px #e5e5e5;
}
input[type=submit]{
   padding:40px;
   margin-left:200px; 
   font-size:16px; 
   cursor:pointer;
   border:none;
   background:green; 
   color:#333;
   width:250px; 
   height:50px;
   border: 1px solid #415e40;
   border-radius: 3%;
   box-shadow: 0px 5px 0px 0px #3d724e;

}
input[type=reset]{
 padding:40px;  
 font-size:16px;
 cursor:pointer; 
 border:none;
 background:brown; 
 color:#333; 
 height:50px;
 border: 1px solid #415e40;
 border-radius: 3%;
 box-shadow: 0px 5px 0px 0px #4e3838;


}
input[type=submit]:hover{
 background:#eee; color:black;
}
input[type=reset]:hover{
 background:#eee; color:red;
}
h1{
 background:green; color:white; font-family:verdana; padding:20px;
}

.author{
   margin-left:400px;
   
    
}
a{
   color: black; 
}

a:hover{
 background:rgb(18, 19, 77); 
}

</style>
<body>
 <form action="" method="post">
 <table>
 
 <center>
 <h1>A Simple Calculator with PHP</h1>
 <tr><td>Enter First Value</td><td><input placeholder="Enter 1st" type="text" name="first_value" id="first_value" /></td></tr>
 <tr><td>Enter Second Value</td><td><input placeholder="Enter 2nd" type="text" name="second_value" id="second_value" /></td></tr>

 <tr><td>Select Oprator </td> 
   <td>
      <select name="operator" id="">
      <option value="static">Select Operator</option>
      <option value="+">Addition (+)</option>
      <option value="-">Substraction (-)</option>
      <option value="*">Multiplication (*)</option>
      <option value="/">Division (/)</option>
      </select>
   </td>
 </tr>
 
 <tr><td><input type="reset" value="Reset The Numbers" /></td><td> <input type="submit" name="submit" value="CALCULATE" /></td></tr>
 
 </center>
 
 </table>
 
 </form>

 <?php
 if(isset($_POST['submit'])){
  $first_value = $_POST['first_value'];
  $second_value = $_POST['second_value'];
  $operator = $_POST['operator'];
  
  
   
 
 ?>
 <div class="result-box">
 <h3>Your Results : <?php
switch($operator){ case "+":
   echo $first_value + $second_value; 
   break;
   case "static":
   echo "Please select a method!"; 
   break;
   case "-":
   echo $first_value - $second_value; 
   break;
   case "*":
   echo $first_value * $second_value; 
   break;
   case "/":
   echo $first_value / $second_value; 
   break;
   default:
   echo "number!";
   break;
   
  }
  
 }
 ?></h3>

   <div class="author">
      <tr><td colspan="3">Author :<a href="#"> Agohma valantain </a></td></tr>
   </div>

   <div class="audio-controll">
      <audio controls>
         <source src="valz.ogg" type="audio/ogg">
            <source src="valz.mp3" type="audio/mpeg">
      </audio>
   </div>

 </div>
</body>
</html>