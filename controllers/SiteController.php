<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use app\models\Member;
use yii\web\Controller;
use GuzzleHttp\Client;
use yii\base\Response;

class SiteController extends Controller
{
    public function actionIndex() {
        $models = $this->Loadcards(date("*-m-d"));
        return $this->render('index', [
            'models' => $models
        ]);
    }
    private function Loadcards($date) {
        $client = new Client([
            'base_uri' => 'http://dev.land.lib33.ru/api/v2/member/dates?pattern=' . $date,
        ]);
        $response = $client->request('GET');
        $body = $response->getBody();
        $items = json_decode($body, true);
        for($i = 0; $i < count($items); $i++) {
            $models[] = new Member();
            Model::loadMultiple($models, $items, "");
        }
        return $models;
    }
    public function actionGetcards($date) {
        $models = $this->Loadcards($date);
        return $this->renderPartial('cards', [
            'models' => $models
        ]);
    }
}
