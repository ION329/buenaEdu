<div class="contEstandar bWhite rr5 p10">
	
	<div class="row m0 p10 mb15 titSep2">

		<div class="col-xs-2 col-sm-2 vcenter p0">
			<span class="colorVerde2 ff2 t24 dIB">Foros</span>&nbsp;&nbsp;&nbsp;
			<a class="bAzul2 p5 rr20 dIB colorfff cP dIB">Ver todo</a>
		</div><!--

	--><div class="col-xs-5 col-sm-5 vcenter p0">

			<div class="color666 dIB taR">Por materias</div>&nbsp;&nbsp;&nbsp;
			<select class="selecStd4 rr5 ff1 t16 bGray">
				<option value="grado-6">Seleccione</option>
				<option value="grado-7">Matematicas</option>
				<option value="grado-8">Ciencias</option>
				<option value="grado-9">Musica</option>
				<option value="grado-10">Quimica</option>
				<option value="grado-11">Fisica</option>
			</select>
		</div>


	</div>

	<div class="row m0 p10">
		<div class="mFuq">
			<div id="accordion1" class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a class="accordion-toggle collapsed acordion-bykr acordion-color" data-toggle="collapse" data-parent="#accordion1" href="#onbs1" target="_self">
								<div class="row m0">
									<div class="col-xs-1 col-sm-1 vcenter taC">
										<div class="bVerde p5 rr50">
											<img src="resources/img/icons/me22.png">
										</div>
									</div><!--
								--><div class="col-xs-4 col-sm-4 p0 vcenter">
										<strong class="t16 dIB">Lenguaje Algebraico</strong>
									</div><!--
								--><div class="col-xs-3 col-sm-3 vcenter color666 t12 taC">
										<span>Matemáticas</span>
									</div><!--
								--><div class="col-xs-4 col-sm-4 vcenter color666 t12 taR">
										<span>4 Temas - 90 Respuestas</span>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div id="onbs1" class="panel-collapse collapse">
						<?php for($rr=0; $rr<2; $rr++){ ?>

						<div class="p10 mb10 row bS1 m0 bGray" style="margin-bottom:-1px;">
							<div class="col-sm-1 col-xs-1 vcenter">
                                                    
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 p0 vcenter">
                            	<span class="aSS dB mb5">Matriz simetrica y base ortonormal</span>
                            	<span class="dB">Ultimo mensaje: Juan Pepito Perez</span>
                            </div><!--
                         --><div class="col-xs-3 col-sm-3 vcenter">
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 vcenter taR">
                            	<span class="dIB"> 2 Respuestas </span> &nbsp;&nbsp; 
                            	<a class="bBasic3 rr40 color666 bGray3 taC btn-bykr" href="" style="text-transform: capitalize;"> Entrar </a>
                            </div>
						</div>

						<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
							<div class="col-sm-1 col-xs-1 vcenter">
                                                    
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 p0 vcenter">
                            	<span class="aSS dB mb5">Titulo del tema</span>
                            	<span class="dB">Ultimo mensaje: Nombre del estudiante</span>
                            </div><!--
                         --><div class="col-xs-3 col-sm-3 vcenter">
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 vcenter taR">
                            	<span class="dIB"> Numero de entradas </span> &nbsp;&nbsp; 
                            	<a class="bBasic3 rr40 color666 bGray3 taC btn-bykr" href="" style="text-transform: capitalize;"> Entrar </a>
                            </div>
						</div>

						<?php } ?>
					</div>
				</div>
				
				<?php for($ee=2; $ee<5; $ee++){ ?>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a class="accordion-toggle collapsed acordion-bykr acordion-color" data-toggle="collapse" data-parent="#accordion1" href="#onbs<?= $ee; ?>" target="_self">
								<div class="row m0">
									<div class="col-xs-1 col-sm-1 vcenter taC">
										<div class="bVerde p5 rr50">
											<img src="resources/img/icons/me22.png">
										</div>
									</div><!--
								--><div class="col-xs-4 col-sm-4 p0 vcenter">
										<strong class="t16 dIB">Lenguaje Algebraico</strong>
									</div><!--
								--><div class="col-xs-3 col-sm-3 vcenter color666 t12 taC">
										<span>Matemáticas</span>
									</div><!--
								--><div class="col-xs-4 col-sm-4 vcenter color666 t12 taR">
										<span>4 Temas - 90 Respuestas</span>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div id="onbs<?= $ee; ?>" class="panel-collapse collapse">
						<?php for($rr=0; $rr<2; $rr++){ ?>

						<div class="p10 mb10 row bS1 m0 bGray" style="margin-bottom:-1px;">
							<div class="col-sm-1 col-xs-1 vcenter">
                                                    
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 p0 vcenter">
                            	<span class="aSS dB mb5">Matriz simetrica y base ortonormal</span>
                            	<span class="dB">Ultimo mensaje: Juan Pepito Perez</span>
                            </div><!--
                         --><div class="col-xs-3 col-sm-3 vcenter">
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 vcenter taR">
                            	<span class="dIB"> 2 Respuestas </span> &nbsp;&nbsp; 
                            	<a class="bBasic3 rr40 color666 bGray3 taC btn-bykr" href="" style="text-transform: capitalize;"> Entrar </a>
                            </div>
						</div>

						<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
							<div class="col-sm-1 col-xs-1 vcenter">
                                                    
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 p0 vcenter">
                            	<span class="aSS dB mb5">Titulo del tema</span>
                            	<span class="dB">Ultimo mensaje: Nombre del estudiante</span>
                            </div><!--
                         --><div class="col-xs-3 col-sm-3 vcenter">
                            </div><!--
                         --><div class="col-xs-4 col-sm-4 vcenter taR">
                            	<span class="dIB"> Numero de entradas </span> &nbsp;&nbsp; 
                            	<a class="bBasic3 rr40 color666 bGray3 taC btn-bykr" href="" style="text-transform: capitalize;"> Entrar </a>
                            </div>
						</div>

						<?php } ?>
					</div>
				</div>

				<?php } ?>



			</div>
		</div>
	</div>


</div>