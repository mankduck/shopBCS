<div class="container content-admin">
    <div class="row mb10 mt">
        <a href="index.php?act=thongke">
            <input type="button" value="Về trang thống kê">
        </a>
        <a href="index.php?act=bieudodhngay">
            <input type="button" value="Đơn hàng theo ngày">
        </a>

    </div>
    <div class="row">
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <div id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div>

        <script>
            google.charts.load('current', { 'packages': ['corechart'] });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Contry', 'Mhl'],
                    <?php
                        $tongdh = count($listthongkedh);
                        foreach ($listthongkedh as $tkdh) {
                            extract($tkdh);
                            $i = 1;
                            if($i == $tongdh){
                                 $dau = "";
                            }else{
                                $dau = ",";
                            }
                            echo "  ['".$tkdh['thang']."',".$tkdh['tongdon']."]" . $dau;
                            $i++;
                        }
                    ?>

                ]);

                // Set Options
                const options = {
                    title: 'Thống kê đơn hàng theo tháng'
                };

                // Draw
                const chart = new google.visualization.BarChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>
    </div>
</div>