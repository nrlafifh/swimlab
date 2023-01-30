<?php
    include 'connection.php';
    $sql = "SELECT * FROM trainer";
    $result = $con -> query($sql);?>

<br><form action="createTrainer.php" action="post">
        <button class="btn btn-primary">Add New Trainer</button>
    </form><br><br>

        <form action="adminUpdateTrainer.php" method="post">
          <div class="text-center team mb-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                <?php while($row = $result->fetch_assoc()){ ?>
                  <div class="col-lg-3 col-sm-6"><br><br>
                        <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                      <img src = "img/<?php echo $row['imagee']; ?>" />
                      <div class="team-social">
                      <a class="btn btn-danger" href="adminDeleteTrainer.php?id=<?php echo $row['id'] ?>" role="button">Delete</a>
                      </div>
                    </div>
                    <div class="bg-secondary p-4">
                      <h5 class="m-0"><?php echo $row['name'] ?></h5>
                      <p class="m-0"><?php echo $row['email'] ?></p>
                      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                  </div>
                  </div>
                <?php
                 }
                ?>              
                </div>
              </div>
            </div>
          </div>
        </form>
          
<?php $con -> close(); ?>