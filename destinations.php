<?php
    require_once('includes/header.php');
    include 'config/connection.php';
?>

    <div class="container destination">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb-3">
            <h1 class="mt-2 mb-3">Destinacije</h1>
            <?php 
                if($_SESSION['role'] == 'admin'){
                    echo '<a href="add-destination.php" class="btn">Dodaj destinaciju</a>';
                }
            ?>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 destination-row">
            <?php
            $conn = OpenCon();
            $sql = "SELECT * FROM `destinacije` ORDER BY `destinacije`.`id` DESC";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) :
                ?>
                <div class="col destination-col">
                    <div class="card h-100">
                        <img src="./assets/img/slider/placeholder.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['naziv_smestaja']; ?></h5>
                            <p class="card-text"><?php echo $row['mesto']; ?></p>
                            <p class="card-text"><?php echo $row['drzava']; ?></p>
                            <p class="card-text"><?php echo $row['kontinent']; ?></p>
                            <p class="card-text"><?php echo $row['broj_slobodnih_mesta']; ?></p>
                            <p class="card-text"><?php echo $row['datum_polaska']; ?></p>
                            <p class="card-text"><?php echo $row['datum_povratka']; ?></p>
                            <p class="card-text"><?php echo $row['vrsta_putovanja']; ?></p>
                            <p class="card-text"><?php echo $row['slika']; ?></p>
                            <p class="card-text"><?php echo $row['opis']; ?></p>
                            <a href="single-destination.php?id=<?php echo $row['id']; ?>"">Pogledajte više</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>


<?php require_once('includes/footer.php') ?>