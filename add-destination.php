<?php require_once('includes/header.php') ?>

    <div class="container registration-form-page">
        <div class="form-container">
            <h1>Dodajte destinaciju</h1>
            <div class="mb-3">
                <form action="/" method="POST">
                    <div class="mb-3">
                        <label for="destinationAccommodation" class="form-label">Naziv smeštaja</label>
                        <input type="text" class="form-control" id="destinationAccommodation">
                    </div>

                    <div class="mb-3">
                        <label for="destinationName" class="form-label">Mesto</label>
                        <input type="text" class="form-control" id="destinationName">
                    </div>

                    <div class="mb-3">
                        <label for="destinationCountry" class="form-label">Drzava</label>
                        <input type="text" class="form-control" id="destinationCountry">
                    </div>

                    <div class="mb-3">
                        <label for="destinationContinent" class="form-label">Kontinent</label>
                        <input type="text" class="form-control" id="destinationContinent">
                    </div>

                    <div class="mb-3">
                        <label for="destinationSeats" class="form-label">Broj slobodnih mesta</label>
                        <input type="number" class="form-control" id="destinationSeats">
                    </div>

                    <div class="mb-3">
                        <label for="destinationStartDate" class="form-label">Datum polaska</label>
                        <input type="date" class="form-control" id="destinationStartDate">
                    </div>

                    <div class="mb-3">
                        <label for="destinationEndDate" class="form-label">Datum povratka</label>
                        <input type="date" class="form-control" id="destinationEndDate">
                    </div>

                    <div class="mb-3">
                        <select class="form-select" aria-label="seatsReservation">
                            <option selected>Vrsta putovanja</option>
                            <option value="letovanje">Letovanje</option>
                            <option value="zimovanje">Zimovanje</option>
                            <option value="izlet">Izlet</option>
                        </select>
                    </div>

                    <button type="submit" class="btn">Prijavite se</button>
                </form>
            </div>

        </div>
    </div>

<?php require_once('includes/footer.php') ?>
