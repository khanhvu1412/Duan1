<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Biểu đồ</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Biểu đồ</h4>
        </div>
        <div class="card-body">

            <div id="myChart" style="width:100%; max-width:900px; height:600px; ">
            </div>
            <div class="bieudo">
                <script>
                    google.charts.load('current', { 'packages': ['corechart'] });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        const data = google.visualization.arrayToDataTable([
                            ['Tên', 'Số liệu'],
                            ['Sản phẩm 1', 54.8],
                            ['Sản phẩm 2', 48.6],
                            ['Sản phẩm 3', 44.4],
                            ['Sản phẩm 4', 23.9],
                            ['Sản phẩm 5', 14.5]
                        ]);

                        const options = {
                            title: 'Biểu đồ thống kê'
                        };

                        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>


        </div>
    </div>

</div>
<!--End Content -->

</div>