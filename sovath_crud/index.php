<?php
    include_once  "connection.php";
    $sql = "select * from skeleton_tbl_candidates";
    $result = mysqli_query($connect, $sql);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <tr class="btn-success">
                    <th>CAN_ID</th>
                    <th>CAN_FIRSTNAME</th>
                    <th>CAN_LASTNAME</th>
                    <th>CAN_GENDER</th>
                    <th>CAN_AGE</th>
                </tr>
                <?php
                foreach($result as $value){
                ?>
                <tr>
                    <td><?php echo $value["can_id"];?></td>
                    <td><?php echo $value["can_firstname"];?></td>
                    <td><?php echo $value["can_lastname"];?></td>
                    <td><?php echo $value["can_gender"];?></td>
                    <td><?php echo $value["can_age"];?></td>
                    
                </tr>
                <?php
                }
               ?>
            </table>
        </div>
    </div>
</div>