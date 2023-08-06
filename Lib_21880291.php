<?php
# Hàm hiển thị danh sách sinh viên
function showStudentList($sinhViens) {
    echo "<h2>Danh sách sinh viên:</h2>";
    echo "<table>"; 
    echo "<tr><th>Mã SV</th><th>Họ tên</th><th>ĐTB</th></tr>";

    foreach ($sinhViens as $sinhVien) {
        echo "<tr>";
        echo "<td>" . $sinhVien->getMASV() . "</td>";
        echo "<td>" . $sinhVien->getHoTen() . "</td>";
        echo "<td>" . $sinhVien->getDTB() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

# Hàm hiển thị danh sách sinh viên đậu (Pass)
function danhSachSVDau($sinhViens,$highlightHighest = true) {
    echo "<h2>Danh sách sinh viên đậu (Pass):</h2>";
    echo "<table>";
    echo "<tr><th>Mã SV</th><th>Họ tên</th><th>ĐTB</th></tr>";

    $highestStudent = findHighestScoreStudent($sinhViens);
    
    foreach ($sinhViens as $sinhVien) {
        if ($sinhVien->isPass()) { 
            echo "<tr>";
            echo "<td>" . $sinhVien->getMASV() . "</td>";
            echo "<td>" . $sinhVien->getHoTen() . "</td>";
            echo "<td>";
            if ($highlightHighest && $sinhVien === $highestStudent) {
                echo "<span id='congratulations' class='highest'>" . $sinhVien->getDTB() . "</span>";
            } else {
                echo $sinhVien->getDTB();
            }
            echo "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
}

# Hàm hiển thị danh sách sinh viên rớt (Fail)
function danhSachSVRot($sinhViens, $highlightLowest = true) {
    echo "<h2>Danh sách sinh viên rớt (Fail):</h2>";
    echo "<table>";
    echo "<tr><th>Mã SV</th><th>Họ tên</th><th>ĐTB</th></tr>";

    $lowestStudent = findLowestScoreStudent($sinhViens);

    foreach ($sinhViens as $sinhVien) {
        if ($sinhVien->isFail()) { 
            echo "<tr>";
            echo "<td>" . $sinhVien->getMASV() . "</td>";
            echo "<td>" . $sinhVien->getHoTen() . "</td>";
            echo "<td>";
            if ($highlightLowest && $sinhVien === $lowestStudent) {
                echo "<span class='lowest'>" . $sinhVien->getDTB() . "</span>";
            } else {
                echo $sinhVien->getDTB();
            }
            echo "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
}


# Hàm tìm sinh viên có điểm cao nhất
function findHighestScoreStudent($sinhViens) {
    $highestStudent = $sinhViens[0]; # Giả sử sinh viên đầu tiên có điểm cao nhất

    foreach ($sinhViens as $sinhVien) {
        if ($sinhVien->getDTB() > $highestStudent->getDTB()) {
            $highestStudent = $sinhVien; # Cập nhật sinh viên có điểm cao nhất
        }
    }

    return $highestStudent;
}

# Hàm tìm sinh viên có điểm thấp nhất
function findLowestScoreStudent($sinhViens) {
    $lowestStudent = $sinhViens[0]; # Giả sử sinh viên đầu tiên có điểm thấp nhất

    foreach ($sinhViens as $sinhVien) {
        if ($sinhVien->getDTB() < $lowestStudent->getDTB()) {
            $lowestStudent = $sinhVien; # Cập nhật sinh viên có điểm thấp nhất
        }
    }

    return $lowestStudent;
}
?>
