@can('admin-higher') {{-- 管理者に表示される --}}
  //ビューを記述
@elsecan('user-higher') {{-- 一般ユーザーに表示される --}}
  //ビューを記述
@endcan