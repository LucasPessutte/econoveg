<?php
include '../../../conn/conexao.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode($data); 
    } else {
        echo json_encode(['error' => 'Produto não encontrado']);
    }

    $stmt->close();
}
$conn->close();
?>