<?php require_once('includes/header.php') ?>

    <div class="container form-page">
        <div class="form-container">
            <h1>Rezervacija</h1>
            <div class="mb-3">
                <form action="/" method="POST">
                    <div class="mb-3">
                        <select class="form-select" aria-label="destinationReservation">
                            <option selected>Izaberite lokaciju</option>
                            <option value="pariz">Pariz</option>
                            <option value="london">London</option>
                            <option value="lisabon">Lisabon</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" aria-label="seatsReservation">
                            <option selected>Izaberite broj mesta</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <button type="submit" class="btn">Napravite rezervaciju</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php') ?>
