<?php
/* Smarty version 3.1.30, created on 2024-11-19 09:13:16
  from "C:\xampp\htdocs\shop_hoa\admin\views\v_contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673c489c823899_84740979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd4de5c4d34c15478fbb124711d6197ecc3b3a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\v_contact.tpl',
      1 => 1730701955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c489c823899_84740979 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST">
    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" class="form-control" name="phone_number" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">    
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" name="address" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
">    
    </div>
    <div class="form-group">
        <label for="google_map">Google Map:</label>
        <textarea class="form-control" type="text" name="google_map"><?php echo $_smarty_tpl->tpl_vars['google_map']->value;?>
</textarea>   
        <p>Copy iframe share in <a href="https://www.google.com/maps">Google Maps</a></p>  
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Cập nhật liên hệ</button>
    </form>
</div>
    <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
>
    <?php if (isset($_SESSION['success'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Cập nhật thành công!",
            text: "<?php echo $_SESSION['success'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "contact.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
