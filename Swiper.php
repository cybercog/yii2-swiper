<?php

namespace quangthinh\yii2\swiper;

use yii\helpers\Html;
use yii\base\Widget;

/**
 * @property array $items
 */
class Swiper extends Widget {
    
    public $options;
    
    public $itemOptions;
    
    public $navOptions;
    
    public $btnNextOptions = [];
    public $btnPrevOptions = [];
    public $btnNextText = '';
    public $btnPrevText = '';
    
    private $_items;
    
    public function setItems($items) {
        $this->items = $items;
    }
    
    public function getItems() {
        return $this->_items;
    }
    
    /**
     * {items}{nav}{pager}
     * @var string
     */
    public $layout = '{items}{nav}{btnNext}{btnPrev}';
    
    public function init() {
        // init assets
        AssetBundle::register($this->getView());
    }
}