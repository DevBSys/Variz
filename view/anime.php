<?php
$title = "Anime";
$response_code = "";
require "components/Header.php";
require "components/Announce.php";
?>

<hr class="my-1">
<div class="row">
    <div class="col-12 col-lg-8">
        <div class="card bg-transparent border-0 rounded-1">
            <div class="card-body">
                <span class="fs-5"><i class="fa fa-thumbs-up"></i> ขอแนะนำ</span>
                <div class="row">
                    <?php require "components/Anime.php" ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card bg-transparent border-0 rounded-1">
            <div class="card-body">
                <span class="fs-5"><i class="fa fa-heart text-danger"></i> ได้รับความนิยมสูงสุดในตอนนี้</span>
                <div class="row">
                    <?php require "components/Popular.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "components/Footer.php"; ?>