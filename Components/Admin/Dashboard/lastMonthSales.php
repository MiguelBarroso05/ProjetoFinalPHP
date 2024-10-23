<?php 
$salesLast30Days = getSalesLast30Days();
$dates = [];
$sales = [];

foreach ($salesLast30Days as $sale) {
    $dates[] = $sale['sale_date'];
    $sales[] = $sale['sales'];
}
?>
<div  style="width: 100%;">
    <h3>Sales on The Last 30 Days</h3>
<div style="width: 80%;">
    <canvas id="salesChart"></canvas>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@2.0.2/build/global/luxon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>

<script>
    const ctx2 = document.getElementById('salesChart').getContext('2d');

    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($dates); ?>, // Datas em formato JSON
            datasets: [{
                label: 'Sales on The Last 30 Days',
                data: <?php echo json_encode($sales); ?>, // Número de vendas por dia em JSON
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: true, // Preencher a área sob a linha
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // O eixo Y começa no zero
                },
                x: {
                    type: 'time', // Eixo X será do tipo temporal
                    time: {
                        parser: 'yyyy-MM-dd', // Corrigido o formato da data
                        unit: 'day',          // Mostra os dias no eixo X
                        tooltipFormat: 'yyyy-MM-dd', // Corrigido o formato da data no tooltip
                        displayFormats: {
                            day: 'yyyy-MM-dd' // Corrigido o formato da data no eixo X
                        }
                    }
                }
            }
        }
    });
</script>
