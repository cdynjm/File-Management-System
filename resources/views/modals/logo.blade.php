<!-- The Modal -->
<div class="modal fade" id="uploadprofileModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Profile Picture</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">  
                    <div class="alert alert-info" style="display: none;" id='processing-profile'></div>
                    <form id="uploadlogo" action="">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="profile" class="form-label">Choose Photo <span class="text-danger">*</span></label>
                                    <input id="profile" name="profile" onchange="viewPhoto(this);" class="form-control" type="file" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                 <div class="form-group">
                                    <img id="profile-picture" style="width: 200px; height: 200px; border-radius: 5px;" src="https://st4.depositphotos.com/4329009/19956/v/600/depositphotos_199564354-stock-illustration-creative-vector-illustration-default-avatar.jpg" alt="" />
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