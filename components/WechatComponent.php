<?php
namespace c4ys\wechat\sdk\components;

use yii\base\Object;

/**
 * 微信
 * @package c4ys\wechat\sdk\components
 */
class WechatComponent extends Object
{
    /**
     * @var BaseWechat
     */
    protected $wechat;

    /**
     * @param BaseWechat $wechat
     * @param array $config
     */
    public function __construct(BaseWechat $wechat, $config = [])
    {
        $this->wechat = $wechat;
        parent::__construct($config);
    }
}