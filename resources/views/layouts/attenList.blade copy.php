<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
<div class="container">
  <div class="card">
    <div class="card-body">
      <h1>ログイン</h1>

      <form action="">
        <div class="form-group">
          <label for="email">メールアドレス</label>
          <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">パスワード</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <button class="btn btn-primary w-100">ログイン</button>
        <div class="login_reminder">
          <a href="/reminder">パスワードをお忘れの方</a>
        </div>
      </form>
    </div>
  </div>
</div>







{{--  
  <div class="pageTitle">
    @yield('pageTitle')
  </div>
  @section('menubar')
    <h2 class="menutitle">メニュータイトル</h2>
  @show

  <div class="content">
    @yield('content')
  </div>
  
  <div class="footer">
    @yield('footer')
  </div>  --}}
</body>
</html>