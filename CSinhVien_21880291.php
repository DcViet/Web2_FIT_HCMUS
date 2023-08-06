<?php
class CSinhVien_21880291 {
    var $masv;
    var $hoTen;
    var $dtb;

    public function __construct($masv, $hoTen, $dtb) {
        $this->masv = $masv;
        $this->hoTen = $hoTen;
        $this->dtb = $dtb;
    }

    public function getMASV() {
        return $this->masv;
    }

    public function getHoTen() {
        return $this->hoTen;
    }

    public function getDTB() {
        return $this->dtb;
    } 

    public function showInfo() {
        echo "Mã SV: " . $this->masv . "<br>";
        echo "Họ tên: " . $this->hoTen . "<br>";
        echo "Điểm trung bình: " . $this->dtb . "<br>";
    }

    public function isPass() {
        return $this->dtb >= 5.0;
    }

    public function isFail() {
        return $this->dtb < 5.0;
    }

}
?>
