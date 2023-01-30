<?php
    include 'connection.php';
    $sql = "SELECT * FROM class";
    $result = $con -> query($sql); ?>

    <br><form action="createClass.php" action="post">
        <button class="btn btn-primary">Create New Class</button>
    </form><br><br>
   <?php  while($row = $result -> fetch_assoc()) { ?>
        <tr>
        <td><?php echo $row['trainer_id'] ?></td>
        <td><?php echo $row['day'] ?></td>
        <td><?php echo $row['time'] ?></td>
        <td>
            <form class="form-inline m-2" action="adminUpdateClass.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <a class="btn btn-primary" name="update" href="adminUpdateClass.php?id=<?php echo $row['id']; ?>" role="button">Update</a>
                &emsp;<a class="btn btn-danger" name="delete" href="adminDeleteClass.php?id=<?php echo $row['id']; ?>" role="button">Delete</a>
            </form>
        </td>
        </tr>
    <?php    }

    $con -> close();
?>