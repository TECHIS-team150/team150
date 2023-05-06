@extends('layouts.app')
 
@section('content')

<!-- 検索画面表示 -->
@if (count($goods) > 0)
<form class="search" action="/goods" method="GET">
    <input type="text" name="search">
    <button type="submit">検索</button>
</form>


<div class="panel panel-default">
<!-- {{-- 商品登録ボタン　管理者に表示される --}} -->
@can('admin') 
    <div class="panel-body">
        <div class="CSS" style="text-align:right;">
            <a class="register" href="/goods/register">>>商品登録</a>
        </div>
@endcan

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
                @foreach ($goods as $good)
                <tr>
                     <td class="table-text">
                        <div>{{ $good->id }}</div>
                     </td>
                    <td class="table-text">
                             <div>{{ $good->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $good->kind }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $good->price }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $good->content }}</div>
                    </td>
                    {{-- <td class="table-text">
                        <div>{{ $goods->created_at }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $goods->updated_at }}</div>
                    </td> --}}
                    <td>
                        <!-- 編集ボタン  {{-- 管理者に表示される --}} -->
                    @can('admin')
                    <div>
                        <a href="/goods/edit/{{ $good->id }}">>>編集</a>
                    </div>
                    @endcan

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
            <!-- ページネート機能 -->
        {{ $goods->links() }}

    </div>
</div>
@endif
@endsection