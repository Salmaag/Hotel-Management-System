<?php
require_once 'classes/person1.php';
include_once 'adapter.php';

class recep extends person1 implements Redirect, show_ser_book
{
    
     private static $single;
 
     public static function getInstance()
    {
        if(self::$single==NULL)
        {
            self::$single=new recep();
        }
        return self::$single;
    }
    
      public function showBookings()
    {
		 $Base=DataBase::getInstance();
       $result = $Base->showBooking();
       echo"<div class='table'>";
       echo "<table>";
         echo"<tr><th>" . 'Name' . "</th><th>" . 'Email'. "</th><th>"
        . 'Phone' . "</th><th>" . 'Country' . "</th><th>" . 'Arrival'
         . "</th><th>" . 'Departure' . "</th><th>". 'TypeRoom' ."</th></tr>";  //$row['index'] t"
         while($row = mysqli_fetch_array($result))
         {   
            echo "<tr><td>" . $row['name'] . "</td><td>"
            . $row['email'] . "</td><td>" . $row['phone']
          . "</td><td>" . $row['country'] . "</td><td>"
            . $row['arrvial'] . "</td><td>" . $row['departure']
            . "</td><td>". $row['typeroom'] ."</td></tr>";  
         }
 
       echo "</table>";
       echo"</div>";    
    }
    
        public function showServices()
     {
		  $Base=DataBase::getInstance();
        $result = $Base->showServices();
        echo"<div class='table1'>";
        echo "<table>";
        echo"<tr><th>" . 'Service name' . "</th><th>". 'comment' . "</th></tr>";  
        while($row = mysqli_fetch_array($result))
          {   
             echo "<tr><td>" . $row['username'] . "</td><td>" . $row['comment']. "</td></tr>";  
           }
        echo "</table>";
        echo"</div>";
       
    }
     
   public function redirectLogin($usr)
    {
      if($usr == 'recep')
      {
            header("location: receptionist.php");
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username']= $usr;
      }
    }
    
    
    
       
}
















?>