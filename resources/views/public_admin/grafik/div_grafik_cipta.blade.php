<script type="text/javascript">
    // Create the chart
Highcharts.chart('div_grafik_cipta', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah Pendaftaran Cipta Per Hari'
    },
    subtitle: {
        text: 'Jumlah Pendaftaran'
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
            text: 'Total Permohonan'
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
            name: "Jumlah Permohonan",
            colorByPoint: true,
            data: [
                 @foreach($grafik as $grafik)
                    {
                        name: "<?= date('d-M-Y', strtotime($grafik->tanggal)); ?>",
                        y: <?php echo $grafik->jumlah ?>
                    }, 
                @endforeach
            ]
        }
    ] 
});
     
</script> 
