<?php
session_start();
$idsp = $_REQUEST['idsp'];
include "../../model/pdo.php";
include "../../model/binhluan.php";


$dsbl = loadAll_binhluan($idsp);
// echo '<pre>';
// echo $idsp;
// print_r($dsbl);
// die();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="row mb">
        <div class="box-title">
            BÌNH LUẬN
        </div>
        <div class="row box-content4">
            <div class="box-bl">
                <?php
                if (isset($_SESSION['user']['user'])) { ?>
                            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <input type="text" name="noidung" id="" placeholder="Nhập bình luận của bạn...">
                            <input type="hidden" name="idsp" value="<?php echo $idsp; ?>">
                            <input type="hidden" name="iduser" value="<?php echo $_SESSION['user']['id']; ?>">
                            <input type="submit" value="Đăng" name="guibl">
                        </form>


                <?php } else { ?>
                    <h1>Đăng nhập để thực hiện chức năng bình luận!</h1>
                <?php } ?>
            </div>
            <div class="box-content4 box-ht-bl">
                <h1>Bình luận gần đây</h1>
                    <?php
                        if($dsbl != []){ ?>
                <table>
                    <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        $hinh = "../../upload/" . $image;
                        $err_hinh = "view/image/anhmacdinh.jpg";
                        if (is_file($hinh)) {
                            $image = "<img src='" . $hinh . "' width='150'>";
                        } else {
                            $image = "<img src='" . $err_hinh . "' width='150'>";
                        }
                        echo '
                            <tr>
                                <td>' . $image . '</td>
                                <td><h2>' . $user . ' :</h2></td>
                                <td><p>' . $noidung . '</p></td>
                                <td><p>' . $ngaybinhluan . '</p></td>
                            </tr>
                            ';
                    }
                    ?>
                </table>
                        <?php }else{
                            echo '<h1>Chưa có bình luận cho sản phẩm này</h1>';
                        }
                    ?>
            </div>
        </div>

        <?php
        if (isset($_POST['guibl']) && $_POST['guibl']) {
            $noidung = $_POST['noidung'];
            $idsp = $_POST['idsp'];
            $iduser = $_POST['iduser'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            
            insert_binhluan($noidung, $idsp, $iduser, $ngaybinhluan);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        ?>


    </div>
</body>

</html>