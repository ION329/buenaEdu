
        <!--<div ng-include src=" 'view/plataforma/estudiante/perfil/perfil.php' "></div>-->
        <!--<img src="resources/img/temporal/images/e-perfil_01.jpg">-->
		<div class="contEstandar bWhite rr5 p10 mb10">
			<div class="row m0 mb15">
				<div class="col-xs-4 col-sm-4">
					<span class="t16 colorVirde ff2 dIB">CLASES DE HOY</span>&nbsp;
					<select class="selecStd1 bS1 rr5 ff1 t16 bGray">
						<option value="grado-6">Hoy</option>
						<option value="grado-7">Matematicas</option>
						<option value="grado-8">Ciencias</option>
						<option value="grado-9">Musica</option>
						<option value="grado-10">Quimica</option>
						<option value="grado-11">Fisica</option>
					</select>&nbsp;
					<div class="bGray5 p510 rr10 dIB colorfff ff2">5</div>
				</div>
				<div class="col-xs-2 col-sm-2 col-xs-offset-6 col-sm-offset-6 taR">
					<a class="bBasic3 rr40 t14 color000 taC cP bCambiar p510 bWhite ff1 dIB">Ver horario</a>
				</div>			
			</div>

			<div class="row m0">
				<img src="resources/img/temporal/linea-tiempo.png">
			</div>
		</div>

		<div class="row m0">
			<div class="col-xs-8 col-sm-8" style="padding-left: 0px">
				<div class="contEstandar bWhite rr5">
					<div class="tab p10" style="border-bottom: 1px solid #ccc;">
						<div class="tabIn t16 colorVirde ff2">IMPORTANTE</div>
						<div class="tabIn taR"><a class="bBasic3 rr40 t14 color000 taC cP bCambiar p510 bWhite ff1 dIB">VER MAS NOTIFICACIONES</a></div>
					</div>

					
					<div class="p10">
						<div class="row m0 p20 bGray3 mb5">
							<div class="col-xs-2 col-sm-2 p0 taC">
								<img src="resources/img/temporal/icono.gif">
							</div><!--

						--><div class="col-xs-8 col-sm-8 p0 vcenter">
								<div class="mb5	"><strong>Metodos y tecnicas matematicas</strong></div><br>
								<div class="color999 mb10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis odit beatae, consequatur adipisci quisquam minima atque, illo, impedit hic obcaecati.</div>
								<div class="colorVirde dIB">Por:</div><div class="aSS dIB">Belizario Marin</div>
							</div><!--

						--><div class="col-xs-2 col-sm-2 bGray3 p0 taR vcenter">
								<img src="resources/img/icons/arL.png">
							</div><!--
					--></div>

						<div class="row m0 p20 bGray3 mb5">
							<div class="col-xs-2 col-sm-2 p0 taC">
								<img src="resources/img/icons/notif2.png">
							</div><!--

						--><div class="col-xs-5 col-sm-5 p0 vcenter">
								<div class="mb5	"><strong>Taller de matematicas</strong></div><br>
								<div class="color999 dIB">Subido por:</div><div class="aSS dIB">Pepito Perez</div><br>
								<div class="color999">Fecha: 10/02/16</div>
								
							</div><!--

						--><div class="col-xs-5 col-sm-5 bGray3 p0 taR vcenter">
								<a class="bBasic2 rr40 colorfff bVerde" href="">Descargar Archivo</a>
							</div><!--
					--></div>

						<div class="row m0 p20 bGray3 mb5">
							<div class="col-xs-2 col-sm-2 p0 taC">
								<img src="resources/img/temporal/icono.gif">
							</div><!--

						--><div class="col-xs-8 col-sm-8 p0 vcenter">
								<div class="aSS dIB">Campamento departamental Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore voluptatibus, quam.</div>
							</div><!--

						--><div class="col-xs-2 col-sm-2 bGray3 p0 taR vcenter">
								<img src="resources/img/icons/arL.png">
							</div><!--
					--></div>


						
					</div>
				</div>
			</div>

			<div class="col-xs-4 col-sm-4 p0" style="padding-right: 0px">
				<div class="contEstandar bWhite rr5 p0">

					<div class="tab p10" style="border-bottom: 1px solid #ccc;">
						<div class="tabIn t16 colorVirde ff2" style="padding: 4px">PROFESORES RECIENTES</div>
					</div>

					<?php for($rr=1; $rr<5; $rr++){ ?>

					<div class="row m0 p10">

						<div class="col-xs-2 col-sm-2 p0 vcenter">
							<img src="resources/img/demo/user2.png">
						</div><!--

					--><div class="col-xs-6 col-sm-6 vcenter">
							<div class="colorVirde dB mb5"><strong>Juanito Perez Cortes</strong></div>
							<div class="color999 dB">Matematicas</div>
						</div><!--

					--><div class="col-xs-4 col-sm-4 p0 vcenter taR">
							<a class="bBasic2 rr40 colorfff bVerde" href="">Mensaje</a>
						</div><!--

				--></div>

					<?php } ?>
				</div>
			</div>
		</div>


<div ng-include src=" 'view/plataforma/general/area/footer.php' "></div>