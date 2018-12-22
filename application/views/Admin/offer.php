

            <div class="animated fadeIn">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>OFFER Form</strong> Elements
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?php echo base_url('Submit/offer');?>" method="post" enctype="multipart/form-data"  class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Username</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="TITLE" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                     
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Discription</label></div>
                                                <div class="col-12 col-md-9"><textarea name="DISCRIPTION" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                            </div>
                                             
                                             <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date Start</label></div>
                                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="START_TIME" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date End</label></div>
                                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="END_TIME" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>  
                                  
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="PATH" class="form-control-file"></div>
                                                </div>
                                                <!-- <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                                    <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                                </div> -->
                                                       
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>

                                                     </form>
                                                </div>
        
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="<?php echo base_url('');?>assets/Admin/vendors/jquery/dist/jquery.min.js"></script>
                            <script src="<?php echo base_url('');?>assets/Admin/vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="<?php echo base_url('');?>assets/Admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="<?php echo base_url('');?>assets/Admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="<?php echo base_url('');?>assets/Admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="<?php echo base_url('');?>assets/Admin/js/main.js"></script>
</body>
</html>
