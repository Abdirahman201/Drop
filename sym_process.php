<?php
require_once("config.php");
if(isset($_POST['id']) and $_POST['type']==="sym")
{
    $id=$_POST['id'];
    $query="select * from symptoms where disease_id='$id'";
    $result=mysqli_query($connection,$query);
    while( $row=mysqli_fetch_assoc($result))
    {
        $data=explode(",",$row['symptom']);
        echo "<div class='card bg-dark text-white' >
  <div class='card-header''>
    Symptoms
  </div>
  </div>
  ";
     foreach($data as $value)
         {
         echo "<li class='list-group-item bg-danger text-white'>".$value."</li>";
     }
   echo "
</div>";
    }

 }

if(isset($_POST['id']) and $_POST['type']==="rate" )
{ 
    $id=$_POST['id']; 
    $query="select * from infect where disease_id='$id'";
    $result=mysqli_query($connection,$query); 
    while( $row=mysqli_fetch_assoc($result))
    { echo "<div class='card' > <div class='card-header bg-dark text-white'> Details </div> </div>"; 
     echo "<li class='list-group-item bg-success text-white'><strong>Infection Rate:</strong> ".$row['infect_rate']."</li>"; 
     echo "<li class='list-group-item bg-success text-white'><strong>Total Cases:</strong>".$row['cases']."</li>"; 
     echo "</ul> </div>"; 
    }

}


if(isset($_POST['id']) and $_POST['type']==="med" )
{ 
    $id=$_POST['id']; 
    $query="select * from vaccination where disease_id='$id'";
    $result=mysqli_query($connection,$query); 
    while( $row=mysqli_fetch_assoc($result))
    {
        $data=explode(",",$row['vaccine']);
        echo "<div class='card bg-dark text-white' >
  <div class='card-header''>
    Medications
  </div>
  </div>";
        foreach($data as $value)
        {
            echo "<li class='list-group-item bg-primary text-white'>".$value."</li>";
        }
        echo "</ul>
</div>";
    }

}




?>