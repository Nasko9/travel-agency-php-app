<?php 
    require_once('includes/header.php');
    include 'config/connection.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $destinationAccommodation = $_POST['destinationAccommodation'];
        $destinationName = $_POST['destinationName'];
        $destinationCountry = $_POST['destinationCountry'];
        $destinationContinent = $_POST['destinationContinent'];
        $destinationSeats = $_POST['destinationSeats'];
        $destinationStartDate = $_POST['destinationStartDate'];
        $destinationEndDate = $_POST['destinationEndDate'];
        $destinationType = $_POST['destinationType'];
        $file = $_FILES['destinationImg'];
        $destinationDescription = $_POST['destinationDescription'];


        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileTempName = $file['tmp_name'];
        $fileError = $file['error'];
        $fileSize = $file['size'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
            if($fileSize < 1000000) {
                $before_period = strstr($fileName, '.', true);
                $fileNameNew = uniqid('', true).$before_period.".".$fileActualExt;
                $fileDestination = './assets/img/uploads/'.$fileNameNew;
                move_uploaded_file($fileTempName, $fileDestination);
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        Fajl je prevelik!
                      </div>';
            }
            } else {
            echo '<div class="alert alert-danger" role="alert">
                    Nešto nije uredu
                  </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Tip fajla nije podržan!
                  </div>';
        }
        

        if (empty($destinationAccommodation) || empty($destinationName) || empty($destinationCountry) || empty($destinationContinent) || empty($destinationSeats) || empty($destinationStartDate) || empty($destinationEndDate) || empty($destinationType) || empty($file) || empty($destinationDescription)) {
            echo '<div class="alert alert-danger" role="alert">
                    Sva polja su obavezna!
                  </div>';
        }  else {
            $conn = OpenCon();
            $query = "INSERT INTO destinacije (naziv_smestaja, mesto, drzava, kontinent, broj_slobodnih_mesta, datum_polaska, datum_povratka, vrsta_putovanja, slika, opis) 
                      VALUES ('$destinationAccommodation', '$destinationName', '$destinationCountry', '$destinationContinent', '$destinationSeats', '$destinationStartDate', '$destinationEndDate', '$destinationType', '$fileNameNew', '$destinationDescription');";
            mysqli_query($conn, $query);
            mysqli_close($conn);   
        }
    }
?>

<?php 
    if(isset( $_SESSION['role'])=='admin'){
?>

    <div class="container registration-form-page">
        <div class="form-container">
            <h1>Dodajte destinaciju</h1>
            <div class="mb-3">
                <form action="add-destination.php" method="POST" enctype="multipart/form-data" name="addDestinationForm" >
                    <div class="mb-3">
                        <label for="destinationAccommodation" class="form-label">Naziv smeštaja</label>
                        <input type="text" 
                               class="form-control" 
                               id="destinationAccommodation"
                               name="destinationAccommodation"
                               autocomplete="off"
                               required 
                               minlength="2" 
                               maxlength="20" 
                               oninvalid="this.setCustomValidity(' ')" 
                               onchange="checkForm('addDestination')"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="destinationName" class="form-label">Mesto</label>
                        <input type="text" 
                               class="form-control" 
                               id="destinationName"
                               name="destinationName"
                               autocomplete="off"
                               required 
                               minlength="2" 
                               maxlength="20" 
                               oninvalid="this.setCustomValidity(' ')" 
                               onchange="checkForm('addDestination')"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="destinationCountry" class="form-label">Drzava</label>
                        <input type="text" 
                               class="form-control" 
                               id="destinationCountry"
                               name="destinationCountry"
                               autocomplete="off"
                               required 
                               minlength="2" 
                               maxlength="20" 
                               oninvalid="this.setCustomValidity(' ')" 
                               onchange="checkForm('addDestination')"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="destinationContinent" class="form-label">Kontinent</label>
                        <input type="text" 
                               class="form-control" 
                               id="destinationContinent"
                               name="destinationContinent"
                               autocomplete="off"
                               required 
                               minlength="2"
                               maxlength="20" 
                               oninvalid="this.setCustomValidity(' ')" 
                               onchange="checkForm('addDestination')"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="destinationSeats" class="form-label">Broj slobodnih mesta</label>
                        <input type="number" 
                               class="form-control" 
                               id="destinationSeats"
                               name="destinationSeats"
                               autocomplete="off"
                               required 
                               min="1" 
                               max="50"  
                               oninvalid="this.setCustomValidity(' ')" 
                               onchange="checkForm('addDestination')"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="destinationStartDate" class="form-label">Datum polaska</label>
                        <input type="date" 
                               class="form-control" 
                               id="destinationStartDate"
                               name="destinationStartDate"
                               autocomplete="off"
                               required 
                               oninvalid="this.setCustomValidity(' ')" 
                               onchange="checkForm('addDestination')"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="destinationEndDate" class="form-label">Datum povratka</label>
                        <input type="date" 
                               class="form-control" 
                               id="destinationEndDate"
                               name="destinationEndDate"
                               autocomplete="off"
                               required 
                               oninvalid="this.setCustomValidity(' ')" 
                               onchange="checkForm('addDestination')"
                        />
                    </div>

                    <div class="mb-3">
                        <select class="form-select" 
                                aria-label="seatsReservation" 
                                id="destinationType"
                                name="destinationType"
                                autocomplete="off"
                                required 
                                oninvalid="this.setCustomValidity(' ')" 
                                
                        />
                            <option value="">Vrsta putovanja</option>
                            <option value="letovanje">Letovanje</option>
                            <option value="zimovanje">Zimovanje</option>
                            <option value="izlet">Izlet</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="destinationImg">Slika</label>
                        <input type="file" 
                               class="form-control" 
                               id="destinationImg"
                               name="destinationImg"
                               required
                               accept="image/png, image/jpeg"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="destinationDescription">Opis</label>
                        <textarea class="form-control" 
                                  id="destinationDescription"
                                  name="destinationDescription"
                                  autocomplete="off"
                                  required 
                                  oninvalid="this.setCustomValidity(' ')" 
                                  onchange="checkForm('addDestination')"
                                  rows="3"
                        /></textarea>
                    </div>

                    <button type="submit" class="btn" id="addDestinationId" disabled>Dodajte destinaciju</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        initiate("addDestinationId", "form[name='addDestinationForm']");
    </script>

<?php 

}else{
    header("Location: login.php?message=Niste+ulogovani+kao+admin.");
}
            
?>

<?php require_once('includes/footer.php') ?>
