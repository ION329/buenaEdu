<div class="contEstandar bWhite rr5 p0">
    
    <div class="col-sm-8 col-xs-8 pInt">
    
        <div ng-include src=" 'view/plataforma/zoom/perfil-estudiante.php' "></div>
        
    </div>
    <div class="col-sm-4 col-xs-4 bBlueL rr5 pInt colorVirde">
    	<select class="selecStd rr5 ff2 t18 colorVirde">
        	<option>Matemáticas</option>
            <option>Ciencias Naturales</option>
            <option>Lengua Castellana</option>
        </select>
        
        <div class="titSep2 colorVirde ff2 tU t14">Nota final</div>
        <div class="row">
            <div class="col-sm-6 col-xs-6 colorVirde vcenter">
                <div class="colorOrange t60 ff2">3.8</div>
            </div><!--
            --><div class="col-sm-6 col-xs-6 vcenter">
                <div class="t16 ff2 colorfff taC bVirde p20"><img src="resources/img/icons/up.png"> &nbsp;40%</div>
            </div>
        </div>
        
        <div class="titSep2 colorVirde ff2 tU t14">        
        	<div class="row">
                <div class="col-sm-3 col-xs-3">(1)P</div>
                <div class="col-sm-3 col-xs-3">(2)P</div>
                <div class="col-sm-3 col-xs-3">(3)P</div>
                <div class="col-sm-3 col-xs-3">EF</div>
            </div> 
        </div>
        <div class="row ff2 t16">
            <div class="col-sm-3 col-xs-3 vcenter"><span class="colorOrange">3.6</span></div><!--
            --><div class="col-sm-3 col-xs-3 vcenter"><span class="colorVerde">4.2</span></div><!--
            --><div class="col-sm-3 col-xs-3 vcenter"><img src="resources/img/icons/block.png"></div><!--
            --><div class="col-sm-3 col-xs-3 vcenter"><img src="resources/img/icons/block.png"></div>
        </div>
        
        <div class="titSep2 colorVirde ff2 tU t14">Rendimiento por Logros</div>
        <div class="navBarLog ff5 taC mb10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="taC active">
                    <a href="#p1" target="_self" aria-controls="p1" role="tab" data-toggle="tab" class="btn-radius-bykr">
                        (1)P
                    </a>
                </li>
                <li role="presentation" class="taC">
                    <a href="#p2" target="_self" aria-controls="p2" role="tab" data-toggle="tab" class="btn-radius-bykr">
                        (2)P
                    </a>
                </li>
                <li role="presentation" class="taC">
                    <a href="#p3" target="_self" aria-controls="p3" role="tab" data-toggle="tab" class="btn-radius-bykr">
                        (3)P
                    </a>
                </li>
    
            </ul>
        </div>
        
        <div class="tab-content">
            <div id="p1" class="tab-pane fade in active">
            	<br>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bRed p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
            </div>
            <div id="p2" class="tab-pane fade">
                <br>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bRed p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
            </div>
            <div id="p3" class="tab-pane fade">
                <br>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bRed p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                	<div class="bOrange p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
                <?php $filipo =  rand(0,9).rand(0,9); ?>
                <div class="contBar rr20 mb10">
                    <div class="bVerde p5 colorfff ff2" style="width:<?= $filipo; ?>%;"><?= rand(0,4).".".rand(0,9); ?></div>
                    <span class="colorfff ff2 porceFul"><?= $filipo; ?>%</span>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="titSep2 colorVirde ff2 tU t14">Asistencia a clase</div>
        <div class="color666 asistDate">Días presente <span class="t18 ff2 colorVirde">29</span></div>
        <div class="color666 asistDate">Días ausente <span class="t18 ff2 colorVirde">2</span></div>
        <div class="color666 asistDate">Llegadas tarde <span class="t18 ff2 colorVirde">3</span></div>
        
        <br><br>
        
        <a href="" class="bBasic5 dB rr40 t16 ff2 colorfff bVerde taC">Detalle Notas</a>
        
        
    </div>
    <br style="clear:both;" />

 
    
</div>