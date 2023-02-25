<?php
$title = "";
$response_code = "";
require "components/Header.php";
require "components/Announce.php";
?>

<hr class="my-1">
<!-- <?php require "components/Slide-anime.php" ?> -->
<div>
    <div class="card bg-transparent border-0 rounded-1">
        <div class="card-body">
            <span class="fs-5"><i class="fa fa-stream"></i> อัพเดตใหม่</span>
            <div class="row">
                <?php require "components/Anime.php" ?>
            </div>
        </div>
    </div>
</div>

<?php require "components/Footer.php"; ?>