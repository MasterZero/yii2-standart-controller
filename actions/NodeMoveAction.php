<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 14.02.16
 * Time: 21:17
 */

namespace sibds\controllers\actions;


class NodeMoveAction extends \slatiusa\nestable\NodeMoveAction
{
    use ActionTrait;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        $this->modelName = $this->getModelName();
    }
}