
<?php
include('./numrows/nedenRow.php');

?>


    <div class="p-5 pb-0 text-dark text-center" style="background-color: #F2E7DC; box-shadow: rgba(172, 211, 190, 0.35) 0px 5px 15px; border-bottom-left-radius:2rem;border-bottom-right-radius:2rem;">

        <h2 class="display-3 fw-bold mt-5"><?php echo $baslikNeden;?></h2>
        <p class="lead w-75 mt-3 mx-auto fs-5"><?php echo $yazi;?></p>
        <a href="#fiyatKismi" class="btn ozelBtn btn-lg mb-4 mt-1 me-2"><?php echo $btnAciklama;?></a>
        <br>
        <img src="./foto/<?php echo $img;?>" class="w-50" style="border-top-left-radius: 2rem; border-top-right-radius: 2rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" alt="">
    </div>
