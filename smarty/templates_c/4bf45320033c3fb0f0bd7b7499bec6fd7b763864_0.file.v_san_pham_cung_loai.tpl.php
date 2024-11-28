<?php
/* Smarty version 3.1.30, created on 2024-11-14 01:57:19
  from "C:\xampp\htdocs\shop_hoa\views\chi_tiet_hoa\v_san_pham_cung_loai.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67354aef1900e5_48731766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf45320033c3fb0f0bd7b7499bec6fd7b763864' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\chi_tiet_hoa\\v_san_pham_cung_loai.tpl',
      1 => 1730701975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67354aef1900e5_48731766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <ul class="magictabs">
        <li class="item active loaded single">
            <span class="title cung_loai">Sản phẩm cùng loại</span>
        </li>
  </ul>
  <div class="category-products">
    <ul class="products-grid row">
      <?php $_smarty_tpl->_assignInScope('i', 0);
?>
      <?php $_smarty_tpl->_assignInScope('j', 0);
?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa_cung_loai']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
        <li class="item" data-aos="flip-left" data-aos-duration="300"  data-aos-delay="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
          <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);
?>
          <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['j']->value*300);
?>
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
$_prefixVariable2=ob_get_clean();
echo number_format($_prefixVariable2);?>
 ₫</span>
                                </a>
                            </div>
                        </div>
                          <?php if ($_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP > 0) {?>
                            <div class="notify-dat-hang">
                                <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,1)">Thêm vào giỏ hàng</button>
                            </div>
                          <?php } else { ?>
                            <div class="notify"><button>Đã hết hàng</button></div>
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
</div>
<?php }
}
