<?php
/* Smarty version 3.1.30, created on 2024-11-12 08:29:19
  from "C:\xampp\htdocs\shop_hoa\admin\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673303cf87fa30_90651766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95429736fe3acb8faf2275a81274867571d085d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\v_dang_nhap.tpl',
      1 => 1730701955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673303cf87fa30_90651766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form method="POST" action="dang_nhap.php" autocomplete="off">
          <div class="form-group">
            <input class="form-control" name="tai_khoan" id="taiKhoan" type="text" 
            min="6" max="50"
            placeholder="Nhập tài khoản" value="<?php if (isset($_POST['btn_dang_nhap'])) {
echo $_POST['tai_khoan'];
}?>" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="mat_khau" id="matKhau" type="password" 
            min="6" max="50"
            placeholder="Nhập mật khẩu" autocomplete="off" required>
          </div>
            <div class="pretty p-svg p-curve">
        <input type="checkbox" name='checked'/>
        <div class="state p-success">
            <!-- svg path -->
            <svg class="svg svg-icon" viewBox="0 0 20 20">
                <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
            </svg>
            <label>Lưu thông tin</label>
        </div>
    </div>
          <button type="submit" class="btn btn-primary btn-block" name="btn_dang_nhap">Đăng nhập</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Quay về trang chủ</a>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($_SESSION['thongBao'])) {?>
    <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
>
  <?php }
}
}
