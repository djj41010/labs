<?php $page = "start" ?>
<?php $title="支付页"?>
<?php include("../common/order-meta.php"); ?>
</head>
<body class="order">
<?php include("../common/order-header.html"); ?>


<div class="wrap">
    
    <?php include("s-step33.html"); ?>
    
    
    <div class="order-main border">
        <div class="main">
            <div class="pay-feedback">
                <div class="tipbox tip-success tip-nowrap">
                    <span class="tip-icon-big tip-icon-big-success"></span>
                    <div class="tip-content">
                        <h3 class="tip-color-title">您的订单已经支付成功。</h3>
                    </div>
                    
                    
                    <div class="tip-other tip-align pay-backinfo">
                        <div class="backinfo-item">
                            <p class="f14">回显的订单状态等信息</p>
                        </div>
                        
                        <div class="backinfo-item">
                            <!-- 手机客户端二维码 -->
                            <?php include("./s3-codeapp.html"); ?>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div> <!-- //.main -->
        
    </div>
    
    
</div>

<?php include("../common/order-footer.php"); ?>

</body>
</html>
