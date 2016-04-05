<div class="ionix hH">
    <div class="generalMaxMax hH">
    	<div class="col-sm-3 col-xs-3 p0 hH">
        
            <div class="" style="height:80px;">
            	<div class="tabAll">
                	<div class="tabIn p30 t20 ff0" style="padding:0 30px;">
            			Plan de alimentación <span class="fR">20%</span>
                        <div class="bGray4" style="margin-top:5px;"><div class="bVerde" style="width:20%; height:20px;"></div></div>
                	</div>
                </div>
            </div>
        	
            <div class="regTab">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#om1" target="_self" class="bMM1">Programación semanal</a></li>
                    <li><a data-toggle="tab" href="#om2" target="_self" class="bMM2">Historial de ejecución</a></li>
                    <li><a data-toggle="tab" href="#om3" target="_self" class="bMM3">Registro estudiantes</a></li>
                    <li><a data-toggle="tab" href="#om4" target="_self" class="bMM4">Acerca del proveedor</a></li>
                    <li><a data-toggle="tab" href="#om5" target="_self" class="bMM5">Reporte de alimentos</a></li>
                    <li><a data-toggle="tab" href="#om6" target="_self" class="bMM6">Capacitación</a></li>
                </ul>
        	</div>
        
        </div>
        <div class="col-sm-9 col-xs-9 p0 taL bGray3 hH" style="border-left:solid 1px #999999; overflow:auto;">
        
        	<div class="tab-content">
                <div id="om1" class="tab-pane fade in active">
                	<div ng-include src=" 'view/plataforma/oferente/pae/programa/programacion.php' "></div>
                </div>
                <div id="om2" class="tab-pane fade">
                	<div ng-include src=" 'view/plataforma/oferente/pae/programa/historial.php' "></div>
                </div>
                <div id="om3" class="tab-pane fade">
                	<div ng-include src=" 'view/plataforma/oferente/pae/programa/registro.php' "></div>
                </div>
                <div id="om4" class="tab-pane fade">
                	<div ng-include src=" 'view/plataforma/oferente/pae/programa/proveedor.php' "></div>
                </div>
                <div id="om5" class="tab-pane fade">
                	<div ng-include src=" 'view/plataforma/oferente/pae/programa/reporte.php' "></div>
                </div>
                <div id="om6" class="tab-pane fade">
                	<div ng-include src=" 'view/plataforma/oferente/pae/programa/capacitacion.php' "></div>
                </div>
            </div>
        
        
        
        	
            
        </div>
	</div>
</div>




