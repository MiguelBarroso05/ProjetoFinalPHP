<?php
function getSalesLast30Days() {
    include 'Connections/config.php';
    
    // Consulta SQL para obter o número de vendas dos últimos 30 dias, agrupados por dia
    $q = mysqli_query($conn, "SELECT DATE(b.update_date) as sale_date, COUNT(b.id) as sales 
                              FROM basket b
                              WHERE b.update_date >= CURDATE() - INTERVAL 30 DAY
                              AND b.status = 1
                              GROUP BY DATE(sale_date)
                              ORDER BY sale_date ASC");

    $result = [];
    while ($row = mysqli_fetch_assoc($q)) {
        $result[] = $row;  // Armazenar todas as linhas de resultados
    }
    return $result;
}
?>