<script type="text/javascript">
    // Create the chart
Highcharts.chart('div_grafik_paten', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Pengunjung Perbulan'
    },
    subtitle: {
        text: 'Total Pengunjung'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Pengunjung'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> <br/>'
    },

    series: [
        {
            name: "Jumlah Pengunjung Perbulan",
            colorByPoint: true,
            data: [
                @php 
                $bulan = '';
                @endphp
                 @foreach($grafik as $grafik)
                    { 
                        @if ($grafik->bulan == 1)
                        @php $bulan = 'Januari'; @endphp
                        @endif 

                        @if ($grafik->bulan == 2)
                        @php $bulan = 'Februari'; @endphp
                        @endif 

                        @if ($grafik->bulan == 3)
                        @php $bulan = 'Maret'; @endphp
                        @endif 

                        @if ($grafik->bulan == 4)
                        @php $bulan = 'April'; @endphp
                        @endif 

                        @if ($grafik->bulan == 5)
                        @php $bulan = 'Mei'; @endphp
                        @endif 

                        @if ($grafik->bulan == 6)
                        @php $bulan = 'Juni'; @endphp
                        @endif 

                        @if ($grafik->bulan == 7)
                        @php $bulan = 'Juli'; @endphp
                        @endif 

                        @if ($grafik->bulan == 8)
                        @php $bulan = 'Agustus'; @endphp
                        @endif 
                        
                        @if ($grafik->bulan == 9)
                        @php $bulan = 'September'; @endphp
                        @endif 

                        @if ($grafik->bulan == 10)
                        @php $bulan = 'Oktober'; @endphp
                        @endif 
                        
                        @if ($grafik->bulan == 11)
                        @php $bulan = 'November'; @endphp
                        @endif 
                        
                        @if ($grafik->bulan == 12)
                        @php $bulan = 'Desember'; @endphp
                        @endif 


                        name: "<?= $bulan ?>",
                        y: <?php echo $grafik->jumlah ?>
                    }, 
                @endforeach
            ]
        }
    ] 
});
     
</script>
