<?php
/* Smarty version 3.1.30, created on 2024-11-12 08:25:58
  from "C:\xampp\htdocs\shop_hoa\views\khach_hang\v_thong_tin_don_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6733030628ccb3_23408829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38467057fdd0a00cb99cead5b6e7befed055181f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\khach_hang\\v_thong_tin_don_hang.tpl',
      1 => 1730701975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6733030628ccb3_23408829 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-5 ">
  <h3 class="canh_giua khach_hang thong_tin">Đơn hàng</h3>
  <div class="product-right-block">
    <div class="border_bottom">
      <div class="sl_don_hang">
        Đơn hàng của bạn (<?php echo $_SESSION['tong_gio_hang'];?>
 sản phẩm)
      </div>
    </div>
    <div class="san_pham border_bottom_1px">
      <table>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['giohang'], 'gh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gh']->key => $_smarty_tpl->tpl_vars['gh']->value) {
$__foreach_gh_0_saved = $_smarty_tpl->tpl_vars['gh'];
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['gh']->key == $_smarty_tpl->tpl_vars['sp']->value->MaHoa) {?>
            <tr class="bang_don_hang">
              <td class="ten_hoa_kh">
                <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value->MaHoa;?>
.html"><?php echo $_smarty_tpl->tpl_vars['sp']->value->TenHoa;?>
</a>
              </td>
              <td>
                <div class="sl_kh">x<?php echo $_smarty_tpl->tpl_vars['gh']->value;?>
</div>
              </td>
              <td>
                <div class="tong_kh"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai*$_smarty_tpl->tpl_vars['gh']->value);?>
 đ</div>
              </td>
            </tr>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php
$_smarty_tpl->tpl_vars['gh'] = $__foreach_gh_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </table>
    </div>
    <div class="thanh_tien">
      <span class="chu_in">Thành tiền:</span>
      <span class="tong_thanh_tien"><?php echo number_format($_SESSION['tong_tt']);?>
 đ</span>
    </div>
  </div>
</div>
<?php }
}
