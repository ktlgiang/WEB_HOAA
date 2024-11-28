<?php
/* Smarty version 3.1.30, created on 2024-11-12 09:31:49
  from "C:\xampp\htdocs\shop_hoa\admin\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673312751666b6_98148293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c8f559ee38a0dfee6c480ceb519295cfed2671' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\admin\\views\\v_khach_hang.tpl',
      1 => 1730701955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_ds_khach_hang.tpl' => 1,
  ),
),false)) {
function content_673312751666b6_98148293 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_ds_khach_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
</div><?php }
}
