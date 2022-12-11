<?php require_once('includes/header.php') ?>

    <div class="container registration-form-page">
        <div class="form-container">
            <h1>Promenite unete podatke</h1>
            <div class="mb-3">
                <form action="/" method="POST">
                    <div class="mb-3">
                        <label for="registrationName" class="form-label">Ime</label>
                        <input type="text" class="form-control" id="registrationName">
                    </div>

                    <div class="mb-3">
                        <label for="registrationLastName" class="form-label">Prezime</label>
                        <input type="text" class="form-control" id="registrationLastName">
                    </div>

                    <div class="mb-3">
                        <label for="registrationContact" class="form-label">Email adresa</label>
                        <input type="email" class="form-control" id="registrationContact">
                    </div>

                    <div class="mb-3">
                        <label for="registrationPassword" class="form-label">Šifra</label>
                        <input type="password" class="form-control" id="registrationPassword">
                    </div>

                    <div class="mb-3">
                        <label for="registrationConfirmPassword" class="form-label">Potvrdi šifru</label>
                        <input type="password" class="form-control" id="registrationConfirmPassword">
                    </div>

                    <button type="submit" class="btn">Izvrši izmenu</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php') ?><?php
