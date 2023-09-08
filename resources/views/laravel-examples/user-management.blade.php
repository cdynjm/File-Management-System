@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="alert bg-gray" role="alert">
                    <input type="text" placeholder="Search..." id="user-search" class="form-control">
                </div>
                <div class="card-header pb-0">
                    <div>
                        <h5 class="mb-0">All Users</h5>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0" id="createuser" type="button">+&nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @include('table.user-table')
                    </div>
                </div>
            </div>
        </div>
    
</main>
@extends('modals.user')
@extends('modals.edit.edit-user')
@endsection