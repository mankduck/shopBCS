<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/donhang.php";
include "../model/thongke.php";
include "../model/spdaxoa.php";
include "../model/magiamgia.php";
include "../global.php";
include "header.php";
//Controler

$listdh = loadAll_donhang_tgian("", "", "");
$listtt = loadAll_tinhtrang();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {




        //PHẦN DANH MỤC

        case 'adddm':
            //Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công!";
            }
            include "danhmuc/add.php";
            break;





        case 'listdm':
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;





        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;





        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suadm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;






        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công!";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;






            //PHẦN MÃ GIẢM GIÁ 


        case 'magiamgia':
            $listmgg = loadAll_magiamgia();
            include "magiamgia/list.php";
            break;


        case 'addmgg':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $magiamgia = $_POST['magiamgia'];
                $sotiengiam = $_POST['sotiengiam'];
                $het = date_create($_POST['tghet']);
                $tghet = date_format($het, 'Y-m-d H:i:s');
                $tgtao = date('Y-m-d H:i:s');

                insert_magiamgia($magiamgia, $sotiengiam, $tgtao, $tghet);
                $thongbao = "Thêm thành công!";
            }
            include "magiamgia/add.php";
            break;



        case 'xoamgg':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_magiamgia($_GET['id']);
            }
            $listmgg = loadAll_magiamgia();
            include "magiamgia/list.php";
            break;




        case 'suamgg':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suamgg = loadOne_magiamgia($_GET['id']);

            }
            include "magiamgia/update.php";
            break;


        case 'updatemgg':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $magiamgia = $_POST['magiamgia'];
                $sotiengiam = $_POST['sotiengiam'];
                $het = date_create($_POST['tghet']);
                $tghet = date_format($het, 'Y-m-d H:i:s');
                update_magiamgia($id, $magiamgia, $sotiengiam, $tghet);
                $thongbao = "Cập nhật thành công!";
            }
            $listmgg = loadAll_magiamgia();
            include "magiamgia/list.php";
            break;






        /*CONTROLER CHO SẢN PHẨM */





        case 'addsp':
            //Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];

                $checkSP = checkSP($tensp);
                if (is_array($checkSP)) {
                    $cksp = "Tên sản phẩm đã tồn tại trong hệ thống!";
                } else {
                    if ($tensp == "") {
                        $cksp = "Tên sản phẩm không được để trống!";
                    }
                }

                if (empty($giasp)) {
                    $ckgia = "Bạn không được để trống giá sản phẩm!";
                }
                //Xử lý thêm ảnh
                if (isset($_FILES['image'])) {
                    $target_img = "../upload/";
                    $name_img = $_FILES['image']['name'];
                    $url_img = $target_img . $name_img;
                    move_uploaded_file($_FILES['image']['tmp_name'], $url_img);
                }


                if (!isset($cksp) && !isset($ckgia)) {
                    insert_sanpham($tensp, $giasp, $name_img, $mota, $iddm);
                    $thongbao = "Thêm thành công!";
                }

            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/add.php";
            break;





        case 'listsp':

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }


            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw, $iddm, $page);
            include "sanpham/list.php";
            break;



        case 'listspdx':
            $listsanphamdx = loadAll_sanphamdx();
            include "sanpham/daxoa.php";
            break;






        case 'xoasp':

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }


            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $spdaxoa = loadOne_sanpham($_GET['id']);
                extract($spdaxoa);
                $ngayxoa = date('h:i:sa d/m/Y');
                insert_sanphamdx($tensanpham, $price, $image, $mota, $iddanhmuc, $ngayxoa);
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadAll_sanpham("", 0, $page);
            include "sanpham/list.php";
            break;


        case 'xoavv':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanphamdx($_GET['id']);
            }
            $listsanphamdx = loadAll_sanphamdx();
            include "sanpham/daxoa.php";
            break;


        case 'kpsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $spkhoiphuc = loadOne_sanphamdx($_GET['id']);
                extract($spkhoiphuc);
                insert_sanpham($tensanpham, $price, $image, $mota, $iddanhmuc);
                delete_sanphamdx($_GET['id']);
            }
            $listsanphamdx = loadAll_sanphamdx();
            include "sanpham/daxoa.php";
            break;





        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suasp = loadOne_sanpham($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/update.php";
            break;






        case 'updatesp':

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }

            
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $idsp = $_POST['id'];
                $iddm = $_POST['iddm'];

                if (isset($_FILES['image'])) {
                    $target_img = "../upload/";
                    $name_img = $_FILES['image']['name'];
                    $url_img = $target_img . $name_img;
                    move_uploaded_file($_FILES['image']['tmp_name'], $url_img);
                }

                update_sanpham($idsp, $tensp, $giasp, $name_img, $mota, $iddm);
                $thongbao = "Cập nhật thành công!";
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham("", 0, $page);
            include "sanpham/list.php";
            break;






            //PHẦN ĐƠN HÀNG


        case 'donhang':

            if (isset($_POST['checkdh']) && $_POST['checkdh']) {

                //Kiểm tra xem người dùng có click vào ô nhập thông tin hay không
                if($_POST['tgdau']){
                    //Nếu có tạo giá trị và định dạng lại time
                    $dau = date_create($_POST['tgdau']);
                    $tgdau = date_format($dau, 'Y-m-d H:i:s');
                }else{
                    //Nếu không gán giá trị rỗng
                    $tgdau = "";
                }


                if($_POST['tgdau']){
                    $cuoi = date_create($_POST['tgcuoi']);
                    $tgcuoi = date_format($cuoi, 'Y-m-d H:i:s');
                }else{
                    $tgcuoi = "";
                }


                $kyw = $_POST['kyw'];
                // echo $tgdau;
                // echo $tgcuoi;
                // die();
            } else {
                $tgdau = "";
                $tgcuoi = "";
                $kyw = "";
            }

            if (isset($_POST['capnhatdh']) && $_POST['capnhatdh']) {
                $tinhtrang = $_POST['tinhtrang'];
                $id = $_POST['iddonhang'];
                update_trangthai($tinhtrang, $id);
                echo '<script>alert("Thay đổi trạng thái đơn hàng thành công!");</script>';
            }
            $listdh = loadAll_donhang_tgian($tgdau, $tgcuoi,$kyw);
            include "donhang/donhang.php";
            break;





        //CASE CHI TIẾT ĐƠN HÀNG
        case 'chitietdonhang':
            if (isset($_GET['iddonhang'])) {
                $iddonhang = $_GET['iddonhang'];
                $listctdh = loadAll_ctdonhang_sp($iddonhang);
            }
            include "donhang/chitietdonhang.php";
            break;





