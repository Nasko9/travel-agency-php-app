<?php require_once('includes/header.php') ?>

    <div class="container profile">
        <div class="mt-3">
            <a href="edit-user.php" class="btn">Napravi izmene</a>
            <p class="fs-5 mb-2"><strong>Ime: </strong>Miloš</p>
            <p class="fs-5 mb-2"><strong>Prezime: </strong>Naskovic</p>
            <p class="fs-5 mb-2"><strong>Email adresa: </strong>email@email.com</p>
            <p class="fs-5 mb-2"><strong>Datum registracije: </strong>11.12.2022</p>
            <p class="fs-5 mb-2"><strong>Rola: </strong>Admin</p>
        </div>

        <br>
        <br>
        <!--  Ako je obican korisnik  -->
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

        <br>
        <br>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Milos</td>
                    <td>milos@milos.com</td>
                    <td>11.12.2022</td>
                    <td>2</td>
                    <td>
                        <a href="#"><i class="fa-solid fa-trash"></i></a>
                        <a href="edit-user.php"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

<?php require_once('includes/footer.php') ?>