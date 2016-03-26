<div ng-include src=" 'view/plataforma/general/area/headerEstudiante.php' "></div>

<div class="rol_estudiante bodBuddy">

    <div class="menuLateral col-sm-2 col-xs-2 p0">
        <div ng-include src=" 'view/plataforma/general/zona/menuEstudiante5.php' "></div>
    </div>
    <div class="contSingular bGray col-sm-10 col-xs-10 p20">
        <!--<img src="resources/img/temporal/images/e-mensajes_01.jpg">-->

        	<div class="colorVirde ff2 t14">
		        <div class="col-sm-6 col-xs-6 vcenter">
		            <span class="colorVerde2 ff2 t24 dIB">Mensajes</span>&nbsp;&nbsp;&nbsp;&nbsp;
		            <div class="colorVirde ff2 tU t14 dIB" style="margin-top:0;">
						<div class="navBarLog ff5 taC col-sm-12 col-xs-12 vcenter p0">
							<ul class="nav nav-tabs" role="tablist">
								<li class="taC" role="presentation">
									<a class="btn-radius-bykr" aria-expanded="true" href="#mater3" target="_self" aria-controls="p3" role="tab" data-toggle="tab"> RECIBIDOS </a>
								</li>
								<li class="taC" role="presentation" style="float:right;">
									<a class="btn-radius-bykr" aria-expanded="true" href="#mater2" target="_self" aria-controls="p3" role="tab" data-toggle="tab"> ENVIADOS </a>
								</li>
							</ul>
						</div>
					</div>
		        </div><!--
		        --><div class="navBarLog col-sm-6 col-xs-6 vcenter taR">
		            <a href="" class="bBasic2 rr40 colorfff bVerde2 taC bAbrir1">CREAR NUEVO MENSAJE</a>
		        </div>
		    </div>
		    
		    <div class="p20">
		    	<div class="row bS1 cP p20 bWhite dAbre1 dN rr5" style="margin-bottom:-1px;">
		            <div class="col-xs-5 col-sm-5 p0">
		            	<div class="contEstandar">
		            		<div class="tab p5" style="border-bottom: 1px solid #ccc;">
								<div class="tabIn t16 colorVirde ff1">Nombre del destinatario</div>
								<div class="tabIn taR">
									<div class="bBasic3 p1020 color333 mb10 cP">Añadir</div>
								</div>
		            		</div>

		            		<div class="bGray p10" style="border-bottom: 1px solid #ccc">
		            			<div class="aSS cP mb10 color999 dB">Opciones Avanzadas</div>
		            			<div class="row m0 mb5">
		            				<div class="col-xs-1 col-sm-1 p0 vcenter">
		            					<input type="checkbox" name="t-s" id="t-s">
		            				</div><!--
		            			--><div class="col-xs-6 col-sm-6 p0 vcenter">
		            					<div class="color666 dIB">Para todo el salon</div>
		            				</div><!--
		            			--><div class="col-xs-3 col-sm-3 p0 vcenter">
		            					<select class="selecStd2 bS1 rr5 ff2 t14 bGray	">
		            						<option>8°-2B</option>
		            					</select>
		            				</div><!--
		            		--></div>

		            			<div class="row m0 mb5">
		            				<div class="col-xs-1 col-sm-1 p0 vcenter">
		            					<input type="checkbox" name="t-s" id="t-s">
		            				</div><!--
		            			--><div class="col-xs-6 col-sm-6 p0 vcenter">
		            					<div class="color666 dIB">Para los profesores</div>
		            				</div><!--
		            			--><div class="col-xs-3 col-sm-3 p0 vcenter">
		            					<select class="selecStd2 bS1 rr5 ff2 t14 bGray	">
		            						<option>8°-2B</option>
		            					</select>
		            				</div><!--
		            		--></div>

		            			<div class="row m0 mb15">
		            				<div class="col-xs-1 col-sm-1 p0 vcenter">
		            					<input type="checkbox" name="t-s" id="t-s">
		            				</div><!--
		            			--><div class="col-xs-11 col-sm-11 p0 vcenter">
		            					<div class="color666 dIB">Enviar con copia a acudientes</div>
		            				</div><!--
		            		--></div>
								
		            		</div>

							<?php for($dd=1; $dd<3; $dd++){ ?>
		            		<div class="row m0 p10" style="border-bottom: 1px solid #ccc; margin-bottom: -1px">
								<div class="col-xs-2 col-sm-2 p0 vcenter">
									<img src="resources/img/demo/user2.png">
								</div><!--
							--><div class="col-xs-9 col-sm-9 vcenter">
									<div class="colorVirde dB mb5">
										<strong>Juanito Perez Cortes</strong>
									</div>
									<div class="color999 dB">Matematicas</div>
								</div><!--
							--><div class="col-xs-1 col-sm-1 p0 vcenter taC">
									X
								</div><!--
						--></div>

							<?php } ?>
							


						</div>

		            	
		            </div>
		            <div class="col-xs-7 col-sm-7 p0">
		            	<div class="contEstandar bGray">

							<div class="bGray3 p20" style="border-bottom: 1px solid #ccc">
								<div class="t18 ff2">Agrega un titulo al mensaje</div>
							</div>

							<div class="bGray p50" style="border-bottom: 1px solid #ccc">
								<div class="color999 mb30">Agrega un mensaje o adjunta un archivo</div>
								<div class="bBasic3 p1020 color333 dB cP">
									<img width="16" src="resources/img/icons/clip.png">
									147583874-ejempl-taller.jpg (1234 kb)
								</div>
							</div>
							
							<div class="bGray3 p20">
								<div class="tab">
									<div class="tabIn">
										<a class="bBasic3 rr40 t14 color000 taC cP bCambiar p510 ff1 dIB"><img width="16" src="resources/img/icons/clip.png">&nbsp;&nbsp;Adjuntar Archivo</a>
									</div>
									<div class="tabIn taR">
										<a class="bBasic2 rr40 colorfff bVerde" style="" href="">Enviar</a>
										<a class="bBasic2 rr40 color666 bGray3 taC" style="" href="">Cancelar</a>
									</div>
								</div>
							</div>

		            	</div>
		            </div>		            

		        </div>

			</div>
    </div>

</div>

<div ng-include src=" 'view/plataforma/general/area/footer.php' "></div>