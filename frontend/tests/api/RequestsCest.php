<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use Faker\Factory;

class RequestsCest
{
    private $id;

    public function getRequests(FunctionalTester $I)
    {
        $I->expectTo('get requests');
        $I->sendGET('requests');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }

    public function postRequest(FunctionalTester $I)
    {
        $I->expectTo('post request');
        $faker = Factory::create('ru_RU');
        $I->sendPOST('requests',[
            'name' => $faker->realText(22),
            'email' => $faker->email(),
            'message' => $faker->realText(222),
        ]);
        $I->seeResponseCodeIs(201);
        $I->seeResponseIsJson();
        $response = $I->grabResponse();
        $jsonResponse = json_decode($response, true);
        $this->id = $jsonResponse['id'];
    }

    public function putRequest(FunctionalTester $I)
    {
        $I->expectTo('put request');
        $faker = Factory::create('ru_RU');
        $I->sendPUT('requests/'.$this->id,[
            'comment' => $faker->realText(222),
        ]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
}