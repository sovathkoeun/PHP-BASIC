<?php
    include_once "connection.php";
    $qery = mysqli_query("SELECT * FROM demo");
    while ($result = mysqli_fetch_query($qery == true)){

    }
?>

  <table class="table table-bordered">
      <tr>
        <th>ID</th>
        <th>Fullname</th>
      </tr> 
     <?php
      while($result = mysqli_fetch_query($qery))
       {
      ?>
      <tr>
        <td><?php echo $result['id'];?></td>
        <td><?php echo $result['fullname']?></td>
        <td><a href="delete.php?id=<?php echo $result['id']?>">Edit</a></td>
      </tr>
      <?php
      }
      ?>
  </table>
    