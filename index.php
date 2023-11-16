<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "model/donhang.php";
include "model/magiamgia.php";
include "model/validate.php";

$dsdm = loadAll_danhmuc();

include "view/header.php";
include "global.php";

$spmoi = loadAll_sanpham_home();
$dstop10 = loadAll_sanpham_top10();

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}



if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
    switch ($act) {
        //CASE GIỚI THIỆU    
        case 'gioithieu':
            include "view/gioithieu.php";
            break;




        //CASE HƯỚNG DẪN SỬ DỤNG    
        case 'hdsd':
            include "view/hdsd.php";
            break;





        //CASE LIÊN HỆ
        case 'lienhe':
            include "view/lienhe.php";
            break;





        //CASE HỆ THỐNG CỬA HÀNG
        case 'hethongch':
            include "view/hethongch.php";
            break;







        //CASE ĐĂNG NHẬP 
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $password = $_POST['pass'];

                //Kiểm tra bằng hàm checkLogin trong model

                $checklogin = checklogin($user, $password);
                if (is_array($checklogin)) {
                    $_SESSION['user'] = $checklogin;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản/ mật khẩu sai, vui lòng kiểm tra lại!";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;






        //CASE ĐĂNG KÍ
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $user = $_POST['user'];
                $password = $_POST['pass'];
                $email = $_POST['email'];

                //Kiểm tra tên người dùng có được nhập vào và có tồn tại hay không

                $checkUser = checkUser($user);
                if (is_array($checkUser)) {
                    $ckUser = "Tên người dùng đã tồn tại trong hệ thống!";
                } else {
                    if ($user == "") {
                        $ckUser = "Tên người dùng không được để trống!";
                    }
                }

                //Kiểm tra password

                if ($password == "") {
                    $ckPass = "Mật khẩu không được để trống!";
                }

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $ckEmail = "Email đã tồn tại trong hệ thống!";
                } else {
                    if ($email == "") {
                        $ckEmail = "Email không được để trống!";
                    }
                }

                if (!isGmail($email)) {
                    $errEmail = "Địa chỉ email không đúng định dạng.";
                }
                ;

                //Nếu không tồn tại 4 biến lỗi thì thêm tài khoản vào database và in ra thông báo

                if (!isset($errEmail) && !isset($ckUser) && !isset($ckEmail) && !isset($ckPass)) {
                    insert_taikhoan($user, $password, $email);
                    $thongbao = "Đăng kí thành công. Vui lòng quay lại trang đăng nhập để tiến hành đăng nhập!";
                }

            }
            include "view/taikhoan/dangky.php";
            break;








        //CASE QUẢN LÝ TÀI KHOẢN
        case 'quanlytk':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $user = $_POST['user'];
                $hoten = $_POST['hoten'];
                $password = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['diachi'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                $id = $_POST['id'];

                //Kiểm tra họ tên và email trong phần cập nhật tài khoản ở model

                if (!isName($hoten)) {
                    $errUser = "Họ tên không đúng định dạng.";
                }
                ;


                if (!isGmail($email)) {
                    $errEmail = "Địa chỉ email không đúng định dạng.";
                }
                ;


                if (isset($_FILES['image'])) {
                    $target_img = "upload/";
                    $name_img = $_FILES['image']['name'];
                    $url_img = $target_img . $name_img;
                    move_uploaded_file($_FILES['image']['tmp_name'], $url_img);
                }

                //Nếu không tồn tại 2 biến lỗi thì cập nhật lại tài khoản và tạo biến SESSION để hiển thị thông tin ở màn hình đăng nhập 

                if (!isset($errUser) && !isset($errEmail)) {
                    update_taikhoan($id, $user, $hoten, $password, $email, $name_img, $address, $phone, $role);
                    $_SESSION['user'] = checklogin($user, $password);
                    header('Location: index.php?act=dangnhap');
                }
            }
            include "view/taikhoan/quanlytk.php";
            break;








        //CASE ĐỔI MẬT KHẨU
        case 'doimk':
            if (isset($_POST['doimk']) && $_POST['doimk']) {
                $id = $_POST['id'];
                $password = $_POST['password'];

                //Kiểm tra mật khẩu, nếu không trùng mật khẩu cũ thì báo lỗi

                $checkPass = checkPass($password);
                if (is_array($checkPass)) {

                    //Khởi tạo 2 biến lưu giá trị mật khẩu mới, nếu 2 giá trị đầu vào không bằng nhau:

                    $password_new = $_POST['password_new'];
                    $password_cf = $_POST['password_cf'];
                    if ($password_new == $password_cf) {
                        updatePass($id, $password_new);
                        $thongbao = "Bạn đã đổi mật khẩu thành công!";
                    } else {
                        $thongbao = "Hai mật khẩu phải trùng nhau!";
                    }
                } else {
                    $thongbao = "Mật khẩu cũ không đúng!";
                }
            }
            include "view/taikhoan/doimk.php";
            break;







        //CASE QUÊN MẬT KHẨU
        case 'quenmk':
            if (isset($_POST['quenmk']) && $_POST['quenmk']) {
                $email = $_POST['email'];

                //Kiểm tra trong hệ thống có tồn tại email hay không, nếu có thì lấy mật khẩu từ email đó

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['password'];
                } else {
                    $thongbao = "Email bạn vừa nhập không tồn tại trong hệ thống!";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;






        //CASE ĐĂNG XUẤT
        case 'dangxuat':
            session_unset();
            header('Location: index.php?act=index.php');
            break;







        //CASE SẢN PHẨM CHI TIẾT
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {

                $id = $_GET['idsp'];
                $view = $_GET['view'];
                $view += 1;
                update_sanpham_view($id, $view);
                $ctsp = loadOne_sanpham($id);
                extract($ctsp);
                $spcungloai = load_sanpham_cungloai($id, $iddanhmuc);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;








        //CASE SẢN PHẨM
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }

            $dmsp = loadAll_sanpham($kyw, $iddm);
            $tendm = load_tendm($iddm);
            include "view/sanpham.php";

            break;


        //CASE THÊM GIỎ HÀNG
        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                if (isset($_SESSION['user'])) {
                    $idsp = $_POST['idsp'];
                    $tensanpham = $_POST['tensanpham'];
                    $price = $_POST['price'];
                    $image = $_POST['image'];
                    $soluong = $_POST['soluong'];
                    $iduser = $_POST['iduser'];


                    $giohangcheck = loadOne_giohang($iduser);
                    $check = 0;
                    // $i = 0;

                    foreach ($giohangcheck as $key => $value) {
                        if ($idsp == $value['idsp']) {
                            $newsl = $soluong + $value['soluong'];
                            $newtt = $newsl * $price;
                            update_giohang_sl($idsp, $newsl, $newtt);
                            $check = 1;
                            break;
                        }
                        // $i++;
                    }


                    if ($check == 0) {
                        $thanhtien = $soluong * $price;
                        insert_giohang($idsp, $tensanpham, $image, $price, $soluong, $thanhtien, $iduser);
                    }

                    // $check = 0;
                    // $i = 0;


                    // foreach ($giohang as $key => $value) {
                    //     if ($value['tensanpham'] == $tensanpham) {
                    //         $newsl = $item[4] + $soluong;
                    //         $newtt = $newsl * $price;
                    //         $_SESSION['mycart'][$i][4] = $newsl;
                    //         $check = 1;
                    //         break;
                    //     }
                    //     $i++;
                    // }

                    // if ($check == 0) {
                    //     $thanhtien = $soluong * $price;
                    // }
                }
            }
            $giohang = loadOne_giohang($iduser);
            include "view/giohang/giohang.php";
            break;







        //CASE XÓA GIỎ HÀNG 
        case 'xoaspcart':
            if (isset($_GET['idcart'])) {
                $id = $_GET['idcart'];
                delete_giohang($id);
            }
            header('Location: index.php?act=viewcart');
            break;






        //CASE GIỎ HÀNG
        case 'viewcart':
            if (isset($_SESSION['user'])) {
                $iduser = $_SESSION['user']['id'];
                $giohang = loadOne_giohang($iduser);
            }
            include "view/giohang/giohang.php";
            break;






        //CASE THANH TOÁN
        case 'thanhtoan':
            if (isset($_POST['dathang']) && $_POST['dathang']) {
                $iduser = $_POST['iduser'];
                $giohangcheck = loadOne_giohang($iduser);

                var_dump($giohangcheck);
                die;

                foreach ($giohangcheck as $key => $value) {
                    $id = $_POST['id'];
                    $idsp = $_POST['idsp'];
                    $soluong = $_POST['soluong'];
                    $price = $_POST['price'];
                    $thanhtien = $soluong * $price;
                    update_giohang_sl($idsp, $soluong, $thanhtien);
                }

                $giohang = loadOne_giohang($iduser);

                $arrMgg = loadAll_magiamgia();
                echo '<script>';
                echo 'const jsArrMgg = ' . json_encode($arrMgg) . ';';
                echo '</script>';
            }



            include "view/giohang/dathang.php";
            break;



        case 'ttthanhcong':
            if (isset($_POST['datmua']) && $_POST['datmua']) {
                $idsp = $_POST['idsp'];
                $madonhang = "PMD".rand(1,99999);
                $tensanpham = $_POST['tensanpham'];
                $price = $_POST['price'];
                $image = $_POST['image'];
                $soluong = $_POST['soluong'];
                $iduser = $_POST['iduser'];
                $thanhtien = $_POST['thanhtien'];
                $tong = $_POST['tong'];

                $hoten = $_POST['hoten'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $ghichu = $_POST['ghichu'];

                $trangthai = 1;

                $ngaydat = date('h:i:sa d/m/Y');

                insert_donhang($madonhang, $iduser, $hoten, $phone, $address, $ghichu, $idsp, $tensanpham, $price, $image, $soluong, $thanhtien, $tong, $trangthai, $ngaydat);

                delete_giohang_tc($iduser);

            }
            include "view/giohang/ttthanhcong.php";

            break;




        //CASE ĐƠN HÀNG
        case 'donhang':
            include "view/taikhoan/donhang.php";
            break;



        //DEFAULT
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>