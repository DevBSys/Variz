<?php if ("$_SERVER[REQUEST_URI]" === '/') { ?>
    <?php for ($i = 1; $i <= 8; $i++) { ?>
        <div class="col-12 col-md-6 col-lg-3 my-2">
            <a class="text-decoration-none" href="/episode">
                <div class="card card-hover bg-anime border-0 rounded-1">
                    <img class="card-img-top img-thumbnail border-0 rounded-top-1 rounded-bottom-0 p-0" src="https://somoskudasai.com/wp-content/uploads/2021/08/portada_hololive-34.jpg">
                    <div class="card-body pb-0 p-2">
                        <span class="text-muted txt-elip-2 fs-6">I will live in eternity as a legend</span>
                        <p style="font-size: 0.85em;"><a class="text-muted text-decoration-none" href="#">ตอนที่.1 - การล้างแค้น</a></p>
                        <hr class="mb-1">
                        <div class="d-flex">
                            <p class="text-muted" style="font-size: 0.85em;">การดู 2.2 แสน ครั้ง</p>
                            <p class="text-muted ms-auto" style="font-size: 0.85em;">ทั้งหมด 10 ตอน</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
<?php } else if ("$_SERVER[REQUEST_URI]" === '/anime') { ?>
    <?php for ($i = 1; $i <= 4; $i++) { ?>
        <div class="col-12 col-md-6 col-lg-6 my-2">
            <a class="text-decoration-none" href="/episode">
                <div class="card card-hover bg-anime border-0 rounded-1">
                    <img class="card-img-top img-thumbnail border-0 rounded-top-1 rounded-bottom-0 p-0" src="https://somoskudasai.com/wp-content/uploads/2021/08/portada_hololive-34.jpg">
                    <div class="card-body pb-0 p-2">
                        <span class="text-muted txt-elip-2 fs-6">I will live in eternity as a legend</span>
                        <p style="font-size: 0.85em;"><a class="text-muted text-decoration-none" href="#">ตอนที่.1 - การล้างแค้น</a></p>
                        <hr class="mb-1">
                        <div class="d-flex">
                            <p class="text-muted" style="font-size: 0.85em;">การดู 2.2 แสน ครั้ง</p>
                            <p class="text-muted ms-auto" style="font-size: 0.85em;">ทั้งหมด 10 ตอน</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
<?php } ?>