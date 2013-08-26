<?php $page = "start" ?>
<?php $title="订单信息填写"?>
<?php include("../common/order-meta.php"); ?>
</head>
<body class="order">
<?php include("../common/order-header.html"); ?>


<div class="wrap">
    
    <?php include("s-step31.html"); ?>
    
    <div class="order-main border equalheight-box">
    
        <?php include("s1-sidebar.html"); ?>
        
        <div class="main equalheight-item">
            
            <!-- 预订信息 -->
            <?php include("s1-order-info.html"); ?>
            
            
            <!-- 附加产品 -->
            <?php include("s1-append-pro.html"); ?>
            
            
            <!-- 联系人信息 -->
            <?php include("s1-contact.html"); ?>
            
            
            <!-- 预订须知 -->
            <?php include("s1-booking-policy.html"); ?>
            
            
            <!-- 优惠信息 -->
            <?php include("s1-coupon.html"); ?>
            
            
            <!-- 提交订单 -->
            <div class="order-content xdl-hor">
                <div class="hr_d"></div>
                <dl class="xdl">
                    <dt class="tl"><a href="#" class="vmiddle">&lt; 返回上一步</a></dt>
                    <dd><button class="pbtn pbtn-big pbtn-orange">提交订单</button>
                    </dd>
                </dl>
            </div> <!-- 提交订单 -->
            
            
            
        </div> <!-- //.main -->
    
    </div>
    
    
</div>

<?php include("../common/order-footer.php"); ?>

</body>
</html>
