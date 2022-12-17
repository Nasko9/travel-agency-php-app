<?php require_once('includes/header.php') ?>

    <div class="container registration-form-page">
        <div class="form-container">
            <h1>Registrujte se</h1>
            <div class="mb-3">
                <form action="/" method="POST" name="registration-form">
                    <div class="mb-3">
                        <label for="registrationName" class="form-label">Ime</label>
                        <input type="text" class="form-control" id="registrationName" required minlength="2"
                               maxlength="20" oninvalid="this.setCustomValidity(' ')" onchange="checkForm('registration')">
                    </div>

                    <div class="mb-3">
                        <label for="registrationLastName" class="form-label">Prezime</label>
                        <input type="text" class="form-control" id="registrationLastName" required minlength="2"
                               maxlength="20" oninvalid="this.setCustomValidity(' ')" onchange="checkForm('registration')">
                    </div>

                    <div class="mb-3">
                        <label for="registrationContact" class="form-label">Email adresa</label>
                        <input type="email" class="form-control" id="registrationContact" required
                               minlength="5" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="this.setCustomValidity(' ')" onchange="checkForm('registration')">
                    </div>

                    <div class="mb-3">
                        <label for="registrationPassword" class="form-label">Šifra</label>
                        <input type="password" class="form-control" id="registrationPassword"
                               required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninvalid="this.setCustomValidity(' ')" onchange="checkForm('registration')">
                    </div>

                    <div class="mb-3">
                        <label for="registrationConfirmPassword" class="form-label">Potvrdi šifru</label>
                        <input type="password" class="form-control" id="registrationConfirmPassword"
                               required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninvalid="this.setCustomValidity(' ')" onchange="checkForm('registration')">
                    </div>

                    <button type="submit" class="btn" id="registerBtn" disabled>Registruj se</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        initiate("registerBtn", "form[name='registration-form']");
    </script>


<?php require_once('includes/footer.php') ?>