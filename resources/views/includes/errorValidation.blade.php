@if ($errors->any())
<div class="container">
  <div class="alert alert-danger alert-dismissible mt-2 fade show" role="alert">
    <h3> <i class="fas fa-exclamation-triangle"></i> Error </h3>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
</div>
@endif
