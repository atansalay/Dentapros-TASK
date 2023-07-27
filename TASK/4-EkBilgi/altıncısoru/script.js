$(document).ready(function () {
    $("#devreDisiButton").click(function () {
        // AJAX kullanarak PHP dosyasına istek yapalım
        $.ajax({
            url: "devre_disi.php",
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    alert("Kullanıcı durumu başarıyla pasif hale getirildi!");
                } else {
                    alert("Kullanıcı durumunu pasif hale getirirken bir hata oluştu.");
                }
            },
            error: function () {
                alert("Sunucu ile bağlantı kurulurken bir hata oluştu.");
            }
        });
    });
});
