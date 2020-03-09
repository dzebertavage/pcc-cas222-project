<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=devinzeb_aceinthehole-registration', 'devinzeb_aceinthehole_user', 'aceinthehole_user');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>