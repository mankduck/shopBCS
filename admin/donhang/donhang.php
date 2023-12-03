<div class="row main-body mb">
    <div class="box-title">
        ĐƠN HÀNG CỦA TÔI
    </div>
    <div class="row box-content4 formcart">
        <div class="row mb10">
        <form action="index.php?act=donhang" method="post">
            <input type="date" name="tgdau" id="">
            <input type="date" name="tgcuoi" id="">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng" >
            <input type="submit" name="checkdh" value="Tìm kiếm">
        </form>
        </div>
        <form action="" method="post">
            <div class="row mb10 formcart">
                <table class="mb">

                        <tr>
                            <th class="br">Mã đơn hàng</th>
                            <th class="br">Tổng tiền</th>
                            <th class="br">Ngày đặt</th>
                            <th class="br">Chi tiết</th>
                            <th class="br">PTTT</th>
                            <th class="br">Người đặt</th>
                            <th class="br">SDT</th>
                            <th class="br">Trạng thái</th>
                            <th>Tùy chỉnh</th>

                        </tr>
                        <?php
                        foreach ($listdh as $dh) {

                            extract($dh);
                            // echo "<pre>";
                            // print_r($dh);
               
                            echo '<form action="" method="post"><input type="hidden" name="iddonhang" value="' . $iddonhang . '" >';

                            echo '
                                <tr> 
                                    <td class="br">' . $madonhang . '</td>
                                    <td class="br">' . $tong . '</td>
                                    <td class="br">' . $ngaydat . '</td>
                                    <td class="br"><a href="index.php?act=chitietdonhang&iddonhang=' . $iddonhang . '" ><input type="button" value="Chi tiết"></a></td>
                                    <td class="br">';

                            if ($pttt == 1) {
                                echo "Thanh toán khi nhận hàng";
                            } else {
                                echo "Chuyển khoản ngân hàng";
                            }
                            ;
                            echo '
                                    </td>
                                    <td class="br">' . $hoten . '</td>
                                    <td class="br">' . $phone . '</td>
                                    <td class="br">

                                    <select name="tinhtrang">';
                                    foreach ($listtt as $key => $value) {
                                        $sl = "";
                                        if($value['giatri'] == $tinhtrang){
                                            $sl = "selected";
                                        }
                                        echo '<option value="'.$value['giatri'].'" '.$sl.'>'.$value['tinhtrang'].'</option>';
                                    };
                                    echo '</select> </td>

                                    <td class="br"><input type="submit" name="capnhatdh" value="Cập nhật"></td> 
                                </tr>
                                </form>';
                        }
                        ?>


                </table>
            </div>
        </form>
    </div>
    <!-- <script>
function luuDuLieu() {
    var giaTriDaChon = document.getElementById("selectOption").value;

    // Sử dụng Ajax để gửi giá trị đã chọn lên máy chủ
    var xuLyAjax = new XMLHttpRequest();
    xuLyAjax.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            // Xử lý phản hồi từ máy chủ nếu cần
            console.log("Dữ liệu đã được lưu vào cơ sở dữ liệu.");
        }
    };
    
    // Gửi giá trị đã chọn lên tập lệnh xử lý PHP để lưu vào cơ sở dữ liệu
    xuLyAjax.open("GET", "luu_vao_csdl.php?giaTriDaChon=" + giaTriDaChon, true);
    xuLyAjax.send();
}
</script> -->
</div>
</div>