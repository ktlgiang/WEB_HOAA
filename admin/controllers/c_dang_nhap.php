<?php
session_start();

class C_dang_nhap
{
    public function hien_thi_trang_dang_nhap()
    {
        //Model
        unset($_SESSION['thongBao']);
        if (isset($_POST["btn_dang_nhap"])) {
            $taiKhoan = $_POST["tai_khoan"];
            $matKhau = $_POST["mat_khau"];
            if ($this->luu_dang_nhap($taiKhoan, $matKhau)) {
                if (isset($_POST['checked'])) {
                    setcookie('checked', true, time() + 86400 * 3, '/');
                }
                header('Location: index.php');
            }
        }
        //View
        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_dang_nhap.tpl";
        $title = "Đăng nhập";
        $smarty->assign("title", $title);
        $smarty->assign("view", $view);
        $smarty->display("layout_dang_nhap.tpl");
    }

    public function luu_dang_nhap($taiKhoan, $matKhau)
    {
        include("models/m_dang_nhap.php");
        $m_dang_nhap = new M_dang_nhap();
        $user = $m_dang_nhap->kt_dang_nhap($taiKhoan, $matKhau); // Gọi đúng phương thức ở lớp M_dang_nhap
        if ($user) {
            $cookie_id = $user->ID;
            $cookie_hoTen = $user->HoTen;
            $cookie_taiKhoan = $user->TaiKhoan;
            $cookie_permission = $user->permission;
            //set cookie trong 5 phút
            setcookie('id', $cookie_id, time() + 1000000, '/');
            setcookie('hoTen', $cookie_hoTen, time() + (60000 * 2), '/');
            setcookie('taiKhoan', $cookie_taiKhoan, time() + (600000 * 2), '/');
            setcookie('permission', $cookie_permission);
            return true;
        }
        $_SESSION['thongBao'] = "Tài khoản hoặc mật khẩu không hợp lệ";
        return false;
    }
}
?>\
