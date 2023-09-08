<!-- The Modal -->
<div class="modal fade" id="createfileModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New File</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processing-file'></div>
                    <form id="registerfile" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input name="parent_id" class="form-control" type="hidden" placeholder="" value='{{ $folderid }}' required>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category" class="form-label">Category/Folder <span class="text-danger">*</span></label>
                                    @if($folderid != 0)
                                        <input id="category" name="category" class="form-control" type="text" value="{{ $foldername }}" readonly required>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="ordinance" class="form-label">Title of Ordinance <span class="text-danger">*</span></label>
                                    <input id="ordinance" name="ordinance" class="form-control" type="text"  required>
                                </div>

                                <div class="form-group">
                                    <label for="ordinancenumber" class="form-label">Ordinance Number<span class="text-danger">*</span></label>
                                    <input id="ordinancenumber" name="ordinancenumber" class="form-control" type="text"  required>
                                </div>

                                <div class="form-group">
                                    <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
                                    <select id="author" name="author" class="form-control" type="text"  required>
                                        <option value=''></option>
                                        @if($folderid != 0)
                                        @foreach ($authors as $auth)
                                            <option value='{{ $auth->id }}'>{{ $auth->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coauthor" class="form-label">Co-Author <span class="text-danger">*</span></label>
                                    <select id="coauthor" name="coauthor" class="form-control" type="text"  required>
                                        <option value=''></option>
                                        @if($folderid != 0)
                                        @foreach ($authors as $auth)
                                            <option value='{{ $auth->id }}'>{{ $auth->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="dateapproved" class="form-label">Date Approved <span class="text-danger">*</span></label>
                                    <input id="dateapproved" name="dateapproved" class="form-control" type="date" required>
                                </div>

                                <div class="form-group">
                                    <label for="file" class="form-label">Upload File <span class="text-danger">*</span></label>
                                    <input id="file" name="file" class="form-control" type="file"  required>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea id="description" name="description" class="form-control" type="text"  required></textarea>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success"> Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 