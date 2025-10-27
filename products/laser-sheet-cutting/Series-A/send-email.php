<?php
// save as send-email.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'info@senrytech.com';
  $subject = '激光切割机咨询';
  $message = "姓名: " . $_POST['name'] . "\n邮箱: " . $_POST['email'] . "\n内容: " . $_POST['message'];
  
  // 发送邮件
  $success = mail($to, $subject, $message);
  
  echo json_encode(['success' => $success]);
}
?>