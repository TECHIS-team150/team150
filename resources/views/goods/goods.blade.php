@extends('layouts.app')
 
@section('content')
 
 
<!-- タスク一覧表示 -->
@if (count($goods) > 0)
<div class="panel panel-default">
 
    <div class="panel-body">
    <div style="text-align:right;">
                    <a href="/goods/register">>>登録</a>
              </div>
       
        <table class="table table-striped table-bordered goods$goods-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>品番</th>
                <th>商品名</th>
                <th>種類</th>
                <th>値段</th>
                <th>セット内容</th>
                <!-- <th>登録日時</th>
                <th>更新日時</th> -->

                <th>&nbsp;</th>
            </thead>

            
 
            <!-- テーブル本体 -->
            <tbody>
              
                @foreach ($goods as $goods)
                <tr>
                     <td class="table-text">
                        <div>{{ $goods->id }}</div>
                    <td class="table-text">
                        <div>{{ $goods->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $goods->kind }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $goods->price }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $goods->content }}</div>
                    </td>
                    <!-- <td class="table-text">
                        <div>{{ $goods->created_at }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $goods->updated_at }}</div>
                    </td> -->
                    <td>
                        <!-- 編集ボタン -->
                    <div>
                        <a href="/goods$goods/edit/{{ $goods -> id }}">>>編集</a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection