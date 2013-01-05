<? $this->load->view('/office/assets/_head')?>
<? $this->load->view('/office/assets/header')?>

<section id="panel" class="container">

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?=site_url('office/index')?>">Home</a> <span class="divider">/</span></li>
				<li><a href="<?=site_url('settings/index')?>">Einstellungen</a> <span class="divider">/</span></li>
				<li class="active">Werber (Promoter)</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="span12">
			<table class="table table-striped table-hover">
				<thead>
					<th>Nr.</th>
					<th>Vorname</th>
					<th>Nachname</th>
					<th>Handy</th>
					<th>Email</th>
					<th>Aktion</th>
				</thead>
				<tbody>
					<? foreach ($promoter as $p):?>
					<tr>
						<td><?=$p->promoter_id?></td>
						<td><?=$p->first_name?></td>
						<td><?=$p->last_name?></td>
						<td><?=$p->phone?></td>
						<td><?=mailto($p->email, $p->email)?></td>
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
			<a href="<?=site_url('settings/promoter_new')?>" class="btn btn-primary pull-right">Neuen Werber anlegen</a>
		</div>
	</div>
	
</section>




<? $this->load->view('/office/assets/footer')?>