<?php include './21880291-SidedParts/header.php'; ?>

<?php include './21880291-SidedParts/main_left.php'; ?>
<?php include './21880291-SidedParts/main_center.php'; ?>

<?php
#Nạp tập tin dữ liệu danh sách sinh viên
require_once 'Data_21880291.php';

#Nạp khai báo lớp đối tượng CSinhVien_21880291
require_once 'CSinhVien_21880291.php';

#Nạp thư viện hàm
require_once 'Lib_21880291.php';

#Khai báo mảng $arSinhvien_21880291 chứa danh sách đối tượng CSinhVien_21880291
$arSinhvien_21880291 = $data_21880291;
?>

<?php
#Hiển thị danh sách sinh viên đậu (Pass)
danhSachSVDau($arSinhvien_21880291, true);

#Hiển thị danh sách sinh viên rớt (Fail)
danhSachSVRot($arSinhvien_21880291);
?>

<?php include './21880291-SidedParts/main_right.php'; ?>
<?php include './21880291-SidedParts/footer.php'; ?>
