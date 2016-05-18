<div class="ionix">
    <div class="bAzulBE">
        <div class="limite1000">
            <div class="tab p20">
                <div class="tabIn"><img src="resources/img/icons/logoruta2.png"> &nbsp;&nbsp;<span class="t30 ff2 colorfff vcenter">Creando Ruta Escolar</span></div>
            </div>
        </div>
    </div>
    <div class="generalMin">
        <div class="pAA40 taC">
            <div class="limite1000 taL">
                <div class="row m0">
                    <div class="col-xs-12">
                        <div class="row m0 contEstandar bGray p20">
                            <div class="col-xs-2">
                                <div class="mb5 color666">Ruta No</div>
                                <input id="" class="form-control input-bykrF" type="text" name="">
                            </div>
                            <div class="col-xs-2">
                                <div class="mb5 color666">Placa</div>
                                <input id="" class="form-control input-bykrF" type="text" name="">
                            </div>
                            <div class="col-xs-3">
                                <div class="mb5 color666">Ciudad</div>
                                <select class="selStd5 rr5" style="background-color: #fff">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <div class="mb5 color666">Modelo</div>
                                <select class="selStd5 rr5" style="background-color: #fff">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-xs-2">
                                <div class="mb5 color666">Pasajeros</div>
                                <input id="" class="form-control input-bykrF" type="text" name="">
                            </div>
                        </div>
                        <div class="contEstandar bWhite mb20" style="margin-top: -1px">
                            <div>
                                <ul class="nav ff2 t16 menuAzul" style="width: 100%;">
                                    <li class="active">
                                        <a class="color666 taC tU" style="padding-top: 11px; padding-bottom: 11px;" target="_self" href="#dvehiculo" data-toggle="tab"><div class="dIB iconruta1 vcenter"></div> &nbsp;<span class="vcenter colorfff"> Datos del Vehículo </span></a>
                                    </li>
                                    <li>
                                        <a class="color666 taC tU" style="padding-top: 11px; padding-bottom: 11px;" target="_self" href="#dconductor" data-toggle="tab"><div class="dIB iconruta2 vcenter"></div> &nbsp;<span class="vcenter colorfff"> Datos del Conductor </span></a>
                                    </li>
                                    <li>
                                        <a class="color666 taC tU" style="padding-top: 11px; padding-bottom: 11px;" target="_self" href="#estuasig" data-toggle="tab"><div class="dIB iconruta3 vcenter"></div> &nbsp;<span class="vcenter colorfff"> Estudiantes Asignados </span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="dvehiculo" class="tab-pane fade in active">
                                    <div class="p30">
                                        <div class="color999 t20 mb20">Ingresa los datos del Vehículo</div>
                                        <div class="row mb20">
                                            <div class="col-xs-6">
                                                <select class="selStd5 rr5" style="height: 40px">
                                                    <option value="">Aseguradora SOAT</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" class="form-control input-bykrF" placeholder="Vencimiento SOAT" style="height: 40px">
                                                    <div class="input-group-addon cP">
                                                        <div class="dIB" style="width: 22px"><img src="resources/img/icons/r-historial.png" width="26"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb30">
                                            <div class="col-xs-6">
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" class="form-control input-bykrF" placeholder="Vencimiento Tecno-Mecánica" style="height: 40px">
                                                    <div class="input-group-addon cP">
                                                        <div class="dIB" style="width: 22px"><img src="resources/img/icons/r-historial.png" width="26"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <select class="selStd5 rr5" style="height: 40px">
                                                    <option value="">Tipo de Vehículo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1">
                                                <div class="mb20 t16 ff2 taC">Tome una foto de la tarjeta de propiedad porla cara frontal</div>
                                                <div class="bGray3 p20 taC mb5"><img src="resources/img/icons/rutafoto.png"></div>
                                                <div class="bS1 p10 bWhite">
                                                    <div class="tab">
                                                        <div class="tabIn">
                                                            <!--
                                                            <a href=""><div class="dIB p510 color333 bGray3 bS1 cP rr10">Seleccionar archivo</div></a> &nbsp;
                                                            <span class="color999">Ningun archivo seleccionado</span>
                                                            -->
                                                            <div class="fileUpload dIB p510 color333 bGray3 bS1 cP rr10 vcenter">
                                                                <span>Seleccionar Archivo</span>
                                                                <input id="uploadBtn" type="file" class="upload" />
                                                            </div> &nbsp;
                                                            <span class="color999 vcenter">Ningun archivo seleccionado</span>
                                                            <!-- Por favor crear un script que cambie el span de Ningun archivo seleccionado por el archivo que seleccione el usuario http://geniuscarrier.com/how-to-style-a-html-file-upload-button-in-pure-css/ -->
                                                        </div>
                                                        <div class="tabIn taR">
                                                            <!--<a class="bBasic1 rr5 bAzulBE taC p1020 cP" style="border: 1px solid;"><b class="colorfff">Subir firma</b></a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p5 bGray3 color999 mb20">
                                                    La foto debe ser en formato 
                                                    <span class="color666">.JPEG Gif o Png y menor a 200 Kb.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dconductor" class="tab-pane fade">
                                    <div class="p30">
                                        <div class="color999 t20 mb20">Ingresa los datos del Conductor</div>
                                        <div class="row mb20">
                                            <div class="col-xs-6"><input type="text" class="form-control input-bykrF" placeholder="Nombres" style="height: 40px"></div>
                                            <div class="col-xs-6"><input type="text" class="form-control input-bykrF" placeholder="Apellidos" style="height: 40px"></div>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-xs-6">
                                                <select class="selStd5 rr5" style="height: 40px">
                                                    <option value="">Tipo de Identificación</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6"><input type="text" class="form-control input-bykrF" placeholder="Numero de Identificación" style="height: 40px"></div>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-xs-6"><input type="email" class="form-control input-bykrF" placeholder="Correo Electrónico" style="height: 40px"></div>
                                            <div class="col-xs-6"><input type="tel" class="form-control input-bykrF" placeholder="Celular" style="height: 40px"></div>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-xs-6"><input type="tel" class="form-control input-bykrF" placeholder="Telefono Fijo" style="height: 40px"></div>
                                            <div class="col-xs-6"><input type="text" class="form-control input-bykrF" placeholder="Dirección" style="height: 40px"></div>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-xs-6">
                                                <div class="row">
                                                    <div class="col-xs-5 ff2 vcenter">Fecha de Nacimiento</div><!--
                                                --><div class="col-xs-7 vcenter">
                                                        <div class="row">
                                                            
                                                            <div class="col-xs-4 pL0">
                                                                <select class="selStd5 rr5" style="height: 40px; background-color: #fff">
                                                                    <option value="">AAAA</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-4 pL0">
                                                                <select class="selStd5 rr5" style="height: 40px; background-color: #fff">
                                                                    <option value="">MM</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-4 pL0">
                                                                <select class="selStd5 rr5" style="height: 40px; background-color: #fff">
                                                                    <option value="">DD</option>
                                                                </select>
                                                            </div>

                                                        </div>    
                                                    </div>
                                                            
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <select class="selStd5 rr5" style="height: 40px">
                                                    <option value="">Estado Civil</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb20">
                                            <div class="col-xs-6">
                                                <select class="selStd5 rr5" style="height: 40px">
                                                    <option value="">Genero</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-6"></div>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-xs-4 ff2 vcenter">Licencia de Conducción</div><!--
                                        --><div class="col-xs-2 vcenter">
                                                <select class="selStd5 rr5" style="height: 40px">
                                                    <option value="">Genero</option>
                                                </select>
                                            </div><!--
                                        --><div class="col-xs-6 vcenter">
                                                <div class="row">
                                                    <div class="col-xs-3 ff2 vcenter">Vigencia</div><!--
                                                --><div class="col-xs-3 vcenter">
                                                        <select class="selStd5 rr5" style="height: 40px; background-color: #fff">
                                                            <option value="">AAAA</option>
                                                        </select>
                                                    </div><!--
                                                --><div class="col-xs-3 vcenter">
                                                        <select class="selStd5 rr5" style="height: 40px; background-color: #fff">
                                                            <option value="">MM</option>
                                                        </select>
                                                    </div><!--
                                                --><div class="col-xs-3 vcenter">
                                                        <select class="selStd5 rr5" style="height: 40px; background-color: #fff">
                                                            <option value="">DD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-2"><img src="resources/img/icons/logoInstit.jpg"></div>
                                            <div class="col-xs-10">
                                                
                                                <div class="bS1 p10 bWhite">
                                                    <div class="tab">
                                                        <div class="tabIn">
                                                            <div class="fileUpload dIB p510 color333 bGray3 bS1 cP rr10 vcenter">
                                                                <span>Seleccionar Archivo</span>
                                                                <input id="uploadBtn" type="file" class="upload" />
                                                            </div> &nbsp;
                                                            <span class="color999 vcenter">Ningun archivo seleccionado</span>
                                                            <!--<a href=""><div class="dIB p510 color333 bGray3 bS1 cP rr10">Seleccionar archivo</div></a> &nbsp;
                                                            <span class="color999">Ningun archivo seleccionado</span>-->
                                                        </div>
                                                        <div class="tabIn taR">
                                                            <!--<a class="bBasic1 rr5 bAzulBE taC p1020 cP" style="border: 1px solid;"><b class="colorfff">Subir firma</b></a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p5 bGray3 color999 mb20">
                                                    La foto debe ser en formato 
                                                    <span class="color666">.JPEG Gif o Png y menor a 200 Kb.</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="estuasig" class="tab-pane fade">
                                    <div class="p10">
                                        <div class="pLR20">
                                            <div class="tab">
                                                <div class="tabIn t16">Estudiantes Asignados a la ruta <b>(28)</b> </div>
                                                <div class="tabIn taR">
                                                    <a href=""><div class="dIB bS1 bGray colorVerde2 bBasic3" style="padding: 5px 10px"><span class="vcenter">Agregar pasajeros</span> &nbsp;<img src="resources/img/icons/add+.png"></div></a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="bykrHr" style="margin-top: 7px; margin-bottom: 0px">
                                        <table class="table">
                                            <thead>
                                                <tr class="ff1 colorVerde2">
                                                    <th style="width: 50px" class="taC">
                                                        <a href=""><div class="dIB bGray3 rr5" style="padding: 4px 8px"><img src="resources/img/icons/eliminar.png"></div></a>
                                                    </th>
                                                    <th>CODIGO</th>
                                                    <th>NOMBRE ESTUDIANTE</th>
                                                    <th>DIRECCIÓN</th>
                                                    <th>GRADO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($jj=0; $jj<10; $jj++){ ?>
                                                <tr>
                                                    <td class="taC"><input type="checkbox" name="" id=""></td>
                                                    <td>2012673664</td>
                                                    <td>Ampudia Gomez Angela Patricia</td>
                                                    <td>Calle 45 # 4b-50</td>
                                                    <td>Prejardin-B</td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="taC">
                            <a class="bBasic4 rr40 bGray5 taC" style="margin: 0px 5px; padding: 18px 50px" href=""><b class="" style="">Cancelar</b></a>
                            <a class="bBasic4 rr40 bVerde5 taC colorfff" style="margin: 0px 5px; padding: 18px 50px" href=""><b class="">Guardar</b></a>
                        </div>
                    </div>
                </div>
                        
            </div>
        </div>
    </div>
</div>


