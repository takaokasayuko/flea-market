@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('header')
<div class="header-logo">

</div>

@endsection

@section('content')
<div class="content">
  <h1 class="ttl">会員登録</h1>
  <div class="content-form">
    <div class="form-group">
      <p class="form-label">メールアドレス</p>
      <input class="form-input" type="text">
    </div>
    <div class="form-group">
      <p class="form-label">パスワード</p>
      <input class="form-input" type="text">
    </div>
    <div class="form-button">
      <button class="button-submit">登録する</button>
    </div>

    <a class="form-link" href="">ログインはこちら</a>

  </div>
</div>

@endsection