<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Web2 - BT4 - Tuan 5</title>
  <link rel="stylesheet" href="./css/style.css">

<style>
    .highest {
        display: block;
        background-color: #4CAF50;
        border-radius: 5px;
        padding: 5px;
        animation: colorChange 1s infinite alternate; /* Hiệu ứng chuyển màu */
        transition: transform 0.5s; /* Hiệu ứng thay đổi kích thước khi hover */
    }

    /* Hiệu ứng chuyển màu */
    @keyframes colorChange {
        from { color: blue; }
        to { color: white; }
    }

    .lowest {
        display: block;
        background-color: #f04848;
        border-radius: 5px;
        padding: 5px;
        animation: colorChange 1s infinite alternate; /* Hiệu ứng chuyển màu */
        transition: transform 0.5s; /* Hiệu ứng thay đổi kích thước khi hover */
    }

    /* Hiệu ứng chuyển màu */
    @keyframes colorChange {
        from { color: blue; }
        to { color: yellow; }
    }

/* Định nghĩa hiệu ứng cho thông báo chúc mừng */
@keyframes congratulationsAnimation {
    0% { opacity: 0; transform: translateY(-50px); }
    100% { opacity: 1; transform: translateY(0); }
}


</style>

</head>
<body>

<div class='loader'>
  <div class='loader_line'></div>
  <div class='loader_icon'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/poem_loader.png'>
  </div>
</div>
