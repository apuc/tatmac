<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 10.04.2017
 * Time: 15:25
 */

namespace frontend\widgets;

use yii\base\Widget;

class ShowAfterFooter extends Widget
{
    public function run(){
        return $this->render('after-footer');
    }
}