<!-- The Modal -->
<div class="modal fade" id="editfileModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit File</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processingfile'></div>
                    <form id="editfile" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input name="file_id" id="fileid" class="form-control" type="hidden" placeholder="" value='' required>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category" class="form-label">Category/Folder <span class="text-danger">*</span></label>
                                    @if($folderid != 0)
                                        <input id="category" name="category" class="form-control" type="text" value="{{ $foldername }}" readonly required>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="ordinancename" class="form-label">Title of Ordinance <span class="text-danger">*</span></label>
                                    <input id="ordinancename" name="ordinance" class="form-control" type="text"  required>
                                </div>

                                <div class="form-group">
                                    <label for="ordinancenumbername" class="form-label">Ordinance Number<span class="text-danger">*</span></label>
                                    <input id="ordinancenumbername" name="ordinancenumber" class="form-control" type="text"  required>
                                </div>

                                <div class="form-group">
                                    <label for="authorname" class="form-label">Author <span class="text-danger">*</span></label>
                                    <select id="authorname" name="author" class="form-control" type="text"  required>
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
                                    <label for="coauthorname" class="form-label">Co-Author <span class="text-danger">*</span></label>
                                    <select id="coauthorname" name="coauthor" class="form-control" type="text"  required>
                                        <option value=''></option>
                                        @if($folderid != 0)
                                        @foreach ($authors as $auth)
                                            <option value='{{ $auth->id }}'>{{ $auth->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="dateapprovedname" class="form-label">Date Approved <span class="text-danger">*</span></label>
                                    <input id="dateapprovedname" name="dateapproved" class="form-control" type="date" required>
                                </div>

                                <div class="form-group">
                                    <label for="oldfile" class="form-label">Old File <span class="text-danger"></span></label>
                                    <input id="oldfile" name="oldfile" class="form-control" type="text" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="file" class="form-label">Upload New File <span class="text-danger"></span></label>
                                    <input id="file" name="file" class="form-control" type="file">
                                </div>

                                <div class="form-group">
                                    <label for="descriptionname" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea id="descriptionname" name="description" class="form-control" type="text"  required></textarea>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success"> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 