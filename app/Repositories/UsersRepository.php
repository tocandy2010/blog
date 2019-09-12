<?php

namespace App\Repositories;

use App\Model\UsersModel;

class UsersRepository
{
    protected $album;

    // 透過 DI 注入 Model
    public function __construct(UsersModel $album)
    {
        $this->album = $album;
    }

    // 取資料邏輯：取得公司為 Sony 的專輯
    public function getSonyAlbum($limit = 1)
    {
        return $this->album
            ->where('id', 3)
            ->limit($limit)
            ->get();
    }
}