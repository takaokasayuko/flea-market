@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('header')
<div class="header-logo">
  <a class="top-page__link" href="/">
    <img src="/icon/logo.svg" alt="COATCHTECHロゴ">
  </a>
</div>
@endsection

@section('content')
<div class="content">
  <h1 class="ttl">ログイン</h1>
  <form class="form" action="/login" method="post">
    @csrf
    <div class="content__form">
      <div class="form__group">
        <label class="form__label" for="email">メールアドレス</label>
        <input class="form__input" type="email" name="email" id="email" value="{{ old('email') }}">
        <p class="form__error-message">
          @error('email')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="form__group">
        <label class="form__label" for="password">パスワード</label>
        <input class="form__input" type="password" name="password" id="password">
        <p class="form__error-message">
          @error('password')
          {{ $message }}
          @enderror
        </p>
      </div>

      <button class="button__button-submit">ログインする</button>
    </div>
  </form>
  <a class="form__link" href="/register">会員登録はこちら</a>

</div>
@endsection