<?php
/* Smarty version 3.1.30, created on 2024-11-04 07:38:49
  from "C:\xampp\htdocs\shop_hoa\views\trang_chu\v_san_pham_noi_bat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67286bf953a386_54579542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4833291fbb936a8e05f85850d4bd1e904093755' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\trang_chu\\v_san_pham_noi_bat.tpl',
      1 => 1730701976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67286bf953a386_54579542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom-product custom2">
  <div class= "bmqodnfrgh magicproduct mage-custom">
    <div class="block-title-tabs">
      <ul class="magictabs">
        <li class="item active loaded single" >
          <span class ="title">Sản phẩm nổi bật</span>
        </li>
      </ul>
    </div>
    <div class="content-products" >
      <div class="mage-magictabs mc-featured">
        <ul class="flexisel-content products-grid random zoomOut play">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['san_pham_noi_bat']->value, 'noi_bat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noi_bat']->value) {
?>
          <li data-aos="fade-up"data-aos-duration="600">
            <div class="per-product clearfix">
              <div class="images-container">
                <div class="product-hover">
                  <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->TenHoa;?>
" class="product-image">
                    <img class="img-responsive hinh_san_pham" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->TenHoa;?>
" />
                  </a>
                </div>
              </div>
              <div class="products-textlink product-featured-custom clearfix">
                <h2 class="product-name">
                  <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->TenHoa;?>
</a>
                </h2>
                <div class="price-box">
                  <p class="old-price">
                    <span class="price-label">Giá mới:</span>
                    <span class="price" id="product-price-2107">
              <?php echo number_format($_smarty_tpl->tpl_vars['noi_bat']->value->Gia);?>
  đ</span>
                  </p>
                  <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['noi_bat']->value > 'MaHoa';?>
.html" class="minimal-price-link">
                    <span class="label">Mua online:</span>
                    <span class="price" id="product-minimal-price-2107">
        <?php echo number_format($_smarty_tpl->tpl_vars['noi_bat']->value->GiaKhuyenMai);?>
   đ   </span>
                  </a>
                </div>
                <div class="actions"></div>
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
    <!-- MAP -->
    <!-- MAP -->
  </div>
</div>
<?php }
}
