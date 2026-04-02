<?php session_start();   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width initial-scale=1.0">
      <title >Media </title>
      <?php include('header.php');  ?>
      <!-- END SIDEBAR-->
      <div class="wrapper content-wrapper">
         <div id="result_message" class="message">
         </div>
         <!--START PAGE CONTENT-->
         
         
		  <div class="row">
						<div class="col-md-6">
							   <div class="page-heading">
									<h1 class="page-title">Media</h1>
								</div>
		 
						</div>
						<div class="col-md-6" style="margin-top:20px;text-align:right">
						      <a class="btn btn-success" data-toggle="modal" data-target="#AddMediaModal" href="javascript:;">Add Media</a>
						</div>
		</div>
		 
		 
		 
		 
		 <div class="page-content fade-in-up">
            <div class="ibox">
               <div class="ibox-body">
                  <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover example-table1" >
                        <thead>
                           <tr>
                              <th  style="width:5%">ID </th>
                              <th  style="width:25%">Media</th>
                              <th  style="width:15%">Link</th>
                              <th  style="width:20%">Uploaded At</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php  $count =1;
                               $sql = "select * from media order by id desc";
                              
                              
                              $result= mysqli_query($conn, $sql);
                              
                              while ($row = mysqli_fetch_assoc($result)) {
                               $media = '';
								$media_url = '';
								if(!empty($row['media_name'])){ 
									$media_url = BASEURL.'assets/images/blog/'.$row['media_name'];
									
									if($row['extension'] == 'pdf'){
										$media = '<a target="_blank" href="'.$media_url.'" style="width:100px">'.$row['media_name'].'</a>';
									}else{
										$media = '<img class="showimg" src="'.$media_url.'" style="max-width:100px">';
									}
									
									
								}
				
                              ?>
                           <tr>
                              <td style="width:1%!important"><?php echo $count; ?></td>
                              <td><?php echo $media; ?></td>
                              <td><?php echo '<i class="fa fa-copy copy-icon"  style="cursor:pointer; font-size:20px" data-url="'.$media_url.'" onclick="copyToClipboard(this)"> </i>'; ?></td>

                              <td><?php echo date('d-m-Y H:i:s',strtotime($row['created_at'])); ?></td>
                              
                           </tr>
                           <?php $count++;
                              } 
                              mysqli_free_result($result);
                              
                              
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <style type="text/css">
            #results { padding:20px; border:1px solid; background:#ccc; }
         </style>
         <footer class="page-footer" id="footer">
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            <div class="pull-right"><a class="link-blue" href="javascript:;"></a></div>
            <?php echo date('Y'); ?> © <b><?php echo WEBSITE_NAME; ?></b>
         </footer>
      </div>
      </div>
      <!-- START SEARCH PANEL-->  
      <!-- END SEARCH PANEL-->
      <!-- BEGIN PAGA BACKDROPS-->
      <div class="sidenav-backdrop backdrop"></div>
      <div class="preloader-backdrop">
         <div class="page-preloader">Loading</div>
      </div>
      <!-- END PAGA BACKDROPS-->
      <!-- Session-timeout modal-->
      <div class="modal fade" id="session-dialog">
         <div class="modal-dialog" style="width:400px;" role="document">
            <div class="modal-content">
               <div class="modal-header bg-silver-100">
                  <h4 class="modal-title">AUTOLOGOUT</h4>
                  <button class="close" data-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="text-center m-b-20"><i class="ti-lock" style="font-size:90px"></i></div>
                  <p class="text-center m-b-20">You are about to be signed out due to inactivity.</p>
                  <div id="timeout-reset-box" style="display:none;">
                     <div class="form-group"><button class="btn btn-danger btn-block" id='timeout-reset'>Deactivate</button></div>
                  </div>
                  <div id="timeout-activate-box">
                     <div class="form-group">
                        <label>Minutes</label>
                        <input class="form-control" type="text" placeholder="Minutes" id="timeout-count">
                     </div>
                     <div class="form-group"><button class="btn btn-success btn-block" id='timeout-activate'>Activate</button></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Session-timeout modal-->
      
	  
	  <div class="modal fade" id="AddMediaModal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <a   data-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
            </a>
            <h5 class="modal-title">Add Media</h5>
         </div>
         <form action="save-media.php" method="post" enctype="multipart/form-data">
           <div class="modal-body">
               <div class="row">
                  <div class="col-md-12">
                     <table id="attributeTable" class="table table-hover table-bordered table-striped">
                        <tbody>
                           <tr>
                              <th>File</th>
                              <th>Actions</th>
                           </tr>
                           <tr class="blockIdWrap">
                              <td>
                                 <input type="file" class="form-control"  name="files[]">
                              </td>
                              <td></td>
                           </tr>
                     </table>
                     <input type="button" id="addMediaRow" value="Add More">
                  </div>
               </div>
            </div>
			<div class="modal-footer">
			   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			   <button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>	
		</div>	
		</div>	
		</div>	
			
			
			
			
	  <table class="table table-hover table-bordered table-striped mediasamplerow" style="display:none;">
   <tbody>
      <tr class="blockIdWrap">
         <td>
            <input type="file" class="form-control"  name="files[]">
         </td>
         <td>
            <a title="Remove" class="btn btn-sm red mediarowremove" href="javascript:;"><i class="fa fa-times"></i></a>
         </td>
      </tr>
   </tbody>
</table>
	  <!-- CORE PLUGINS-->
      <?php include('js-files.php'); ?>
      <script type="text/javascript">
         $('.example-table1,.example-tablebill').DataTable({
                 pageLength: 10,
                 fixedHeader: true,
                 responsive: true,
                 dom: '<"html5buttons"B>lTfgitp',
                 buttons: [
         
                /*  'copyHtml5',
         
                   'excelHtml5',
         
                   'csvHtml5',  */
         
                   'print',
         
                   'excelHtml5'
         
                 ],
         
         
         
                 language: {
                   buttons: {
                     colvis: '<i class="ti-view-grid"></i>'
         
                   }
         
                 }
         
             });
         
      
   $(document).on('click', '#addMediaRow', function () {   
          var row = jQuery('.mediasamplerow tr').clone(true);
          row.appendTo('#attributeTable');        
      }); 
   
   $('.mediarowremove').on("click", function() {
          $(this).parents("tr").remove();
      });	
   function copyToClipboard(element,) { 
      
   var text = $(element).attr('data-url');
   
   navigator.clipboard.writeText(text).then(function() {
   
          // Change icon to check mark
          element.classList.remove("fa-copy");
          element.classList.add("fa-check");
          element.style.color = "green";
   
          // Revert back after 4 seconds
          setTimeout(function() {
              element.classList.remove("fa-check");
              element.classList.add("fa-copy");
              element.style.color = "black";
          }, 4000);
   
      });
   }
</script>
	  
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
      </body> 
</html>