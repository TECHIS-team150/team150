@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('登録成功') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('登録が完了しました。') }}
                    <p><a class="btn btn-primary" href="/goods" role="button">商品一覧画面へ</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
