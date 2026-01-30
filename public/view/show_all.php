<link rel="stylesheet" href="<?= URL_P_V ?>css/show_all.css?v=1.0.1">
<div style="margin-top:15vh" class="row mx-0 justify-content-center align-items-center">
    
<div style="color:#acb25a" class="display-5 fw-bold text-center">
    Scoreboard
</div>
    <div class="col-12 col-md-8 mt-lg-5">
        <table class="table text-light">
            <thead>
                <tr>
                    <th class="bg-dark-80 blur-6 text-light border-0 fw-light">Name</th>
                    <th class="bg-dark-80 blur-6 text-light border-0 fw-light col-5">Score</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list_show as $show): ?>
                    <tr class="align-middle fs-5">
                        <td class="bg-dark-80 blur-6 text-light border-0" class="fw-light"><?= $show['name_show_event'] ?>
                        </td>
                        <td class="bg-dark-80 blur-6 text-light border-0">
                            <div class="progress-group">
                                <div style="width:<?= get_average_score($show['id_show_event']) ?>%" class="progress-line">
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>