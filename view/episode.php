<?php
$title = generateRandomString();
$response_code = "";
require "components/Header.php";
require "components/Announce.php";

function generateRandomString($length = 10)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>

<hr class="my-1">
<div class="d-flex justify-content-center mt-3">
    <?php require "components/Episode.php" ?>
</div>
<div class="p-3">
    <?php for ($i = 1; $i <= 4; $i++) { ?>
        <button class="btn btn-secondary rounded-5 mb-3">Adventure</button>
    <?php } ?>

    <ol class="list-group">
        <?php for ($i = 1; $i <= 4; $i++) { ?>
            <a class="text-decoration-none" href="/play">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">ตอนที่.<?= $i ?> - <span class="fw-normal"><?= generateRandomString() ?></span></div>
                    </div>
                    <?php if ($i >= 1) { ?>
                        <span class="badge text-bg-warning">อัพเดตใหม่</span>
                    <?php } else { ?>
                        <span class="badge text-bg-secondary">ยังไม่ได้ดู</span>
                    <?php } ?>
                </li>
            </a>
        <?php } ?>
    </ol>
</div>

<?php require "components/Footer.php"; ?>