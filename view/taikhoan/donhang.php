<div class="container">
    <div class="row main-body mb">
        <div class="box-title">
            ĐƠN HÀNG CỦA TÔI
        </div>
        <div class="row box-content4 formcart">
            <div class="row mb10">
            </div>
            <form action="" method="post">
                <div class="row mb10 formcart">
                    <table class="mb">
                        <form action="" method="post">
                            <tr>
                                <th class="br">Mã đơn hàng</th>
                                <th class="br">Tổng tiền</th>
                                <th class="br">Ngày đặt</th>
                                <th class="br">Chi tiết</th>
                                <th class="br">PTTT</th>
                                <th class="br">Trạng thái</th>
                                <th>Tùy chỉnh</th>

                            </tr>
                            <?php
                            foreach ($listdh as $dh) {
                                extract($dh);
                                echo '<input type="hidden" name="iddonhang" value="' . $iddonhang . '" >';

                                echo '
                                <tr>  
                                    <td class="br">' . $madonhang . '</td>
                                    <td class="br">' . $tong . '</td>
                                    <td class="br">' . $ngaydat . '</td>
                                    <td class="br"><a href="index.php?act=chitietdonhang&iddonhang=' . $iddonhang . '" ><input type="button" value="Chi tiết"></a></td>
                                    <td class="br">';

                                    if ($pttt == 1) {
                                        echo "Thanh toán khi nhận hàng";
                                    }else{
                                        echo "Chuyển khoản ngân hàng";
                                    };
                                    echo'
                                    </td>
                                    <td class="br">';

                                switch ($tinhtrang) {
                                    case '1':
                                        echo "Chờ xác nhận";
                                        break;

                                    case '2':
                                        echo "Xác nhận đơn hàng";
                                        break;

                                    case '3':
                                        echo "Đang vận chuyển";
                                        break;

                                    case '4':
                                        echo "Giao hàng thành công";
                                        break;
                                    default:
                                        echo "Đã hủy đơn";
                                        break;
                                }

                                echo '</td>
                                    <td class="br">';


                                switch ($tinhtrang) {
                                    case '1':
                                        echo '<a href="index.php?act=huydon&id='.$iddonhang.'"><input type="button" name="huy" value="Hủy đơn"></a>';
                                        break;

                                    case '5':
                                        echo '<input type="button" value="Đã hủy">';
                                        break;

                                    default:

                                        break;
                                }


                                echo '</td> 
                                </tr>
                            ';
                            }
                            ?>
                        </form>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>