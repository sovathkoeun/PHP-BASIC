<?php
    include_once "connection.php";
    $query = mysqli_query($connection,"SELECT * FROM tbl");
    ?>
    
   
                                    <?php
                                    while($result = mysqli_fetch_array($query))
                                    {
                                    ?>
                                        <tr>
                                            
                                        
                                        </tr>
                                    <?php 
                                    }
                                    ?>
                                <