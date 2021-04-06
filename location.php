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
            #map {
                height:500px!important;
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
            $id=$_GET['id'];
            $query="select location.* , cordinates.* from location inner join cordinates on cordinates.location_id=location.id where location.id='$id'";
            $result=mysqli_query($connection,$query);
            $row=mysqli_fetch_assoc($result);
            ?>
            <div style="margin-top:80px!important;" class="row p-4 justify-content-center">
                <div class="col-md">
                    <p class="font-weight-bold lead" style="font-size:30px!important">
                            <?php
                        echo $row['location'];
                         $lati=$row['lat'];
                         $lon=$row['longitude'];
                        ?>
                    </p>
                    <p class="text-center lead">
                        This map shows the location you selected , can zoom in and out to get a clear picture of the location.
                    </p>
                    <div class="row">
                        <div class="col m-2">
                            <button type="button" class="btn  btn-lg p-5 btn-success" data-toggle="modal" data-target="#exampleModal" >
                                Make an Appointment
                            </button>
                        </div>
                        <div class="col m-2">
                            <button onclick="APTalert2()" class="btn  btn-lg p-5 btn-danger">
                                Cancel Appointment
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div id="map"></div>
                </div>
            </div>

        </div>
        
        
        <!-----MODAL ---->
        <!-- Button trigger modal -->
      
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                               <div class="form-group">
                                    <lable>First Name:</lable>
                                   <input type="text" placeholder="Enter First Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <lable>Last Name:</lable>
                                <input type="text" placeholder="Enter Last Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <lable>Phone:</lable>
                                <input type="text" placeholder="Enter Phone Number" class="form-control">
                            </div>
                            <div class="form-group">
                                <lable>Age:</lable>
                                <input type="date" placeholder="Enter Age" class="form-control">
                            </div>
                            <div class="form-group">
                                <lable>Address:</lable>
                                <input type="text" placeholder="Enter Your Address" class="form-control">
                            </div>
                            <div class="form-group">
                                <lable>Do you have COVID-19 Symptoms:</lable>
                                Yes:<input type="radio" placeholder="Enter Your Address" class="">
                                 No:<input type="radio" placeholder="Enter Your Address" class="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="APTalert()" class="btn btn-success">Make Appointment</button>
                    </div>
                </div>
            </div>
        </div>

        <!---- MODAL --->





        <?php include("footer.php")?>
    </body>
</html>


<script>
    
    function APTalert()
    {
        alert("Your Appointment has been made!");
    }
    
    function APTalert2()
    {
        alert("Appointment has been Cancelled!");
    }

    function initMap() {
        var lati="<?php echo floatval($lati);?>";
        var ln="<?php echo floatval($lon);?>";

                const myLatLng = { lat: parseFloat(lati), lng: parseFloat(ln) };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 4,
                    center: myLatLng,
                });
                new google.maps.Marker({
                    position: myLatLng,
                    map,
                    title: "Hello World!",
                });
            }
        </script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAekZABtpE_0DT9zx9iId6IjG3JM2I8cA0&callback=initMap&libraries=&v=weekly"
        async
        ></script>