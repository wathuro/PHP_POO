<?php
require('StatusModel.php');

echo '<h1>CRUD con MVC de la tabla Status</h1>';

$status = new StatusModel();
$status_data = $status->read();
var_dump($status_data);

echo '<h3>Numero de status:'. count($status_data) .'</h3>';

echo '<h2>Tabla de Status</h2>';
echo '<Table>
    <tr>
        <th>tatus_id</th>
        <th>status</th>
    </tr>';
    for($i = 0; $i < count($status_data); $i++) {
        echo '<tr>
                <td>'. $status_data[$i]['status_id'] .'<td>
                <td>'. $status_data[$i]['status'] .'<td>
            </tr>';
    }
    echo '</table>';

echo '<h2>Insertando Status</h2>';
$new_status = array(
    'status_id' => 0,
    'status' => 'Otro Status'
);
// $status->create($new_status);

echo '<h2>Actualizando Status</h2>';
$update_status = array(
    'status_id' => 6,
    'status' => 'Other Status'
);
// $status->update($update_status);

echo '<h2>Eliminando Status</h2>';
// $status->delete(6);

    
