<?php
/*
Template name: San Pham
*/
get_header();
$product = new WP_Query([
    'post_type'=>'sanpham',
    'category_name' => 'Dầu Diesel',
]);
$product1 = new WP_Query([
    'post_type'=>'sanpham',
    'category_name' => 'Nhựa đường đặc nóng',
]);
$product2 = new WP_Query([
    'post_type'=>'sanpham',
    'category_name' => 'Nhựa đường phuy',
]);
?>
<div id="san-pham" class="branch cover container" >
   <div class="row">
       <div class="col-md-12 title">
           <div id="header-title" class="listing-header">
               <h1>SẢN PHẨM</h1>
           </div>
       </div>
   </div>
    <div class="row">
        <div class="col-md-3 categories-products">
            <div class="content-categories">

            </div>
        </div>
        <div class="col-md-9 detail-products">

        </div>
    </div>
</div>
<?php get_footer();?>