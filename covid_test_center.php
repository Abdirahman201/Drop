<?php
require_once("process/config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            img {
                width: 100%;
                height: auto;
            }
            tr:hover{
                background:grey!important;
                color:white;
            }
        </style>
    </head>
    <?php include("header.php");?>
    <body>

       <div class="container">
                <h1 class="display-4 mt-4">
                    Covid Test Center
           </h1>
           <?php
                $query="select * from country";
                $result=mysqli_query($connection,$query);

           ?>

               <form class="form col-md-3">
                   <div class="form-group">
                        <lable>Select Country</lable>
                       <select id="country" class="form-control">
                           <option value="none">Choose a country</option>

                           <?php
                           while($row=mysqli_fetch_assoc($result))
                               {
                               ?>
                                   <option value="<?php echo $row['id'];?>"><?php echo $row['country'];?></option>
                           <?php
                           }
                           ?>
                       </select>
                   </div>
               </form>

           
           <!----THIS PART CONTAINS TABLE -->
           <div >
                   <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    Location
                                </th>
                                <th>
                                    Coutry
                                </th>
                                <th>
                                    Find on Map
                                </th>
                            </tr>
                       </thead>
                       <tbody id="data">
                       </tbody>
               </table>
           </div>
           <!----THIS PART CONTAINS TABLE -->
        </div>
        



        <?php include("footer.php")?>
    </body>
</html>
<script>
$(document).ready(function(){
    $("#country").on("change",function(e){
        $.ajax({
            url: "process/center_process.php", 
            url: "process/center_process.php",
            type:"POST",
            data:{id:e.target.value},
            success: function(result){
               $("#data").html(result);

                },
            });
    });
});
</script>