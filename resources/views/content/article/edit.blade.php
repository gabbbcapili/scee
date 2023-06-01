@inject('request', 'Illuminate\Http\Request')

<div class="modal-dialog modal-lg">
    <form action="{{ route('article.update', $article) }}" method="POST" class="form" enctype='multipart/form-data'>
      @method('put')
      @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          Edit Article
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-body">
            <div class="row mb-2">
              <div class="col-lg-4">
                  <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $article->title }}">
                  </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-lg-8">
                  <div class="form-group">
                      <label>Description</label>
                      <textarea type="text" class="form-control" name="description" placeholder="Description" rows="7">{{ $article->description }}</textarea>
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
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary no-print btn_save"><i data-feather="save"></i> Save</button>
      </div>
    </div>
  </form>
</div>
<script src="{{ asset('js/content/ajax/form-modal.js') }}"></script>
