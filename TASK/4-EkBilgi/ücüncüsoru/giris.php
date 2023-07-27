<?php

//Gerçek bir projede kullanıcı adı ve şifre tabii ki böyle kod içine gömülü şekilde kaydedilmeyecek.
//Gerçek bir projede kullanıcı adı ve şifre databaseden gelen bilgiler ile kontrol edilip giriş işlemleri gerçekleşmektedir.
//Bitirme projemde databaseden gelen bilgilerin kontrolü sonrası giriş işlemi yapılmaktadır.
//Bitirme projem de github profilimde bulunmaktadır.


// Kullanıcı adı ve şifre bilgilerini alalım
$kullanici_adi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];

// Kullanıcı adı ve şifreyi kontrol
$dogru_kullanici_adi = 'kullanici';
$dogru_sifre = 'sifre';

if ($kullanici_adi === $dogru_kullanici_adi && $sifre === $dogru_sifre) {
    echo 'Giriş başarılı! Hoş geldiniz, ' . $kullanici_adi . '.';
} else {
    echo 'Hatalı kullanıcı adı veya şifre.';
}
?>
