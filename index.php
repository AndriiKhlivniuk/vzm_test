<?php
session_start();
if(!empty($_SESSION['message'])) {
 $message = $_SESSION['message'];
 echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['message']);
    
  }

?>


<!DOCTYPE html>

<meta charset=utf-8>

 <header>

 <div class="heading">
  <b><p>Телефон: (499)340-94-71</p>
  <p>Email: <u>info@future-group.ru</u></p></b>

  <h2> <span style="font-weight:normal">Комменарии </span></h2>
 </div>

  <div class="logo">
    <img src="vzm_test.png" width="150" 
     height="150">
  </div>

 </header>

 <body >
 <div class="body">

 <?php
    $conn = new PDO('sqlite:comment.db');

    $result = $conn->query("SELECT * FROM comments");

    foreach($result as $row)
    { 
      echo "<b>".$row["name"]."</b>"."&ensp;&ensp;".$row["data"]."<br><br>";
      echo $row["comment"]."<br><br>";
    }

 ?>

 <h3> <span style="font-weight:normal">Оставить комменарий </span></h3>

 <form action="addcomment.php"  method="post">

  <label for="name">Ваше имя</label><br>
  <input type="text" id="name" name="name" ><br>
  <label for="comment">Ваш комменарий</label><br>
  <textarea id="comment"  name="comment" rows="5" cols="40"></textarea><br>
  <input type="submit" value="Submit" style="height:50px; width:100px">

 </form>

 </div>
 </body>

<footer>
 <div class="footer">
  <b><p>Телефон: (499)340-94-71</p>
  <p>Email: <u>info@future-group.ru</u></p>
  <p>Адрес: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></p></b>
  <br>
 </div>

  <div class="logo-foot">
    <img src="vzm_test.png" width="100" 
     height="100">
  </div>

 </header>
</footer>


<style>
.logo,.heading
{
  display:inline-block;
  vertical-align:middle;
  margin-left:20px;


}
.logo
{
  font-size: 35px;
  float: right;


}

.logo-foot,.footer
{
  display:inline-block;
  vertical-align:middle;
  margin-left:20px;


}
.logo-foot
{

  font-size: 35px;
  float: left;
  

}

.body
{

  margin:20px;
}
header
{
 
  background-color:white;


}

body
{

  margin: 0;
  padding: 0;
  background-color:#eeeeee;
  margin-bottom:150px;
}

footer{
   
   
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
}
</style>






</html>