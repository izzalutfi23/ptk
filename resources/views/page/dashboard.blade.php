@extends('../layout/main')
@section('title', 'Home | Aplikasi Data PTK')
@section('container')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Dashboard
                        <div class="page-title-subheading">Aplikasi Data PTK.
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Sekolah</div>
                            <div class="widget-subheading">Jumlah sekolah negeri dan swasta</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{$totalsekolah}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Pendidik</div>
                            <div class="widget-subheading">Jumlah seluruh tenaga pendidik</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{$totalpendidik}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-premium-dark">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Products Sold</div>
                            <div class="widget-subheading">Revenue streams</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Grafik Jumlah Sekolah
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <canvas id="chart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Grafik Status Kepegawaian
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <canvas id="chart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                &copy 2019 E-data PTK
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer -->

</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script>

<!-- Chart 1 -->
<script type="text/javascript">
    var ctx = document.getElementById("chart1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["TK", "SD", "SMP", "SMA"],
            datasets: [{
                label: 'Negeri',
                data: [{{$tkn}}, {{$sdn}}, {{$smpn}}, {{$sman}}],
                fill: true,
                borderColor: '#DA2029',
                borderWidth: 1
            },
            {
                label: 'Swasta',
                data: [{{$tks}}, {{$sds}}, {{$smps}}, {{$smas}}],
                fill: true,
                borderColor: '#D2D02C',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                    }
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

<!-- Chart 2 -->
<script type="text/javascript">
    var ctx = document.getElementById("chart2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["GTY", "GTT", "PNS", "PTT", "PTY"],
            datasets: [{
                label: 'Status Kepegawaian',
                data: [{{$gty}}, {{$gtt}}, {{$pns}}, {{$ptt}}, {{$pty}}],
                backgroundColor: [
                "#f64b3c",
                "#ffa41b",
                "#ff5151",
                "#065535",
                "#9818d6"
                ],
                borderColor: '#FFF',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
            tooltips: {
               enabled: false
           },
           plugins: {
               datalabels: {
                 formatter: (value, ctx) => {
                   let datasets = ctx.chart.data.datasets;
                   if (datasets.indexOf(ctx.dataset) === datasets.length - 1) {
                     let sum = datasets[0].data.reduce((a, b) => a + b, 0);
                     let percentage = Math.round((value / sum) * 100) + '%';
                     return percentage;
                 } else {
                     return percentage;
                 }
             },
             color: '#fff',
         }
     }
 }
});
</script>
@endsection()