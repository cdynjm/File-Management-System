@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
                <div class="alert bg-gray" role="alert">
                    <input type="text" placeholder="Search..." class="form-control" id="all-files-search">
                </div>
              <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                  <div>
                      <h5 class="mb-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                      </svg>
                      Files</h5>
                  </div>
                </div>
                  <div class="table-responsive p-0 mt-4">
                      @include('table.all-files-table')
                    </div>
                </div>
            </div>
        </div>
</main>
@extends('modals.member')
@extends('modals.edit.edit-member')
@endsection