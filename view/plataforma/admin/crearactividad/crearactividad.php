<div class="dCambiar1">

    <div class="contEspecial bWhite rr5 p30" style="max-width:600px; margin-left:auto; margin-right:auto;">
            
        <div class="logoZona rr50 taC"><img src="resources/img/icons/panel1.png"></div>

    	<br /><br />

        <div class="row">
            <div class="col-sm-12 col-xs-12">
            
            	<div class="t30 taC mb30 colorVerde2">Crear una Actividad</div>
                
                <div class="row m0 mb20">
                    <div class="col-xs-12">
                        <div class="mb10 color999 t16">Asignatura</div>
                        <div>
                            <select class="selSt rr5">
                                <option>Matemáticas</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row m0 mb20">
                    <div class="col-sm-6 col-xs-6">
                        <div class="mb10 color999 t16">Grado</div>
                        <div>
                            <select class="selSt">
                                <option>Grado</option>
                            </select>    
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="mb10 color999 t16">Grupo</div>
                        <div>
                            <select class="selSt">
                                <option>Grupo</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row m0">
                    <div class="col-sm-12 col-xs-12">
                        <div class="mb10 color999 t16">Grupo</div>
                        <div>
                            <select class="selSt">
                                <option>Jornada</option>
                            </select>
                        </div>
                    </div>    
                </div>
                
                
                <br style="clear:both;" />
                <hr style="border-color: #666;" />
                <div class="taC">
                    <a href="" class="bBasic5 rr40 t20 ff2 colorfff bVerde5 taC cP bCambiar">
                        <span class="p20">Crear Actividad</span>
                    </a>
                </div>
                
            </div>
        </div>

    </div>
    
</div>


<div class="dCambiar2 dN">
   <div class="p30" style="max-width:1000px; margin-left:auto; margin-right:auto;">
        <div class="row mb30">
            <div class="col-xs-8 col-xs-offset-2">
                <ul class="nav ff2 bGray t16" style="width: 100%;">
                    <li class="active">
                        <a class="color666 taC" style="padding-top: 10px; padding-bottom: 10px;" target="_self" href="#descripcion" data-toggle="tab"><span class="vcenter">Descripción</span></a>
                    </li>
                    <li>
                        <a class="color666 taC" style="padding-top: 10px; padding-bottom: 10px;" target="_self" href="#logros" data-toggle="tab"><span class="vcenter">Logros Evaluados</span></a>
                    </li>
                    <li>
                        <a class="color666 taC" style="padding-top: 10px; padding-bottom: 10px;" target="_self" href="#notificaciones" data-toggle="tab"><span class="vcenter">Notificaciones</span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="tab-content mb20">
            <div id="descripcion" class="tab-pane fade in active">
                <div style="max-width:600px; margin-left:auto; margin-right:auto;">
                    <div class="taC colorVerde2 t24 ff2 mb20">Defina la actividad a crear</div>
                    <div class="mb5">
                        <select class="selSt ff2">
                            <option>Tipo de Actividad</option>
                        </select>
                    </div>
                    <div class="mb5"><input id="" class="form-control input-bykrF" type="text" name="" placeholder="Asigne un Título *" style="border-radius: 0px"></div>
                    <div class="mb5"><textarea id="" class="form-control input-bykrF" placeholder="Descripción (Max 150 caracteres) *" name="" rows="3" style="resize: none; width: 100%; border-radius: 0px"></textarea></div>
                    <div class="">
                        <div class="bS1 p10 bWhite">
                            <div class="tab">
                                <div class="tabIn">
                                    <a href=""><div class="dIB p510 color333 bGray3 bS1 cP rr10">Seleccionar archivo</div></a>
                                </div>
                                <div class="tabIn taR">
                                    <a class="bBasic1 rr5 bAzulBE taC p1020 cP" style="border: 1px solid;"><b class="colorfff">Subir firma</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p5 bGray3 color999 mb20">El archivo adjunto debe estar en formato <span class="color666">.xlxs .xls .cvs .docx .pdf .doc</span></div>
                    <div class="row mb30">
                        <div class="col-xs-5 vcenter">
                            <label for="chkcalificar"><input type="checkbox" name="chkcalif" id="chkcalificar"> &nbsp; <span class="t16">Calificar esta actividad</span></label>
                        </div><!--
                    --><div class="col-xs-6 pL0 vcenter">
                            <input type="range" name="" id="" class="form-control">
                        </div><!--
                    --><div class="col-xs-1 ff2 t16 pL0 taR vcenter">15%</div>
                    </div>
                </div>
            </div>

            <div id="logros" class="tab-pane fade">
                <div class="taC colorVerde2 t24 ff2 mb10">¿Que evalua esta actividad?</div>
                <div class="taC color999 mb20">Selecciona los logros a evaluar con la actividad</div>  
                <div class="row m0 mb30">
                    <div class="col-xs-4 col-xs-offset-4">
                        <select class="selSt colorfff ff2" style="background-color: #FF6D6D;">
                            <option value="Grado">Filtrar por unidad</option>
                        </select>
                    </div>
                </div>  

                <div class="row">
                    <?php for($ee=0; $ee<12; $ee++){ ?>
                    <div class="col-xs-4 mb20">
                        <div class=" bWhite p20 bykrHober3 cP">
                            <div class="mb20 ff2">1.1</div>
                            <div class="color666">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestiae placeat quisquam amet commodi.</div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div id="notificaciones" class="tab-pane fade">
                <div style="max-width:800px; margin-left:auto; margin-right:auto;">
                    <div class="taC colorVerde2 t24 ff2 mb30">Notificar la Actividad</div>
                    <div class="taC color999 mb10">¿En que fecha se realiza la actividad?</div>
                    <div class="row mb20 taC">
                        <div class="col-xs-8 col-xs-offset-2">
                            <img src="resources/img/temporal/calendario1.png" style="width: 100%">
                        </div>
                    </div>
                    <div class="row mb10">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="mb10"><label for="chk-ts"><input type="checkbox" name="chk5" id="chk-ts"> Notificar a todo el salón</label></div>
                            <div><label for="chk-ts"><input type="checkbox" name="chk5" id="chk-ts"> Notificar con copia a acudientes</label></div>        
                        </div>
                    </div>
                </div>
            </div>

            <div class="taR">
                <a class="bBasic2 rr40 bGray3 taC t16 bCambiar" style="" href=""><b class="color666">Cancelar</b></a>
                <a class="bBasic2 rr40 bVerde5 taC t16" style="" href=""><b class="colorfff">Siguiente</b></a>
            </div>
        </div>

   </div>
</div>
