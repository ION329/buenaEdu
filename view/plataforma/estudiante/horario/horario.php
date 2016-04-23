
        <!--<img src="resources/img/temporal/images/e-horario_01.jpg">-->
	<div class="p20">	
		<div class="row m0">
			<div class="col-xs-4 col-sm-4 p0">
				<span class="colorVerde2 ff2 t24">Mi horario</span>
			</div>
			<div class="col-xs-8 col-sm-8 p0">
				<div class="row m0 mb15">
					<div class="col-xs-12 col-sm-12 p0">
						<div class="colorVirde ff2 tU t14" style="margin-top:0;">
							<div class="navBarLog ff5 taC col-sm-12 col-xs-12 vcenter p0">
								<ul class="nav nav-tabs" role="tablist">
									<li class="taC" role="presentation" style="float: right;">
										<a class="btn-radius-bykr" aria-expanded="true" href="#agenda" target="_self" aria-controls="p3" role="tab" data-toggle="tab"> AGENDA </a>										
									</li>
									<li class="taC" role="presentation" style="float: right;">
										<a class="btn-radius-bykr" aria-expanded="true" href="#asistencia" target="_self" aria-controls="p3" role="tab" data-toggle="tab"> ASISTENCIA </a>
									</li>
									<li class="taC active" role="presentation" style="float: right;">
									<a class="btn-radius-bykr" aria-expanded="true" href="#horario" target="_self" aria-controls="p3" role="tab" data-toggle="tab"> HORARIO </a>
										
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="contEstandar bWhite rr5 p10">
			
			<div class="tab-content">

				<div id="horario" class="tab-pane fade in active">

					<div class="titSep2 colorVirde ff2 t14" style="margin-top:0;">

				        <div class="col-sm-1 col-xs-1 vcenter">
				        	<a class="bBasic3 rr40 colorfff bVerde taC">Hoy</a>
				        </div><!--
				        --><div class="col-sm-3 col-xs-3 vcenter">
				            <span class="t16 colorVirde ff2">Martes, Ene 13</span>
				            <span class="t16 color666 ff0">2016</span>
				        </div><!--
				        --><div class="col-sm-6 col-xs-6 vcenter">
				            <span class="t20 colorVirde ff2">Enero</span>
				            <span class="t20 color666 ff0">2016</span>
				        </div><!--
				        --><div class="navBarLog taC col-sm-2 col-xs-2 vcenter taR p0">
				        	<div class="btn-group" style="width:100px;">
				              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10" /></button>
				              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arL.png" width="10" /></button>
				            </div>
				        </div>
				    </div>

					<div class="row">
				    
				    	<div class="col-sm-4 col-xs-4">
				        	
				        	<div ng-include src=" 'view/plataforma/zoom/acordeon_tema_horario.php' "></div>
				            
				        </div>
				        
				        <div class="col-sm-8 col-xs-8">
				        
				        	
				        	<img src="resources/img/demo/calendario.jpg" style="width:100%" />
				            
				            <br />
				            
				            <div class="row p10" style="margin:0;">
				                <div class="col-sm-3 col-xs-3 vcenter">
				                    <div class="bVerde dIB rr50 pTipoe colorfff">P</div> &nbsp;
				                    <span class="color666">Presente</span>
				                </div><!--
				                --><div class="col-sm-3 col-xs-3 vcenter">
				                    <div class="bRed dIB rr50 pTipoe colorfff">A</div> &nbsp;
				                    <span class="color666">Ausente</span>
				                </div><!--
				                --><div class="col-sm-3 col-xs-3 vcenter">
				                    <div class="bOrange dIB rr50 pTipoe colorfff">T</div> &nbsp;
				                    <span class="color666">Llegó tarde</span>
				                </div><!--
				                --><div class="col-sm-3 col-xs-3 vcenter">
				                    <div class="taC dIB pTipoe p0"><img src="resources/img/icons/tarde.png" /></div> &nbsp;
				                    <span class="color666">En clase</span>
				                </div>
				            </div>
				            
				            <div class="titSep2 colorVirde ff2 tU t16">Importante este mes</div>
				            <div class="row p10">
				                <div class="col-sm-2 col-xs-2 vcenter taC">
				                    <img src="resources/img/icons/notif2.png" />
				                </div><!--
				                --><div class="col-sm-6 col-xs-6 vcenter">
				                    <div class="ff2 mb3 t16">Taller de matemáticas</div>
				                    <div class="color666 mb3">Subido por: Victor Mallarino</div>
				                    <div class="t12 color999 color999">Febrero 18 / 2016</div>
				                </div><!--
				                --><div class="col-sm-4 col-xs-4 vcenter taR">
				                    <a href="" class="bBasic3 rr40 colorfff bVerde5 taC">Descargar archivo</a>
				                </div>
				            </div>
				            <div class="row p10">
				                <div class="col-sm-2 col-xs-2 vcenter taC">
				                    <img src="resources/img/icons/notif.png" />
				                </div><!--
				                --><div class="col-sm-6 col-xs-6 vcenter">
				                    <div class="colorBlue mb3">Campamento Departamental reúne las mejores ideas jóvenes en empredimiento del Grado 11</div>
				                </div><!--
				                --><div class="col-sm-4 col-xs-4 vcenter taR">
				                    <a href="" class="bBasic3 rr40 colorfff bVerde5 taC">Ver evento</a>
				                </div>
				            </div>
				        
				        
				        
				        </div>
				    
				    </div>

			    </div>

			    <div id="agenda" class="tab-pane fade">
					<div class="mb20">
						<div ng-include src=" 'view/plataforma/zoom/selector_dia.php' "></div>	
					</div>
				    
				    <div ng-include src=" 'view/plataforma/zoom/act_regreso_clase.php' "></div>

					<div ng-include src=" 'view/plataforma/zoom/eventos_destacados.php' "></div>				    

			    </div>

			    <div id="asistencia" class="tab-pane fade">
					
					<div ng-include src=" 'view/plataforma/zoom/asistencia.php' "></div>
					
			    </div>

			    

			</div>


		</div>
	</div>	

		
<div ng-include src=" 'view/plataforma/general/area/footer.php' "></div>