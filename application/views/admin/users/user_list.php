  
 <section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fa fa-list"></i> &nbsp; Users List</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/users/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New User</a>
        </div>
        
      </div>
    </div>
  </div> 

   <div class="box">
    <div class="box-header">
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="na_datatable" class="table table-bordered table-striped" width="100%">
        <thead>
        <tr>
          <th>User Name</th>
          <th>Email</th>
          <th>Mobile No.</th>
          <th>Group/Role</th>
          <th>Status</th>
          <th style="width: 150px;" class="text-right">Action</th>
        </tr>
        </thead>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  

<!-- Modal -->
<div id="confirm-delete" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>As you sure you want to delete.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>

  </div>
</div> 

<script>
  //---------------------------------------------------
  var table = $('#na_datatable').DataTable( {
      "processing": true,
      "serverSide": true,
      "ajax": "<?=base_url('admin/users/datatable_json')?>",
      "order": [[0,'asc']],
      "columnDefs": [
        { "targets": 0, "name": "username", 'searchable':true, 'orderable':true},
        { "targets": 1, "name": "email", 'searchable':true, 'orderable':true},
        { "targets": 2, "name": "mobile_no", 'searchable':true, 'orderable':true},
        { "targets": 3, "name": "role", 'searchable':false, 'orderable':false},
        { "targets": 4, "name": "is_admin", 'searchable':true, 'orderable':true},
        { "targets": 5, "name": "Action", 'searchable':false, 'orderable':false,'width':'100px'}
      ]
    });
</script>