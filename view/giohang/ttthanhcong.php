<div class="container">
        <img src="/view/image/logo-_2_.jpg" alt="Lỗi" width="200px" >
        <?php
                if(isset($thongbao)){
                        echo '<h2>'.$thongbao.'</h2>';
                }else{
                        echo '
                        <h2>Cảm ơn bạn đã mua hàng tại <a href="index.php?act=trangchu">PHGMNHD</a></h2>

                        <h3>Theo dõi đơn hàng của bạn <a href="index.php?act=donhang">TẠI ĐÂY</a></h3>
                        ';
                }
        ?>

        <h3>PHGMNHD luôn mong muốn mang lại sự hài lòng cho quý khách.</h3>
        <h3>Trân trọng cảm ơn!</h3>
</div>