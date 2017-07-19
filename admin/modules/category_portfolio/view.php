<section class="content-header">
  <h1>
    <i class="fa fa-desktop icon-title"></i> Category portfolio
  
  
   <button class="btn btn-primary btn-social pull-right" data-toggle="modal" data-target="#add_new_record_modal"><i class="fa fa-plus"></i> Add</button>
  </h1>
  

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">


                         <div class="col-md-12">
                            <div class="pull-right">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="records_content_portfolio"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Data</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" id="name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Name Seo</label>
                    <input type="text" id="name_seo" placeholder="field ini akan otomatis terisi ketika anda mengetikan nama kategori. Tentu saja anda dapat mengeditnya" class="form-control"/>
                </div>
                

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecordPortfolio()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_portfolio_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update Data</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">Name</label>
                    <input type="text" id="update_name" placeholder="FName" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name"> Name Seo</label>
                    <input type="text" id="update_name_seo" placeholder="field ini akan otomatis terisi ketika anda mengetikan nama kategori. Tentu saja anda dapat mengeditnya" class="form-control"/>
                </div>

               

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateCategoryDetailsPortfolio()" >Save Changes</button>
                <input type="hidden" id="hidden_portfolio_id">
            </div>
        </div>
    </div>
</div>


