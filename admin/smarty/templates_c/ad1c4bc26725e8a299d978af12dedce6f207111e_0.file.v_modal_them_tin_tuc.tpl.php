<?php
/* Smarty version 3.1.30, created on 2024-11-19 09:02:28
  from "C:\xampp\htdocs\shop_hoa\admin\views\tin_tuc\v_modal_them_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673c4614069031_77225324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1c4bc26725e8a299d978af12dedce6f207111e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\tin_tuc\\v_modal_them_tin_tuc.tpl',
      1 => 1730701956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c4614069031_77225324 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 875px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm tin tức mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="tin_tuc.php" id="uploadForm" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Loại tin:</label>
            <select class="form-control" name="loai_tin">
                <option value="" disabled>Chọn loại tin tức</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_tin']->value, 'loai_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_tin']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['loai_tin']->value->MaLoaiTin;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_tin']->value->TenLoaiTin;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên tin tức:</label>
            <input type="text" class="form-control" name="ten_tt" value="" autocomplete="off" maxlength="100" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Nội dung:</label>
            <textarea class="ckeditor form-control" type="text" name="noi_dung" required></textarea>
          </div>
          <div class="form-group">
              <div class="row">
                <div class="col col-3">
                  <div class="input-file-container">
                    <input class="input-file" id="file" name="hinh" type="file" required>
                    <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                  </div>
                  <p class="file-return"></p>
                </div>
                <div class="col col-3">
                    <img id="hienThi" class="img-fluid" src=""/>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_add">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
