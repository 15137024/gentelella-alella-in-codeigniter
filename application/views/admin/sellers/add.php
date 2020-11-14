
<div class="page-title">
  <div class="title_left">
    <h3></h3>
  </div>

</div>
<div class="clearfix"></div>
<div class="row" style="background: white">
<div class="x_title">
    <h3> <?= $small_title ?> </h3>
<div class="clearfix"></div>
</div>
<div class="x_content">
    <br />
    <form id="form" class="form-horizontal form-label-left">

        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="first_name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="last-name" name="last_name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Company <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="company" name="company" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">FICA Doc <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="url" id="doc" name="fica_doc" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Quality Check Pics <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="url" id="qc_pic_link" name="qc_pic_link" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Select Bank<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control">
                    <option value="1">Bank 1</option>
                    <option value="2">Bank 2</option>
                    <option value="3">Bank 3</option>
                    <option value="4">Bank 4</option>
                </select>
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">BANK ACC NO<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="bank_account_num" required="required" class="form-control" >
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bank Branch<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="bank_account_num" required="required" class="form-control" >
            </div>
        </div>
        <div class="form-group item">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Foreign<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control">
                    <option value="1">No</option>
                    <option value="2">Yes</option>
                </select>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="button" id="send-button" class="btn btn-success">Submit</button>
                <button class="btn btn-primary" type="button">Cancel</button>
            </div>
        </div>
    </form>
  </div>
  </div>
  <script type="text/javascript">
      $(document).ready(function(){
        $('#send-button').on('click' , function(){
            var formData = 
        });

      });

  </script>