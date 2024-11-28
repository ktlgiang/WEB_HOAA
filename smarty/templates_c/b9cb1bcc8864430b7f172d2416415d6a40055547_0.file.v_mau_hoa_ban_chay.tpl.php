<?php
/* Smarty version 3.1.30, created on 2024-11-04 07:38:48
  from "C:\xampp\htdocs\shop_hoa\views\trang_chu\v_mau_hoa_ban_chay.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67286bf8dcd600_92324946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9cb1bcc8864430b7f172d2416415d6a40055547' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\trang_chu\\v_mau_hoa_ban_chay.tpl',
      1 => 1730701976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67286bf8dcd600_92324946 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu2" class="tab-pane fade in">
    <div class="category-products">
        <ul class="products-grid row aos-all" id="aos-demo">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_ban_chay']->value, 'hoa_ban_chay');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_ban_chay']->value) {
?>
            <li class="item hoa" data-aos="fade-up">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->GiaKhuyenMai;
$_prefixVariable2=ob_get_clean();
echo number_format($_prefixVariable2);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['hoa_ban_chay']->value->SoLuongSP > 0) {?>
                                <div class="notify-dat-hang">
                                   <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa_ban_chay']->value->MaHoa;?>
,1)">Thêm vào giỏ hàng</button>
                                </div>
                            <?php } else { ?>
                                <div class="notify">
                                    <button>Đã hết hàng</button>
                                </div>
                            <?php }?>
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
