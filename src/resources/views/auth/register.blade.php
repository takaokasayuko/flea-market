@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<div class="content">
  <h1 class="ttl">会員登録</h1>
  <form class="form" action="/register" method="post">
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

      <button class="button__button-submit">登録する</button>
    </div>
  </form>

  <a class="form__link" href="/login">ログインはこちら</a>

</div>

@endsection