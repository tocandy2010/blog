<?php

namespace App\Repositories;

use App\Model\GoodsModel;

class GoodsRepository
{
    protected $goods;

    // 透過 DI 注入 Model
    public function __construct(GoodsModel $goods)
    {
        $this->goods = $goods;
    }

    // 取資料邏輯：取得公司為 Sony 的專輯
    public function getGoods()
    {
        return $this->goods->where('id', 1)->get();
    }
}