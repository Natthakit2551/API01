<?php
include('../Database/config.db.php'); // นำไฟล์ config.db.php มาใช้
$tablel = "CREATE TABLE members(
    id int(6) AUTO_INCREMENT COMMENT 'เลขที่',
    id_stu int(6) COMMENT 'รหัสนักเรียน',
    name varchar(100) COMMENT 'ชื่อ-สกุล',
    nname varchar(100) COMMENT 'ชื่อเล่น',
    age varchar(100) COMMENT 'อายุ',
    phone varchar(13) COMMENT 'เบอร์โทรศัพท์',
    address varchar(255) COMMENT 'ที่อยู่',
    status varchar(30) COMMENT 'สถานภาพ',
    PRIMARY KEY (id)
)";

if ($conn->query($tablel) === TRUE) {
    echo "สร้างตารางฐานข้อมูลสำเร็จ";
} else {
    echo "ไม่สามารถสร้างตารางฐานข้อมูลได้: " . $conn->error;
}

    $conn ->close(); //ปิดการเชื่อมต่อฐานข้อมูล
?>

