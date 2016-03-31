
        <!--<img src="resources/img/temporal/images/e-horario_01.jpg">-->
		
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
				        
				            <div class="mFuq">
				            
				                <div class="panel-group" id="accordion">
				                    <div class="panel panel-default">
				                        <div class="panel-heading">
				                            <div class="panel-title">
				                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#mat1" target="_self">
				                                    <div class="ff2 mb5">
				                                        <div class="dIB bOrange p10 rr50"></div> &nbsp;
				                                        Matemáticas
				                                    </div>
				                                    <img src="resources/img/icons/tarde.png" style="margin:-13px 10px 0 3px" />
				                                    <div class="dIB">
				                                    	7:00 am - 8:30 am<br />
				                                        <span class="t12">Nombre del profesor</span>
				                                    </div>
				                                </a>
				                            </div>
				                        </div>
				                        <div id="mat1" class="panel-collapse collapse in">
				                            <div class="panel-body">
				                            	<div class="col-sm-2 col-xs-2 vcenter">
				                                	<img src="resources/img/icons/actividad.png" />
				                                </div><!--
				                                --><div class="col-sm-10 col-xs-10 vcenter">
				                                	Contenido<br />
				                                    <strong>Nombre del Tema</strong>
				                                </div>
				                            </div>
				                            <div class="panel-body">
				                            	<div class="col-sm-2 col-xs-2 vcenter">
				                                	<img src="resources/img/icons/evaluacion.png" />
				                                </div><!--
				                                --><div class="col-sm-10 col-xs-10 vcenter">
				                                	Actividad calificable<br />
				                                    <strong>Nombre de la actividad</strong>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                    
				                    <?php for($yy=0; $yy<6; $yy++){ ?>
				                    <div class="panel panel-default">
				                        <div class="panel-heading">
				                            <div class="panel-title">
				                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#mat<?= $yy+2; ?>" target="_self">
				                                    <div class="ff2 mb5">
				                                        <div class="dIB bOrange p10 rr50"></div> &nbsp;
				                                        Matemáticas
				                                    </div>
				                                    <img src="resources/img/icons/tarde.png" style="margin:-13px 10px 0 3px" />
				                                    <div class="dIB">
				                                    	7:00 am - 8:30 am<br />
				                                        <span class="t12">Nombre del profesor</span>
				                                    </div>
				                                </a>
				                            </div>
				                        </div>
				                        <div id="mat<?= $yy+2; ?>" class="panel-collapse collapse">
				                            <div class="panel-body">
				                            	<div class="col-sm-2 col-xs-2 vcenter">
				                                	<img src="resources/img/icons/actividad.png" />
				                                </div><!--
				                                --><div class="col-sm-10 col-xs-10 vcenter">
				                                	Contenido<br />
				                                    <strong>Nombre del Tema</strong>
				                                </div>
				                            </div>
				                            <div class="panel-body">
				                            	<div class="col-sm-2 col-xs-2 vcenter">
				                                	<img src="resources/img/icons/evaluacion.png" />
				                                </div><!--
				                                --><div class="col-sm-10 col-xs-10 vcenter">
				                                	Actividad calificable<br />
				                                    <strong>Nombre de la actividad</strong>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                    <?php } ?>
				                    
				                    
				                </div>
				    
				            </div>
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
					
					<div class="titSep2 colorVirde ff2 tU t14" style="margin-top:0;">
				        <div class="col-sm-1 col-xs-1 vcenter p0">
				            <div class="btn-group" style="width:100px;">
				              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10" /></button>
				              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arL.png" width="10" /></button>
				            </div>
				        </div><!--
				        --><div class="col-sm-5 col-xs-5 vcenter">
				            <span class="t24 colorVirde ff2">Enero</span>
				            <span class="t24 color666 ff0">2016</span>
				        </div><!--
				     --><div class="navBarLog taC col-sm-6 col-xs-6 vcenter taR p0">
				        	<a class="bBasic2 rr40 color666 bGray3 taC" href="">
								Descargar Archivo
								<img width="23" src="resources/img/icons/notif2.png">
							</a>
				        </div>
				    </div>
				    
				    <img src="resources/img/icons/calDias.png" class="mb10" />
				    <br /><br />
				    
				    <div class="colorVirde ff2 t14">
				        <div class="col-sm-6 col-xs-6 vcenter">
				            <span class="t16 colorVirde ff2">Miércoles, Enero 13 de 2016</span>
				        </div><!--
				        --><div class="navBarLog col-sm-6 col-xs-6 vcenter taR">
				            <a href="" class="bBasic2 rr40 colorfff bVerde2 taC bAbrir1">Crear Alarma</a>
				        </div>
				    </div>
				    
				    <div class="p20">
				    	<div class="row bS1 cP p20 bGray dAbre1 dN" style="margin-bottom:-1px;">
				            <div class="col-sm-6 col-xs-6 mb10 p0">
				                <div class="col-sm-6 col-xs-6">
				                	<label class="ff1 color999">Fecha inicio:</label>
				                    <input class="inpSt1 rr5" type="date" />
				                </div>
				                <div class="col-sm-6 col-xs-6">
				                	<label class="ff1 color999">Hora inicio:</label>
				                    <input class="inpSt1 rr5" type="time" />
				                </div>
				            </div>
				            <div class="col-sm-6 col-xs-6 mb10 p0">
				                <div class="col-sm-6 col-xs-6">
				                	<label class="ff1 color999">Fecha fin:</label>
				                    <input class="inpSt1 rr5" type="date" />
				                </div>
				                <div class="col-sm-6 col-xs-6">
				                	<label class="ff1 color999">Hora fin:</label>
				                    <input class="inpSt1 rr5" type="time" />
				                </div>
				            </div>
				            <div class="col-sm-12 col-xs-12 mb10">
				                <label class="ff1 color999">Título del evento</label>
				                <input class="inpSt1 rr5" type="" />
				            </div>
				            <div class="col-sm-6 col-xs-6 mb10">
				                <label class="ff1 color999">Ubicación</label>
				                <input class="inpSt1 rr5" type="" />
				            </div>
				            <div class="col-sm-6 col-xs-6 mb10">
				                <label class="ff1 color999">Detalles</label>
				                <input class="inpSt1 rr5" type="" />
				            </div>
				            
				            <div class="col-sm-12 col-xs-12 mb10">
				                <label class="ff1 color999">Detalles</label>
				                <textarea class="inpSt1 rr5"></textarea>
				            </div>
				            
				            <br /><br />
				            
				            <div class="taC">
				            	<a href="" class="bBasic2 rr40 colorfff bVerde2 taC bAbrir1">Guardar</a>
				                <a href="" class="bBasic2 rr40 color999 taC bAbrir1">Cancenlar</a>
				            </div>
				        </div>
				    
				    	<?php for($u=0; $u<1; $u++){ ?>
				            <div class="row bWhite bS1 cP" style="margin-bottom:-1px;">
				                <div class="col-sm-3 col-xs-3 vcenter">
				                    <span class="ff0 p10">Todo el día</span>
				                </div><!--
				                --><div class="navBarLog col-sm-6 col-xs-6 vcenter bVerde3 p20">
				                    <span class="ff0 p10"><strong>Regreso a clases</strong></span>
				                </div><!--
				                --><div class="navBarLog col-sm-3 col-xs-3 vcenter bVerde3 taR" style="padding:9px;">
				                    <a href="" class="bBasic2 bWhite rr40 taC">Editar</a>
				                </div>
				            </div>
				        <?php } ?>
				        <?php for($u=0; $u<10; $u++){ ?>
				            <div class="row bWhite bS1  cP" style="margin-bottom:-1px;">
				                <div class="col-sm-3 col-xs-3 vcenter">
				                    <span class="ff0 p10">Todo el día</span>
				                </div><!--
				                --><div class="navBarLog col-sm-6 col-xs-6 vcenter bGray3 p20">
				                    <span class="ff0 p10"><strong>Regreso a clases</strong></span>
				                </div><!--
				                --><div class="navBarLog col-sm-3 col-xs-3 vcenter bGray3 taR" style="padding:9px;">
				                    <a href="" class="bBasic2 bWhite rr40 taC">Editar</a>
				                </div>
				            </div>
				        <?php } ?>
					</div>

					<div class="contEstandar rr5 p20 bAzul5">
					    <div class="titSep3  ff2 tU colorfff">Eventos destacados</div>
					    <div class="row">
					    	<?php for($rr=0; $rr<4; $rr++){ ?>
					        <div class="col-sm-3 col-xs-3">
					        	
					            <a href="">
					                <img src="resources/img/demo/eve<?= $rr+1; ?>.jpg" />
					                <div class="dateEven p5">
					                	<div class="t40 colorfff taC">29</div>
					                    <div class="colorfff taC">Feb/16</div>
					                </div>
					                <div class="bWhite color999 p10" style="min-height:70px;">Campamento Departamental en empredimiento del Grado 11</div>
					            </a>
					            
					        </div>
					    	<?php } ?>
					    </div>
					</div>

			    </div>

			    <div id="asistencia" class="tab-pane fade">

					<div class="titSep2 colorVirde ff2 t14" style="margin-top:0;">

				        <div class="col-sm-1 col-xs-1 vcenter p0">
				            <div class="btn-group" style="width:100px;">
				              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10" /></button>
				              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arL.png" width="10" /></button>
				            </div>
				        </div><!--
				        --><div class="col-sm-5 col-xs-5 vcenter">
				            <span class="t24 colorVirde ff2">Enero</span>
				            <span class="t24 color666 ff0">2016</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            <div class="t16 ff2 dIB">Total de Clases: 24</div>
				        </div><!--
				        --><div class="navBarLog taC col-sm6 col-xs-6 vcenter taR">
				        	<a class="bBasic2 rr40 color666 bGray3 taC" href="">Descargar Archivo <img src="resources/img/icons/notif2.png" width="23"></a>
				        </div>
				    </div>
				    
				    
				    <div class="row" style="margin:0;">
				        <div class="col-sm-3 col-xs-3 p0">
				            
				            <div class="tab">
				                <div class="tabIn bloqAsis p10">
				                    Materias
				                </div>
				            </div>
				            <div class="tab bGray">
				                <div class="tabIn bloqAsis p10">
				                    <div class="dIB bOrange p5 rr50"></div> &nbsp; Matemáticas
				                </div>
				            </div>
				            <div class="tab bGray">
				                <div class="tabIn bloqAsis p10">
				                    <div class="dIB bVerde p5 rr50"></div> &nbsp; Estadística
				                </div>
				            </div>
				            <div class="tab bGray">
				                <div class="tabIn bloqAsis p10">
				                    <div class="dIB bRed p5 rr50"></div> &nbsp; Lengua castellana
				                </div>
				            </div>
				            <div class="tab bGray">
				                <div class="tabIn bloqAsis p10">
				                    <div class="dIB bVerde p5 rr50"></div> &nbsp; La paz y el post-conflicto
				                </div>
				            </div>
				            <div class="tab bGray">
				                <div class="tabIn bloqAsis p10">
				                    <div class="dIB bOrange p5 rr50"></div> &nbsp; Ciencias sociales
				                </div>
				            </div>
				            <div class="tab bGray">
				                <div class="tabIn bloqAsis p10">
				                    <div class="dIB bRed p5 rr50"></div> &nbsp; Lectura y compensión
				                </div>
				            </div>
				        
				        </div>
				        <div class="col-sm-9 col-xs-9 p0 ff2 colorfff">
				        	<div class="bloqAsisConte">
				            	<div class="tab" style="width:1550px;"> <!-- widht: númerodíasdelmes * 40 -->
									<?php for($tt=0; $tt<31; $tt++){ ?>                    
				                        <div class="tabIn bloqAsis taC">
				                        	<div style="width:40px; margin:0 auto;">
				                                <span class="colorVirde">Mie</span>
				                                <div class="colorfff bVirde dIB rr10" style="padding:2px 2px;">&nbsp; <?= $tt+1; ?> &nbsp;</div>
				                            </div>
				                        </div>                        
				                    <?php } ?>
				                </div>
				                <?php for($t1t=0; $t1t<6; $t1t++){ ?>  
				                    <div class="tab bGray" style="width:1550px;"> <!-- widht: númerodíasdelmes * 40 -->
				                        <?php for($tt=0; $tt<31; $tt++){ ?>                    
				                            <div class="tabIn bloqAsis taC">
				                            	<?php if($t1t % 2){ ?>
				                                	<?php if($tt % 2){ ?>  
				                                    	<div class="bVerde dIB rr50 pTipoe">P</div>
				                                    <?php }else{ ?>
				                                    	<div class="bRed dIB rr50 pTipoe">A</div>
				                                    <?php } ?>  
				                            	<?php }else{ ?>
				                                	<?php if($tt % 2){ ?>  
				                                    	<div class="bOrange dIB rr50 pTipoe">T</div>
				                                    <?php }else{ ?>
				                                    	<div class="taC dIB pTipoe p0"><img src="resources/img/icons/tarde.png" /></div>
				                                    <?php } ?> 
				                                <?php } ?>
				                            </div>                        
				                        <?php } ?>
				                    </div>
				                <?php } ?>  
				                <br />
				            </div>
				        </div>
				    </div>
				        
					<br />
				    <div class="row bOrangeL p10" style="margin:0;">
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





					
				    <div class="titSep2 colorVirde ff2 tU t14">
				        <div class="navBarLog ff5 taC col-sm-12 col-xs-12 vcenter">
				            <!-- Nav tabs -->
				            <ul class="nav nav-tabs" role="tablist">
				                <li role="presentation">                    
				                    <a target="_self" aria-controls="p1" role="tab" data-toggle="tab" style="background-color:transparent; border:0;">
				                        RESUMEN DE AUSENCIAS
				                    </a>
				                </li>
				                <li role="presentation" class="taC active">
				                    <a href="#asis1" target="_self" aria-controls="p1" role="tab" data-toggle="tab" class="btn-radius-bykr">
				                        Ver todas
				                    </a>
				                </li>
				                <li role="presentation" class="taC">
				                    <a href="#asis2" target="_self" aria-controls="p2" role="tab" data-toggle="tab" class="btn-radius-bykr">
				                        Justificadas
				                    </a>
				                </li>
				                <li role="presentation" class="taC">
				                    <a href="#asis3" target="_self" aria-controls="p3" role="tab" data-toggle="tab" class="btn-radius-bykr">
										Sin justificar
				                    </a>
				                </li>
				                <li role="presentation" class="taC">
				                    <a href="#asis4" target="_self" aria-controls="p3" role="tab" data-toggle="tab" class="btn-radius-bykr">
										Llegadas tarde
				                    </a>
				                </li>
				            </ul>
				        </div>
				    </div>
				        
				        
				    <div class="tab-content">
				        <div id="asis1" class="tab-pane fade in active">
				        
				            <div class="row p10 mb5" style="margin:0;">
				                <div class="col-sm-2 col-xs-2 vcenter">Fecha</div><!--
				                --><div class="col-sm-2 col-xs-2 vcenter">Asencia</div><!--
				                --><div class="col-sm-5 col-xs-5 vcenter">Descripción</div><!--
				                --><div class="col-sm-3 col-xs-3 vcenter">Recurso/aplicación</div>
				            </div>
				            
				            <div class="row p10 mb5 bGray" style="margin:0;">
				                <div class="col-sm-2 col-xs-2 colorVirde vcenter">Enero 11 2016</div><!--
				                --><div class="col-sm-2 col-xs-2 colorVirde vcenter">Justificada</div><!--
				                --><div class="col-sm-5 col-xs-5 colorVirde vcenter ff2">Incapacidad Médica enviada por el acudiente</div><!--
				                --><div class="col-sm-3 col-xs-3 colorVirde taR vcenter"><a href="" class="bBasic2 rr40 taC dB">Archivo adjunto</a></div>
				            </div>
				            <div class="row p10 mb5 bGray" style="margin:0;">
				                <div class="col-sm-2 col-xs-2 colorVirde vcenter">Noviembre 29 2015</div><!--
				                --><div class="col-sm-2 col-xs-2 colorVirde vcenter">Justificada</div><!--
				                --><div class="col-sm-5 col-xs-5 colorVirde vcenter ff2">Carta enviada y firmada por el acudiente</div><!--
				                --><div class="col-sm-3 col-xs-3 colorVirde taR vcenter"><a href="" class="bBasic2 rr40 taC dB">Archivo adjunto</a></div>
				            </div>
				            
				            
				        </div>
				        <div id="asis2" class="tab-pane fade taC">
				            <br><img src="resources/img/icons/block.png" /><br /><br />
				        </div>
				        <div id="asis3" class="tab-pane fade taC">
				            <br><img src="resources/img/icons/block.png" /><br /><br />
				        </div>
				    </div>

			    </div>

			    

			</div>


		</div>

		
<div ng-include src=" 'view/plataforma/general/area/footer.php' "></div>