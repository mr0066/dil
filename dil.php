<?php


$ch = curl_init();

CURLOPT_URL https://www.phd.co.id/en/users/sendOTP


curl_setopt($ch, CURLOPT_URL, "https://www.phd.co.id/en/users/sendOTP");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POST, 1);


//CURLOPT_POSTFIELDS di isi dengan data yang mau kita post atau kirim, liat di bagian contoh email & nomer hp target di bawah


curl_setopt($ch, CURLOPT_POSTFIELDS, "name=BANGSAT&username=contohemail@gmail.com&password=asd123&phone=nomerhptarget&lang=1");

curl_setopt($ch, CURLOPT_USERAGENT, "Apache-HttpClient/UNAVAILABLE (java 1.4)");

$x = curl_exec($ch);

curl_close($ch);


//karena bentuk respon nya masih JSON, maka kita decode dulu


$js = json_decode($x);

if ($js->res_code == 1) {

 echo "Terkirim\n";

 }else{

  echo "Gagal\n";

  }


?>

