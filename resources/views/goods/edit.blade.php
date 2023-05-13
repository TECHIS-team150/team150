@extends('layouts.app')
 
@section('content')
 
 <h4>商品編集 商品ID:{{ $goods->id }}</h4>
<div class="text-center">
    <form class=  "mx-auto" action="{{ url('/goods/edit/'.$goods->id) }}" method="POST">
    @csrf
    <!-- <div class="col-md-6">
        <input type="text" class="form-control" id="" name="name" value="{{$goods->name }}">
    </div>
    <div>
        <input type="text" class="form-control" id="" name="tel" value="{{$goods->tel }}">
    </div>
    <div>
        <input type="text" class="form-control" id="" name="email" value="{{$goods->email }}">
    </div>
</div> -->
<div class="mb-3">
    <label class="form-label">品番</label>
    <input type="text" class="form-control" id="" name="goodsnumber" value="{{$goods->goodsnumber }}" placeholder="半角数字">
  </div>

  <div class="mb-3">
    <label class="form-label">商品名</label>
    <input type="text" class="form-control" id="" name="name" value="{{$goods->name }}">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">種類</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="kind" value="{{$goods->kind }}">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">値段</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="price" value="{{$goods->price }}" placeholder="半角数字">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">セット内容</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="content" value="{{$goods->content }}">
  </div>


<div class="text-center">
<input type="submit" value="更新">
</form>

 <form action="{{ url('goods/'.$goods->id) }}" method="POST">
     {{ csrf_field() }}
     {{ method_field('DELETE') }}
     <input type="submit" id="delete-goods-{{ $goods->id }}"  value="削除">
 </form>
</div>

@endsection