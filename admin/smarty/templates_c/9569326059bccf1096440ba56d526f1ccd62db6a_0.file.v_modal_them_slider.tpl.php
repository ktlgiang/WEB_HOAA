<?php
/* Smarty version 3.1.30, created on 2024-11-19 08:46:15
  from "C:\xampp\htdocs\shop_hoa\admin\views\slider\v_modal_them_slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673c4247d939e0_67281785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9569326059bccf1096440ba56d526f1ccd62db6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\slider\\v_modal_them_slider.tpl',
      1 => 1730701956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673c4247d939e0_67281785 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 875px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm slider mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="slider.php" id="uploadForm" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên slider:</label>
            <input type="text" class="form-control" name="tieu_de" value="" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Đường dẫn:</label>
            <input type="text" class="form-control" name="duong_dan" value="" autocomplete="off">
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
