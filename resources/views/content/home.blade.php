@extends('layouts/contentLayoutMaster')

@section('title', 'Search')

@section('content')
<!-- Kick start -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Hello {{ request()->user()->name }}</h4>
  </div>
  <div class="card-body vh-100">
    <div class="row justify-content-center align-items-center mt-2">
      <div class="col-10">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Here..." aria-describedby="btnSearch" id="search-input" />
          <button class="btn btn-outline-primary" id="btnSearch" type="button">Search</button>
        </div>
      </div>
    </div>
    <div class="row justify-content-center align-items-center mt-2">
      <div class="col-10">
        <ul class="list-group list-group-flush" id="search-results">
          </ul>
      </div>
    </div>
  </div>
</div>
<!--/ Kick start -->
@endsection

@section('page-script')
  <script type="text/javascript">
    $(document).ready(function() {
      var data = @json($articles);

      $('#search-input').on('input', function() {
        var searchText = $(this).val().toLowerCase();
        $('#search-results').empty();

        if(searchText != ''){
          $.each(data, function(index, item) {
            var title = item.title.toLowerCase();
            var description = item.description.toLowerCase();
            var date = item.createdAtFormatted;
            console.log(item);

            if (title.indexOf(searchText) !== -1 || description.indexOf(searchText) !== -1) {
              var resultItem = $('<li>').text(title);
              var html = '<li class="list-group-item"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">'+ title +'</h5><small class="text-secondary">'+ date +'</small></div><p class="card-text">'+ description +'</p></li>'
              $('#search-results').append(html);
            }
          });
        }

      });
    });
  </script>
@endsection
