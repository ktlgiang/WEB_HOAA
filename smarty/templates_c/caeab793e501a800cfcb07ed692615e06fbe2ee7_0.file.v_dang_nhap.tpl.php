<?php
/* Smarty version 3.1.30, created on 2024-11-12 08:14:18
  from "C:\xampp\htdocs\shop_hoa\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6733004a274d01_68278481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caeab793e501a800cfcb07ed692615e06fbe2ee7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\v_dang_nhap.tpl',
      1 => 1730701975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_nhap/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_nhap/v_dang_nhap.tpl' => 1,
  ),
),false)) {
function content_6733004a274d01_68278481 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
