<!--MultiStep Form -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><img src="images/camimmo_logo.png" class="logo-letter">amimmo</h1>
		</div>
	</div>
	<br>
    <div class="row">
        <div class="col-md-12 block-content">
            <div class="row">
            	<div class="col-md-12 menu">
            		<ul>
            			<li><a class="btn-menu" href="index.php?controller=indexAdmin&action=index" id="btn-messages"><i class="glyphicon glyphicon-envelope"></i> Messages</a></li>
            			<li><a class="btn-menu" id="btn-users"><i class="glyphicon glyphicon-user"></i> Utilisateurs</a></li>
            			<li><a class="btn-menu active" id="btn-datas" href="index.php?controller=messageType&action=index"><i class="glyphicon glyphicon-file"></i> Données</a></li>
            			<li><a class="btn-menu" href="index.php?controller=indexAdmin&action=logoutProcess" id="btn-logout"><i class="glyphicon glyphicon-remove"></i> Déconnexion</a></li>
            		</ul>
            	</div>
            </div>
            <div class="row">
    			<div class="col-md-12">
    				<br><a href="#" id="add-subject" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Ajouter un sujet</a><br><br>
    				<table class="table table-hover">
    					<thead>
    						<tr>
    							<th>#</th>
    							<th>Type</th>
    							<th>Action</th>
    						</tr>
    					</thead>
    					<tbody>
    						<form action="index.php?controller=messageType&action=addProcess" method="POST">
	    						<tr class="add-form">
	    							<td>-</td>
	    							<td><input type="text" class="form-control" name="type"></td>
	    							<td><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Enregistrer</button></td>
	    						</tr>	
    						</form>
    						<?php foreach ($msgsType as $msgType): ?>
    							<tr class="message-row" id="<?php echo $msgType["id_type"] ?>">
    								<td>
    									<?php echo $msgType["id_type"]?>
    								</td>
    								<td>
    									<?php echo $msgType["type"] ?>
    								</td>
    								<td>
    									<a href="index.php?controller=messageType&action=editProcess&id=<?php echo $msgType["id_type"] ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Modifier</a>
    									<a href="index.php?controller=messageType&action=deleteProcess&id=<?php echo $msgType["id_type"] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Supprimer</a>
    								</td>
    							</tr>
    						<?php endforeach ?>
    					</tbody>
    				</table>
    			</div>
    		</div>
        </div>
    </div>
    
    <!-- /.MultiStep Form -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".add-form").hide();
		$("#add-subject").click(function(){
			$(".add-form").slideDown();
			$(".add-form").find("input").focus();
		});
	});
</script>