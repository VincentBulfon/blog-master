<?php
include 'model.php';

function getUserInfos($email,$pwd){
    $cx = getConnectionToDb();
    $sql = 'SELECT password, email FROM blog.user WHERE :eml IS user.email AND :psw IS user.id';
    $pst = $cx->prepare($sql);
    $pst->execute([':eml' => $email,':pwd' => $email]);
    return $pst->fetch();
}