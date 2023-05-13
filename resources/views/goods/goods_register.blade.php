@extends('layouts.app')
 
@section('content')

   <!-- バリデーションエラーの表示 -->
   @include('common.errors')

<form action="{{ url('/goods/register') }}" method="POST" class="form-horizontal">
 {{ csrf_field() }}
 @csrf

  <div class="mb-3">
    <label class="form-label">品番</label>
    <input type="text" class="form-control" id="" name="goodsnumber">
  </div>

  <div class="mb-3">
    <label class="form-label">商品名</label>
    <input type="text" class="form-control" id="" name="name">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">種類</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="kind">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">値段</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="price">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">セット内容</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="content">
  </div>

     <!-- 新タスクフォーム -->
        <button type="submit" class="btn btn-primary">登録</button>
 </form>

@endsection