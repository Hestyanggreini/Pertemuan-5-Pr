<?php

$film_name = array(
    "Bernapas dalam kubur", "Si Manis Jembatan Ancol", "Keluarga Tak Kasat Mata",
    "Kafir : Bersekutu dengan setan", "Sebelum Iblis Menjemput",
    "Danur : I Can See Ghost", "Perempuan Tanah Jahannam", "Iblis Dalam Kandungan",
    "KKN di Desa Penari", "Janin"
);
$film_rating = array("PG", "PG", "PG", "PG", "PG", "PG", "PG", "PG", "PG", "PG");
$film_cover = array(
    "img1.png", "img2.png", "img3.png", "img4.png", "img5.png",
    "img6.png", "img7.png", "img8.png", "img9.png", "img10.png"
);

?>
    <center>
        <h2 id="nf"></h2>
    </center>
    <div class="row row-cols-4">
        <?php for ($i = 0; $i < count($film_name); $i++) { ?>
            <!-- CARD -->
            <div class="card" style="margin-right: 23px;">
                <img src="img/<?= $film_cover[$i] ?>" class="card-img-top" alt="..." style="margin-left: -12px;" />
                <div class="card-body">
                    <h4 class="card-title"><span id="title"><?= $film_name[$i] ?></span></h4>
                    <div class="row">
                        <div class="col">
                            <p class="card-text">Rating : <span id="ratings"><?= $film_rating[$i] ?></span></p>
                        </div>
                        <div class="col-2">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>