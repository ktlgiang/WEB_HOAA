<?php
/* Smarty version 3.1.30, created on 2024-11-04 07:38:49
  from "C:\xampp\htdocs\shop_hoa\views\trang_chu\v_mau_hoa_giam_gia.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67286bf908bdd3_77340469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f35a73e3f92588a897b7ed63f41bb51d231c5f02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\trang_chu\\v_mau_hoa_giam_gia.tpl',
      1 => 1730701976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67286bf908bdd3_77340469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu3" class="tab-pane fade in">
    <div class="category-products">
        <ul class="products-grid row aos-all" id="aos-demo">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_khuyen_mai']->value, 'hoa_km');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_km']->value) {
?>
            <li class="item hoa" data-aos="fade-up">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa_km']->value->GiaKhuyenMai;
$_prefixVariable3=ob_get_clean();
echo number_format($_prefixVariable3);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                              <?php if ($_smarty_tpl->tpl_vars['hoa_km']->value->SoLuongSP > 0) {?>
                                <div class="notify-dat-hang">
                                   <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa_km']->value->MaHoa;?>
,1)">Thêm vào giỏ hàng</button>
                                </div>
                              <?php } else { ?>
                                <div class="notify">
                                    <button>Đã hết hàng</button>
                                </div>
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
        <div class="cta">
            <button onclick="location.href='danh-sach-hoa'">Xem thêm hoa <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<?php }
}
