<?php

require_once('connect.php');

// Testing function - Used for debugging and observe the results

function ts($value)
{
    echo "<pre>", print_r($value, true), "</pre>";
    //* we passed true as a second parameter to remove the value 1 returned by print
    die();
}

function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        //* Return all records.
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        //* Return records matching the condition.

        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $stmt = $conn->prepare($sql);
        $values = array_values($conditions);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}

$conditions = [
    'admin' => 0,
    'username' => 'cvulpe'
];
$users = selectAll('users', $conditions);
ts($users);