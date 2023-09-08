<table class="table align-items-center mb-0" id="category-search-result">
    <thead>
        <tr>
            <th width="8%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No.
            </th>
            <th width="40%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Category Name
            </th>
            <th width="8%" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No. of Files
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Creation Date
            </th>
            @if(Auth::user()->type == 1)
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Action
            </th>
            @endif
        </tr>
    </thead>
    <tbody>
    @php $cnt = 1; @endphp
    @foreach ($category as $cat)
        <tr>                                  
            <td class="ps-4" folderid="{{ $cat->id }}">
                <p class="text-xs font-weight-bold mb-0">{{ $cnt }}</p>
            </td>
            <td class="text-left" category="{{ $cat->category }}">
                <a href="{{ url('file-manager?id='.$cat->id) }}">
                    <p class="text-xs font-weight-bold mb-0">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                    <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                    </svg>
                    
                    {{ $cat->category }}</p>
                </a>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">
                    @php $cnt_fil = 0; @endphp
                    @foreach ($countfiles as $cf)
                        @if($cf->folder_id == $cat->id)
                        @php $cnt_fil += 1; @endphp  
                        @endif
                    @endforeach
                    {{ $cnt_fil }}
                </p>
            </td>
            <td class="text-center">
                <p class="text-xs font-weight-bold mb-0">{{ date('F d, Y', strtotime($cat->created_at)) }}</p>
            </td>
            @if(Auth::user()->type == 1)
            <td class="text-center">
                <a href="#" class="mx-3" id="edit-cat" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                    <i class="fas fa-user-edit text-secondary"></i>
                </a>
                <a href="#" class="mx-3" id="delete-cat" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                    <i class="cursor-pointer fas fa-trash text-secondary"></i>
                </a>
            </td>
            @endif
        </tr>                          
        @php $cnt += 1; @endphp
        @endforeach
    </tbody>
</table>