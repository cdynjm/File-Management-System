@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                
                <div class="col-12">
                <div class="alert bg-gray" role="alert">
                    <input type="text" placeholder="Search..." class="form-control" id="category-search">
                    <input type="hidden" value="{{ $folderid }}" id="folder-id">
                </div>
                </div>
                <div class="card-header pb-0">
                    @if ($folderid == 0) 
                        <div>
                            <h5 class="mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                            </svg>
                            Root Directory</h5>
                        </div>
                    @endif
                    @if ($folderid != 0) 
                        <div>
                            <h5 class="mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                            </svg>
                            {{ $foldername }} </h5>
                        </div>
                    @endif
                    @if(Auth::user()->type == 1)
                    <div class="d-flex flex-row justify-content-end">   
                        @if ($folderid != 0)
                            <a href="#" class="btn bg-gradient-secondary btn-sm mb-0 m-2" id="createfile" type="button">+&nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-post-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1 0-1zm0 3h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </a>
                        @endif
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0 m-2" id="createcategory" type="button">+&nbsp; 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                            </svg>
                        </a>
                    </div>
                    @endif
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        @include('table.category-table')
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                @if($folderid != 0)
                
                <div class="alert bg-gray" role="alert">
                    <input type="text" placeholder="Search..." class="form-control" id="file-search">
                </div>
               
                <div class="card-body p-2">
                    <p class="ms-4">Files</p>
                    <div class="table-responsive p-0">
                        @include('table.file-table')
                    </div>
                </div>
                @endif
            </div>
        </div>
</main>
@extends('modals.category')
@extends('modals.edit.edit-category')
@extends('modals.edit.edit-file')
@extends('modals.file')
@endsection