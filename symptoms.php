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
                Diseases and Symptoms
            </h1>
            <?php
            $query="select * from Disease";
            $result=mysqli_query($connection,$query);

            ?>

            <form class="form col-md-3">
                <div class="form-group">
                    <lable>Select a Disease</lable>
                    <select id="country" class="form-control">
                        <option value="none">Choose a select a disease</option>

                        <?php
                        while($row=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['disease'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </form>


            <!----THIS PART CONTAINS TABLE -->
            <div class="row">
            <div class="col-md-4" id="data" >

            </div>
                <div class="col-md-4" id="data2" >

                </div>

                <div class="col-md-4" id="data3" >

                </div>
            <!----THIS PART CONTAINS TABLE -->
        </div>
        </div>




        <?php include("footer.php")?>
    </body>
</html>
<script>
    $(document).ready(function(){
        $("#country").on("change",function(e){
            $.ajax({
                url: "process/sym_process.php", 
                url: "process/sym_process.php",
                type:"POST",
                data:{id:e.target.value,type:"sym"},
                success: function(result){
                    $("#data").html(result);

                },
            });
            
            $.ajax({
                url: "process/sym_process.php", 
                url: "process/sym_process.php",
                type:"POST",
                data:{id:e.target.value,type:"rate"},
                success: function(result){
                    $("#data2").html(result);

                },
            });
            $.ajax({
                url: "process/sym_process.php", 
                url: "process/sym_process.php",
                type:"POST",
                data:{id:e.target.value,type:"med"},
                success: function(result){
                    $("#data3").html(result);

                },
            });
        });
    });
</script>