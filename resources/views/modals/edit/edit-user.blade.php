<!-- The Modal -->
<div class="modal fade" id="edituserModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processinguser'></div>
                    <form id="edituser" action="">
                        @csrf
                        <input name="userid" id="userid" type="hidden" class="form-control">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="edit-name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input id="edit-name" name="name" class="form-control" type="text" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="edit-email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input id="edit-email" name="email" class="form-control" type="email" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="edit-phone" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input id="edit-phone" name="phone" class="form-control" type="text" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="edit-address" class="form-label">Address <span class="text-danger">*</span></label>
                                    <input id="edit-address" name="address" class="form-control" type="text" placeholder="" required>
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