<?php

/**
 * Created by PhpStorm.
 * User: Pamodha
 * Date: 11/4/2017
 * Time: 7:05 PM
 */
use Stripe\Stripe;
require_once 'app/init.php';


if(isset($_POST['stripeToken'])){
    $token =$_POST['stripeToken'];
    try{

        \Stripe\Charge::create(array(
            "amount" => 1000,
            "currency" => "LKR",
            "card" => $token,
            "description" => $user -> email
        ));

        $db->query("
            
            UPDATE users
            SET premium =1
            WHERE id ={$user->id}"

        );




    }catch (Stripe_CardError  $e ) {
        //do something with the error here
    }
    header('Location:http://localhost:63342/pemium/index.php');

    exit();
}

?>