<?php
/* Smarty version 3.1.30, created on 2024-11-12 08:25:57
  from "C:\xampp\htdocs\shop_hoa\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67330305e862a0_11222986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d3930a7e1d911fde4a896200dd4138872c918b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\v_khach_hang.tpl',
      1 => 1730701975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_thanh_danh_muc.tpl' => 1,
    'file:views/khach_hang/v_thong_tin.tpl' => 1,
    'file:views/khach_hang/v_thong_tin_don_hang.tpl' => 1,
  ),
),false)) {
function content_67330305e862a0_11222986 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin_don_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
