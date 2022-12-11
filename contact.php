<?php require_once('includes/header.php') ?>

<div class="container form-page">
    <div class="form-container">
        <h1>Kontakt</h1>
        <div>
            <form action="/" method="POST">
                <div class="mb-3">
                    <label for="emailContact" class="form-label">Email adresa</label>
                    <input type="email" class="form-control" id="emailContact">
                </div>
                <div class="mb-3">
                    <label for="messageContact" class="form-label">Poruka</label>
                    <textarea class="form-control" id="messageContact" rows="3"></textarea>
                </div>
                <button type="submit" class="btn">Pošalji poruku</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('includes/footer.php') ?>