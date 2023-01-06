<?php require_once('includes/header.php');
$url_id = $_GET['id'];
echo $url_id;
?>

<div class="container destination">
    <div class="d-flex flex-wrap mt-5">
        <div class="d-flex flex-column justify-content-center col-lg-6 pe-lg-5">
            <h1>Vila Sophia</h1>
            <div class="d-flex ">
                Vila Sofia se nalazi u širem centru Haniotija, oko 70m udaljena od plaže. Vila ima 1/2 i 1/3 studije
                raspoređene
                na prvom spratu ,kao i 1/3 i 1/4 apartmane raspoređene na I i II spratu. Svaki studio i apartman ima
                adekvatno
                opremljenu mini kuhinju, TWC, TV, AC i terasu. Vila ima Wi-Fi, čije je korišćenje besplatno. Posteljina
                se
                menja
                na 5 dana, vila nema peškire tako da svaki gost treba da ponese sopstvene peškire za ličnu upotrebu .
                Korišćenje klima uređaja je uračunato u cenu aranžmana.
            </div>
            <h4 class="mt-3 mb-3">Broj slobodnih mesta: <strong>15</strong></h4>
            <a href="reservation.php" class="btn slide-btn">Rezervišite svoja mesta</a>

        </div>

        <div class="col-lg-6 mt-3 mt-lg-0">
            <img src="https://cdn.pixabay.com/photo/2016/01/03/18/00/prague-1119791_960_720.jpg"
                 class="w-100 shadow-1-strong rounded mb-4"
                 alt="Yosemite National Park"
            />
        </div>
    </div>
</div>

<?php require_once('includes/footer.php') ?>
