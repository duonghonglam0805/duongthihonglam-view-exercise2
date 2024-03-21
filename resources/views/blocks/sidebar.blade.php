<div class="btn-group dropend sidebar-icon">
  <button type="button" class="btn bg-white p-2"><i class="fa-solid fa-list"></i></button>
</div>
<br>
@foreach($icons as $key => $icon)
  <div class="btn-group dropend sidebar-icon">
    <button type="button" class="btn bg-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="{{$icon['icon']}}"></i>
    </button>
    <ul class="dropdown-menu">
    </ul>
  </div>
@endforeach