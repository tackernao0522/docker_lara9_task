<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // 1 対 多 親->子
        $shops = Area::find(1)->shops;

        // 親 <- 子
        $area = Shop::find(2)->area;

        dd($shops, $area);
    }
}
