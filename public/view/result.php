<link rel="stylesheet" href="<?= URL_P_V ?>css/home.css?v=1.0.1">

<div class="d-flex flex-column gap-2 gap-md-3 gap-lg-4 align-items-center justify-content-center py-3">
    <div class="p-1 rounded-3 border border-light bg-light-40 blur-6 animate__animated animate__flipInY">
        <img width="160" class="rounded-1" src="<?= URL_A . $person['image_person'] ?>" alt="<?= $person['name_person'] ?>">
    </div>
    <div class="d-flex flex-wrap justify-content-center px-lg-5">
        <?php foreach ($list_badge as $badge) : ?>
        <div class="col-6 px-1 px-md-2 mt-3">
            <button type="button" class="btn btn-outline-light w-100 justify-content-between">
                <div id="width-badge" class="bg-value rounded-start-4"></div>
                <span><?= $badge['name_badge'] ?></span><span class="text-light-60" id="count-id-badge-<?= $badge['id_badge']?>"> 0 lượt vote</span>
            </button>
        </div>
        <?php endforeach ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        const personId = "<?= $person['id_person'] ?>";
        const apiUrl = `/result/${personId}/api`;

        function updatePollResults() {
            $.ajax({
                url: apiUrl,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === "200 - OK") {
                        const totalCount = response.count || 0;
                        const data = response.data || [];

                        // BƯỚC 1: RESET TẤT CẢ VỀ 0
                        // Tìm tất cả các span có ID bắt đầu bằng count-id-badge-
                        $('[id^="count-id-badge-"]').text("0 lượt vote");
                        // Reset tất cả thanh progress về 0%
                        $('.bg-value').css('width', '0%');

                        // BƯỚC 2: CẬP NHẬT DỮ LIỆU TỪ API (Nếu có)
                        if (totalCount > 0 && data.length > 0) {
                            data.forEach(function(item) {
                                const countSpan = $(`#count-id-badge-${item.id_badge}`);
                                if (countSpan.length) {
                                    // Cập nhật text
                                    countSpan.text(`${item.count_badge} lượt vote`);
                                    
                                    // Cập nhật thanh progress
                                    const percentage = (item.count_badge / totalCount) * 100;
                                    const progressBar = countSpan.closest('button').find('.bg-value');
                                    if (progressBar.length) {
                                        progressBar.css('width', percentage + '%');
                                    }
                                }
                            });
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Lỗi khi lấy dữ liệu API:", error);
                }
            });
        }

        updatePollResults();
        setInterval(updatePollResults, 2000);
    });
</script>