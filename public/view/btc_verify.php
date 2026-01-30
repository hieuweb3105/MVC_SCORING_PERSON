<div class="d-flex flex-column align-items-center justify-content-center px-3">

    <div style="padding-top:8vh;padding-bottom:8vh;color:#acb25a" class="display-5 fw-bold text-center">
        BTC Site
    </div>
    <div class="d-flex flex-column gap-3 col-12 col-md-6 col-lg-4">
        <form action="/btc" method="post" class="d-flex flex-column align-items-center">
            <label for="admin_verify" class="text-light mb-2">Password Confirm</label>
            <input id="admin_verify" type="password" name="admin_verify" class="form-control text-center">
            <button id="btn_verify" disabled type="submit" class="btn btn-outline-light mt-3">Confirm</button>
        </form>
    </div>
</div>

<script>
    const adminInput = document.getElementById('admin_verify');
    const submitBtn = document.getElementById('btn_verify');

    adminInput.addEventListener('input', function () {
        // Kiểm tra nếu giá trị input sau khi xóa khoảng trắng (trim) không trống
        if (adminInput.value.trim().length > 0) {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    });
</script>