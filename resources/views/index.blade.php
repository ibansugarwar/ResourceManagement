@extends('app')

@section('content')
    

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

    {{--------------------------------------------------------------------------------}}

  <div class="container-fluid">
    {{--  <h1 class="mt-4">本文</h1>  --}}
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th>日付</th>
          <th>曜日</th>
          <th>出勤時刻</th>
          <th>退勤時刻</th>
          <th>申請有無</th>
        </th>
      </thead>
      <tbody>
        <?php
        $week_array = array( "日", "月", "火", "水", "木", "金", "土" );
        $week_end = 31; //プルダウンから選んだ月の最終日を格納


        for($i=1; $i <= $week_end; $i++){
          $day = '2020-09-'.str_pad($i, 2, '0',STR_PAD_LEFT);
          $week_num = date('w', strtotime($day));
          $week = $week_array[$week_num];

          if($week_num == 0){
            echo '<tr style="background-color:red">';
          }elseif($week_num == 1){
            echo '<tr style="background-color:skyblue">';
          }else{
            echo '<tr>';
          }
          echo '<td><a href="">'.$i.'</a></td>
          <td>'.$week_array[date('w', strtotime($day))].'</td>
          <td>DBと連携</td>
          <td>DBと連携</td>
          <td>'.date('m').'</td>
        </tr>';
        }

        ?>
      </tbody>
    </table>

  </div>

@endsection
