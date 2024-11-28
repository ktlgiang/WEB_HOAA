<?php
/* Smarty version 3.1.30, created on 2024-11-19 08:46:15
  from "C:\xampp\htdocs\shop_hoa\admin\views\slider\v_danh_sach_slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673c424793c1b6_36338023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ac3d255b6669281abf63bf6a7fc0ba8a8f0a87d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\slider\\v_danh_sach_slider.tpl',
      1 => 1730701956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/slider/v_modal_sua_slider.tpl' => 1,
  ),
),false)) {
function content_673c424793c1b6_36338023 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên Slider</th>
      <th>Thời gian</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_slider']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
">
      <td width="175px" style="max-height: 200px;"><img src="../public/images/slider/<?php echo $_smarty_tpl->tpl_vars['slider']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['slider']->value->TieuDe;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['slider']->value->ThoiGian;?>
</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
" >Sửa</button>
          <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
)" class="btn btn-danger">Xóa</button>
      </td>
    </tr>
    <?php $_smarty_tpl->_subTemplateRender("file:views/slider/v_modal_sua_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
