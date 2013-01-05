<? $this->load->view('/office/assets/_head')?>
<? $this->load->view('/office/assets/header')?>

<section id="panel" class="container">

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?=site_url('office/index')?>">Home</a> <span class="divider">/</span></li>
				<li class="active">Subbis</li>
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
					<? foreach ($subbis as $s):?>
					<tr>
						<td><?=$s->subbis_id?></td>
						<td><?=$s->first_name?></td>
						<td><?=$s->last_name?></td>
						<td><?=$s->phone?></td>
						<td><?=mailto($s->email, $s->email)?></td>
						<td>
							<a href="<?=site_url('office/subbis_edit/'.$s->subbis_id)?>" class="btn btn-small" title="Bearbeiten"><b class="icon-edit"></b></a>
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
			<a href="<?=site_url('office/subbis_new')?>" class="btn btn-primary pull-right">Neuen Subbi anlegen</a>
		</div>
	</div>
	
</section>




<? $this->load->view('/office/assets/footer')?>