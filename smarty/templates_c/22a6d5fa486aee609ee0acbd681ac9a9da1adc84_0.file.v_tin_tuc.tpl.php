<?php
/* Smarty version 3.1.30, created on 2024-11-12 08:20:49
  from "C:\xampp\htdocs\shop_hoa\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_673301d1018cc0_14854166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a6d5fa486aee609ee0acbd681ac9a9da1adc84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\v_tin_tuc.tpl',
      1 => 1730701975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_thanh_danh_muc.tpl' => 1,
    'file:views/tin_tuc/v_ds_tin_tuc.tpl' => 1,
  ),
),false)) {
function content_673301d1018cc0_14854166 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_ds_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
