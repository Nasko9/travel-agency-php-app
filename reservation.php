<?php require_once('includes/header.php') ?>

    <div class="container form-page">
        <div class="form-container">
            <h1>Rezervacija</h1>
            <div class="mb-3">
                <form action="/" method="POST" name="reservation-form">
                    <div class="mb-3">
                        <select class="form-select" aria-label="destinationReservation" id="destinationReservation" required oninvalid="this.setCustomValidity(' ')" onchange="checkForm('reservation')">
                            <option value="">Izaberite lokaciju</option>
                            <option value="pariz">Pariz</option>
                            <option value="london">London</option>
                            <option value="lisabon">Lisabon</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" aria-label="seatsReservation" id="seatsReservation" required oninvalid="this.setCustomValidity(' ')" onchange="checkForm('reservation')">
                            <option value="">Izaberite broj mesta</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <button type="submit" class="btn" id="reservationBtn" disabled>Napravite rezervaciju</button>
                </form>
            </div>
        </div>
    </div>

<script>
    initiate("reservationBtn", "form[name='reservation-form']");
</script>

<?php require_once('includes/footer.php') ?>
