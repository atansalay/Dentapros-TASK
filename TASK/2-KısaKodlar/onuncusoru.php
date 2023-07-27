<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["dosya"])) {
    $hedefKlasor = ""; // Dosyanın yükleneceği hedef klasör
    $dosyaAdi = $_FILES["dosya"]["adı"]; // Yüklenen dosyanın orijinal adı
    $geciciDosya = $_FILES["dosya"]["tmp_ad"]; // Sunucuda geçici olarak saklanan dosya adı
    $hedefDosyaYolu = $hedefKlasor . $dosyaAdi; // Hedef klasöre tam dosya yolunu oluştur

    // Dosyayı hedef klasöre taşı
    if (move_uploaded_file($geciciDosya, $hedefDosyaYolu)) {
        echo "Dosya başarıyla yüklendi.";
    } else {
        echo "Dosya yüklenirken bir hata oluştu.";
    }
}
?>
