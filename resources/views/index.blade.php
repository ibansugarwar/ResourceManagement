@extends('app')

@section('content')
    
  <!-- Page Content -->
  <div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button class="btn btn-primary" id="menu-toggle">トグル</button>
      <button class="btn btn-primary" id="dakoku">出勤</button>
      <button class="btn btn-primary" id="dakoku">退勤</button>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    {{-- 選択年月 ------------------------------------------------------------------}}

    <select name='year'>
      <option value='2020'>2020年</option>
      <option value='2019'>2019年</option>
      <option value='2018'>2018年</option>
      <option value='2017'>2017年</option>
      <option value='2016'>2016年</option>
      <option value='2015'>2015年</option>

    </select>

    <select name='month'>
      <option value='1'>1月</option>
      <option value='2'>2月</option>
      <option value='3'>3月</option>
      <option value='4'>4月</option>
      <option value='5'>5月</option>
      <option value='6'>6月</option>
      <option value='7'>7月</option>
      <option value='8'>8月</option>
      <option value='9'>9月</option>
      <option value='10'>10月</option>
      <option value='11'>11月</option>
      <option value='12'>12月</option>
    </select>

    {{------------------------------------------------------------------DBと連携する必要がある↓--}}

  <div class="container-fluid">
    {{--  <h1 class="mt-4">本文</h1>  --}}

    <table style="border: solid">
      <tr>
        <th>年</th>
        <th>月</th>
        <th>日</th>
        <th>曜日</th>
        <th>出勤時刻</th>
        <th>退勤時刻</th>
        <th>申請有無</th>
      </th>

      <?php
      for($i=1;$i<=31;$i++){
        echo '<tr>
          <td>2020</td>
          <td>9</td>
          <td>'.$i.'</td>
          <td></td>
          <td>10:00</td>
          <td>19:00</td>
          <td>'.date('m').'</td>
        </tr>';

      }
      ?>

    </table>

  </div>

@endsection
