<?php

namespace console\controllers;

use common\models\Request;
use Faker\Factory;
use yii\console\Controller;

class InsertController extends Controller
{
    private $statuses = [
        1 => Request::STATUS_ACTIVE,
        2 => Request::STATUS_RESOLVED,
    ];

    public function actionIndex()
    {
        $faker = Factory::create('ru_RU');
        for ($i = 1; $i <= 100; $i++) {
            $integerStatus = rand(1,2);
            $request = new Request;
            $request->setAttributes([
                'name' => $faker->realText(22),
                'email' => $faker->email(),
                'status' => $this->statuses[$integerStatus],
                'message' => $faker->realText(222),
                'comment' => $faker->realText(222),
            ]);
            $request->save();
            echo "$request->id. $request->name\n";
        }
    }

}
