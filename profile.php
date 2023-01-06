<?php 
    require_once('includes/header.php'); 
    include 'config/connection.php';
?>

<?php  
     if(isset($_SESSION['email'])){
?>

    <div class="container profile">
        <div class="mt-3">
            <a href="edit-user.php?id=<?php echo$_SESSION['id'];?>" class="btn">Napravi izmene</a>
            <?php
                $id = $_SESSION['id'];
                $conn = OpenCon();
                $sql = "SELECT * FROM korisnik WHERE id='$id'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) :
            ?>
                <p class="fs-5 mb-2"><strong>Ime: </strong><?php echo $row['ime']; ?></p>
                <p class="fs-5 mb-2"><strong>Prezime: </strong><?php echo $row['prezime']; ?></p>
                <p class="fs-5 mb-2"><strong>Email adresa: </strong><?php echo $row['email']; ?></p>
                <p class="fs-5 mb-2"><strong>Datum registracije: </strong><?php echo $row['datum_registracije']; ?></p>
            <?php endwhile; ?>
            <?php if($_SESSION['role'] == 'admin'){ ?>
            <p class="fs-5 mb-2"><strong>Rola: </strong>Admin</p>
            <?php } ?>
        </div>

        <br>
        <br>
        <!--  Ako je obican korisnik  -->
        <?php if($_SESSION['role'] == 'korisnik'){ ?>
        <p class="fs-5 mb-2"><strong>Rezervacije: </strong></p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Broj rezervacije</th>
                    <th scope="col">Datum rezervacije</th>
                    <th scope="col">Broj mesta</th>
                    <th scope="col">Status</th>
                    <th scope="col">Akcije</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>11.12.2022</td>
                    <td>5</td>
                    <td>Aktivan</td>
                    <td><i class="fa-solid fa-ban"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
        <?php } else {?>
      
        <!--  Ako je admin -->
        <p class="fs-5 mb-2"><strong>Korisnici: </strong></p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Broj</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Email</th>
                    <th scope="col">Datum registracije</th>
                    <th scope="col">Broj rezervacija</th>
                    <th scope="col">Akcije</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $email = $_SESSION['email'];
                        $conn = OpenCon();
                        $sql = "SELECT * FROM korisnik WHERE rola='korisnik'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['ime']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['datum_registracije']; ?></td>
                            <td>2</td>
                            <td>
                                <a href="delete-user.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                                <a href="edit-user.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <?php }?>
    </div>

<?php
} else {
    header("Location: index.php");
}     
?>

<?php require_once('includes/footer.php') ?>