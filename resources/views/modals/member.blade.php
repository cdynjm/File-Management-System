<!-- The Modal -->
<div class="modal fade" id="creatememberModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create SB Member</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processing-member'></div>
                    <form id="registermember" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input id="lastname" name="lastname" class="form-control" type="text" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input id="firstname" name="firstname" class="form-control" type="text" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="birthdate" class="form-label">Birthdate <span class="text-danger">*</span></label>
                                    <input id="birthdate" name="birthdate" class="form-control" type="date" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                    <input id="address" name="address" class="form-control" type="text" placeholder="" required>
                                </div>
                               
                                <div class="form-group">
                                    <label for="civil" class="form-label">Civil Status <span class="text-danger">*</span></label>
                                    <select class="form-control" name="civil" id="civil">
                                        <option value="Single">Single</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Married">Married</option>
                                        <option value="Separated">Separated</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                    <input id="position" name="position" class="form-control" type="text" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="LGBTQIA+">LGBTQIA+</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="form-control" name="status" id="status">
                                        <option value='1'>Active</option>
                                        <option value='0'>Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group text-center">
                                    <label for="" class="form-label">Term</label>  
                                </div>

                                <div class="form-group">
                                    <label for="from_year" class="form-label">From <span class="text-danger">*</span></label>
                                    <input id="from_year" name="from_year" class="form-control" type="date" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="to_year" class="form-label">To <span class="text-danger">*</span></label>
                                    <input id="to_year" name="to_year" class="form-control" type="date" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="photo" class="form-label">Upload Photo <span class="text-danger">*</span></label>
                                    <input id="photo" name="photo" class="form-control" type="file"  required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success"> Add Member</button>
                            </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 