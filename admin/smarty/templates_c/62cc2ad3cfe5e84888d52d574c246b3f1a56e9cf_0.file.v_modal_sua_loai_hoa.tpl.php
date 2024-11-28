<?php
/* Smarty version 3.1.30, created on 2024-11-12 09:34:23
  from "C:\xampp\htdocs\shop_hoa\admin\views\loai_hoa\v_modal_sua_loai_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6733130fd0d633_60803354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62cc2ad3cfe5e84888d52d574c246b3f1a56e9cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\loai_hoa\\v_modal_sua_loai_hoa.tpl',
      1 => 1730701956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6733130fd0d633_60803354 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="loai_hoa.php">
          <input type="hidden" name="ma_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên loại hoa:</label>
            <input type="text" class="form-control ten_loai" name="ten_loai" id="ten_loai<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
" autocomplete="off">
            <div id="tenLoaiResult<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
