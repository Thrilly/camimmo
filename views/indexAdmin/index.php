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
            			<li><a class="btn-menu active" href="index.php?controller=indexAdmin&action=index" id="btn-messages"><i class="glyphicon glyphicon-envelope"></i> Messages</a></li>
            			<li><a class="btn-menu" id="btn-users"><i class="glyphicon glyphicon-user"></i> Utilisateurs</a></li>
            			<li><a class="btn-menu" href="index.php?controller=messageType&action=index" id="btn-datas"><i class="glyphicon glyphicon-file"></i> Données</a></li>
            			<li><a class="btn-menu" href="index.php?controller=indexAdmin&action=logoutProcess" id="btn-logout"><i class="glyphicon glyphicon-remove"></i> Déconnexion</a></li>
            		</ul>
            	</div>
            </div>
            <div class="row">
    			<div class="col-md-6 message-list">
    				<table class="table table-hover">
    					<thead>
    						<tr>
    							<th>Initiales</th>
    							<th>Messages</th>
    						</tr>
    					</thead>
    					<tbody>
    						<?php foreach ($msgs as $msg): ?>
    							<?php $date = date_create($msg["date_add"]);?>
    							<tr class="message-row" id="<?php echo $msg["id_message"] ?>">
    								<td>
    									<span class="badge bg-primary"><?php echo strtoupper(substr($msg["fname"], 0, 1)).strtoupper(substr($msg["lname"], 0, 1)) ?></span><br>
    									<?php echo $msg["fname"]." ".$msg["lname"] ?>
    								</td>
    								<td>
    									<span class="pull-left"><b><?php echo $msg["type"] ?></b></span>
    									<span class="pull-right"><b><?php echo date_format($date, 'd/m/y à G:i'); ?></b></span><br>
    									<span class="pull-left"><?php echo Tools::truncate($msg["message"], 30, "...", true) ?></span>
    								</td>
    							</tr>
    						<?php endforeach ?>
    					</tbody>
    				</table>
    			</div>
    			<div class="col-md-6 message-content">
    				<b><h3 id="title">Aucun message chargé</h3></b>
    				<b><h4 id="customer"></h4></b>
    				<span><a href="mailto:jaque@gmail.fr" id="email"></a></span>&nbsp;-&nbsp;<span id="phone"></span><br>
    				<span id="date"></span>
    				<br><br><br><br>
					<p id="message"></p>
    			</div>
    		</div>
        </div>
    </div>
    
    <!-- /.MultiStep Form -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var msgsJson = <?php echo $msgsJson ?>;
		console.log(msgsJson);
		$(".message-row").click(function(){
			$(".message-row").removeClass("tr-active");
			$(this).addClass("tr-active");
			var id = $(this).attr("id");
			$("#title").html(msgsJson[id].type);
			$("#customer").html(msgsJson[id].fname+" "+msgsJson[id].lname);
			$("#email").html(msgsJson[id].email);
			$("#phone").html(msgsJson[id].phone);
			$("#date").html(msgsJson[id].date_add);
			$("#message").html(msgsJson[id].message);
		});
	});
</script>