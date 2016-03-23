<div class="contEstandar bWhite rr5 p10">

	<!--<img src="resources/img/temporal/33.jpg">-->

	<div class="titSep2 colorVirde ff2 t14" style="margin-top:0;">
        
        <div class="col-sm-3 col-xs-3 vcenter">
            <span class="t16 colorVirde ff2">RESUMEN OBSERVACIONES</span>
        </div><!--
        
	--><div class="col-sm-3 col-xs-3 vcenter">
            <span class="t16 colorVirde ff11">Ordenar por:</span>
            <select class="selecStd3 ff1 t16 color999">
				<option value="grado-6">Nombre</option>
				<option value="grado-7">Grado 7°</option>
				<option value="grado-8">Grado 8°</option>
				<option value="grado-9">Grado 9°</option>
				<option value="grado-10">Grado 10°</option>
				<option value="grado-11">Grado 11°</option>
			</select>
        </div><!--

    --><div class="col-sm-3 col-xs-3 col-sm-offset-3 col-xs-offset-3 vcenter taR">
            <a class="bBasic2 rr40 colorfff bVerde taC" href="">Crear Observación</a>
        </div>

    </div>

	
        
            <div class="mFuq2">
            
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs1" target="_self">
                                    <span class="ff1">Enero 18, 2016</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="ff2">Incapacidad Médica</span>
                                    <img src="resources/img/temporal/adjuntar.gif" width="20px" style="float: right; margin: 0px 12px">
                                </a>
                            </div>
                        </div>
                        <div id="onbs1" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<div class="p30">
                                	Creado Enero 15, 2016
                                    <br /><br /><br />
                                    <strong>Suspensión por mal comportamiento</strong><br /><br />
                                    
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
									<br /><br />
                                    Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                                    <br /><br />
                                    <a href="" class="colorVirde">141006-incapacidad-medica.doc (1354Kb)</a>
           						</div>
                            </div>
                        </div>
                    </div>
                    
                    <?php for($yy=0; $yy<3; $yy++){ ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs<?= $yy+2; ?>" target="_self">
                                    <span class="ff1">Enero 18, 2016</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="ff2">Suspencion por mal comportamiento</span>
                                    <img src="resources/img/temporal/adjuntar.gif" width="20px" style="float: right; margin: 0px 12px">
                                </a>
                            </div>
                        </div>
                        <div id="onbs<?= $yy+2; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<div class="p30">
                                	Creado Enero 15, 2016
                                    <br /><br /><br />
                                    <strong>Suspensión por mal comportamiento</strong><br /><br />
                                    
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
									<br /><br />
                                    Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                                    <br /><br />
                                    Coordinador de disciplina<br />
                                    (+57) 345 6789
           						</div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    

        		</div>
            </div>

</div>