<?php

namespace frontend\controllers;

use common\models\Request;

class RequestsController extends \yii\rest\ActiveController
{
    public $modelClass = Request::class;
}
