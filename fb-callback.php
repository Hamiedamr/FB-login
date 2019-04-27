<?php

    require_once 'config.php';
    try {
        $accessToken = $helper->getAccessToken();
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        //throw $th;
        echo "Response Exeception ". $e->getMessage();
        exit();
    } catch(\Facebook\Exceptions\FacebookSDKException $e){
        echo 'SDK Exception '. $e->getMessage();
        exit();
    }
    if(!$accessToken){
        header('Location:login.php');
        exit();
    }
    $oAuth2Client = $Fb->getOAuth2Client();
    if(!$accessToken->isLongLived()){
        $accessToken = $oAuth2Client->getLongLivedAccessToken();
       
    }
    $response = $Fb->get('/me?fields=id,name,age_range,education,email,birthday',$accessToken);
    $userData = $response->getGraphNode()->asArray();
   $_SESSION['user_data'] = $userData;
   $_SESSION['access_token'] =(string) $accessToken;
   header('Location:index.php');
   exit();