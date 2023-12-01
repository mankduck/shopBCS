<div class="container">
    <div class="row main-body mb">
        <div class="box-title">
            CHI TIẾT ĐƠN HÀNG
        </div>
        <div class="row box-content4 formcart">
            <div class="row mb10">
                <a href="index.php?act=donhang"><input type="button" value="Danh sách đơn hàng"></a>
            </div>
            <form action="" method="post">
                <div class="row mb10 formcart">
                    <table class="mb">
                            <tr>
                                <th class="br">ID</th>
                                <th class="br">Ảnh</th>
                                <th class="br">Tên</th>
                                <th class="br">Giá</th>
                                <th class="br">Số lượng</th>
                                <th>Thành tiền</th>

                            </tr>
                            <?php
                            foreach ($listctdh as $dh) {
                                extract($dh);
                                $image = $img_path . $image;

                                echo '
                                <tr>  
                                    <td class="br">' . $idsp . '</td>
                                    <td class="br"><img width="80px" src="' . $image . '"></td>
                                    <td class="br">' . $tensanpham . '</td>
                                    <td class="br">'. $price .'</td>
                                    <td class="br">'. $soluong .'</td>
                                    <td>'. $thanhtien .'</td>';
                            }
                            ?>
                    </table>
                </div>

            </form>
        </div>
    </div>

</div>