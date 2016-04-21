<div class="bS1 bWhite">

	<div style="position:relative">
    
		<?php for($oo=6; $oo<23; $oo++){ ?>
            <div class="row m0 bSB color999">
                <div class="col-sm-2 col-xs-2 p0">
                    <div class="bSR bSB h48 taR p510"><?= $oo; ?>:00</div>
                </div>
                <div class="col-sm-10 col-xs-10 p0">
                    <div class="bSB h24"></div>
                    <div class="bSB h24"></div>
                </div>
            </div>
        <?php } ?>
        

		<!-- MATERIA EN HORARIO -->
        
            <div class="row m0 color333" style="position:absolute; z-index:100; top:0; height:72px; width:100%" ><!-- HEIGHT = cada 30 mins * 24px ;  TOP = #horaInicial - 6 * 24 + #horas - 6 -->
                <div class="col-sm-2 col-xs-2 p0 vcenter"></div><!--
                --><div class="col-sm-5 col-xs-5 p0 vcenter bAzulL" style="height:72px;" ><!-- HEIGHT = cada 30 mins * 24px -->
                	<div class="p1020">
                        7:00 am - 8:30 am<br>
                        <div class="ff2 t20">Nombre materia</div>
                    </div>
                </div><!--
                --><div class="col-sm-5 col-xs-5 p0 vcenter bAzulL" style="height:72px;" ><!-- HEIGHT = cada 30 mins * 24px -->
                	<div class="p1020">
                        <div class="ff2 t30 taR">8° C</div>
                    </div>
                </div>
            </div>
            
            <div class="row m0 color333" style="position:absolute; z-index:100; top:147px; height:96px; width:100%" ><!-- HEIGHT = cada 30 mins * 24px -->
                <div class="col-sm-2 col-xs-2 p0 vcenter"></div><!--
                --><div class="col-sm-5 col-xs-5 p0 vcenter bAzulL" style="height:96px;" ><!-- HEIGHT = cada 30 mins * 24px -->
                	<div class="p1020">
                        9:00 am - 11:00 am<br>
                        <div class="ff2 t20">Nombre materia</div>
                    </div>
                </div><!--
                --><div class="col-sm-5 col-xs-5 p0 vcenter bAzulL" style="height:96px;" ><!-- HEIGHT = cada 30 mins * 24px -->
                	<div class="p1020">
                        <div class="ff2 t30 taR">8° A</div>
                    </div>
                </div>
            </div>
            
            <div class="row m0 color333" style="position:absolute; z-index:100; top:343px; height:48px; width:100%" ><!-- HEIGHT = cada 30 mins * 24px ;  TOP = #horaInicial - 6 * 48 + #horaInicial - 6 -->
                <div class="col-sm-2 col-xs-2 p0 vcenter"></div><!--
                --><div class="col-sm-5 col-xs-5 p0 vcenter bAzulL" style="height:48px;" ><!-- HEIGHT = cada 30 mins * 24px -->
                	<div class="p1020">
                        13:00 am - 14:30 am<br>
                        <div class="ff2 t20">Español</div>
                    </div>
                </div><!--
                --><div class="col-sm-5 col-xs-5 p0 vcenter bAzulL" style="height:48px;" ><!-- HEIGHT = cada 30 mins * 24px -->
                	<div class="p1020">
                        <div class="ff2 t30 taR">11° A</div>
                    </div>
                </div>
            </div>
        
        <!-- // MATERIA EN HORARIO -->
        
        
        <!-- HORA ACTUAL -->
        	<div class="lineTime" style="top:220px;"></div>
        <!-- // HORA ACTUAL -->
        
        
    </div>