<?php require_once('includes/header.php') ?>

    <div class="container form-page">
        <div class="form-container">
            <h1>Prijavite se</h1>
            <div class="mb-3">
                <form action="/" method="POST" name="login-form">
                    <div class="mb-3">
                        <label for="loginContact" class="form-label">Email adresa</label>
                        <input type="email" class="form-control" id="loginContact" autocomplete="off" required
                               minlength="5" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>

                    <div class=" mb-3">
                        <label for="loginPassword" class="form-label">Šifra</label>
                        <input type="password" class="form-control" id="loginPassword" autocomplete="off" required
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    </div>
                    <button type="submit" class="btn" id="logIn">Prijavite se</button>
                </form>
            </div>
            <div>
                <span>Nemate nalog?</span>
                <a href="registration.php">Registrujete se</a>
            </div>
        </div>
    </div>

    <script>
        initiate("logIn", "form[name='login-form']");
    </script>

<?php require_once('includes/footer.php') ?>