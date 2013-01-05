<? $this->load->view('/office/assets/_head')?>
<? $this->load->view('/office/assets/header')?>

<section id="panel" class="container">

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?=site_url('office/index')?>">Home</a> <span class="divider">/</span></li>
				<li><a href="<?=site_url('settings/index')?>">Einstellungen</a> <span class="divider">/</span></li>
				<li class="active">Kampagnen</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="span12">
			<table class="table table-striped table-hover">
				<thead>
					<th>Nr.</th>
					<th>Name der Kampagne</th>
					<th>Aktion</th>
				</thead>
				<tbody>
					<? foreach ($campaign as $c):?>
					<tr>
						<td><?=$c->campaign_id?></td>
						<td><?=$c->name?></td>
						<td>
							<a href="#" class="btn btn-small" title="Bearbeiten"><b class="icon-edit"></b></a>
						</td>
					</tr>
					<? endforeach?>
				</tbody>
				
			</table>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="span12" >
			<a href="<?=site_url('settings/campaign_new')?>" class="btn btn-primary pull-right">Neuen Kampagne anlegen</a>
		</div>
	</div>
	
</section>




<? $this->load->view('/office/assets/footer')?>