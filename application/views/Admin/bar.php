


            <div class="animated fadeIn">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>ADD BAR</strong> Elements
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?php echo base_url('Submit/Bar');?>" method="post" enctype="multipart/form-data"  class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">PARTNER NAME</label></div>
                                        
                                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="PARTNER_NAME" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                                </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">PARTNER  SURNAME</label></div>
                                        
                                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="PARTNER_SURNAME" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                                </div>   


                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">BAR NAME</label></div>
                                        
                                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="BAR_NAME" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                                </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">BAR CONTACT</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="PARTNER_MOBILE_NUMBER" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                     
                                        <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">BAR EMAIL ID</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="PARTNER_EMAIL_ID" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">BAR ADDRESS</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="BAR_ADDRESS" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>

                                 <div class="row form-group">
                                     <div class="col col-md-3"><label class=" form-control-label">SELECT STATE</label></div><?php // print_r($DIM_CITIES);?>
                                                 <div class="col-12 col-md-9">
                                                <div class="card">
                                            <select data-placeholder="Choose a Country..." class="form-control" tabindex="1" name="STATE_NAME" required>
                                                <option value="">SELECT</option><?php foreach($DIM_STATES as $value){?>
                                                <option value="<?php echo $value->STATE_ID;?>"><?php echo $value->STATE_NAME;?></option> 
                                            <?php } ?>                                    
                                            </select>                                    
                                            </div>
                                        </div>
                                      </div>
                                  <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">SELECT CITY</label></div>
                                             <div class="col-12 col-md-9">
                                                <div class="card">
                                            <select data-placeholder="Choose a Country..." class="form-control" tabindex="1" name="CITY_NAME" required>
                                                <option value="">SELECT</option><?php foreach($DIM_CITIES as $value){?>
                                                <option value="<?php echo $value->CITY_ID;?>"><?php echo $value->CITY_NAME;?></option> 
                                            <?php } ?>                                    
                                            </select>
                                    
                                            </div>
                                        </div>
                                      </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">STREET </label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="STREET" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">LANDMARK</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="LANDMARK" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">PINCODE</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="PINCODE" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>                           
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="IMAGE_PATH" class="form-control-file"></div>
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
