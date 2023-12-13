<?php

namespace frontend\controllers;

use common\models\Request;
use common\models\RequestSearch;
use Yii;
use yii\filters\Cors;

class RequestsController extends \yii\rest\ActiveController
{
    public $modelClass = Request::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Expose-Headers' => [
                    'X-Pagination-Per-Page',
                    'X-Pagination-Total-Count',
                    'X-Pagination-Page-Count'
                ],
            ]
        ];
        return $behaviors;
    }
    public function actions(){
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this,'prepareDataProvider'];
        return $actions;
    }
    public function prepareDataProvider()
    {
        $requestParams = Yii::$app->getRequest()->getBodyParams();
        if (empty($requestParams)) {
            $requestParams = Yii::$app->getRequest()->getQueryParams();
        }
        $searchModel = new RequestSearch;
        return $searchModel->search($requestParams);
    }

}
