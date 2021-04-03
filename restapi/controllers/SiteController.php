<?php
namespace restapi\controllers;

use yii\rest\Controller;
use restapi\models\LoginForm;
/**
 * Site controller
 */
class SiteController extends Controller
{
   public function actionLogin(){
       $model = new LoginForm;
       if($model->load(\Yii::$app->request->post(), $formName='') && ($token = $model->login()) ){
           return $token;
       }
       else {
           return $model;
       }
   }
}
