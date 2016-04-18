<div ng-include src=" 'view/plataforma/general/area/headerProfesor.php' "></div>

<div class="rol_estudiante bodBuddy" style="background-color: #f7f7f7;">

    <div class="contSingular bGray">
		<div class="bBlue">
			<div class="limite1000">
				<div class="colorfff ff2" style="padding: 25px 0px">
					<div class="tab">
						<div class="tabIn t30">Generar Tabulado de Notas</div>
						<div class="tabIn taR">2do Periodo</div>
					</div>
				</div>
			</div>
		</div>  

		<div class="dCambiar1">
		
			<div class="limite1000 t16">

				<div class="mb20">
				<div class="row m0" style="padding: 15px 0px">
					<div class="col-xs-3 p0 ff2">Grados Asignados (10)</div>
					<div class="col-xs-2 p0 tU">Asignatura</div>
					<div class="col-xs-2 p0 tU">Estudiantes</div>
					<div class="col-xs-2 p0 tU">Nota Promedio</div>
					<div class="col-xs-3 p0"></div>
				</div>

				<div class="row bS1 bWhite rr5 mb5" style="padding: 5px 13px">
					<div class="col-xs-3 p0 ff2 vcenter">Grados 6°A</div><!--
				--><div class="col-xs-2 p0 vcenter">Matemáticas</div><!--
				--><div class="col-xs-2 p0 vcenter">45</div><!--
				--><div class="col-xs-2 p0 colorVerde5 ff2 vcenter">3.8</div><!--
				--><div class="col-xs-3 p0 vcenter">Tabulado Generado &nbsp;<img src="resources/img/icons/lapiz.png"></div>
				</div>

				<div class="row bS1 bWhite rr5 mb5" style="padding: 14px 13px">
					<div class="col-xs-3 p0 ff2 vcenter">Grados 6°B</div><!--
				--><div class="col-xs-2 p0 vcenter">Matemáticas</div><!--
				--><div class="col-xs-2 p0 vcenter">42</div><!--
				--><div class="col-xs-2 p0 colorVerde5 ff2 vcenter"><img src="resources/img/icons/block.png"></div><!--
				--><div class="col-xs-3 p0 vcenter color999">Creando Tabulado &nbsp; <span class="colorVerde5 ff2">20%</span></div>
				</div>
				<?php for($aa=0; $aa<6; $aa++){ ?>
				<div class="row bS1 bWhite rr5 mb5" style="padding: 5px 13px">
					<div class="col-xs-3 p0 ff2 vcenter">Grados 6°B</div><!--
				--><div class="col-xs-2 p0 vcenter">Matemáticas</div><!--
				--><div class="col-xs-2 p0 vcenter">38</div><!--
				--><div class="col-xs-2 p0 colorVerde5 ff2 vcenter"><img src="resources/img/icons/block.png"></div><!--
				--><div class="col-xs-3 p0 vcenter color999"><a class="bBasic2 rr40 bVerde5 taC bCambiar" href="" style="margin: 0px 5px"><b class="colorfff">Generar Tabulado</b></a></div>
				</div>
				<?php } ?>

				</div>
			</div>

		</div>

		<div class="dCambiar2 dN">
			<div class="limite1000">
				<div class="row mb20" style="margin-top: 20px">
					<div class="col-xs-4 col-sm-4 vcenter">
						<img class="bGray3 rr5 bCambiar cP" style="padding: 5px 9px" src="resources/img/icons/arR.png"> &nbsp;
						<span class="color333 t24 vcenter">Grado 6°A</span>
					</div><!--
				--><div class="col-xs-8 col-sm-8 vcenter">
						<div class="bAzul2 rr20 dIB colorfff" style="margin-right: 8px; padding: 4px 15px">TC 1</div>
						<div class="bAzul2 rr20 dIB colorfff" style="margin-right: 8px; padding: 4px 15px">TC 2</div>
						<div class="bAzul2 rr20 dIB colorfff" style="margin-right: 8px; padding: 4px 15px">TC 3</div>
						<div class="bAzul2 rr20 dIB colorfff" style="margin-right: 8px; padding: 4px 15px">AS 1</div>
						<div class="bAzul2 rr20 dIB colorfff" style="margin-right: 8px; padding: 4px 15px">AS 2</div>
						<div class="bAzul2 rr20 dIB colorfff" style="margin-right: 8px; padding: 4px 15px">E 1</div>
						<div class="bAzul2 rr20 dIB colorfff" style="margin-right: 8px; padding: 4px 15px">E F</div>
					</div>
				</div>

				<div class="row mb10">
					<div class="col-xs-12 col-sm-12">
						
	                    <div class="mFuq2">
	                        <div id="accordion1" class="panel-group">
	                            <div class="panel panel-default">
	                                <div class="panel-heading p5">
	                                    <div class="panel-title">
	                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs1" target="_self" style="padding: 5px 50px 5px 10px; background-color: white;">
	                                            <div class="row m0">
	                                                <div class="row">
	                                                	<div class="col-xs-4 col-sm-4 vcenter">
	                                                		<img class="rr50" width="40" src="resources/img/demo/user3.png"> &nbsp; <span class="ff2">Nombre del estudiante</span>
	                                                	</div><!--
	                                                --><div class="col-xs-6 col-sm-6 vcenter pR0">
	                                                		<span style="margin: 0px 27px">4,8</span>
															<span style="margin: 0px 20px">3,6</span>
															<span style="margin: 0px 24px">2,1</span>
															<span style="margin: 0px 17px">3,1</span>
															<span style="margin: 0px 27px">4,0</span>
															<span style="margin: 0px 12px">3,2</span>
															<span style="margin: 0px 0px 0px 20px">3,1</span>
	                                                	</div><!--
	                                                --><div class="col-xs-2 col-sm-2 taR colorVerde5 t20 ff2 vcenter">3.8</div>
	                                                </div>
	                                            </div>
	                                        </a>
	                                    </div>
	                                </div>

	                                <div id="onbs1" class="panel-collapse collapse bGray3">
										<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.1<span> &nbsp; <span class="color666">Realiza operaciones básicas entre Monomios</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.2<span> &nbsp; <span class="color666">Conoce y aplica las tablas de multiplicar</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

										<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.3<span> &nbsp; <span class="color666">Realiza operaciones básicas entre Monomios</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

	                                </div>
                                </div>

                                <div class="panel panel-default">
	                                <div class="panel-heading p5">
	                                    <div class="panel-title">
	                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs2" target="_self" style="padding: 5px 50px 5px 10px; background-color: white;">
	                                            <div class="row m0">
	                                                <div class="row">
	                                                	<div class="col-xs-4 col-sm-4 vcenter">
	                                                		<img class="rr50" width="40" src="resources/img/demo/user3.png"> &nbsp; <span class="ff2">Nombre del estudiante</span>
	                                                	</div><!--
	                                                --><div class="col-xs-6 col-sm-6 vcenter pR0">
	                                                		<span style="margin: 0px 27px">4,8</span>
															<span style="margin: 0px 20px">3,6</span>
															<span style="margin: 0px 24px">2,1</span>
															<span style="margin: 0px 17px">3,1</span>
															<span style="margin: 0px 27px">4,0</span>
															<span style="margin: 0px 12px">3,2</span>
															<span style="margin: 0px 0px 0px 20px">3,1</span>
	                                                	</div><!--
	                                                --><div class="col-xs-2 col-sm-2 taR t20 ff2 vcenter" style="color: #F9E54C">3.2</div>
	                                                </div>
	                                            </div>
	                                        </a>
	                                    </div>
	                                </div>

	                                <div id="onbs2" class="panel-collapse collapse bGray3">
										<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.1<span> &nbsp; <span class="color666">Realiza operaciones básicas entre Monomios</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.2<span> &nbsp; <span class="color666">Conoce y aplica las tablas de multiplicar</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

										<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.3<span> &nbsp; <span class="color666">Realiza operaciones básicas entre Monomios</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

	                                </div>
                                </div>

                                <div class="panel panel-default">
	                                <div class="panel-heading p5">
	                                    <div class="panel-title">
	                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs3" target="_self" style="padding: 5px 50px 5px 10px; background-color: white;">
	                                            <div class="row m0">
	                                                <div class="row">
	                                                	<div class="col-xs-4 col-sm-4 vcenter">
	                                                		<img class="rr50" width="40" src="resources/img/demo/user3.png"> &nbsp; <span class="ff2">Nombre del estudiante</span>
	                                                	</div><!--
	                                                --><div class="col-xs-6 col-sm-6 vcenter pR0">
	                                                		<span style="margin: 0px 27px">4,8</span>
															<span style="margin: 0px 20px">3,6</span>
															<span style="margin: 0px 24px">2,1</span>
															<span style="margin: 0px 17px">3,1</span>
															<span style="margin: 0px 27px">4,0</span>
															<span style="margin: 0px 12px">3,2</span>
															<span style="margin: 0px 0px 0px 20px">3,1</span>
	                                                	</div><!--
	                                                --><div class="col-xs-2 col-sm-2 taR t20 ff2 vcenter colorRed">2.4</div>
	                                                </div>
	                                            </div>
	                                        </a>
	                                    </div>
	                                </div>

	                                <div id="onbs3" class="panel-collapse collapse bGray3">
										<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.1<span> &nbsp; <span class="color666">Realiza operaciones básicas entre Monomios</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.2<span> &nbsp; <span class="color666">Conoce y aplica las tablas de multiplicar</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

										<div class="p10 mb10 row bS1 m0" style="margin-bottom:-1px;">
	                                        <div class="row m0">
	                                            <div class="col-xs-10 col-sm-10 vcenter p0">   
	                                                <span>1.3<span> &nbsp; <span class="color666">Realiza operaciones básicas entre Monomios</span>
	                                            </div><!--
	                                           --><div class="col-xs-2 col-sm-2 vcenter taR">
	                                            	<a href="">Guardar</a>
	                                            </div>
	                                        </div>
	                                    </div>

	                                </div>
                                </div>


                            </div>
                        </div>


					</div>
				</div>

				<div class="row mb20">
					<div class="col-xs-12 taC">
						<a class="bBasic2 rr40 bVerde5 taC" href="" style="margin: 0px 5px; padding: 12px 40px"><b class="colorfff">Guardar</b></a>
					</div>
				</div>
			</div>
		</div>

    </div>

</div>

<div ng-include src=" 'view/plataforma/general/area/footer.php' "></div>
