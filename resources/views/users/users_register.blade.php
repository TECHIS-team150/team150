@extends('layouts.app')
 
@section('content')

   <!-- バリデーションエラーの表示 -->
   @include('common.errors')

<form action="{{ url('/goods/register') }}" method="POST" class="form-horizontal">
 {{ csrf_field() }}

  <div class="mb-3">
    <label class="form-label">名前</label>
    <input type="text" class="form-control" id="" name="name">
  </div>

  <div class="mb-3">
    <label class="form-label">支店名</label>
    <input type="text" class="form-control" id="" name="place">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">パスワード</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">パスワード確認用</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="re_password">
  </div>

     <!-- 新タスクフォーム -->
        <button type="submit" class="btn btn-primary">登録</button>
 </form>

@endsection