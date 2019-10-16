<div class="container" style="width:550px;">
<div class="modal-content">
        <div class= "modal-header" style="padding:20px;">      
        </div>
         <h3 class="text-center">Export Requirements</h3>
           <div class="text-center"><div class="modal-body" style="padding:1px;">
           	<hr>
          <form role="form">
 <!--
      files
 -->             
            <div class="form-group">
              <h4>Bureau of Customs<h4>
              <form class="md-form">
  <div class="file-field">
    <div class="btn btn-rounded purple-gradient btn-sm float-center" style="margin-left:90px;">
      <span>Choose file</span>
      <input type="file">
    </div>
  </div>
</form>
          </div>
      </form>
            </div>
            <div class="form-group">
              <h4>Packing List</h4>
               <form class="md-form">
  <div class="file-field">
    <div class="btn btn-rounded purple-gradient btn-sm float-center" style="margin-left:90px;">
      <span>Choose file</span>
      <input type="file">
    </div>
  </div>
</form>
			<div class="form-group">
              <h4>Commercial Invoice</h4>
               <form class="md-form">
  <div class="file-field">
    <div class="btn btn-rounded purple-gradient btn-sm float-center" style="margin-left:90px;">
      <span>Choose file</span>
      <input type="file">
    </div>
  </div>
</form>
            </div>
             <hr>
<!--
      radio
 -->   
    <div class="form-check">
       <h4 class="text-center">Mode of Payment</h4>
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1"style="margin-left: 15px;">Cash</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2" style="margin-left: 15px;">Bank</label>
  </div>
  <!--
     button
 -->   
            </div>
            <hr>
              <a href="<?php echo base_url('jofcontroller/view/consignee')?>" class="btn btn-danger" role="button" style="margin-right:20px;">Go Back</a>
              <button type="button" class="btn btn-info btn-danger" data-toggle="modal" data-target="#myModal">Submit</button>
        <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button  type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-center">
          <p href= "<?php echo base_url('jofcontroller/view/consignee')?>">Submitted</p>
        </div>
      </div>
      
    </div>
              </br>
                </div>
             </br>
         </div>
       </div>
    </div>
  </div>
 </div>