<?php
require_once("config.php");
if(isset($_POST['id']))
    {
    $id=$_POST['id'];
    $query="select location.*,country.country from location inner join country on country.id=location.country_id where country_id='$id'";
    $result=mysqli_query($connection,$query);
    while( $row=mysqli_fetch_assoc($result))
        {
            echo "<tr>
                        <td>"
                .$row['id'].
                "</td>
                <td>
                ".$row['location'].
                "</td>
                <td>
                ".$row['country']."</td>
                <td>
                <a class='btn btn-success' href='location.php/?id=".$row['id']."'>Map</a>
                </td>
                </tr>";
    }

}
?>