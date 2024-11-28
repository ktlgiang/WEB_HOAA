<?php
/* Smarty version 3.1.30, created on 2024-11-12 08:14:50
  from "C:\xampp\htdocs\shop_hoa\views\v_dang_ki.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6733006a2ec244_80531679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0473a24e45b741907ef9ab7f687150de994f61fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\v_dang_ki.tpl',
      1 => 1730701975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_ki/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_ki/v_dang_ki.tpl' => 1,
  ),
),false)) {
function content_6733006a2ec244_80531679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_dang_ki.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
