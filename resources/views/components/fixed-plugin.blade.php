<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fas fa-user-friends py-2"></i>
    </a>
    <div class="col-md-6 mt-4">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Current SB Members</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
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
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
