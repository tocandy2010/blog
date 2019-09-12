<?php

namespace App\Services;

use App\Repositories\UsersRepository;
use App\Repositories\GoodsRepository;

class RecommendService
{
    protected $albumRepo;
    protected $songRepo;

    // 透過 DI 注入 Repository
    public function __construct(UsersRepository $albumRepo, GoodsRepository $songRepo)
    {
        $this->albumRepo = $albumRepo;
        $this->songRepo = $songRepo;
    }

    // 推薦專輯及歌曲
    public function get()
    {
        return [
            'album' => $this->albumRepo->getSonyAlbum(),
        ];
    }
}