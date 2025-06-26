<script>
    // Pega os dados das contas
    const dataChartAccounts = {!! json_encode($chartAccounts) !!};
    const dataChartSales = {!! json_encode($chartSales) !!};

    $(function() {
        Highcharts.chart("chart-accounts", {
            chart: {
                type: "column"
            },
            title: {
                text: "Entrada x Saída - {{ getMonth($month) }}/{{ $year }}"
            },
            xAxis: {
                categories: ["{{ getMonth($month) }}"],
                title: {
                    text: "{{ getMonth($month) }}/{{ $year }}"
                }
            },
            yAxis: {
                title: {
                    text: "Valor (R$)"
                }
            },
            tooltip: {
                shared: true,
                valuePrefix: "R$ "
            },
            plotOptions: {
                column: {
                    borderRadius: 5
                }
            },
            credits: { enabled: false },
            series: [{
                    name: "Entrada",
                    data: [dataChartAccounts[1]],
                    color: "#28a745"
                },
                {
                    name: "Saída",
                    data: [dataChartAccounts[2]],
                    color: "#dc3545"
                }
            ]
        });

        Highcharts.chart('chart-entryleave', {
            chart: {
                type: 'pie'
            },
            credits: false,
            title: {
                text: `Distribuição Financeira - {{ getMonth($month) }}/{{ $year }}`
            },
            tooltip: {
                pointFormat: '<b>R$ {point.y}</b> ({point.percentage:.1f}%)'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Valor',
                colorByPoint: true,
                data: [
                    { name: 'Entradas', y: dataChartAccounts[1], color: '#A8E6CF' }, // Verde claro
                    { name: 'Saídas', y: dataChartAccounts[2], color: '#FFAAA5' }, // Vermelho claro
                    { name: 'Vendas (pagas)', y: dataChartSales[1], color: '#87CEFA' }, // Azul claro
                    { name: 'Vendas (Não pagas)', y: dataChartSales[2], color: '#FA8072' } // Azul claro
                ]
            }]
        });
    })
</script>
