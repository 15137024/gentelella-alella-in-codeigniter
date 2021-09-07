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
                <div class="x_title_right">
                    <a class="btn btn-primary" style="float: right; margin:0" href="<?= BASE_URL.'admin/Contact_records/add' ?>"> <i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <div class="x_content">
                <?php if($this->session->flashdata('msg')) { ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?= $this->session->flashdata('msg'); ?>
                    </div>
                <?php } ?>
                <?php if($this->session->flashdata('error')) { ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <div id="result"></div>
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>jot ID</th>
                          <th>Title</th>
                          <th>Type</th>
                          <th>URL</th>
                          <th>Jot Created On</th>
                          <th>Imported On</th>
                          <th>Status</th>                         
                          <th>Question Imported Status</th>                         
                          <th>Action</th>                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($surveys)) { ?>
                            <?php  foreach ($surveys as $survey_key => $survey_val) { ?>
                                <tr>
                                    <td><?= $survey_key + 1 ?></td>
                                    <td><?= $survey_val['jot_id'] ?></td>
                                    <td><?= $survey_val['title'] ?></td>
                                    <td><?= $survey_val['jot_type'] ?></td>
                                    <td><?= $survey_val['jot_url'] ?></td>
                                    <td><?= date('Y-m-d' , strtotime($survey_val['jot_created_on'])) ?> </td>
                                    <td><?= date('Y-m-d' , strtotime($survey_val['created_on'])) ?></td>
                                    <td><?= $survey_val['jot_status'] ?></td>
                                    <td><?= ($survey_val['question_imported'] == 'yes')?'Imported':'No' ?></td>

                                    <td>
                                        <a target="_blank" href="<?= $survey_val['jot_url'] ?>" class="btn btn-xs btn-success"> <i class="fa fa-eye"></i> view </a>

                                        <a href="<?= BASE_URL.'admin/Dashboard/import_questions/'.$survey_val['jot_id'] ?>" class="btn btn-xs btn-success"> <i class="fa fa-refresh"></i> Import Question  </a>

                                        <a href="javascript:void(0)" class="btn btn-xs btn-info"><i class="fa fa-bolt"></i> Submissions  <span class="badge bg-white"><?= $survey_val['submission_count'] ?></span></a>

                                         <a href="<?= BASE_URL.'admin/Dashboard/set_submission_table/'.$survey_val['jot_id'] ?>" class="btn btn-xs btn-primary"><i class="fa fa-bolt"></i> Set Table</a>




                                       <!--  <a target="_blank" href="<?= BASE_URL.'/admin/Dashboard/import_questions/'.$survey_val['jot_id'] ?>" class="btn btn-xs btn-info"> <i class="fa fa-eye"></i> question format</a>
                                        <a target="_blank" href="<?= BASE_URL.'/admin/Dashboard/import_submissions/'.$survey_val['jot_id'] ?>" class="btn btn-xs btn-primary"> <i class="fa fa-eye"></i> Submission format</a> -->
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
   $('#datatable-responsive').DataTable()

});
</script>
