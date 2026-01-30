<link rel="stylesheet" href="<?= URL_P_V ?>css/event.css?v=1.0.1">

<div style="padding-top:15vh" class="d-flex flex-column align-items-center justify-content-center gap-3">

    <div class="text-center text-light h4">
        <?= $name_show ?>
    </div>

    <div class="text-light-60 my-3">
        Choose your rating
    </div>

    <div class="d-flex align-items-center justify-content-center gap-3">
        <button value-score="7" data-bs-toggle="modal" data-bs-target="#modal-score" class="btn btn-outline-light btn-score rounded-circle d-inline">7</button>
        <button value-score="8" data-bs-toggle="modal" data-bs-target="#modal-score" class="btn btn-outline-light btn-score rounded-circle d-inline">8</button>
        <button value-score="9" data-bs-toggle="modal" data-bs-target="#modal-score" class="btn btn-outline-light btn-score rounded-circle d-inline">9</button>
        <button value-score="10" data-bs-toggle="modal" data-bs-target="#modal-score" class="btn btn-outline-light btn-score rounded-circle d-inline">10</button>
    </div>
</div>


<div class="modal fade" id="modal-score" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-modal text-light bg-opacity-75">
            <div class="modal-header justify-content-center">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm submit</h1>
            </div>
            <div class="modal-body text-center">
                <div class="w-100 h6 mb-2">
                    Your rating score:
                </div>
                <span id="show-value-choose" class="fw-bold show-score"></span>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <form action="/score" method="post" class="d-flex justify-content-center gap-2">
                    <input type="hidden" name="value_score" value="">
                    <input type="hidden" name="id_show" value="<?= get_action_uri(1) ?>">
                    <button type="button" class="btn btn-sm px-3 btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-sm px-3 btn-light">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lấy thẻ modal theo ID
        var scoreModal = document.getElementById('modal-score');

        // Lắng nghe sự kiện trước khi modal được hiển thị
        scoreModal.addEventListener('show.bs.modal', function (event) {
            // 'event.relatedTarget' chính là button mà người dùng vừa click vào
            var button = event.relatedTarget;

            // Lấy giá trị từ thuộc tính data-name-agency của button đó
            var valueScore = button.getAttribute('value-score');

            // 1. Gán text vào thẻ span#name-agency
            var spanScore = scoreModal.querySelector('#show-value-choose');
            spanScore.textContent = valueScore;

            // 2. Gán giá trị vào input hidden có name="choose-agency"
            var inputHidden = scoreModal.querySelector('input[name="value_score"]');
            inputHidden.value = valueScore;
        });
    });
</script>