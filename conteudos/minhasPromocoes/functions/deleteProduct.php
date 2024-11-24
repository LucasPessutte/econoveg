<?php
include '../../../conn/conexao.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']); 

    $conn->begin_transaction();

    try {
        $query1 = "DELETE FROM products_complaints WHERE product_id = ?";
        $stmt1 = $conn->prepare($query1);
        $stmt1->bind_param("i", $id);
        $stmt1->execute();

        $query2 = "DELETE FROM products WHERE id = ?";
        $stmt2 = $conn->prepare($query2);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();

        $conn->commit();

        echo json_encode(['success' => true, 'message' => 'Produto deletado com sucesso']);
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['success' => false, 'error' => 'Erro ao deletar produto: ' . $e->getMessage()]);
    } finally {
        // Fecha os statements
        if (isset($stmt1)) $stmt1->close();
        if (isset($stmt2)) $stmt2->close();
    }
}

$conn->close();
?>
