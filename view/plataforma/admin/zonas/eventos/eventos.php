<div class="contEspecial bWhite rr5 p30">
        
    <div class="logoInstitucion rr50"><img src="resources/img/demo/logo-colegio-in.png"></div>

    <br><br><br><br><br>
        
    <div class="t24 colorVerde2 taC">Eventos del <strong>Colegio Claret</strong></div>
    <br /><br />
    
	<div class="titSep2 colorVirde ff2 tU t14" style="margin-top:0;">
        <div class="col-sm-1 col-xs-1 p0 vcenter">
            <div class="btn-group" style="width:100px;">
              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10" /></button>
              <button type="button" class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;"><img src="resources/img/icons/arL.png" width="10" /></button>
            </div>
        </div><!--
        --><div class="col-sm-5 col-xs-5 vcenter">
            <span class="t24 colorVirde ff2">Enero</span>
            <span class="t24 color666 ff0">2016</span>
        </div><!--
        --><div class="navBarLog taC col-sm-6 col-xs-6 vcenter taR">
            <a class="bBasic3 rr40 color666 bGray3 taC" style="text-transform: capitalize;" href="">
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
            <a class="bBasic2 rr40 color666 bGray3 taC ff1" href="">Editar</a>
            <a class="bBasic2 rr40 color666 bGray3 taC ff1" href="">Descargar</a>
            <a href="" class="bBasic2 rr40 colorfff bVerde5 taC bAbrir1">Crear Alarma</a>
        </div>
    </div>
    
    <div class="p20">
    	<div class="row bS1 cP p20 bGray dAbre1 dN" style="margin-bottom:-1px;">
        	<div class="t16 ff2 tU mb20 color666">Creando evento</div>
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

</div>