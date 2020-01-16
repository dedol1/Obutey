

<div class="modal fade" id="GetPointsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"><form action="#" method="GET">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Get Referal Points</h4>
                                        </div>
                                        <div class="modal-body">
                                        Get referal points by completing a transaction of <strong><b>GHC100.00</b></strong> to an assigned user`s payment account.<br />
                                            
        <table class="table table-hover">
          <thead>
            <tr>
              <th row="2" class="text-primary"> Must Pay To</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
            <th>Registered Name</th>
              <td><?= $powerGetWallet['reg_name']; ?></td>
            </tr>
            <tr>
            <th>Registered Number</th>
              <td><?= $powerGetWallet['reg_number']; ?></td>
            </tr>
            <tr>
            <th>Payment Method</th>
              <td><?= $powerGetWallet['method_id']; ?></td>
            </tr>
            <tr>
            <th>Account Type</th>
              <td><?= $powerGetWallet['acc_type']; ?></td>
            </tr>

            
          </tbody>
           
        </table>
<p>After Payment, Please Screenshot or take a picture of the transaction statement sent to you by your payment provider. 
          
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large-modal">Get Points</button> -->
                                        
                                        </center>
                                            <br/>                                                       
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                                            <a  class="btn btn-primary" href="?try=<?= $powerGetWallet['user_id']; ?>"><i class="fa fa-check-circle"></i> Continue</a>
                                           
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                 </div> 
                                <!-- /.modal-dialog -->
                             </div> 


                 
                             






<!-- 
<script>
 
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

</script> -->


<script>  
 $(document).ready(function(){ 
  // $('#mod-frm').html('<form action="" method="post" enctype="multipart/form-data">'+$('#mod-frm').html()+'</form>');
var upcount = 0; 
      $('.view_data').click(function(){  
           var boomer_id = $(this).attr("id");
           var pay_dir = $(this).attr("paydir");

           if (pay_dir == "to") {
            var paymsg = "After Payment, Please Screenshot or take a picture of the transaction statement sent to you by your payment provider as proof and then click on Finalize and Add Proof. ";

            var DetailFootmsg = '<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button><a class="btn btn-primary proof_data" id="'+boomer_id+'" paydir = "'+pay_dir+'"><i class="fa fa-check-circle"></i> Finalize</a>';
           } else {
            var paymsg = "After Recieving Payment, Please check take Screenshot or picture of the transaction statement added as proof by clicking on Confirm and Approve if its right. ";

            var DetailFootmsg = '<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button><a class="btn btn-primary approve_data" id="'+boomer_id+'" paydir = "'+pay_dir+'"><i class="fa fa-check-circle"></i> Confirm</a>';
           }
           $.ajax({  
                url:"../includes/models/requestsDetail.php",  
                method:"post",  
                data:{boomer_detail:boomer_id},  
                success:function(data){  
                     $('#boomer_detail_tb').html(data);
                     $('#dirmsg').html(paymsg);
                     $('#BoomDetails-Footer').html(DetailFootmsg);  
                     
                     $('#RequestDetailModal').modal("show");  
                }  
           });  
      });  

      $('.proof_data').click(function(){  
           var boomer_id = $(this).attr("id");
           var req = $(this).attr("req");
           $('#mod-frm').html('<form action="" method="POST" enctype="multipart/form-data">'+$('#mod-frm').html()+'</form>');
          //  var frm_head = '<form action="" method="post" enctype="multipart/form-data">';

          // var frm_foot = '</form>';

          // var frm_content = '<form action="" method="post" enctype="multipart/form-data">'+$('#mod-frm').html()+'</form>';


          //  if (pay_dir == "to") {
          //   var paymsg = "After Payment, Please Screenshot or take a picture of the transaction statement sent to you by your payment provider as proof and then click on Finalize and Add Proof. ";

          //   var DetailFootmsg = '<a class="btn btn-primary proof_data" id="<?= $boomer_id ?>" paydir = "<?= $pay_direction ?>"><i class="fa fa-check-circle"></i> Finalize</a>';
          //  } else {
          //   var paymsg = "After Recieving Payment, Please check take Screenshot or picture of the transaction statement added as proof by clicking on Confirm and Approve if its right. ";

          //   var DetailFootmsg = '<a class="btn btn-primary approve_data" id="<?= $boomer_id ?>" paydir = "<?= $pay_direction ?>"><i class="fa fa-check-circle"></i> Confirm</a>';
          //  }
           $.ajax({  
                url:"../includes/models/requestsDetail.php",  
                method:"post",  
                data:{boomer_detail:boomer_id},  
                success:function(data){  
                    // $('#frm-head').html(frm_head);
                    // $('#frm-foot').html(frm_foot);
                     
                    //  $('#dirmsg').html(paymsg);
                    //  $('#BoomDetails-Footer').html(+DetailFootmsg);  
                    if(upcount == 0){
                      $('.dropify').dropify();
                    $('.dropify-fr').dropify({
			messages: {
				default: 'Drag and Drop here or Click To Add Proof',
				replace: 'Drag and Drop here or Click To Replace Proof',
				remove: 'Remove Proof',
				error: 'Error, The file is too Big'
			} 
		});
                  upcount++;
                    } else {
        var er_msg = '<a href=""> <i class="fa fa-info-o"></i> Reload Page if u have any problems changing proofs</a>';
      }               
      
                    $('#boo_id').val(boomer_id);
                    $('#req').val(req);
                    $('#er_msg').html(er_msg);
                     $('#RequestProofModal').modal("show");  
                }  
           });  
      });

      // $('#submit-proof').click(function(){  
      //      var boomer_id = $(this).attr("id");
      //     //  var img = $("#fileToUpload").files[0].name;
      //      var form_data = new FormData();
      //      form_data.append("files[]", $("#fileToUpload").files[0]);
      //      console.log(form_data);
           
      //      $.ajax({  
      //           url:"../includes/models/requestsDetail.php",  
      //           method:"get",  
      //           enctype:"multipart/form-data",
      //           data:{submit_proof:boomer_id, fileToUpload:form_data},  
      //           success:function(data){  
      //               // $('#frm-head').html(frm_head);
      //               // $('#frm-foot').html(frm_foot);
      //               // $('#mod-frm').html('<form action="" method="post" enctype="multipart/form-data">'+$('#mod-frm').html()+'</form>');
      //               //  $('#dirmsg').html(paymsg);
      //               //  $('#BoomDetails-Footer').html(+DetailFootmsg);  
                     
      //               //  $('#RequestProofModal').modal("show");  
      //               console.log("Image Uploaded");
      //           }  
      //      });  
      // });



      $('.approve_data').click(function(){  
           var boomer_id = $(this).attr("id");
          //  var pay_dir = $(this).attr("paydir");
          $('#approve-foot').html('<form action="" method="POST" >'+$('#approve-foot').html()+'</form>');
          var req = $(this).attr("req");

          var img_src = "../static/proofs/"

          //  if (pay_dir == "to") {
          //   var paymsg = "After Payment, Please Screenshot or take a picture of the transaction statement sent to you by your payment provider as proof and then click on Finalize and Add Proof. ";

          //   var DetailFootmsg = '<a class="btn btn-primary proof_data" id="<?= $boomer_id ?>" paydir = "<?= $pay_direction ?>"><i class="fa fa-check-circle"></i> Finalize</a>';
          //  } else {
          //   var paymsg = "After Recieving Payment, Please check take Screenshot or picture of the transaction statement added as proof by clicking on Confirm and Approve if its right. ";

          //   var DetailFootmsg = '<a class="btn btn-primary approve_data" id="<?= $boomer_id ?>" paydir = "<?= $pay_direction ?>"><i class="fa fa-check-circle"></i> Confirm</a>';
          //  }
           $.ajax({  
                url:"../includes/models/requestsDetail.php",  
                method:"post",  
                data:{req_detail:req},  
                success:function(data){  
                    str = data;
                    str_data = str.substring(1, str.length);
                    $('#boomer_de').html(str_data);
                    $('#boom_id').val(boomer_id);
                    $('#reqn').val(req);

                    //  $('#dirmsg').html(paymsg);
                    //  $('#BoomDetails-Footer').html($('#BoomDetails-Footer').html()+DetailFootmsg);  
                    $("#img_proof").attr("src",img_src+str_data);
                     $('#RequestApproveModal').modal("show");  
                }  
           });  
      });
 });  
 </script>
<!-- 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->


<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div> -->


<div class="modal fade" id="RequestReportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"><form action="#" method="GET">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">RequestReportModal</h4>
                                        </div>
                                        <div class="modal-body">
                                        Get referal points by completing a transaction to an assigned user`s payment account.<br />
                                            
        <table class="table table-hover">
          <thead>
            <tr>
              <th row="2" class="text-primary"> Must Pay To</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
            <th>Registered Name</th>
              <td><?= $powerGetWallet['reg_name']; ?></td>
            </tr>
            <tr>
            <th>Registered Number</th>
              <td><?= $powerGetWallet['reg_number']; ?></td>
            </tr>
            <tr>
            <th>Payment Method</th>
              <td><?= $powerGetWallet['method_id']; ?></td>
            </tr>
            <tr>
            <th>Account Type</th>
              <td><?= $powerGetWallet['acc_type']; ?></td>
            </tr>
           
          </tbody>
        </table>

                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large-modal">Get Points</button> -->
                                        
                                        </center>
                                            <br/>                                                       
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                                            <a  class="btn btn-primary" href="?try=<?= $powerGetWallet['user_id']; ?>"><i class="fa fa-check-circle"></i> Continue</a>
                                           
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                 </div> 
                                <!-- /.modal-dialog -->
                             </div> 


                             <div class="modal fade" id="RequestDetailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"><form action="#" method="GET">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Detail Model</h4>
                                        </div>
                                        <div class="modal-body">
                                        The payment Detail of the Assigned Boomer is as follows<br />
                                            
        <table class="table table-hover">
          <thead>
            <tr>
              <th row="2" class="text-primary"> Payment Details</th>
              
            </tr>
          </thead>
          <tbody id="boomer_detail_tb">
            <!-- // -->
           
          </tbody>
        </table>
        <p id="dirmsg"> </p>

                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large-modal">Get Points</button> -->
                                        
                                        </center>
                                            <br/>                                                       
                                            
                                        </div>
                                        <div class="modal-footer" id="BoomDetails-Footer">
                                            
                                           
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                 </div> 
                                <!-- /.modal-dialog -->
                             </div> 



                             <div class="modal fade" id="RequestApproveModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header"><form action="#" method="GET">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Approve</h4>
                                        </div>
                                        <div class="modal-body">
                                        <!-- <h3>Transaction Proof</h3> -->
                                        <strong><b>Is this screenshot or Picture the transaction you recieved from your assigned Boomer?</b><strong><br/><br/>
                                            
        <img src="" class="img img-responsive img-fluid" id="img_proof"/> <br/>

        Approve the request after verifying that the transaction was made to you and this is the proof of the transaction by the assigned Boomer.<br/>
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large-modal">Get Points</button> -->
                                        
                                        </center>
                                            <!-- <br/> <p id="boomer_de"></p>                                                       -->
                                            
                                        </div>
                                        <div class="modal-footer" id="approve-foot">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                                            <input id="boom_id" type="hidden" class="form-control" value = "" name="submit_approve"/>
                                            <input id="reqn" type="hidden" class="form-control" value = "" name="req"/>
                                            <button id="submit-approve" type="submit-approve" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Approve</button>
                                           
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                 </div> 
                                <!-- /.modal-dialog -->
                             </div> 


                             <div class="modal fade" id="RequestProofModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" id="mod-frm"> 
      
                                        <div class="modal-header" id="frm-head">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <h4 class="modal-title" id="myModalLabel">Confirm</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        Get referal points by completing your transaction to the assigned Boomer`s payment account. <a> Click To View Payment Detail of your Assigned Boomer </a><br />
                                      
                                            
                <div class="row"> 
                  <div class="col-md-12">
                    <div class="panel-content">
                      <h2 class="heading ml-2"> <i class="fa fa-info-circle"></i>Upload Image Proof</h2>

                        <div class="col-md-6 form-group">
                          
                          <input name="Proof" id="ProofToUpload" type="file" class="form-control dropify-fr" data-allowed-file-extensions="png jpg jpeg jfif webp gif bmp" required/>
                          <input id="boo_id" type="hidden" class="form-control" value = "" name="submit_proof"/>
                          <input id="req" type="hidden" class="form-control" value = "" name="req"/>
                          <!-- <input type="file" name="fileTo" id="fileTo" class="form-group"/> -->
                          <!-- <input type="submit" name="submit-proof" class="btn btn-primary fa fa-check-circle" value="Add Proof"/> -->
                          <h4 class="heading" id="er_msg">
                            
                          </h4>
                        </div>


                        <div class="col-md-6">
                          <h3 class="heading">
                            This can be a screenshot or captured picture of transaction message after you have completed the transaction.
                          </h3>
                          
                        </div>
                    </div>
                   </div>
                  </div>
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#large-modal">Get Points</button> -->
                                        
                                        
                                            <br/>                                                       
                                            
                                        </div>
                                        <div class="modal-footer" id="frm-foot">
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button> 
                                         
                                        <button id="submit-proof" type="submit-proof" class="btn btn-primary"> <i class="fa fa-check-circle"></i> Add Proof</button>
                                           
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->

                                 </div> 
                                <!-- /.modal-dialog -->
                             </div> 
</form>
                             <!-- <style>.form-group input[type=file]{ z-index: 5 !important; }</style> -->

