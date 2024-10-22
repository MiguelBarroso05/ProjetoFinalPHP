<?php
function getSalesLast30Days() {
    include 'Connections/config.php';
    
    // Consulta SQL para obter o número de vendas dos últimos 30 dias, agrupados por dia
    $q = mysqli_query($conn, "SELECT DATE(pb.date) as sale_date, COUNT(pb.id) as sales 
                              FROM sale pb
                              WHERE pb.date >= CURDATE() - INTERVAL 30 DAY
                              GROUP BY DATE(pb.date)
                              ORDER BY sale_date ASC");

    $result = [];
    while ($row = mysqli_fetch_assoc($q)) {
        $result[] = $row;  // Armazenar todas as linhas de resultados
    }
    return $result;
}
?>