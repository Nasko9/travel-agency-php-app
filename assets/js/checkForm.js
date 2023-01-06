function checkForm(formName) {
    switch (formName) {
        case 'login':
            const loginEmail = document.getElementById('loginContact').value;
            const loginPassword = document.getElementById('loginPassword').value;
            if (loginEmail && loginPassword) {
                document.getElementById('logIn').removeAttribute('disabled');
            } else {
                document.getElementById('logIn').setAttribute('disabled', true);
            }
        case 'registration':
            const registerName = document.getElementById('registrationName').value;
            const registerLastName = document.getElementById('registrationLastName').value;
            const registerEmail = document.getElementById('registrationContact').value;
            const registerPassword = document.getElementById('registrationPassword').value;
            const registerConfirmPassword = document.getElementById('registrationConfirmPassword').value;

            if (registerName && registerLastName && registerEmail && registerPassword && registerConfirmPassword) {
                document.getElementById('registerBtn').removeAttribute('disabled');
            } else {
                document.getElementById('registerBtn').setAttribute('disabled', true);
            }
        case 'editUser':
            const editName = document.getElementById('editName').value;
            const editLastName = document.getElementById('editLastName').value;
            const editContact = document.getElementById('editContact').value;
            if (editName && editLastName && editContact) {
                document.getElementById('editUserBtn').removeAttribute('disabled');
            } else {
                document.getElementById('editUserBtn').setAttribute('disabled', true);
            }
        case 'contact':
            const contactEmail = document.getElementById('emailContact').value;
            const contactMessage = document.getElementById('messageContact').value;
            if (contactEmail && contactMessage) {
                document.getElementById('contactBtn').removeAttribute('disabled');
            } else {
                document.getElementById('contactBtn').setAttribute('disabled', true);
            }
        case 'addDestination':
            const destinationAccommodation = document.getElementById('destinationAccommodation').value;
            const destinationName = document.getElementById('destinationName').value;
            const destinationCountry = document.getElementById('destinationCountry').value;
            const destinationContinent = document.getElementById('destinationContinent').value;
            const destinationSeats = document.getElementById('destinationSeats').value;
            const destinationStartDate= document.getElementById('destinationStartDate').value;
            const destinationEndDate = document.getElementById('destinationEndDate').value;
            // const destinationDescription = document.getElementById('destinationDescriptione').value;


            if (destinationAccommodation && destinationName && destinationCountry && destinationContinent && destinationSeats && destinationStartDate && destinationEndDate) {
                document.getElementById('addDestinationId').removeAttribute('disabled');
            } else {
                document.getElementById('addDestinationId').setAttribute('disabled', true);
            }
        case 'editDestination':
            const editDestinationAccommodation = document.getElementById('editDestinationAccommodation').value;
            const editDestinationName = document.getElementById('editDestinationName').value;
            const editDestinationCountry = document.getElementById('editDestinationCountry').value;
            const editDestinationContinent = document.getElementById('editDestinationContinent').value;
            const editDestinationSeats = document.getElementById('editDestinationSeats').value;
            const editDestinationStartDate= document.getElementById('editDestinationStartDate').value;
            const editDestinationEndDate = document.getElementById('editDestinationEndDate').value;
            const editDestinationType = document.getElementById('editDestinationType').value;
            const editDestinationImg = document.getElementById('editDestinationImg').value;

            if (editDestinationAccommodation && editDestinationName && editDestinationCountry && editDestinationContinent && editDestinationSeats && editDestinationStartDate && editDestinationEndDate && editDestinationType && editDestinationImg) {
                document.getElementById('editDestinationBtn').removeAttribute('disabled');
            } else {
                document.getElementById('editDestinationBtn').setAttribute('disabled', true);
            }
        case 'reservation':
            const destinationReservation = document.getElementById('destinationReservation').value;
            const seatsReservation = document.getElementById('seatsReservation').value;
            if (destinationReservation && seatsReservation) {
                document.getElementById('reservationBtn').removeAttribute('disabled');
            } else {
                document.getElementById('reservationBtn').setAttribute('disabled', true);
            }
    }
}