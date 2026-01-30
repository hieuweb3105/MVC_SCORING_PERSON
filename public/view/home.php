<link rel="stylesheet" href="<?= URL_P_V ?>css/home.css">

<div class="d-flex flex-column gap-2 gap-md-3 gap-lg-4 align-items-center justify-content-center py-3">
    <div class="col-8 col-md-4 col-lg-2 p-1 rounded-3 border border-light bg-light-40 blur-6 animate__animated animate__flipInY">
        <img class="w-100 rounded-3" src="<?= URL_A . $person['image_person'] ?>" alt="<?= $person['name_person'] ?>">
    </div>
    <div class="col-12 text-light-80 fw-bold my-2 text-center">
        Mô tả đúng nhất về Boss này là gì nhỉ?
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        <?php foreach ($list_badge as $badge) : ?>
        <div class="col-6 col-md-4 col-lg-2 px-1 px-md-2 mt-2">
            <button type="button" value-badge="<?=$badge['id_badge'] ?>" class="btn btn-outline-light w-100" data-bs-toggle="modal" data-bs-target="#modalConfirm">
                <?= $badge['name_badge'] ?>
            </button>
        </div>
        <?php endforeach ?>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận chấm kết quả</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Kết quả bạn bình chọn <span id="show_badge"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
        <form action="/score" method="post">
            <input type="hidden" name="value_badge" value="">
            <input type="hidden" name="value_person" value="<?= $person['id_person'] ?>">
            <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
    // Bắt sự kiện click vào các button có thuộc tính value-badge
    $('button[value-badge]').on('click', function() {
        // 1. Lấy dữ liệu từ button được click
        const badgeId = $(this).attr('value-badge'); // Lấy ID (ví dụ: 1, 2, 3...)
        const badgeName = $(this).text().trim();    // Lấy tên hiển thị (ví dụ: Giỏi, Khá...)

        // 2. Gán tên badge vào thẻ span trong Modal body
        $('#show_badge').text(badgeName);

        // 3. Gán ID badge vào input hidden trong Form của Modal
        // Lưu ý: Tôi đã thêm id="input_badge" vào input để dễ quản lý hơn
        $('input[name="value_badge"]').val(badgeId);
    });
});
</script>