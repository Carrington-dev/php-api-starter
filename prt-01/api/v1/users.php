<?php

switch ($request_method) {
    case 'GET':
        getUsers();
        break;
    case 'POST':
        createUser();
        break;
    default:
        echo json_encode(['error' => 'Invalid request method']);
        break;
}

function getUsers() {
    // Simulate a database call
    $users = [
        ['id' => 1, 'name' => 'John Doe'],
        ['id' => 2, 'name' => 'Jane Doe']
    ];
    echo json_encode($users);
}

function createUser() {
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['name'])) {
        // Simulate a database insert
        $user = ['id' => rand(3, 100), 'name' => $input['name']];
        echo json_encode($user);
    } else {
        echo json_encode(['error' => 'Invalid input']);
    }
}
?>
