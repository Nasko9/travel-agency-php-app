<?php require_once('includes/header.php') ?>

<div class="container form-page">
    <div class="form-container">
        <h1>Kontakt</h1>
        <div>
            <form action="/" method="POST" name="contact-form">
                <div class="mb-3">
                    <label for="emailContact" class="form-label">Email adresa</label>
                    <input type="email" class="form-control" id="emailContact"
                           minlength="5" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                           required oninvalid="this.setCustomValidity(' ')" onchange="checkForm('contact')">
                </div>
                <div class="mb-3">
                    <label for="messageContact" class="form-label">Poruka</label>
                    <textarea class="form-control" id="messageContact" rows="3" required oninvalid="this.setCustomValidity(' ')" onchange="checkForm('contact')" minlength="10" maxlength="100"></textarea>
                </div>
                <button type="submit" class="btn" id="contactBtn" disabled>Pošalji poruku</button>
            </form>
        </div>
    </div>
</div>

    <script>
        initiate("contactBtn", "form[name='contact-form']");
    </script>

<?php require_once('includes/footer.php') ?>