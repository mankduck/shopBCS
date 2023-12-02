<div class="container content-admin">
<div class="row mb10 mt">
                <a href="index.php?act=thongke">
                    <input type="button" value="Về trang thống kê">
                </a>
                <a href="index.php?act=bieudo">
                    <input type="button" value="Thống kê sản phẩm theo danh mục">
                </a>
            </div>
    <div class="row">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
<div
id="myChart" style="width:100%; max-width:1500px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Sản phẩm', 'Số lượng sản phẩm'],
  <?php
    $tongdm = count($listthongkespbc);
    foreach ($listthongkespbc as $tk) {
        extract($tk);
        $i = 1;
        if($i == $tongdm){
             $dau = "";
        }else{
            $dau = ",";
        }
        echo "  ['".$tk['tensanpham']."',".$tk['tongsoluong']."]" . $dau;
        $i++;
    }
  ?>
]);

// Set Options
const options = {
  title:'Thống kê sản phẩm bán chạy',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>
    </div>
</div>