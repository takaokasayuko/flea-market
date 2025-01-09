@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header')

<div class="header__center">
  <p class="header__center-text">なにをお探しですか？</p>
</div>

<div class="header__nav">
  <nav class="nav">

    <ul class="nav__group">
      @guest
      <li class="nav__item">
        <a class="login-link" href="/login">ログイン</a>
      </li>
      <li class="nav__item">
        <a class="register-link" href="/register">会員登録</a>
      </li>
      @endguest

      @auth
      <li class="nav__item">
        <form class="form-logout" action="/logout" method="post">
          @csrf
          <button class="header-logout__button">ログアウト</button>
        </form>
      </li>
      <li class="nav__item">
        <a class="mypage-link" href="/mypage">マイページ</a>
      </li>
      @endauth

      <li class="nav__item nav__item-sell">
        <a class="sell-link" href="/sell">出品</a>
      </li>
    </ul>

  </nav>
</div>
@endsection

@section('content')
<div class="content">
  <div class="item__link">
    <a class="all-item__link link {{ request()->is('/') ? 'active' : '' }}" href="/">おすすめ</a>
    <a class="favorite-item__link link {{ request()->is('favorite') ? 'active' : '' }}" href="/favorite">マイリスト</a>
  </div>
  <div class="all-item">
    @foreach($items as $item)
    <div class="item__image">
      <a class="item-detail__link" href="">
        @if(str_starts_with($item['image'], '../image/'))
        <img class="image" src="{{ $item['image'] }}" alt="商品画像">
        @else
        <img class="image" src="{{ Storage::url($item['image']) }}" alt="商品画像">
        @endif
      </a>
    </div>
    @endforeach
  </div>

</div>
@endsection