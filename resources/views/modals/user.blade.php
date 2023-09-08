<!-- The Modal -->
<div class="modal fade" id="createuserModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create User</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processing-user'></div>
                    <form id="registeruser" action="">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input id="lastname" name="lastname" class="form-control" type="text" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input id="firstname" name="firstname" class="form-control" type="text" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input id="email" name="email" class="form-control" type="email" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                    <input id="password" name="password" class="form-control" type="password" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input id="phone" name="phone" class="form-control" type="text" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                    <input id="address" name="address" class="form-control" type="text" placeholder="" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success"> Add User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 