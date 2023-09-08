<table class="table align-items-center mb-0" id="member-search-result">
    <thead>
    <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Term</th>
        @if(Auth::user()->type == 1)  
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
        @endif
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

        <td hidden memberid='{{ $mem->id }}'></td>
        <td hidden name='{{ $mem->name }}'></td>
        <td hidden birthdate='{{ $mem->birthdate }}'></td>
        <td hidden address='{{ $mem->address }}'></td>
        <td hidden civil_status='{{ $mem->civil_status }}'></td>
        <td hidden position='{{ $mem->position }}'></td>
        <td hidden gender='{{ $mem->gender }}'></td>
        <td hidden status='{{ $mem->status }}'></td>
        <td hidden from_year='{{ $mem->from_year }}'></td>
        <td hidden to_year='{{ $mem->to_year }}'></td>
        <td hidden photo='{{ $mem->photo }}'></td>

        @if(Auth::user()->type == 1)  
        <td class="text-center">
        <a href="#" id="edit-mem" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit">
            <i class="fas fa-user-edit text-secondary"></i>
        </a>
        <a href="#" id="delete-mem" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete">
            <i class="cursor-pointer fas fa-trash text-secondary"></i>
        </a> 
        </td>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>