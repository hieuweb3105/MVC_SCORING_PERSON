<!-- <link rel="stylesheet" href="<?= URL_P_V ?>css/btc_home.css"> -->


<div class="row justify-content-center align-items-center">
    <div class="col-12 col-md-8 mt-lg-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th class="col-8">Type</th>
                    <th class="col-2">Value</th>
                    <th class="col-2 text-end pe-lg-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle fw-light">
                    <form action="/config" method="post">
                        <th class="fw-light">Total of turn vote</th>
                        <td><input type="number" name="config_guest" id="config_guest" value="<?= config_get_value('config_guest')?>" class="bg-dark text-light"></td>
                        <td class="d-flex justify-content-end flex-column flex-lg-row gap-1">
                            <button type="submit" name="change_config_guest" class="btn btn-sm btn-outline-light" title="Nhấn để lưu lại"><i class="bi bi-save"></i> Save</button>
                        </td>
                    </form>
                </tr>
                <tr class="align-middle fw-light">
                    <form action="/config" method="post">
                        <th class="fw-light">Reset score</th>
                        <td>
                            <select name="reset_score" id="choose_reset" class="bg-dark text-light">
                                <option disabled selected value="0">- Select show to reset -</option>
                                <option value="-1">All show</option>
                                <?php foreach (get_list_show() as $show) : ?>
                                <option value="<?= $show['id_show_event'] ?>"><?= $show['name_show_event'] ?></option>
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
