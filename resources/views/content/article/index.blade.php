@inject('request', 'Illuminate\Http\Request')
@extends('layouts/contentLayoutMaster')
@section('title', 'Payment Method')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('content')
<!-- Basic table -->

<section id="card-actions">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Article</h4>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li>
                <a data-action="collapse"><i data-feather="chevron-down"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse">
          <div class="card-body">
            <form action="{{ route('article.store') }}" method="POST" class="form" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <div class="row mb-2">
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-lg-8">
                      <div class="form-group">
                          <label>Description</label>
                          <textarea type="text" class="form-control" name="description" placeholder="Description" rows="7"></textarea>
                      </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-6">
                     <div class="col-12">
                          <input type="submit" name="save_with_reload_table" class="btn btn-primary mr-1 mb-1 btn_save" value="Save">
                      </div>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <table class="datatables-basic table" id="article_table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</section>
<!--/ Basic table -->
@endsection


@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/jszip.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
  <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script type="text/javascript">
    var table_id = 'article_table'
    var table_title = 'Article List';
    var table_route = {
          url: '{{ route('article.index') }}',
          data: function (data) {
                // data.field = $("#field").val();
            }
        };
      var columnns = [
            { data: 'id', name: 'id'},
            { data: 'title', name: 'title'},
            { data: 'description', name: 'description'},
            { data: 'createdAtFormatted', name: 'createdAtFormatted'},
            { data: 'action', name: 'action', 'orderable' : false}
        ];

      var drawCallback = function( settings ) {
        $('[data-bs-toggle="tooltip"]').tooltip();
        feather.replace({
          width: 14,height: 14
        });
      };
  </script>
  <script src="{{ asset('js/scripts/tables/table-datatables-basic.js') }}"></script>
  <script src="{{ asset('js/content/ajax/form-normal.js') }}"></script>

@endsection
