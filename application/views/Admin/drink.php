
            <div class="animated fadeIn">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Drink Form</strong> Elements
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?php echo base_url('Submit/Drink');?>" method="post" enctype="multipart/form-data"  class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">DRINK TYPE</label></div>
                                                 <div class="col-12 col-md-9">
                                                <div class="card">
                                     
                                     

                                            <select data-placeholder="Choose a Country..." class="form-control" tabindex="1" name="DRINK_TYPE" required>
                                                <option value="">SELECT</option><?php foreach($DIM_DRINK_TYPES as $value){?>
                                                <option value="<?php echo $value->DRINK_TYPE_ID;?>"><?php echo $value->DRINK_TYPE;?></option> 
                                            <?php } ?>                                    
                                            </select>
                                    
                                    </div>
                                </div>
                                      </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Brand Name</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="DRINK_NAME" placeholder="Text" class="form-control"><small class="form-text text-muted">Brand Name</small></div>
                                            </div>
                                     
                                         <!--    <div class="row form-group">
                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Discription</label></div>
                                                <div class="col-12 col-md-9"><textarea name="DISCRIPTION" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                            </div> -->
                                             
                                            <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="DRINK_IMG" class="form-control-file"></div>
                                            </div>
                                           <!--   <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                                    <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                             </div>
                                                        -->
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
