<?php
session_start();
require_once 'Room.php';

if(isset($_POST['submit_Class'])){

$roomnum=$_POST['name'];


$room = new Room();

$room->setroomNo($roomnum);


$room->deletRoom($room->roomNo);

}

?>

<html>
 <head>
  <link rel="stylesheet" href="delestyle.css">
  </head>
 <body>
  <div class="contain">
    <div class="Add">
      <span>
      For Adding Room
      </span>
    <form class="foorm" action="DeletRoom.php" method="POST">
    <div class="form">
      <div class="Class_name">
        <label>Room Number  </label>
        <input type="text" name="name" class="Class_Input"  value = "" placeholder="Enter Room name" required pattern="^[a-zA-Z]*" title="you should enter valid class name">
	  </div>
        
       <br>
        
       <div class="submit">
         <div class="Add"><input type="submit" name="submit_Class"  value="Delete" ></div>
         <div class="cancel">
           <input type="reset" value="Cancel" >
         </div>
      </div>
    </div>

  </form>

   </div>
  </body>
 </html>
