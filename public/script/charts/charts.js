/* ============================================================
 * Charts
 * This files shows how Pages uses Rickshaw, NVD3 and Sparkline
 * to render charts
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */

(function ($) {

    'use strict';

    /* ============================================================
     * Rickshaw Charts
     * ============================================================ */

    $(document).ready(function () {

        /* ============================================================
         * Charts Penjualan
         * ============================================================ */

        // Renders a pie chart

        $.ajax({
            method: "get",
            url: "penjualan_hari",
            dataType: "json",
            success: function (data) {
                console.log(data);
                Highcharts.chart('container3', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Penjualan Barang per Hari'
                    },
                    xAxis: {
                        categories: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31']
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Penjualan per Hari'
                        }
                    },
                    tooltip: {
                        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
                        shared: true
                    },
                    plotOptions: {
                        column: {
                            stacking: 'percent'
                        }
                    },
                    series: [{
                        name: 'Sepatu',
                        data: [
                            JSON.parse(data['sepatu']['1']),
                            JSON.parse(data['sepatu']['2']),
                            JSON.parse(data['sepatu']['3']),
                            JSON.parse(data['sepatu']['4']),
                            JSON.parse(data['sepatu']['5']),
                            JSON.parse(data['sepatu']['6']),
                            JSON.parse(data['sepatu']['7']),
                            JSON.parse(data['sepatu']['8']),
                            JSON.parse(data['sepatu']['9']),
                            JSON.parse(data['sepatu']['10']),
                            JSON.parse(data['sepatu']['11']),
                            JSON.parse(data['sepatu']['12']),
                            JSON.parse(data['sepatu']['13']),
                            JSON.parse(data['sepatu']['14']),
                            JSON.parse(data['sepatu']['15']),
                            JSON.parse(data['sepatu']['16']),
                            JSON.parse(data['sepatu']['17']),
                            JSON.parse(data['sepatu']['18']),
                            JSON.parse(data['sepatu']['19']),
                            JSON.parse(data['sepatu']['20']),
                            JSON.parse(data['sepatu']['21']),
                            JSON.parse(data['sepatu']['22']),
                            JSON.parse(data['sepatu']['23']),
                            JSON.parse(data['sepatu']['24']),
                            JSON.parse(data['sepatu']['25']),
                            JSON.parse(data['sepatu']['26']),
                            JSON.parse(data['sepatu']['27']),
                            JSON.parse(data['sepatu']['28']),
                            JSON.parse(data['sepatu']['29']),
                            JSON.parse(data['sepatu']['30']),
                            JSON.parse(data['sepatu']['31'])
                        ]
                    }, {
                        name: 'Baju',
                        data: [
                            JSON.parse(data['baju']['1']),
                            JSON.parse(data['baju']['2']),
                            JSON.parse(data['baju']['3']),
                            JSON.parse(data['baju']['4']),
                            JSON.parse(data['baju']['5']),
                            JSON.parse(data['baju']['6']),
                            JSON.parse(data['baju']['7']),
                            JSON.parse(data['baju']['8']),
                            JSON.parse(data['baju']['9']),
                            JSON.parse(data['baju']['10']),
                            JSON.parse(data['baju']['11']),
                            JSON.parse(data['baju']['12']),
                            JSON.parse(data['baju']['13']),
                            JSON.parse(data['baju']['14']),
                            JSON.parse(data['baju']['15']),
                            JSON.parse(data['baju']['16']),
                            JSON.parse(data['baju']['17']),
                            JSON.parse(data['baju']['18']),
                            JSON.parse(data['baju']['19']),
                            JSON.parse(data['baju']['20']),
                            JSON.parse(data['baju']['21']),
                            JSON.parse(data['baju']['22']),
                            JSON.parse(data['baju']['23']),
                            JSON.parse(data['baju']['24']),
                            JSON.parse(data['baju']['25']),
                            JSON.parse(data['baju']['26']),
                            JSON.parse(data['baju']['27']),
                            JSON.parse(data['baju']['28']),
                            JSON.parse(data['baju']['29']),
                            JSON.parse(data['baju']['30']),
                            JSON.parse(data['baju']['31'])
                        ]
                    }, {
                        name: 'Celana',
                        data: [
                            JSON.parse(data['celana']['1']),
                            JSON.parse(data['celana']['2']),
                            JSON.parse(data['celana']['3']),
                            JSON.parse(data['celana']['4']),
                            JSON.parse(data['celana']['5']),
                            JSON.parse(data['celana']['6']),
                            JSON.parse(data['celana']['7']),
                            JSON.parse(data['celana']['8']),
                            JSON.parse(data['celana']['9']),
                            JSON.parse(data['celana']['10']),
                            JSON.parse(data['celana']['11']),
                            JSON.parse(data['celana']['12']),
                            JSON.parse(data['celana']['13']),
                            JSON.parse(data['celana']['14']),
                            JSON.parse(data['celana']['15']),
                            JSON.parse(data['celana']['16']),
                            JSON.parse(data['celana']['17']),
                            JSON.parse(data['celana']['18']),
                            JSON.parse(data['celana']['19']),
                            JSON.parse(data['celana']['20']),
                            JSON.parse(data['celana']['21']),
                            JSON.parse(data['celana']['22']),
                            JSON.parse(data['celana']['23']),
                            JSON.parse(data['celana']['24']),
                            JSON.parse(data['celana']['25']),
                            JSON.parse(data['celana']['26']),
                            JSON.parse(data['celana']['27']),
                            JSON.parse(data['celana']['28']),
                            JSON.parse(data['celana']['29']),
                            JSON.parse(data['celana']['30']),
                            JSON.parse(data['celana']['31'])
                        ]
                    }, {
                        name: 'Aksesoris',
                        data: [
                            JSON.parse(data['aksesoris']['1']),
                            JSON.parse(data['aksesoris']['2']),
                            JSON.parse(data['aksesoris']['3']),
                            JSON.parse(data['aksesoris']['4']),
                            JSON.parse(data['aksesoris']['5']),
                            JSON.parse(data['aksesoris']['6']),
                            JSON.parse(data['aksesoris']['7']),
                            JSON.parse(data['aksesoris']['8']),
                            JSON.parse(data['aksesoris']['9']),
                            JSON.parse(data['aksesoris']['10']),
                            JSON.parse(data['aksesoris']['11']),
                            JSON.parse(data['aksesoris']['12']),
                            JSON.parse(data['aksesoris']['13']),
                            JSON.parse(data['aksesoris']['14']),
                            JSON.parse(data['aksesoris']['15']),
                            JSON.parse(data['aksesoris']['16']),
                            JSON.parse(data['aksesoris']['17']),
                            JSON.parse(data['aksesoris']['18']),
                            JSON.parse(data['aksesoris']['19']),
                            JSON.parse(data['aksesoris']['20']),
                            JSON.parse(data['aksesoris']['21']),
                            JSON.parse(data['aksesoris']['22']),
                            JSON.parse(data['aksesoris']['23']),
                            JSON.parse(data['aksesoris']['24']),
                            JSON.parse(data['aksesoris']['25']),
                            JSON.parse(data['aksesoris']['26']),
                            JSON.parse(data['aksesoris']['27']),
                            JSON.parse(data['aksesoris']['28']),
                            JSON.parse(data['aksesoris']['29']),
                            JSON.parse(data['aksesoris']['30']),
                            JSON.parse(data['aksesoris']['31'])
                        ]
                    }],
                    colors: [
                        $.Pages.getColor('warning'),
                        $.Pages.getColor('danger'),
                        $.Pages.getColor('master-light'),
                        $.Pages.getColor('master')
                    ]
                });

                Highcharts.chart('container4', {
                    chart: {
                        type: 'line'
                    },
                    title: {
                        text: 'Penjualan Barang per Hari'
                    },
                    // subtitle: {
                    //     text: 'Source: WorldClimate.com'
                    // },
                    xAxis: {
                        categories: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31']
                    },
                    yAxis: {
                        title: {
                            text: 'Banyak Penjualan'
                        }
                    },
                    plotOptions: {
                        line: {
                            dataLabels: {
                                enabled: false
                            },
                            enableMouseTracking: true
                        }
                    },
                    series: [{
                        name: 'Sepatu',
                        data: [
                            JSON.parse(data['sepatu']['1']),
                            JSON.parse(data['sepatu']['2']),
                            JSON.parse(data['sepatu']['3']),
                            JSON.parse(data['sepatu']['4']),
                            JSON.parse(data['sepatu']['5']),
                            JSON.parse(data['sepatu']['6']),
                            JSON.parse(data['sepatu']['7']),
                            JSON.parse(data['sepatu']['8']),
                            JSON.parse(data['sepatu']['9']),
                            JSON.parse(data['sepatu']['10']),
                            JSON.parse(data['sepatu']['11']),
                            JSON.parse(data['sepatu']['12']),
                            JSON.parse(data['sepatu']['13']),
                            JSON.parse(data['sepatu']['14']),
                            JSON.parse(data['sepatu']['15']),
                            JSON.parse(data['sepatu']['16']),
                            JSON.parse(data['sepatu']['17']),
                            JSON.parse(data['sepatu']['18']),
                            JSON.parse(data['sepatu']['19']),
                            JSON.parse(data['sepatu']['20']),
                            JSON.parse(data['sepatu']['21']),
                            JSON.parse(data['sepatu']['22']),
                            JSON.parse(data['sepatu']['23']),
                            JSON.parse(data['sepatu']['24']),
                            JSON.parse(data['sepatu']['25']),
                            JSON.parse(data['sepatu']['26']),
                            JSON.parse(data['sepatu']['27']),
                            JSON.parse(data['sepatu']['28']),
                            JSON.parse(data['sepatu']['29']),
                            JSON.parse(data['sepatu']['30']),
                            JSON.parse(data['sepatu']['31'])
                        ]
                    }, {
                        name: 'Baju',
                        data: [
                            JSON.parse(data['baju']['1']),
                            JSON.parse(data['baju']['2']),
                            JSON.parse(data['baju']['3']),
                            JSON.parse(data['baju']['4']),
                            JSON.parse(data['baju']['5']),
                            JSON.parse(data['baju']['6']),
                            JSON.parse(data['baju']['7']),
                            JSON.parse(data['baju']['8']),
                            JSON.parse(data['baju']['9']),
                            JSON.parse(data['baju']['10']),
                            JSON.parse(data['baju']['11']),
                            JSON.parse(data['baju']['12']),
                            JSON.parse(data['baju']['13']),
                            JSON.parse(data['baju']['14']),
                            JSON.parse(data['baju']['15']),
                            JSON.parse(data['baju']['16']),
                            JSON.parse(data['baju']['17']),
                            JSON.parse(data['baju']['18']),
                            JSON.parse(data['baju']['19']),
                            JSON.parse(data['baju']['20']),
                            JSON.parse(data['baju']['21']),
                            JSON.parse(data['baju']['22']),
                            JSON.parse(data['baju']['23']),
                            JSON.parse(data['baju']['24']),
                            JSON.parse(data['baju']['25']),
                            JSON.parse(data['baju']['26']),
                            JSON.parse(data['baju']['27']),
                            JSON.parse(data['baju']['28']),
                            JSON.parse(data['baju']['29']),
                            JSON.parse(data['baju']['30']),
                            JSON.parse(data['baju']['31'])
                        ]
                    }, {
                        name: 'Celana',
                        data: [
                            JSON.parse(data['celana']['1']),
                            JSON.parse(data['celana']['2']),
                            JSON.parse(data['celana']['3']),
                            JSON.parse(data['celana']['4']),
                            JSON.parse(data['celana']['5']),
                            JSON.parse(data['celana']['6']),
                            JSON.parse(data['celana']['7']),
                            JSON.parse(data['celana']['8']),
                            JSON.parse(data['celana']['9']),
                            JSON.parse(data['celana']['10']),
                            JSON.parse(data['celana']['11']),
                            JSON.parse(data['celana']['12']),
                            JSON.parse(data['celana']['13']),
                            JSON.parse(data['celana']['14']),
                            JSON.parse(data['celana']['15']),
                            JSON.parse(data['celana']['16']),
                            JSON.parse(data['celana']['17']),
                            JSON.parse(data['celana']['18']),
                            JSON.parse(data['celana']['19']),
                            JSON.parse(data['celana']['20']),
                            JSON.parse(data['celana']['21']),
                            JSON.parse(data['celana']['22']),
                            JSON.parse(data['celana']['23']),
                            JSON.parse(data['celana']['24']),
                            JSON.parse(data['celana']['25']),
                            JSON.parse(data['celana']['26']),
                            JSON.parse(data['celana']['27']),
                            JSON.parse(data['celana']['28']),
                            JSON.parse(data['celana']['29']),
                            JSON.parse(data['celana']['30']),
                            JSON.parse(data['celana']['31'])
                        ]
                    }, {
                        name: 'Aksesoris',
                        data: [
                            JSON.parse(data['aksesoris']['1']),
                            JSON.parse(data['aksesoris']['2']),
                            JSON.parse(data['aksesoris']['3']),
                            JSON.parse(data['aksesoris']['4']),
                            JSON.parse(data['aksesoris']['5']),
                            JSON.parse(data['aksesoris']['6']),
                            JSON.parse(data['aksesoris']['7']),
                            JSON.parse(data['aksesoris']['8']),
                            JSON.parse(data['aksesoris']['9']),
                            JSON.parse(data['aksesoris']['10']),
                            JSON.parse(data['aksesoris']['11']),
                            JSON.parse(data['aksesoris']['12']),
                            JSON.parse(data['aksesoris']['13']),
                            JSON.parse(data['aksesoris']['14']),
                            JSON.parse(data['aksesoris']['15']),
                            JSON.parse(data['aksesoris']['16']),
                            JSON.parse(data['aksesoris']['17']),
                            JSON.parse(data['aksesoris']['18']),
                            JSON.parse(data['aksesoris']['19']),
                            JSON.parse(data['aksesoris']['20']),
                            JSON.parse(data['aksesoris']['21']),
                            JSON.parse(data['aksesoris']['22']),
                            JSON.parse(data['aksesoris']['23']),
                            JSON.parse(data['aksesoris']['24']),
                            JSON.parse(data['aksesoris']['25']),
                            JSON.parse(data['aksesoris']['26']),
                            JSON.parse(data['aksesoris']['27']),
                            JSON.parse(data['aksesoris']['28']),
                            JSON.parse(data['aksesoris']['29']),
                            JSON.parse(data['aksesoris']['30']),
                            JSON.parse(data['aksesoris']['31'])
                        ]
                    }],
                    colors: [
                        $.Pages.getColor('warning'),
                        $.Pages.getColor('danger'),
                        $.Pages.getColor('master-light'),
                        $.Pages.getColor('master')
                    ]
                });
            }
        });

        $.ajax({
            method: "get",
            url: "penjualan_bulan",
            dataType: "json",
            success: function (data) {
                // console.log(data);
                Highcharts.chart('container2', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Stacked column chart'
                    },
                    xAxis: {
                        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total fruit consumption'
                        }
                    },
                    tooltip: {
                        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
                        shared: true
                    },
                    plotOptions: {
                        column: {
                            stacking: 'percent'
                        }
                    },
                    series: [{
                        name: 'Sepatu',
                        data: [
                            JSON.parse(data['sepatu']['1']),
                            JSON.parse(data['sepatu']['2']),
                            JSON.parse(data['sepatu']['3']),
                            JSON.parse(data['sepatu']['4']),
                            JSON.parse(data['sepatu']['5']),
                            JSON.parse(data['sepatu']['6']),
                            JSON.parse(data['sepatu']['7']),
                            JSON.parse(data['sepatu']['8']),
                            JSON.parse(data['sepatu']['9']),
                            JSON.parse(data['sepatu']['10']),
                            JSON.parse(data['sepatu']['11']),
                            JSON.parse(data['sepatu']['12'])
                        ]
                    }, {
                        name: 'Baju',
                        data: [
                            JSON.parse(data['baju']['1']),
                            JSON.parse(data['baju']['2']),
                            JSON.parse(data['baju']['3']),
                            JSON.parse(data['baju']['4']),
                            JSON.parse(data['baju']['5']),
                            JSON.parse(data['baju']['6']),
                            JSON.parse(data['baju']['7']),
                            JSON.parse(data['baju']['8']),
                            JSON.parse(data['baju']['9']),
                            JSON.parse(data['baju']['10']),
                            JSON.parse(data['baju']['11']),
                            JSON.parse(data['baju']['12'])
                        ]
                    }, {
                        name: 'Celana',
                        data: [
                            JSON.parse(data['celana']['1']),
                            JSON.parse(data['celana']['2']),
                            JSON.parse(data['celana']['3']),
                            JSON.parse(data['celana']['4']),
                            JSON.parse(data['celana']['5']),
                            JSON.parse(data['celana']['6']),
                            JSON.parse(data['celana']['7']),
                            JSON.parse(data['celana']['8']),
                            JSON.parse(data['celana']['9']),
                            JSON.parse(data['celana']['10']),
                            JSON.parse(data['celana']['11']),
                            JSON.parse(data['celana']['12'])
                        ]
                    }, {
                        name: 'Aksesoris',
                        data: [
                            JSON.parse(data['aksesoris']['1']),
                            JSON.parse(data['aksesoris']['2']),
                            JSON.parse(data['aksesoris']['3']),
                            JSON.parse(data['aksesoris']['4']),
                            JSON.parse(data['aksesoris']['5']),
                            JSON.parse(data['aksesoris']['6']),
                            JSON.parse(data['aksesoris']['7']),
                            JSON.parse(data['aksesoris']['8']),
                            JSON.parse(data['aksesoris']['9']),
                            JSON.parse(data['aksesoris']['10']),
                            JSON.parse(data['aksesoris']['11']),
                            JSON.parse(data['aksesoris']['12'])
                        ]
                    }],
                    colors: [
                        $.Pages.getColor('warning'),
                        $.Pages.getColor('danger'),
                        $.Pages.getColor('master-light'),
                        $.Pages.getColor('master')
                    ]
                });
            }
        });

        $.ajax({
            method: "get",
            url: "penjualan_tahun",
            dataType: "json",
            success: function (data) {
                // console.log(data);
                var drawSparklinePie = function () {
                    $("#sparkline-pie").sparkline([data['sepatu'], data['baju'], data['celana'], data['aksesoris']], {
                        type: 'pie',
                        width: $("#sparkline-pie").width(),
                        height: '200',
                        sliceColors: [
                            $.Pages.getColor('warning'),
                            $.Pages.getColor('danger'),
                            $.Pages.getColor('master-light'),
                            $.Pages.getColor('master')
                        ]

                    });

                };
                drawSparklinePie();

                //======================================

                Highcharts.chart('container', {

                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Diagram penjualan barang tahun 2017'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Many Sales',
                        colorByPoint: true,
                        data: [{
                            name: 'Sepatu',
                            color: $.Pages.getColor('warning'),
                            y: JSON.parse(data['sepatu'])
                        }, {
                            name: 'Baju',
                            color: $.Pages.getColor('danger'),
                            y: JSON.parse(data['baju'])
                        }, {
                            name: 'Celana',
                            color: $.Pages.getColor('master-light'),
                            y: JSON.parse(data['celana'])
                        }, {
                            name: 'Aksesori',
                            color: $.Pages.getColor('master'),
                            y: JSON.parse(data['aksesoris'])
                        }]
                    }]
                });

                //========================================

                Highcharts.chart('container1', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: 0,
                        plotShadow: false
                    },
                    title: {
                        text: 'Penjualan<br>Barang<br>2017',
                        align: 'center',
                        verticalAlign: 'middle',
                        y: 40
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            dataLabels: {
                                enabled: true,
                                distance: -50,
                                style: {
                                    fontWeight: 'bold',
                                    color: 'white'
                                }
                            },
                            startAngle: -90,
                            endAngle: 90,
                            center: ['50%', '75%']
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'Penjualan Barang',
                        innerSize: '50%',
                        data: [
                            ['Sepatu', JSON.parse(data['sepatu'])],
                            ['Baju', JSON.parse(data['baju'])],
                            ['Celana', JSON.parse(data['celana'])],
                            ['Aksesoris', JSON.parse(data['aksesoris'])],
                            {
                                name: 'Proprietary or Undetectable',
                                y: 0.2,
                                dataLabels: {
                                    enabled: false
                                }
                            }
                        ],
                        colors: [
                            $.Pages.getColor('warning'),
                            $.Pages.getColor('danger'),
                            $.Pages.getColor('master-light'),
                            $.Pages.getColor('master')
                        ]
                    }]
                });
            }
        });

        $('#sub_purchase').click(function () {
            var barang = $('#barang_pur').val();
            var banyak = $('#banyak').val();
            $.ajax({
                method: "get",
                url: "sell",
                data: {barang: barang, banyak: banyak},
                dataType: 'json',
                success: function (data) {
                    console.log(data)
                }
            });
        });

    });
})(window.jQuery);