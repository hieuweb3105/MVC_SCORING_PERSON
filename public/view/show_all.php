<link rel="stylesheet" href="<?= URL_P_V ?>css/show_all.css?v=1.0.1">
<div style="margin-top:" class="row mx-0 justify-content-center align-items-center">
    
<div style="color:#acb25a" class="display-5 fw-bold text-center">
    Bảng công bố
</div>
    <div class="d-flex flex-wrap justify-content-evenly">
    <?php foreach ($list_person as $person) : extract($person) ?>
        <div class="col-2 d-flex flex-column align-items-center gap-2 mt-4">
            <div class="bg-light-60 blur-6 p-1 rounded-3 border-1">
                <img height="190" src="<?= URL_A . $image_person ?>" alt="" class="rounded-3" title="Hình ảnh thí sinh">
            </div>
            <div class="btn btn-outline-light">
                <span>Danh hiệu của bạn</span>
                <span class="text-light-80 small"> - 12 vote</span>
            </div>
        </div>
    <?php endforeach ?>
    </div>
</div>