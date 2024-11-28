<?php
require_once("database.php");

class M_dang_nhap extends database
{
   public function kt_dang_nhap($taiKhoan, $matKhau)
{
    // Truy vấn tìm tài khoản và mật khẩu trong cơ sở dữ liệu
    $sql = "SELECT * FROM admin WHERE TaiKhoan = ? AND MatKhau = ?";
    $this->setQuery($sql);
    return $this->loadRow(array($taiKhoan, $matKhau)); // So sánh mật khẩu gốc (plaintext)
}

}

