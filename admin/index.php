<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/spdaxoa.php";
include "header.php";
//Controler

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

    

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


                if(!isset($cksp) && !isset($ckgia)){
                    insert_sanpham($tensp, $giasp, $name_img, $mota, $iddm);
                    $thongbao = "Thêm thành công!";
                }

            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/add.php";
            break;





        case 'listsp':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;



            case 'listspdx':
                $listsanphamdx = loadAll_sanphamdx();
                include "sanpham/daxoa.php";
                break;
    





        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $spdaxoa = loadOne_sanpham($_GET['id']);
                extract($spdaxoa);
                $ngayxoa = date('h:i:sa d/m/Y');
                insert_sanphamdx($tensanpham, $price, $image, $mota, $iddanhmuc, $ngayxoa);
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadAll_sanpham("", 0);
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
            $listsanpham = loadAll_sanpham("", 0);
            include "sanpham/list.php";
            break;




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



        
            case 'thongke':
                $listthongke = loadAll_thongke();
                include "thongke/list.php";
                break;
    

                case 'thongkebl':
                    $listthongkebl = loadAll_thongkebl();
                    include "thongke/thongkebl.php";
                    break;
            
    
                case 'bieudo':
                    $listthongke = loadAll_thongke();
                    include "thongke/bieudo.php";
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