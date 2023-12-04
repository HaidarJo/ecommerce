<?php

$tambah = array(
    'name' => 'testdbb',
    'email' => 'testdbb@gmail.com',
    'no_hp' => '55555556',
    'password' => 'testdbb',
);
$result = $this->db->insert('tb_pembeli', $tambah);
?>
<?= echo json_encode($result);?>


