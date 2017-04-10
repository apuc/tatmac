<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 10.04.2017
 * Time: 15:17
 */

namespace frontend\widgets;

use yii\base\Widget;

class ShowHeader extends Widget
{
    public function run(){
        return $this->render('header');
    }
}