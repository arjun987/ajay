<?php 
  include ("register.php");
?>       
	        
<div id="login" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content" >
	        <div class="modal-header text-center" >
	        	<h2 style="color: #00102a;font-family:Times New Roman, Times, serif;">User Login</h2>
	        	<button type="button" class="close" data-dismiss="modal" style="color:red;">&times</button>
	        </div>	
	        <div class="modal-body">
	        <form role="form" method="POST">
               
               <div class="form-group">
                	        <input type="text" name="username" class="form-control" placeholder="Username" required/>
	                                
	           </div> 
	           <div class="form-group">
                	        <input type="password" name="password" class="form-control" placeholder="Password" required/>
	                                
	           </div> 	
	        </div>
	        </form>
	        <div class="modal-footer">
	          <input type="submit" class="btn btn-primary btn-block" name="submit" style="font-weight:bold;" value="LogIn">
	          <hr>
	          <h5 class="pull-left">Not Registered Yet? Register <a href="#" style=" font-size:20px; font-family:Times New Roman, Times, serif;" data-target="#register" data-toggle="modal" data-dismiss="modal">here</a></h5>
	           </div>
		</div>
	</div>
		
	</div>