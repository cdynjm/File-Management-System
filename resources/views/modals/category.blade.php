<!-- The Modal -->
<div class="modal fade" id="createcategoryModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Category</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processing-category'></div>
                    <form id="registercategory" action="">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                    <input id="category" name="category" class="form-control" type="text" placeholder="" required>
                                    <input name="parent_id" class="form-control" type="hidden" placeholder="" value='{{ $folderid }}' required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success"> Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 