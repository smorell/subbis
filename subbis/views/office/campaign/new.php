<? $this->load->view('/office/assets/_head')?>
<? $this->load->view('/office/assets/header')?>

<section id="panel" class="container">

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="{path="admin/index"}">Home</a> <span class="divider">/</span></li>
				<li><a href="{path="admin/subbis_list"}">Subbis</a> <span class="divider">/</span></li>
				<li class="active">Neuer Subbi</li>
			</ul>
		</div>
	</div>
	

	<?=form_open('settings/campaign_create',array('class' => 'form-horizontal', 'id' => ''))?>
	<div class="row">
		<div class="span12">
			<h5>Neue Kampagne</h5>
			
			
				<!-- hidden fields -->
				
				<input type="hidden" name="title" value="">
			
			
			
				<div class="accordion " id="accordion2">
				
					<div class="accordion-group ">
					
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								Allgemeine Angaben
							</a>
						</div>
							<div id="collapseOne" class="accordion-body collapse in">
								<div class="accordion-inner">
							
									<div class="row">
									
										<div class="span6">
				
											<div class="control-group">
												<label class="control-label" for="firstname">Name</label>
												<div class="controls">
													<input type="text" id="" placeholder="Name" class="span4" name="name">
												</div>
								            </div>
								            
							            
										</div>
									
										<div class="span5">
																	            

										</div>
									</div>
								</div>
							</div>
					
					</div>
					
				</div>	
				

				
				
				
									       	            
	            
			
		</div>
	</div>

	<div class="row">
		<div class="span12">
			<div class=" pull-right">
			  <button type="submit" class="btn btn-primary">Speichern</button>
			</div>
		</div>
	</div>

	<?=form_close()?>

</section>




<? $this->load->view('/office/assets/footer')?>