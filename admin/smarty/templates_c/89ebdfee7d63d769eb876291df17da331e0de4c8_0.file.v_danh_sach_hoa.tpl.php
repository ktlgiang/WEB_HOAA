<?php
/* Smarty version 3.1.30, created on 2024-11-12 09:30:56
  from "C:\xampp\htdocs\shop_hoa\admin\views\hoa\v_danh_sach_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6733124050e3d9_13975678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ebdfee7d63d769eb876291df17da331e0de4c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\hoa\\v_danh_sach_hoa.tpl',
      1 => 1730701955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/hoa/v_modal_sua_hoa.tpl' => 1,
  ),
),false)) {
function content_6733124050e3d9_13975678 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên hoa</th>
      <th>Loại hoa</th>
      <th>Giá</th>
      <th>Giá KM</th>
      <th>SL</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
      <td width="75px" ><img src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</td>
      <td><a href="hoa.php?loai_hoa=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaLoai;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</a></td>
      <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->Gia);?>
 đ</td>
      <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->GiaKhuyenMai);?>
 đ</td>
      <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
" >Sửa</button>
          <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
)" class="btn btn-danger">Xóa</button>
      </td>
    </tr>
<?php $_smarty_tpl->_subTemplateRender("file:views/hoa/v_modal_sua_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
