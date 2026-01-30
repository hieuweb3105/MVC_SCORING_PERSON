<link rel="stylesheet" href="<?= URL_P_V ?>css/btc_home.css">
<div style="padding-top:4vh;padding-bottom:4vh;color:#acb25a" class="display-5 fw-bold text-center">
    List Show
</div>
<div class="row justify-content-center align-items-center">
    <div class="col-12 col-md-8 mt-lg-5">
        <table class="table table-dark table-hover">
        <thead>
            <tr class="align-middle">
                <th class="bg-dark-80 blur-6">Thí sinh</th>
                <th class="text-c bg-dark-80 blur-6">Trạng Thái</th>
                <th class="text-center bg-dark-80 blur-6">Lượt Vote</th>
                <th class="text-end pe-lg-3 bg-dark-80 blur-6">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_person as $person): 
            extract($person);
            ?>
                <tr class="align-middle fw-light">
                    <th class="fw-light bg-dark-80 blur-6 col-1">
                        <img class="w-100" src="<?= URL_A . $image_person ?>" alt="<?= $name_person ?>">
                    </th>
                    <td class="text-start bg-dark-80 blur-6">
                        <div class="d-flex align-items-center justify-content-start gap-2">
                            <?php if($active_person) : ?>
                                <i class="bi bi-dot text-success animate__animated animate__zoomIn animate__infinite"></i>
                                <small class="">Đang mở</small>
                            <?php else : ?>
                                <i class="bi bi-dot text-danger animate__animated animate__fadeIn"></i>
                                <small class="">Đang đóng</small>
                            <?php endif ?>
                        </div>
                    </td>
                    <td class="text-center bg-dark-80 blur-6"><?= score_count_turn($id_person) ?? 0 ?></td>
                    <td class="text-end bg-dark-80 blur-6">
                        <div class="d-flex justify-content-end flex-column flex-lg-row">
                            <?php if($active_person) : ?>
                            <a href="btc/close_show/<?= $id_person ?>" class="btn btn-sm btn-outline-light w-100 ms-2 px-0" title="Tạm dừng chấm điểm"><i class="bi bi-pause"></i> <span class="d-none d-md-block">Đóng</span><a>
                            <?php else : ?>
                            <a href="btc/open_show/<?= $id_person ?>" class="btn btn-sm btn-outline-light w-100 ms-2 px-0" title="Tiếp tục chấm điểm"><i class="bi bi-play"></i> <span class="d-none d-md-block">Mở</span></a>
                            <?php endif ?>
                            <a href="/result/<?= $id_person ?>" class="btn btn-sm btn-outline-light w-100 ms-2 px-0" title="Trình chiếu điểm"><i class="bi bi-easel"></i> <span class="d-none d-md-block">Trình chiếu</span></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
</div>

