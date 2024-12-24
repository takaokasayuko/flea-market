<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header>
    <div class="header">
      <div class="header__logo">
        <a class="top-page__link" href="/">
          <img src="/icon/logo.svg" alt="COATCHTECHロゴ">
        </a>
      </div>
      @yield('header')
    </div>
  </header>

  <main>
    @yield('content')
  </main>

</body>

</html>