//QUẢN LÝ TÀI KHOẢN



        case 'listtk':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listtk = loadAll_taikhoan($kyw);
            include "taikhoan/list.php";
            break;




        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $suatk = loadOne_taikhoan($_GET['id']);
            }
            include "taikhoan/update.php";
            break;




        case 'updatetk':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $user = $_POST['user'];
                $hoten = $_POST['hoten'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                $role = $_POST['role'];

                if (isset($_FILES['image'])) {
                    $target_img = "../upload/";
                    $name_img = $_FILES['image']['name'];
                    $url_img = $target_img . $name_img;
                    move_uploaded_file($_FILES['image']['tmp_name'], $url_img);
                }

                update_taikhoan($id, $user, $hoten, $password, $email, $name_img, $address, $phone, $role);
                $thongbao = "Cập nhật thành công!";
            }
            $listtk = loadAll_taikhoan("");
            include "taikhoan/list.php";
            break;





        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtk = loadAll_taikhoan("");
            include "taikhoan/list.php";
            break;






            //PHẦN BÌNH LUẬN

        case 'dsbl':
            $listbinhluan = loadAll_binhluan(0);
            include "binhluan/list.php";
            break;




        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadAll_binhluan(0);
            include "binhluan/list.php";
            break;




            //PHẦN THỐNG KÊ


        case 'thongke':
            $listthongke = loadAll_thongke();
            include "thongke/list.php";
            break;


        case 'thongkebl':
            $listthongkebl = loadAll_thongkebl();
            include "thongke/thongkebl.php";
            break;


        case 'thongkespbc':
            $listthongkespbc = loadAll_thongke_spbc();
            include "thongke/thongkespbc.php";
            break;


        case 'bieudo':
            $listthongke = loadAll_thongke();
            include "thongke/bieudo.php";
            break;


        case 'bieudodh':
            $listthongkedh = loadAll_tongdonhang();
            include "thongke/bieudodh.php";
            break;

        case 'bieudodhngay':
            $listthongkedhngay = loadAll_tongdonhang_ngay();
            include "thongke/bieudodhngay.php";
            break;






        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>