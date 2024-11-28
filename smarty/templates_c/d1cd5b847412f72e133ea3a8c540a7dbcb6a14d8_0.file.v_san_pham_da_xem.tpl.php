<?php
/* Smarty version 3.1.30, created on 2024-11-04 07:38:50
  from "C:\xampp\htdocs\shop_hoa\views\hoa\v_san_pham_da_xem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67286bfa2e8f35_46555272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1cd5b847412f72e133ea3a8c540a7dbcb6a14d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\hoa\\v_san_pham_da_xem.tpl',
      1 => 1730701975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67286bfa2e8f35_46555272 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_SESSION['makh'])) {?>  
    <ul class="products-grid row aos-all" id="transcroller-body">
        <?php $_smarty_tpl->_assignInScope('dem', 0);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lich_su']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
            <li class="item do_dai aos-item" >
            <div class="category-products-grid">
                <div class="images-container">
                    <div class="product-hover cp_img">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" class="product-image">
                            <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                        </a>
                    </div>

                    <h2 class="product-name">
                    <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</a>
                    </h2>
                    <div class="actions-no hover-box">
                        <div class="actions">
                            <div class="price-box">
                                <a class="minimal-price-link">
                                    <span class="mua_online">Mua online:</span>
                                    <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa']->value->GiaKhuyenMai;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
                                </a>
                            </div>
                        </div>
                            <?php if ($_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP > 0) {?>
                        <div class="actions-cart">
                        <div class="btnGioHang" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,1)">Thêm vào giỏ hàng</div>
                        </div>
                            <?php } else { ?>
                            <p class="notify"><button>Đã hết hàng</button></p>
                            <?php }?>
                    </div>
                </div>
            </div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</div>
<div class="bsm_products_pagination" >
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['phan_trang']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['phan_trang']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <span class="phan_trang" id="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">  <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
    <?php }
}
?>

</div>
<?php } else { ?>
<div class="alert alert-warning">
    <strong>Rất tiếc!</strong> Hãy đăng nhập vảo tài khoản để xem.
</div>
<?php }
}
}
