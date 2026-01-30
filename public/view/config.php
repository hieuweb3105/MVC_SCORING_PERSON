<!-- <link rel="stylesheet" href="<?= URL_P_V ?>css/btc_home.css"> -->


<div class="row justify-content-center align-items-center">
    <div class="col-12 col-md-8 mt-lg-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th class="col-8">Loại cấu hình</th>
                    <th class="col-2">Giá trị</th>
                    <th class="col-2 text-end pe-lg-3">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle fw-light">
                    <form action="/config" method="post">
                        <th class="fw-light">Reset bình chọn</th>
                        <td>
                            <select name="reset_score" id="choose_reset" class="bg-dark text-light">
                                <option disabled selected value="0">- Chọn thí sinh -</option>
                                <option value="-1">Tất cả thí sinh</option>
                                <?php foreach (person_get_all() as $person) : extract($person) ?>
                                <option value="<?= $id_person ?>">Thí sinh ID <?= $id_person ?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                        <td class="d-flex justify-content-end flex-column flex-lg-row gap-1">
                            <button type="submit" name="btn_reset_score" class="btn btn-sm btn-outline-danger" title="Nhấn để lưu lại"><i class="bi bi-arrow-repeat"></i> Reset</button>
                        </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</div>
