<?php
    include 'connection.php';
    $sql = "SELECT * FROM membership";
    $result = $con -> query($sql);

    while($row = $result -> fetch_assoc()) { ?>
        <tr>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['namee'] ?></td>
        <td><?php echo $row['class'] ?></td>
        <td><?php echo $row['member'] ?></td>
        <td>
            <form class="form-inline m-2" action="adminUpdateMembership.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <a class="btn btn-primary" name="update" href="adminUpdateMembership.php?id=<?php echo $row['id']; ?>" role="button">Update</a>
                &emsp;<a class="btn btn-danger" name="delete" href="adminDelete.php?id=<?php echo $row['id']; ?>" role="button">Delete</a>
            </form>
        </td>
        </tr>
    <?php    }

    $con -> close();
?>