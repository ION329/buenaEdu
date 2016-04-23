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