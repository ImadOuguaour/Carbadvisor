<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="text-center" id="myModal">Connection</h2>
 			<hr>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="row">
				<div class="col-md-5">
 					<form role="form" method="post" action="<?php $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/index.php' ?>">
						<fieldset>							
							<p class="text-uppercase pull-center">Inscription</p>	
 							<div class="form-group">
								<input type="text" name="pseudo" id="pseudo" class="form-control input-lg" placeholder="pseudo" required>
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
							</div>						
 							<div>
 								<input type="submit" class="btn btn-sm btn-primary"   value="Register">
 							</div>
						</fieldset>
					</form>
				</div>
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				<div class="col-md-5">
 				 		<form role="form" method='post' action="<?php $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/index.php' ?>">
						<fieldset>							
							<p class="text-uppercase"> Connectez-vous : </p>	
 								
							<div class="form-group">
								<input type="text" name="pseudo_has_account" id="pseudo_has_account" class="form-control input-lg" placeholder="username" required>
							</div>
							<div class="form-group">
								<input type="password" name="password_has_account" id="password_has_account" class="form-control input-lg" placeholder="Password" required>
							</div>
							<div>
								<input type="submit" class="btn btn-sm btn-success" value="Sign In">
							</div>
								 
 						</fieldset>
				</form>	
				</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--modal-->
<script>
  $(document).ready(function() {
    $("#myModal").modal();
  });
</script>