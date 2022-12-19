<?php
    require_once('includes/header.php');
    include 'config/connection.php';
?>

    <div class="container destination">
        <h1 class="mt-2 mb-3">Destinacije</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 destination-row">
            <?php
            $conn = OpenCon();
            $sql = "select * from destinacije";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) :
                ?>
                <div class="col destination-col">
                    <div class="card h-100">
                        <img src="./assets/img/slider/placeholder.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['mesto']; ?></h5>
                            <p class="card-text"><?php echo $row['opis']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>


<?php require_once('includes/footer.php') ?>