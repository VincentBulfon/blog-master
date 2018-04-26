<?php

function getLoginForm()
{
    return [
        'view' => 'connexion.php'
    ];
}

function singIn()
{
    if(isset($_POST['email']) || isset($_POST['password'])){
        $email =$_POST['email'];
        $password =$_POST['password'];
        return ;

    }else{
        header('Location: index.php?a=getLoginForm&r=auth');
    } ;

}

