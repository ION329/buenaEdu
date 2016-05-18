<div class="ionix">
    <div class="row m0">
        <div class="col-xs-4 p0" style="position: relative;">
            <div class="bGray3 menuRuta" style="border-left: 1px solid #ccc; border-right: 1px solid #ccc;">
                <div>
                    <ul class="nav ff2 t16 menuAzul2" style="width: 100%;">
                        <li class="active">
                            <a class="color666 taC tU" style="padding-top: 11px; padding-bottom: 11px;" target="_self" href="#resumen" data-toggle="tab"><div class="dIB iconruta4 vcenter"></div></a>
                        </li>
                        <li>
                            <a class="color666 taC tU" style="padding-top: 11px; padding-bottom: 11px;" target="_self" href="#rutas" data-toggle="tab"><div class="dIB iconruta1 vcenter"></div></a>
                        </li>
                        <li>
                            <a class="color666 taC tU" style="padding-top: 11px; padding-bottom: 11px;" target="_self" href="#notificaciones" data-toggle="tab"><div class="dIB iconruta5 vcenter"></div></a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="resumen" class="tab-pane fade in active">
                        <div class="p30" style="padding-bottom: 10px">

                            <div class="mb20">
                                <div class="input-group">
                                    <input id="" class="form-control input-bykrF" type="text" placeholder="Ingrese un parametro de busqueda" style="">
                                    <div class="input-group-addon cP">Buscar</div>
                                </div>
                            </div>

                            <div class="row mb10">
                                <div class="col-xs-6">
                                    <div class="color999 ff2 mb10">Ruta</div>
                                    <select class="selStd5" style="background-color: #fff">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <div class="color999 ff2 mb10">Placa</div>
                                    <input class="form-control input-bykrF" type="text" style="border-radius: 0">
                                </div>
                            </div>

                            <div class="row mb10">
                                <div class="col-xs-6">
                                    <div class="color999 ff2 mb10">Grado</div>
                                    <select class="selStd5" style="background-color: #fff">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <div class="color999 ff2 mb10">Grupo</div>
                                    <select class="selStd5" style="background-color: #fff">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb20">
                                <div class="color999 ff2 mb10">Grupo</div>
                                <select class="selStd5" style="background-color: #fff">
                                    <option value="">Seleccione...</option>
                                </select>
                            </div>

                            <div class="taC mb20"><a class="bBasic4 rr40 bVerde5 taC colorfff" href="" style="margin: 0px 5px; padding: 18px 50px"><b class="">Ingresar a Ruta</b></a></div>

                            <div class="row m0 bS1">
                                <a href="">
                                <div class="col-xs-6 bGray p20 taC" style="border-right: 1px solid #ddd">
                                    <div class="mb10"><img src="resources/img/icons/actruta1.png"></div>
                                    <div class="color999">NUEVO<br>RECORRIDO</div>
                                </div>
                                </a>
                                <a href="">
                                <div class="col-xs-6 bGray p20 taC">
                                    <div class="mb10"><img src="resources/img/icons/actruta2.png"></div>
                                    <div class="color999">PANEL DE<br>CONTROL</div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="rutas" class="tab-pane fade">
                        <div class="p30">
                            <div class="ff2 t18 mb10">Miercoles, 23 de Marazo</div>
                            <div class="mb20">RUTAS EN RECORRIDO</div>
                            <?php for($dd=0; $dd<3; $dd++){ ?>
                            <div class="tab bWhite bS1 rr5 p10 mb5 t16">
                                <div class="tabIn">
                                    <img src="resources/img/icons/miniruta.png">&nbsp;&nbsp;<span class="ff2 vcenter">13</span>&nbsp;&nbsp;<span class="vcenter">KTX 201</span>
                                </div>
                                <div class="tabIn taR">
                                    02:36:19
                                </div>
                            </div>
                            <div class="tab bWhite bS1 rr5 p10 mb5 t16">
                                <div class="tabIn">
                                    <img src="resources/img/icons/miniruta.png">&nbsp;&nbsp;<span class="ff2 vcenter">10</span>&nbsp;&nbsp;<span class="vcenter">CMR 583</span>
                                </div>
                                <div class="tabIn taR colorVerde">
                                    Finalizada
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="notificaciones" class="tab-pane fade">
                        <div class="p30">
                            <div class="p20 bAzulComida mb10">
                                <div class="mb10 color999"><b>Ruta 18</b> 6:25 A.M</div>
                                <div>La Autopista sur con 44 ak frente del rancho de Jonas hay un accidente de transito y llevo 15 minutos en el trancon.</div>
                            </div>
                            <div class="p20 bAzulComida mb10">
                                <div class="mb10 color999"><b>Ruta 18</b> 6:25 A.M</div>
                                <div class="row">
                                    <div class="col-xs-2 vcenter"><img src="resources/img/icons/play.png" class="cP"></div><!--
                                --><div class="col-xs-6 vcenter p0"><hr style="border-color: green !important; border: 4px solid; border-radius: 3px; margin: 0;"></div><!--
                                --><div class="col-xs-4 color999 vcenter">0:03</div>
                                </div>
                            </div>
                            <div class="p20 bAzulComida mb10">
                                <div class="mb10 color999"><b>Ruta 18</b> 6:25 A.M</div>
                                <div>La Autopista sur con 44 ak frente del rancho de Jonas hay un accidente de transito y llevo 15 minutos en el trancon.</div>
                            </div>
                        </div>
                    </div>
                </div>
                        
            </div>
        </div>
        <div class="col-xs-8 p0" style="position: relative;">
            <div class="bGray2 mapRuta">    
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7965.402005723795!2d-76.55031239238298!3d3.4228181093305126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sit!4v1462985452212" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="conteRuta4" style="">
                <div class="p20">
                    <div class="dIB"><img src="resources/img/icons/logoruta.png" width="40"></div>&nbsp;&nbsp;&nbsp;
                    <div class="dIB vcenter t16" style="color: #ddd;"><b>Ruta 14: </b> Juan Jose ya esta en la ruta... <b>6:15 am</b></div>
                </div>
            </div>

            <div class="paradasRuta" style="top: 50px; right: 400px;">
                <div class="dIB"><img src="resources/img/icons/logoruta.png" width="40"></div>
            </div>

            <div class="paradasRuta" style="top: 180px; left: 100px;">
                <div class="dIB"><img src="resources/img/icons/logoruta.png" width="40"></div>
            </div>

            <div class="paradasRuta" style="top: 280px; right: 478px;">
                <div class="dIB"><img src="resources/img/icons/logoruta.png" width="40"></div>
            </div>
        </div>
    </div>
</div>


