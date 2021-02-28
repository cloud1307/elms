
    <div class="modal fade" id="del_child<?php  echo $rows['child_id'];?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header alert-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title"><i class="fa fa-trash-o"></i> Warning!</h4>
              </div>
              <div class="modal-body">
                
                
				Are you sure you want to Delete <span class="label-primary label label-default"><?php echo $rows['child_name']; ?> </span> ?
				
              </div>
              <div class="modal-footer">
					<button type="button" class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
					<a href="query/delete_child_query.php?child_id=<?php echo $rows['child_id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
			</div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>