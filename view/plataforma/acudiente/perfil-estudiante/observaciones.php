<div class="contEstandar bWhite rr5 p10">

	<div class="titSep2 colorVirde ff2 t14" style="margin-top:0;">
        <div class="col-sm-3 col-xs-3 vcenter">
            <span class="colorVerde2 ff2 t24">Observaciones</span>
            
        </div><!--
    --><div class="col-sm-5 col-xs-5 p0 vcenter">
            <span class="color666 ff1 t16">Ordenar por</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="selecStd4 rr5 ff1 t16 colorVirde bGray">
                <option value="grado-6">Seleccione</option>
                <option value="grado-7">Grado 7°</option>
                <option value="grado-8">Grado 8°</option>
                <option value="grado-9">Grado 9°</option>
                <option value="grado-10">Grado 10°</option>
                <option value="grado-11">Grado 11°</option>
            </select>
        </div>
    </div>

	
        
            <div class="mFuq">
            
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs1" target="_self">
                                    <div class="row m0">
                                        <div class="col-xs-2 col-sm-2 p0 vcenter">
                                            <span class="ff1">Enero 18 / 2016</span>
                                        </div><!--
                                    --><div class="col-xs-9 col-sm-9 p0 vcenter">
                                            <span class="ff2">Suspensión por mal comportamiento</span>
                                        </div><!--
                                    --><div class="col-xs-1 col-sm-1 vcenter taR">
                                            <img src="resources/img/icons/clip.png" />
                                        </div>
                                    </div>
                                    <!--
                                    <span class="ff1">Enero 18 / 2016</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="ff2">Suspensión por mal comportamiento</span>
                                    <img src="resources/img/icons/clip.png" style="float: rigth" />
                                    -->
                                </a>
                            </div>
                        </div>
                        <div id="onbs1" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<div class="p50">
                                	Creado por: Nombre del coordinador de disciplina
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
                    
                    <?php for($yy=0; $yy<3; $yy++){ ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#onbs<?= $yy+2; ?>" target="_self">
                                    <div class="row m0">
                                        <div class="col-xs-2 col-sm-2 p0 vcenter">
                                            <span class="ff1">Enero 18 / 2016</span>
                                        </div><!--
                                    --><div class="col-xs-9 col-sm-9 p0 vcenter">
                                            <span class="ff2">Suspensión por mal comportamiento</span>
                                        </div><!--
                                    --><div class="col-xs-1 col-sm-1 vcenter taR">
                                            <img src="resources/img/icons/clip.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="onbs<?= $yy+2; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                            	<div class="p50">
                                	Creado por: Nombre del coordinador de disciplina
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