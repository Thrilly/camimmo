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
            			<li><a class="btn-menu active" id="btn-messages"><i class="glyphicon glyphicon-envelope"></i> Messages</a></li>
            			<li><a class="btn-menu" id="btn-users"><i class="glyphicon glyphicon-user"></i> Utilisateurs</a></li>
            			<li><a class="btn-menu" id="btn-datas"><i class="glyphicon glyphicon-file"></i> Données</a></li>
            		</ul>
            	</div>
            </div>
            <div class="row">
    			<div class="col-md-6 message-list">
    				<br>
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
    							<tr id="<?php echo $msg["id_message"] ?>">
    								<td>
    									<span class="badge bg-primary"><?php echo strtoupper(substr($msg["fname"], 0, 1)).strtoupper(substr($msg["lname"], 0, 1)) ?></span>
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
    		</div>
        </div>
    </div>
    
    <!-- /.MultiStep Form -->
</div>