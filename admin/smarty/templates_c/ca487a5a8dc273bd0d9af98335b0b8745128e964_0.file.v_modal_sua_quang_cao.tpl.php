<?php
/* Smarty version 3.1.30, created on 2024-11-19 09:02:21
  from "C:\xampp\htdocs\shop_hoa\admin\views\quang_cao\v_modal_sua_quang_cao.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673c460d415f03_81271350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca487a5a8dc273bd0d9af98335b0b8745128e964' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\quang_cao\\v_modal_sua_quang_cao.tpl',
      1 => 1730701956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c460d415f03_81271350 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->id;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 875px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->TieuDe;?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->id;?>
" action="quang_cao.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->id;?>
">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên quảng cáo:</label>
            <input type="text" class="form-control" name="tieu_de" value="<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->TieuDe;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Đường dẫn:</label>
            <input type="text" class="form-control" name="duong_dan" value="<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->DuongDan;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col col-3">
                <div class="input-file-container">
                  <input class="input-file" type="file" name="hinh" id="file<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->id;?>
"/>
                  <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                </div>
                <p class="file-return"></p>
              </div>
              <div class="col col-3">
                  <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->id;?>
" class="img-fluid" src="../public/images/quang_cao/<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->Hinh;?>
"/>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_update_quang_cao" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['quang_cao']->value->id;?>
">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
