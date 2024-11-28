<?php
/* Smarty version 3.1.30, created on 2024-11-12 09:30:56
  from "C:\xampp\htdocs\shop_hoa\admin\views\hoa\v_modal_sua_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673312407028a1_40458071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db19ff6590dd982a52db304a243f561f7e048c64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\hoa\\v_modal_sua_hoa.tpl',
      1 => 1730701955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673312407028a1_40458071 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 875px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="uploadForm<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" action="hoa.php" enctype="multipart/form-data">
          <input type="hidden" name="ma_hoa" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Loại hoa:</label>
            <select class="form-control" name="loai_hoa">
                <option value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_hoa']->value, 'loai_hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hoa']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên hoa:</label>
            <input type="text" class="form-control" name="ten_hoa" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên URL:</label>
            <input type="text" class="form-control" name="ten_hoa_url" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa_URL;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Giá:</label>
            <input type="number" class="form-control" name="gia" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Gia;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Số lượng:</label>
            <input type="number" class="form-control" name="sl" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Giá khuyến mãi:</label>
            <input type="number" class="form-control" name="gia_khuyen_mai" value="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->GiaKhuyenMai;?>
" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Thành phần:</label>
            <textarea class="form-control" type="text" name="thanh_phan"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->ThanhPhan;?>
</textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Nội dung:</label>
            <textarea class="form-control" type="text" name="noi_dung"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->NoiDung;?>
</textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col col-3">
                <div class="input-file-container">
                  <input class="input-file" type="file" name="hinh" id="file<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
"/>
                  <label tabindex="0" for="my-file" class="input-file-trigger">Tải lên ảnh mới</label>
                </div>
                <p class="file-return"></p>
              </div>
              <div class="col col-3">
                  <img id="hienThi<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" class="img-fluid" src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
"/>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
