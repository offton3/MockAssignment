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
  <div class="category-table">
    <table class="category-table__inner">
      <tr class="category-table__row">
        <th class="category-table__header">category</th>
      </tr>
      @foreach ($users as $user)
      <tr class="category-table__row">
        <td class="category-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="category-table__item">
          <form class="delete-form">
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
        <p class="update-form__itme-p">{{ $user['name'] }}</p>
        <p class="update-form__itme-p">{{ $user['email'] }}</p>
        {{ @foreach ($working_times as $working_time)
            if( $user['id']==$working_time['id']){
              <p class="update-form__itme-p">{{$working_time['working_start']}}</p>
            }
          @endforeach
        }}
      </tr>
      @endforeach
    </table>
  </div>
</div>
</body>
</html>