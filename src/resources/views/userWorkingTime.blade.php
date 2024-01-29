<!DOCTYPE html>
<html>
<body>

<div class="category__content">
  <form class="create-form">
    <div class="create-form__item">
      <input class="create-form__item-input" type="text">
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  <div>
    <table>
      <th></th>
      @foreach ($users as $user)
      <tr>
        <p>{{ $user->getName() }}</p>
      </tr>
      
        @foreach ($user->getWorkingTime as $WT)
        <tr>
          <td>
            <p>W: {{ $WT->getWorkingStart() }} :</p>
          </td>
          <td>
            <p>{{ $WT->getWorkingEnd() }}</p>
          </td>
          <td>
            <p>勤務時間:{{ $WT->getWorkingTime() }}</p>
          </td>
          
        </tr>
          @foreach ($WT->getBreakTime as $BT)
          <tr>
            <td>
              <p>B: {{ $BT->getBreakingStart() }} :</p>
            </td>
            <td>
              <p>{{ $BT->getBreakingEnd() }}</p>
            </td>
          </tr>
          @endforeach
        
        @endforeach
      
        <form class="form" action="/Registration" method="post">
        @csrf

      @endforeach


    </table>
  </div>
</div>
</body>
</html>