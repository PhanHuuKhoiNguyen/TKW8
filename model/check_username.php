<?php
require("database.php");
require("User.php");
require("User_db.php");

// Lấy dữ liệu JSON từ yêu cầu POST
$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'] ?? '';

// Kiểm tra username trong cơ sở dữ liệu
$users = new UserDB();
$existingUser = $users->getUser($username);

// Trả về kết quả JSON cho client
if ($existingUser !== null) {
    echo json_encode(['exists' => true]);
} else {
    echo json_encode(['exists' => false]);
}
?>