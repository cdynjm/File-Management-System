<table class="table align-items-center mb-0" id="search-user-result">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No.
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Name
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Email
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Contact No.
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                role
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Creation Date
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
    @php $cnt = 1; @endphp
    @foreach($users as $us)
        <tr>
            <td class="ps-4" userid='{{ $us->id }}'>
                <p class="text-xs font-weight-bold mb-0">{{ $cnt }}</p>
            </td>
            <td class="text-left" name='{{ $us->name }}'>
                <p class="text-xs font-weight-bold mb-0">{{ $us->name }}</p>
            </td>
            <td class="text-center" email='{{ $us->email }}'>
                <p class="text-xs font-weight-bold mb-0">{{ $us->email }}</p>
            </td>
            <td class="text-center" phone='{{ $us->phone }}'>
                <p class="text-xs font-weight-bold mb-0">{{ $us->phone }}</p>
            </td>
            <td class="text-center" address='{{ $us->location }}'>
                @if($us->type == 1) 
                    <p class="text-xs font-weight-bold mb-0">Admin</p>
                @endif
                @if($us->type == 0) 
                    <p class="text-xs font-weight-bold mb-0">User</p>
                @endif
            </td>
            <td class="text-center">
                <span class="text-secondary text-xs font-weight-bold">{{ date('F d, Y', strtotime($us->created_at)) }}</span>
            </td>
            <td class="text-center">
                <a href="#" id="edit-account" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                    <i class="fas fa-user-edit text-secondary"></i>
                </a>
                <a href="#" id="delete-account" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                    <i class="cursor-pointer fas fa-trash text-secondary"></i>
                </a> 
            </td>
        </tr>
        @php $cnt += 1; @endphp
        @endforeach
    </tbody>
</table>