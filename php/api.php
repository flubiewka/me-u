<?php
session_start();
require_once 'db.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_email'])) {
    echo json_encode(['success' => false, 'error' => 'Brak sesji']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode(getMessages($pdo));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Nieobslugiwany request']);
    exit;
}

$action = $_POST['action'] ?? '';

if ($action === 'delete_message') {
    $messageId = (int)($_POST['message_id'] ?? 0);
    if ($messageId <= 0) {
        echo json_encode(['success' => false, 'error' => 'Zle ID']);
        exit;
    }

    echo json_encode(['success' => deleteMessage($pdo, $messageId, $_SESSION['user_email'])]);
    exit;
}

if ($action === 'send_message') {
    $content = trim($_POST['content'] ?? '');
    if ($content === '') {
        echo json_encode(['success' => false, 'error' => 'Pusta wiadomosc']);
        exit;
    }

    echo json_encode(['success' => saveMessage($pdo, $_SESSION['user_email'], $content)]);
    exit;
}

echo json_encode(['success' => false, 'error' => 'Nieznana akcja']);
?>
