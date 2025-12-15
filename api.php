<?php
header('Content-Type: application/json');

// Mô phỏng Database (Nếu muốn dùng MySQL thật thì thay đoạn này bằng code connect mysqli)
$students = [
    ["id" => "DH52200465", "name" => "Hoàng Quốc Đạt"],
    ["id" => "TEST001", "name" => "Test Data CI/CD"],
    ["id" => "TEST002", "name" => "Dữ liệu mới cập nhật từ GitHub"]
];

echo json_encode($students);
?>