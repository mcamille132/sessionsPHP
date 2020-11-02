<?php

function addArticle($cookie)
{
    if(!empty($_SESSION['cart'][$cookie])){
        $_SESSION['cart'][$cookie]++;
    } else {
        $_SESSION['cart'][$cookie] = 1;
    }
}