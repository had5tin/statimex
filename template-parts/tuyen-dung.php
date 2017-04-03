<?php
/*
Template name: Tin Tuyển Dụng
*/
get_header();
$news2 = new WP_Query([
    'post_type' => 'tuyen-dung',
]);
?>
<div id="tuyen-dung">


    <div class="content-area">
        <div class="page-title">
            <h1>Careers at GUIDANCE</h1>
        </div>
        <div class="career-top-info">

            <p>Working at Guidance means joining a commerce solutions company with 20+ years of retail experience. We
                provide best-in-class services such as creative, development, mobile, and system integration that exceed
                industry standards.</p>
        </div>
        <div class="open-positions">
            <h3 class="open-positions-title">Open Positions</h3>
            <ul class="item-list">
                <li class="item">
                    <a href="/statimex/tuyen-dung/qua%cc%89n-ly-ban-hang-khu-vu%cc%a3c/">
                        <div class="inner">Quản Lý Bán Hàng Khu Vực</div>
                    </a>
                </li>
                <li class="item">
                    <a href="/statimex/tuyen-dung/tuyen-dung-thu-kho-nhua-duong/">
                        <div class="inner">Tuyển dụng: Thủ kho nhựa đường</div>
                    </a>
                </li>
                <li class="item">
                    <a href="/statimex/tuyen-dung/qua%cc%89n-ly-ban-hang-khu-vu%cc%a3c/">
                        <div class="inner">Quản Lý Bán Hàng Khu Vực</div>
                    </a>
                </li>
                <li class="item">
                    <a href="/statimex/tuyen-dung/tuyen-dung-thu-kho-nhua-duong/">
                        <div class="inner">Tuyển dụng: Thủ kho nhựa đường</div>
                    </a>
                </li>

            </ul>
        </div>
        <div class="career-bottom-info">
            <h3 class="core-values">Core Values</h3>
            <p><img alt="core values" src="http://www.guidance.com/sites/default/files/core-value-artwork.jpg"></p>

    </div>

</div>
<?php get_footer(); ?>
