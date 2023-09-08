<!-- The Modal -->
<div class="modal fade" id="editcategoryModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processingcategory'></div>
                    <form id="editcategory" action="">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="categoryname" class="form-label">Category <span class="text-danger">*</span></label>
                                    <input id="categoryname" name="category" class="form-control" type="text" placeholder="" required>
                                    <input id="folderid" name="folderid" class="form-control" type="hidden" placeholder="" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success"> Rename</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 