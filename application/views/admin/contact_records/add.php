<div class="page-title">
    <div class="title_left">
        <h3></h3>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= $small_title ?></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?php if($this->session->flashdata('error')) { ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <div id="result"></div>
                <form id="form" class="form-vertical" enctype="multipart/form-data">
                     <input type="hidden" value="<?php if(isset($sellers) && !empty($sellers['id'])){ echo $sellers['id'];} ;?>" name="seller_id">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="form-group item">
                                <label for="first-name">First Name <span class="required">*</span>
                                </label>
                                <input type="text" id="first-name" name="firstname" required="required" class="form-control" value="<?php if(isset($sellers) && !empty($sellers['firstname'])){ echo $sellers['firstname'];}?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group item">
                                <label for="last-name">Last Name <span class="required">*</span>
                                </label>
                                <input type="text" id="last-name" name="lastname" required="required" class="form-control" value="<?php if(isset($sellers) && !empty($sellers['lastname'])){ echo $sellers['lastname'];}?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="form-group item">
                                <label for="last-name">Company <span class="required">*</span>
                                </label>
                                <input type="text" id="company" name="company_name" required="required" class="form-control" value="<?php if(isset($sellers) && !empty($sellers['company_name'])){ echo $sellers['company_name'];}?>">
                            </div>
                        </div>
                    <div class="item form-group">    
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="policy_english_title">FICA Doc
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file"   id="image" name="fica_doc_link[]"  multiple/ accept="image/*" value="<?php if(isset($sellers) && !empty($sellers['fica_doc_link'])){ echo $sellers['fica_doc_link'];}?>">
                            <?php 
                                if (isset($files)) {
                                    foreach ($files as $key => $value) {?>
                                            <div>
                                                <a target="_blank" href="<?= base_url($value['path']."/". $value['name']); ?>"><?php echo $value['name']?></a>

                                                    <a class="btn" onclick="del(this, <?= $value['id']; ?> , <?= $sellers['id']; ?>)"><i class="fa fa-close"></i></a>
                                            </div>
                                            
                               <?php }?>
                               <?php }?>
                        </div>
                    </div>

                    </div>
                    <div class="form-group row">
                        <div class="form-group col-sm-6 item">
                            <label for="last-name">Quality Check Pics <span class="required">*</span>
                            </label>
                            <input type="url" id="qc_pics_link" name="qc_pics_link" required="required" class="form-control" value="<?php if(isset($sellers) && !empty($sellers['qc_pics_link'])){ echo $sellers['qc_pics_link'];}?>">
                        </div>
                        <div class="col-sm-6 form-group item">
                            <label for="last-name">Select Bank<span class="required">*</span>
                            </label>
                            <select class="form-control" name="bank_id" required="required">
                                <?php if(!empty($banks)) foreach ($banks as $bank_key => $bank_val) { ?>
                                    <option value="<?= $bank_val['id'] ?>"><?= $bank_val['bank_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="form-group item">
                                <label for="last-name">BANK ACC NO<span class="required">*</span>
                                </label>
                                <input type="text" name="bank_account_no" required="required" class="form-control"value="<?php if(isset($sellers) && !empty($sellers['bank_account_no'])){ echo $sellers['bank_account_no'];}?>" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group item">
                                <label for="last-name">Bank Branch<span class="required">*</span>
                                </label>
                                <input type="text" name="bank_branch" required="required" class="form-control" value="<?php if(isset($sellers) && !empty($sellers['bank_branch'])){ echo $sellers['bank_branch'];}?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="form-group item">
                                <label for="last-name">Foreign<span class="required">*</span>
                                </label>
                                <select class="form-control" name="is_foreign">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group button-row">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                            <button type="button" id="send-button" class="btn btn-success">Submit</button>
                            <a class="btn btn-primary" href="<?= BASE_URL ?>admin/Sellers" type="button">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
            $('.loader').attr("class" , "loader show");
    $('#send-button').on('click' , function(){
            var formData = new FormData($('#form')[0]);
            if(!validator.checkAll($('#form')[0])){
                // $('.loader').attr("class" , "loader hide");
            }else{
                $.ajax({
                    url: '<?= BASE_URL ?>' + 'admin/Contact_records/'+'<?= $this->uri->segment(3) ?>',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                }).then(function(res){
                    // $('.loader').attr("class" , "loader hide");
                    var data = JSON.parse(res);
                    if(data.type){
                        window.location = '<?= BASE_URL ?>' + 'admin/Contact_records/';
                    }else{
                        $('#result').html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>'+data.msg+'</div>');
                    }
                });
            }
        });
});

 function del(a,b,c){
    $.ajax({
        url: '<?= BASE_URL ?>' + 'admin/Sellers/delete_doc',
        type: 'POST',
        data: {doc_id:b ,user_id:c},
         success: function (savingStatus) {
           
        },
    });
 }
</script>
