<?php require_once('includes/header.php') ?>

    <div class="container form-page">
        <div class="form-container">
            <h1>Promenite unete podatke</h1>
            <div class="mb-3">
                <form action="/" method="POST" name="editUserForm">
                    <div class="mb-3">
                        <label for="registrationName" class="form-label">Ime</label>
                        <input type="text" class="form-control" id="registrationName" required minlength="2"
                               maxlength="20">
                    </div>

                    <div class="mb-3">
                        <label for="registrationLastName" class="form-label">Prezime</label>
                        <input type="text" class="form-control" id="registrationLastName" required minlength="2"
                               maxlength="20">
                    </div>

                    <div class="mb-3">
                        <label for="registrationContact" class="form-label">Email adresa</label>
                        <input type="email" class="form-control" id="registrationContact" required
                               minlength="5" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>

                    <button type="submit" class="btn" id="editUserBtn">Izvrši izmenu</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        initiate("editUserBtn", "form[name='editUserForm']");
    </script>

<?php require_once('includes/footer.php') ?><?php
