<?php
/* Smarty version 3.1.30, created on 2024-11-19 09:02:27
  from "C:\xampp\htdocs\shop_hoa\admin\views\tin_tuc\v_danh_sach_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673c4613b1e788_29080550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f722acb3f0294c8fba90364e608cb22f7f412d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\tin_tuc\\v_danh_sach_tin_tuc.tpl',
      1 => 1730701956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_modal_sua_tin_tuc.tpl' => 1,
  ),
),false)) {
function content_673c4613b1e788_29080550 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên tin tức</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_tin_tuc']->value, 'tin_tuc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin_tuc']->value) {
?>
    <tr id="delete<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
">
      <td width="75px" ><img src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
      <td><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
</td>
      <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
" >Sửa</button>
          <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->MaTT;?>
)" class="btn btn-danger">Xóa</button>
      </td>
    </tr>
    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_modal_sua_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
</div>
<?php }
}
