<?php
require_once 'CSinhVien_21880291.php';
# Danh sách các họ ngẫu nhiên
$hoNgauNhien = array('Trần', 'Mã', 'Nguyễn', 'Dương', 'Thái', 'Tôn', 'Hoàng', 'Lê', 'Hồ', 'Lý');

# Tạo danh sách ngẫu nhiên 25 sinh viên
$data_21880291 = array();
for ($i = 1; $i <= 25; $i++) {
    $xx = sprintf('%02d', mt_rand(1, 99)); # Định dạng số xx thành 2 chữ số (01, 02, ..., 99)
    $masv = "218802" . $xx; # Tạo mã số sinh viên theo định dạng "218802xx"
    $hoTen = $hoNgauNhien[array_rand($hoNgauNhien)] . " Đức"; # Kết hợp tên mặc định "Đức" với họ ngẫu nhiên
    $dtb = mt_rand(2, 9) + mt_rand(0, 9) / 10;

    $sinhVien = new CSinhVien_21880291($masv, $hoTen, $dtb);
    $data_21880291[] = $sinhVien;
}
?>