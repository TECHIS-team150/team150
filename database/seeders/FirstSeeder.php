<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\good;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        good::create([
            'name' => 'ボールペン',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'ボールペン(赤)',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'ボールペン(青)',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'サインペン(赤)',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'サインペン(青)',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'シャーペン',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '筆ペン',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '消しゴム',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '修正テープ',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '付箋',
            'kind' => '文具',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '歯ブラシ',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '洗面コップ',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'くし',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '歯磨き粉',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'シャンプー(椿)',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'シャンプー(ダイアン)',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'シャンプー(YORU)',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'シャンプー(ウルリス)',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'リンス',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'コンディショナー',
            'kind' => '洗面・バス',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '湯呑み',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '茶請け',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '茶菓子',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'グラス',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '菓子器',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'ポット',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'アンケート用紙',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'テレビ',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => 'テレビリモコン',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);good::create([
            'name' => '帯',
            'kind' => '客室用品',
            'price'=>'200',
            'content'=>'1セット5個入'

        ]);
    }
}
