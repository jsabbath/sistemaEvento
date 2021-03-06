<div class="span12">
	<div class="widget stacked">
		<div class="widget-header">
			<i class="icon-check"></i>
			<h3>Apoios</h3>
		</div> <!-- /widget-header -->
		<div class="widget-content">
			<br />
			<?php if(!empty($apoios)) : ?>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="10%" >ID</th>
							<th width="80%" >Nome</th>
							<th width="10%" class="td-actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php
						foreach($apoios AS $apoio) :
					?>
							<tr>
								<td><?php echo $apoio->id; ?></td>
								<td><?php echo $apoio->nome; ?></td>
								<td class="td-actions">
									<a title="Editar" href="<?php echo Configuracao::$baseUrl.'apoio/editar/'.$apoio->id.'-'.Funcao::prepararLink($apoio->nome).Configuracao::$extensaoPadrao; ?>" class="btn btn-small btn-warning">
										<i class="btn-icon-only icon-ok"></i>
									</a>
									<a title="Excluir" href="javascript:;" class="btn btn-small" id="<?php echo 'apoio-'.$apoio->id; ?>">
										<i class="btn-icon-only icon-remove"></i>
									</a>
								</td>
							</tr>
					<?php
						endforeach;
					?>
					</tbody>
				</table>
			<?php else : ?>
				<div class="control-group" >
					<h3 style="text-align:center;" >Não há apoios cadastrados</h3>
				</div>
			<?php endif; ?>
		</div> <!-- /widget-content -->
	</div> <!-- /widget -->
</div> <!-- /span12 -->
