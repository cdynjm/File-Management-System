@extends('layouts.user_type.auth')

@section('content')

<div class="row">
  @if(Auth::user()->type == 1)
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Users</p>
                <h5 class="font-weight-bolder mb-0">
                  {{ $users }}
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                <i class="fas fa-users opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Categories</p>
                <h5 class="font-weight-bolder mb-0">
                {{ $categories }}
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                <i class="fas fa-folder-open opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Files</p>
                <h5 class="font-weight-bolder mb-0">
                {{ $files }}
                  <span class="text-danger text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                <i class="fas fa-file-signature opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">SB Members</p>
                <h5 class="font-weight-bolder mb-0">
                {{ $sbmembers }}
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                <i class="fas fa-user-friends opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  
  @if(Auth::user()->type == 0)
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Categories</p>
                <h5 class="font-weight-bolder mb-0">
                {{ $categories }}
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                <i class="fas fa-folder-open opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Files</p>
                <h5 class="font-weight-bolder mb-0">
                {{ $files }}
                  <span class="text-danger text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                <i class="fas fa-file-signature opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">SB Members</p>
                <h5 class="font-weight-bolder mb-0">
                {{ $sbmembers }}
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                <i class="fas fa-user-friends opacity-10"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
      
    <div class="col-sm-6 mt-4">
      <div class="card">
        <div class="card-header pb-0">
          <h6>Current SB Members</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Term</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($members as $mem)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset('/storage/photo/'.$mem->photo) }}" class="avatar avatar-sm me-3" alt="user1">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $mem->name }}</h6>
                        <p class="text-xs text-secondary mb-0">{{ $mem->position }}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $mem->address }}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    @if($mem->status == 1)
                      <span class="badge badge-sm bg-gradient-success">Active</span>
                    @endif
                    @if($mem->status == 0)
                      <span class="badge badge-sm bg-gradient-danger">Inactive</span>
                    @endif
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ date('M d, Y', strtotime($mem->from_year)) }} - {{ date('M d, Y', strtotime($mem->to_year)) }}</span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-sm-6 mt-4">
        <div class="card">
          <div class="card-header pb-0 px-3 text-center">
            <h6 class="">Vision</h6>
          </div>
          <div class="card-body p-3">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex p-4 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <span class="text-s">{{ $vision }}</span>
                </div>
              </li>
            </ul>
          </div>
          
          <div class="card-header pb-0 px-3 text-center">
            <h6 class="">Mission</h6>
          </div>
          <div class="card-body p-3">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex p-4 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <span class="text-s">{{ $mission }}</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </div>
</div>

@endsection
@push('dashboard')
  
@endpush

