(function ($) {

    'use strict';

    $(document).ready(function () {

        window.Echo.channel('penjualan').listen('PenjualanEvent', function (e) {
            console.log(e.penjualan);

            //============================== Penjualan Hari ================================================//

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
                        JSON.parse(e.penjualan.hari['sepatu']['1']),
                        JSON.parse(e.penjualan.hari['sepatu']['2']),
                        JSON.parse(e.penjualan.hari['sepatu']['3']),
                        JSON.parse(e.penjualan.hari['sepatu']['4']),
                        JSON.parse(e.penjualan.hari['sepatu']['5']),
                        JSON.parse(e.penjualan.hari['sepatu']['6']),
                        JSON.parse(e.penjualan.hari['sepatu']['7']),
                        JSON.parse(e.penjualan.hari['sepatu']['8']),
                        JSON.parse(e.penjualan.hari['sepatu']['9']),
                        JSON.parse(e.penjualan.hari['sepatu']['10']),
                        JSON.parse(e.penjualan.hari['sepatu']['11']),
                        JSON.parse(e.penjualan.hari['sepatu']['12']),
                        JSON.parse(e.penjualan.hari['sepatu']['13']),
                        JSON.parse(e.penjualan.hari['sepatu']['14']),
                        JSON.parse(e.penjualan.hari['sepatu']['15']),
                        JSON.parse(e.penjualan.hari['sepatu']['16']),
                        JSON.parse(e.penjualan.hari['sepatu']['17']),
                        JSON.parse(e.penjualan.hari['sepatu']['18']),
                        JSON.parse(e.penjualan.hari['sepatu']['19']),
                        JSON.parse(e.penjualan.hari['sepatu']['20']),
                        JSON.parse(e.penjualan.hari['sepatu']['21']),
                        JSON.parse(e.penjualan.hari['sepatu']['22']),
                        JSON.parse(e.penjualan.hari['sepatu']['23']),
                        JSON.parse(e.penjualan.hari['sepatu']['24']),
                        JSON.parse(e.penjualan.hari['sepatu']['25']),
                        JSON.parse(e.penjualan.hari['sepatu']['26']),
                        JSON.parse(e.penjualan.hari['sepatu']['27']),
                        JSON.parse(e.penjualan.hari['sepatu']['28']),
                        JSON.parse(e.penjualan.hari['sepatu']['29']),
                        JSON.parse(e.penjualan.hari['sepatu']['30']),
                        JSON.parse(e.penjualan.hari['sepatu']['31'])
                    ]
                }, {
                    name: 'Baju',
                    data: [
                        JSON.parse(e.penjualan.hari['baju']['1']),
                        JSON.parse(e.penjualan.hari['baju']['2']),
                        JSON.parse(e.penjualan.hari['baju']['3']),
                        JSON.parse(e.penjualan.hari['baju']['4']),
                        JSON.parse(e.penjualan.hari['baju']['5']),
                        JSON.parse(e.penjualan.hari['baju']['6']),
                        JSON.parse(e.penjualan.hari['baju']['7']),
                        JSON.parse(e.penjualan.hari['baju']['8']),
                        JSON.parse(e.penjualan.hari['baju']['9']),
                        JSON.parse(e.penjualan.hari['baju']['10']),
                        JSON.parse(e.penjualan.hari['baju']['11']),
                        JSON.parse(e.penjualan.hari['baju']['12']),
                        JSON.parse(e.penjualan.hari['baju']['13']),
                        JSON.parse(e.penjualan.hari['baju']['14']),
                        JSON.parse(e.penjualan.hari['baju']['15']),
                        JSON.parse(e.penjualan.hari['baju']['16']),
                        JSON.parse(e.penjualan.hari['baju']['17']),
                        JSON.parse(e.penjualan.hari['baju']['18']),
                        JSON.parse(e.penjualan.hari['baju']['19']),
                        JSON.parse(e.penjualan.hari['baju']['20']),
                        JSON.parse(e.penjualan.hari['baju']['21']),
                        JSON.parse(e.penjualan.hari['baju']['22']),
                        JSON.parse(e.penjualan.hari['baju']['23']),
                        JSON.parse(e.penjualan.hari['baju']['24']),
                        JSON.parse(e.penjualan.hari['baju']['25']),
                        JSON.parse(e.penjualan.hari['baju']['26']),
                        JSON.parse(e.penjualan.hari['baju']['27']),
                        JSON.parse(e.penjualan.hari['baju']['28']),
                        JSON.parse(e.penjualan.hari['baju']['29']),
                        JSON.parse(e.penjualan.hari['baju']['30']),
                        JSON.parse(e.penjualan.hari['baju']['31'])
                    ]
                }, {
                    name: 'Celana',
                    data: [
                        JSON.parse(e.penjualan.hari['celana']['1']),
                        JSON.parse(e.penjualan.hari['celana']['2']),
                        JSON.parse(e.penjualan.hari['celana']['3']),
                        JSON.parse(e.penjualan.hari['celana']['4']),
                        JSON.parse(e.penjualan.hari['celana']['5']),
                        JSON.parse(e.penjualan.hari['celana']['6']),
                        JSON.parse(e.penjualan.hari['celana']['7']),
                        JSON.parse(e.penjualan.hari['celana']['8']),
                        JSON.parse(e.penjualan.hari['celana']['9']),
                        JSON.parse(e.penjualan.hari['celana']['10']),
                        JSON.parse(e.penjualan.hari['celana']['11']),
                        JSON.parse(e.penjualan.hari['celana']['12']),
                        JSON.parse(e.penjualan.hari['celana']['13']),
                        JSON.parse(e.penjualan.hari['celana']['14']),
                        JSON.parse(e.penjualan.hari['celana']['15']),
                        JSON.parse(e.penjualan.hari['celana']['16']),
                        JSON.parse(e.penjualan.hari['celana']['17']),
                        JSON.parse(e.penjualan.hari['celana']['18']),
                        JSON.parse(e.penjualan.hari['celana']['19']),
                        JSON.parse(e.penjualan.hari['celana']['20']),
                        JSON.parse(e.penjualan.hari['celana']['21']),
                        JSON.parse(e.penjualan.hari['celana']['22']),
                        JSON.parse(e.penjualan.hari['celana']['23']),
                        JSON.parse(e.penjualan.hari['celana']['24']),
                        JSON.parse(e.penjualan.hari['celana']['25']),
                        JSON.parse(e.penjualan.hari['celana']['26']),
                        JSON.parse(e.penjualan.hari['celana']['27']),
                        JSON.parse(e.penjualan.hari['celana']['28']),
                        JSON.parse(e.penjualan.hari['celana']['29']),
                        JSON.parse(e.penjualan.hari['celana']['30']),
                        JSON.parse(e.penjualan.hari['celana']['31'])
                    ]
                }, {
                    name: 'Aksesoris',
                    data: [
                        JSON.parse(e.penjualan.hari['aksesoris']['1']),
                        JSON.parse(e.penjualan.hari['aksesoris']['2']),
                        JSON.parse(e.penjualan.hari['aksesoris']['3']),
                        JSON.parse(e.penjualan.hari['aksesoris']['4']),
                        JSON.parse(e.penjualan.hari['aksesoris']['5']),
                        JSON.parse(e.penjualan.hari['aksesoris']['6']),
                        JSON.parse(e.penjualan.hari['aksesoris']['7']),
                        JSON.parse(e.penjualan.hari['aksesoris']['8']),
                        JSON.parse(e.penjualan.hari['aksesoris']['9']),
                        JSON.parse(e.penjualan.hari['aksesoris']['10']),
                        JSON.parse(e.penjualan.hari['aksesoris']['11']),
                        JSON.parse(e.penjualan.hari['aksesoris']['12']),
                        JSON.parse(e.penjualan.hari['aksesoris']['13']),
                        JSON.parse(e.penjualan.hari['aksesoris']['14']),
                        JSON.parse(e.penjualan.hari['aksesoris']['15']),
                        JSON.parse(e.penjualan.hari['aksesoris']['16']),
                        JSON.parse(e.penjualan.hari['aksesoris']['17']),
                        JSON.parse(e.penjualan.hari['aksesoris']['18']),
                        JSON.parse(e.penjualan.hari['aksesoris']['19']),
                        JSON.parse(e.penjualan.hari['aksesoris']['20']),
                        JSON.parse(e.penjualan.hari['aksesoris']['21']),
                        JSON.parse(e.penjualan.hari['aksesoris']['22']),
                        JSON.parse(e.penjualan.hari['aksesoris']['23']),
                        JSON.parse(e.penjualan.hari['aksesoris']['24']),
                        JSON.parse(e.penjualan.hari['aksesoris']['25']),
                        JSON.parse(e.penjualan.hari['aksesoris']['26']),
                        JSON.parse(e.penjualan.hari['aksesoris']['27']),
                        JSON.parse(e.penjualan.hari['aksesoris']['28']),
                        JSON.parse(e.penjualan.hari['aksesoris']['29']),
                        JSON.parse(e.penjualan.hari['aksesoris']['30']),
                        JSON.parse(e.penjualan.hari['aksesoris']['31'])
                    ]
                }],
                colors: [
                    $.Pages.getColor('warning'),
                    $.Pages.getColor('danger'),
                    $.Pages.getColor('master-light'),
                    $.Pages.getColor('master')
                ]
            });

            //=============================================================================

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
                        JSON.parse(e.penjualan.hari['sepatu']['1']),
                        JSON.parse(e.penjualan.hari['sepatu']['2']),
                        JSON.parse(e.penjualan.hari['sepatu']['3']),
                        JSON.parse(e.penjualan.hari['sepatu']['4']),
                        JSON.parse(e.penjualan.hari['sepatu']['5']),
                        JSON.parse(e.penjualan.hari['sepatu']['6']),
                        JSON.parse(e.penjualan.hari['sepatu']['7']),
                        JSON.parse(e.penjualan.hari['sepatu']['8']),
                        JSON.parse(e.penjualan.hari['sepatu']['9']),
                        JSON.parse(e.penjualan.hari['sepatu']['10']),
                        JSON.parse(e.penjualan.hari['sepatu']['11']),
                        JSON.parse(e.penjualan.hari['sepatu']['12']),
                        JSON.parse(e.penjualan.hari['sepatu']['13']),
                        JSON.parse(e.penjualan.hari['sepatu']['14']),
                        JSON.parse(e.penjualan.hari['sepatu']['15']),
                        JSON.parse(e.penjualan.hari['sepatu']['16']),
                        JSON.parse(e.penjualan.hari['sepatu']['17']),
                        JSON.parse(e.penjualan.hari['sepatu']['18']),
                        JSON.parse(e.penjualan.hari['sepatu']['19']),
                        JSON.parse(e.penjualan.hari['sepatu']['20']),
                        JSON.parse(e.penjualan.hari['sepatu']['21']),
                        JSON.parse(e.penjualan.hari['sepatu']['22']),
                        JSON.parse(e.penjualan.hari['sepatu']['23']),
                        JSON.parse(e.penjualan.hari['sepatu']['24']),
                        JSON.parse(e.penjualan.hari['sepatu']['25']),
                        JSON.parse(e.penjualan.hari['sepatu']['26']),
                        JSON.parse(e.penjualan.hari['sepatu']['27']),
                        JSON.parse(e.penjualan.hari['sepatu']['28']),
                        JSON.parse(e.penjualan.hari['sepatu']['29']),
                        JSON.parse(e.penjualan.hari['sepatu']['30']),
                        JSON.parse(e.penjualan.hari['sepatu']['31'])
                    ]
                }, {
                    name: 'Baju',
                    data: [
                        JSON.parse(e.penjualan.hari['baju']['1']),
                        JSON.parse(e.penjualan.hari['baju']['2']),
                        JSON.parse(e.penjualan.hari['baju']['3']),
                        JSON.parse(e.penjualan.hari['baju']['4']),
                        JSON.parse(e.penjualan.hari['baju']['5']),
                        JSON.parse(e.penjualan.hari['baju']['6']),
                        JSON.parse(e.penjualan.hari['baju']['7']),
                        JSON.parse(e.penjualan.hari['baju']['8']),
                        JSON.parse(e.penjualan.hari['baju']['9']),
                        JSON.parse(e.penjualan.hari['baju']['10']),
                        JSON.parse(e.penjualan.hari['baju']['11']),
                        JSON.parse(e.penjualan.hari['baju']['12']),
                        JSON.parse(e.penjualan.hari['baju']['13']),
                        JSON.parse(e.penjualan.hari['baju']['14']),
                        JSON.parse(e.penjualan.hari['baju']['15']),
                        JSON.parse(e.penjualan.hari['baju']['16']),
                        JSON.parse(e.penjualan.hari['baju']['17']),
                        JSON.parse(e.penjualan.hari['baju']['18']),
                        JSON.parse(e.penjualan.hari['baju']['19']),
                        JSON.parse(e.penjualan.hari['baju']['20']),
                        JSON.parse(e.penjualan.hari['baju']['21']),
                        JSON.parse(e.penjualan.hari['baju']['22']),
                        JSON.parse(e.penjualan.hari['baju']['23']),
                        JSON.parse(e.penjualan.hari['baju']['24']),
                        JSON.parse(e.penjualan.hari['baju']['25']),
                        JSON.parse(e.penjualan.hari['baju']['26']),
                        JSON.parse(e.penjualan.hari['baju']['27']),
                        JSON.parse(e.penjualan.hari['baju']['28']),
                        JSON.parse(e.penjualan.hari['baju']['29']),
                        JSON.parse(e.penjualan.hari['baju']['30']),
                        JSON.parse(e.penjualan.hari['baju']['31'])
                    ]
                }, {
                    name: 'Celana',
                    data: [
                        JSON.parse(e.penjualan.hari['celana']['1']),
                        JSON.parse(e.penjualan.hari['celana']['2']),
                        JSON.parse(e.penjualan.hari['celana']['3']),
                        JSON.parse(e.penjualan.hari['celana']['4']),
                        JSON.parse(e.penjualan.hari['celana']['5']),
                        JSON.parse(e.penjualan.hari['celana']['6']),
                        JSON.parse(e.penjualan.hari['celana']['7']),
                        JSON.parse(e.penjualan.hari['celana']['8']),
                        JSON.parse(e.penjualan.hari['celana']['9']),
                        JSON.parse(e.penjualan.hari['celana']['10']),
                        JSON.parse(e.penjualan.hari['celana']['11']),
                        JSON.parse(e.penjualan.hari['celana']['12']),
                        JSON.parse(e.penjualan.hari['celana']['13']),
                        JSON.parse(e.penjualan.hari['celana']['14']),
                        JSON.parse(e.penjualan.hari['celana']['15']),
                        JSON.parse(e.penjualan.hari['celana']['16']),
                        JSON.parse(e.penjualan.hari['celana']['17']),
                        JSON.parse(e.penjualan.hari['celana']['18']),
                        JSON.parse(e.penjualan.hari['celana']['19']),
                        JSON.parse(e.penjualan.hari['celana']['20']),
                        JSON.parse(e.penjualan.hari['celana']['21']),
                        JSON.parse(e.penjualan.hari['celana']['22']),
                        JSON.parse(e.penjualan.hari['celana']['23']),
                        JSON.parse(e.penjualan.hari['celana']['24']),
                        JSON.parse(e.penjualan.hari['celana']['25']),
                        JSON.parse(e.penjualan.hari['celana']['26']),
                        JSON.parse(e.penjualan.hari['celana']['27']),
                        JSON.parse(e.penjualan.hari['celana']['28']),
                        JSON.parse(e.penjualan.hari['celana']['29']),
                        JSON.parse(e.penjualan.hari['celana']['30']),
                        JSON.parse(e.penjualan.hari['celana']['31'])
                    ]
                }, {
                    name: 'Aksesoris',
                    data: [
                        JSON.parse(e.penjualan.hari['aksesoris']['1']),
                        JSON.parse(e.penjualan.hari['aksesoris']['2']),
                        JSON.parse(e.penjualan.hari['aksesoris']['3']),
                        JSON.parse(e.penjualan.hari['aksesoris']['4']),
                        JSON.parse(e.penjualan.hari['aksesoris']['5']),
                        JSON.parse(e.penjualan.hari['aksesoris']['6']),
                        JSON.parse(e.penjualan.hari['aksesoris']['7']),
                        JSON.parse(e.penjualan.hari['aksesoris']['8']),
                        JSON.parse(e.penjualan.hari['aksesoris']['9']),
                        JSON.parse(e.penjualan.hari['aksesoris']['10']),
                        JSON.parse(e.penjualan.hari['aksesoris']['11']),
                        JSON.parse(e.penjualan.hari['aksesoris']['12']),
                        JSON.parse(e.penjualan.hari['aksesoris']['13']),
                        JSON.parse(e.penjualan.hari['aksesoris']['14']),
                        JSON.parse(e.penjualan.hari['aksesoris']['15']),
                        JSON.parse(e.penjualan.hari['aksesoris']['16']),
                        JSON.parse(e.penjualan.hari['aksesoris']['17']),
                        JSON.parse(e.penjualan.hari['aksesoris']['18']),
                        JSON.parse(e.penjualan.hari['aksesoris']['19']),
                        JSON.parse(e.penjualan.hari['aksesoris']['20']),
                        JSON.parse(e.penjualan.hari['aksesoris']['21']),
                        JSON.parse(e.penjualan.hari['aksesoris']['22']),
                        JSON.parse(e.penjualan.hari['aksesoris']['23']),
                        JSON.parse(e.penjualan.hari['aksesoris']['24']),
                        JSON.parse(e.penjualan.hari['aksesoris']['25']),
                        JSON.parse(e.penjualan.hari['aksesoris']['26']),
                        JSON.parse(e.penjualan.hari['aksesoris']['27']),
                        JSON.parse(e.penjualan.hari['aksesoris']['28']),
                        JSON.parse(e.penjualan.hari['aksesoris']['29']),
                        JSON.parse(e.penjualan.hari['aksesoris']['30']),
                        JSON.parse(e.penjualan.hari['aksesoris']['31'])
                    ]
                }],
                colors: [
                    $.Pages.getColor('warning'),
                    $.Pages.getColor('danger'),
                    $.Pages.getColor('master-light'),
                    $.Pages.getColor('master')
                ]
            });

            //==============================================================================================//



            //============================== Penjualan Bulan ===============================================//

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
                        JSON.parse(e.penjualan.bulan['sepatu']['1']),
                        JSON.parse(e.penjualan.bulan['sepatu']['2']),
                        JSON.parse(e.penjualan.bulan['sepatu']['3']),
                        JSON.parse(e.penjualan.bulan['sepatu']['4']),
                        JSON.parse(e.penjualan.bulan['sepatu']['5']),
                        JSON.parse(e.penjualan.bulan['sepatu']['6']),
                        JSON.parse(e.penjualan.bulan['sepatu']['7']),
                        JSON.parse(e.penjualan.bulan['sepatu']['8']),
                        JSON.parse(e.penjualan.bulan['sepatu']['9']),
                        JSON.parse(e.penjualan.bulan['sepatu']['10']),
                        JSON.parse(e.penjualan.bulan['sepatu']['11']),
                        JSON.parse(e.penjualan.bulan['sepatu']['12'])
                    ]
                }, {
                    name: 'Baju',
                    data: [
                        JSON.parse(e.penjualan.bulan['baju']['1']),
                        JSON.parse(e.penjualan.bulan['baju']['2']),
                        JSON.parse(e.penjualan.bulan['baju']['3']),
                        JSON.parse(e.penjualan.bulan['baju']['4']),
                        JSON.parse(e.penjualan.bulan['baju']['5']),
                        JSON.parse(e.penjualan.bulan['baju']['6']),
                        JSON.parse(e.penjualan.bulan['baju']['7']),
                        JSON.parse(e.penjualan.bulan['baju']['8']),
                        JSON.parse(e.penjualan.bulan['baju']['9']),
                        JSON.parse(e.penjualan.bulan['baju']['10']),
                        JSON.parse(e.penjualan.bulan['baju']['11']),
                        JSON.parse(e.penjualan.bulan['baju']['12'])
                    ]
                }, {
                    name: 'Celana',
                    data: [
                        JSON.parse(e.penjualan.bulan['celana']['1']),
                        JSON.parse(e.penjualan.bulan['celana']['2']),
                        JSON.parse(e.penjualan.bulan['celana']['3']),
                        JSON.parse(e.penjualan.bulan['celana']['4']),
                        JSON.parse(e.penjualan.bulan['celana']['5']),
                        JSON.parse(e.penjualan.bulan['celana']['6']),
                        JSON.parse(e.penjualan.bulan['celana']['7']),
                        JSON.parse(e.penjualan.bulan['celana']['8']),
                        JSON.parse(e.penjualan.bulan['celana']['9']),
                        JSON.parse(e.penjualan.bulan['celana']['10']),
                        JSON.parse(e.penjualan.bulan['celana']['11']),
                        JSON.parse(e.penjualan.bulan['celana']['12'])
                    ]
                }, {
                    name: 'Aksesoris',
                    data: [
                        JSON.parse(e.penjualan.bulan['aksesoris']['1']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['2']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['3']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['4']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['5']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['6']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['7']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['8']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['9']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['10']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['11']),
                        JSON.parse(e.penjualan.bulan['aksesoris']['12'])
                    ]
                }],
                colors: [
                    $.Pages.getColor('warning'),
                    $.Pages.getColor('danger'),
                    $.Pages.getColor('master-light'),
                    $.Pages.getColor('master')
                ]
            });

            //==============================================================================================//



            //============================== Penjualan Tahun ================================================//

            var hasil = function () {
                $("#sparkline-pie").sparkline([e.penjualan.tahun.sepatu, e.penjualan.tahun.baju, e.penjualan.tahun.celana, e.penjualan.tahun.aksesoris], {
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
            hasil();

            //==========================================================

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
                        y: JSON.parse(e.penjualan.tahun.sepatu)
                    }, {
                        name: 'Baju',
                        color: $.Pages.getColor('danger'),
                        y: JSON.parse(e.penjualan.tahun.baju)
                    }, {
                        name: 'Celana',
                        color: $.Pages.getColor('master-light'),
                        y: JSON.parse(e.penjualan.tahun.celana)
                    }, {
                        name: 'Aksesori',
                        color: $.Pages.getColor('master'),
                        y: JSON.parse(e.penjualan.tahun.aksesoris)
                    }]
                }]
            });

            //==========================================================

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
                        ['Sepatu', JSON.parse(e.penjualan.tahun.sepatu)],
                        ['Baju', JSON.parse(e.penjualan.tahun.baju)],
                        ['Celana', JSON.parse(e.penjualan.tahun.celana)],
                        ['Aksesoris', JSON.parse(e.penjualan.tahun.aksesoris)],
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

            //===============================================================================================//

        });

    });
})(window.jQuery);
