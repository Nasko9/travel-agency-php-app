<?php require_once('includes/header.php') ?>

    <div class="container form-page">
        <div class="form-container">
            <h1>Prijavite se</h1>
            <div class="mb-3">
                <form action="/" method="POST">
                    <div class="mb-3">
                        <label for="loginContact" class="form-label">Email adresa</label>
                        <input type="email" class="form-control" id="loginContact">
                    </div>

                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Šifra</label>
                        <input type="password" class="form-control" id="loginPassword">
                    </div>
                    <button type="submit" class="btn">Prijavite se</button>
                </form>
            </div>
            <div>
                <span>Nemate nalog?</span>
                <a href="registration.php">Registrujete se</a>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php') ?>