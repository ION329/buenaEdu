<div ng-include src=" 'view/plataforma/general/zona/menuVisor-buscar.php' "></div>
<div class="pAA30"></div>

<div class="contEstandar p30">
    <div class="row">
        <div class="col-xs-3">
            <div class="row">
                <div class="col-xs-10">
                    <?php for($uu=0; $uu<2; $uu++){ ?>
                    <div class="p1020 rr10 bS1 color999 cP mb5 menuVisorH">Valle del Cauca</div>         
                    <div class="p1020 rr10 bS1 color999 cP mb5 menuVisorH">Santiago de Cali</div>         
                    <div class="p1020 rr10 bS1 color999 cP mb5 menuVisorH">Buga</div>         
                    <div class="p1020 rr10 bS1 color999 cP mb5 menuVisorH">Tulua</div>         
                    <?php } ?>
                </div>
                <div class="col-xs-2"></div>
            </div>
            

        </div>
        <div class="col-xs-9">
            <div class="tab mb20">
                <div class="tabIn ff2 t40">Reportes y Estadisticas</div>
                <div class="tabIn taR">
                    <span class="color999"><div class="p5 bVerde5 dIB" style="border-radius: 2px"></div> 1er Periodo</span> &nbsp;&nbsp;
                    <span class="color999"><div class="p5 bBlue dIB" style="border-radius: 2px"></div> 2do Periodo</span> &nbsp;&nbsp;
                    <span class="color999"><div class="p5 bYell dIB" style="border-radius: 2px"></div> 3er Periodo</span> &nbsp;&nbsp;
                </div>
            </div>

            <div class="row m0 mb30">
                <img src="resources/img/temporal/grafica.png" />
            </div>

            <div class="colorfff ff2 t20 p1020 mb20 rr5" style="background-color: #585858;">
                <div class="tab">
                    <div class="tabIn">Plan de Alimentación</div>
                    <div class="tabIn taR">Oferentes con Convenio: 582</div>
                </div>
            </div>

            <div class="row mb30">

                <div class="col-xs-6 col-sm-6">
                    <div class="contEstandar p10 ff2 bWhite">
                        Total Loncheras
                    </div>
                    <div class="contEstandar p10 bWhite" style="margin-top: -1px">
                        <div class="tab">
                            <div class="tabIn">
                                <img src="resources/img/temporal/comidita.png" />
                            </div>
                            <div class="tabIn taR">
                                <span class="ff2 t50 colorAzul">48'321,500</span> 
                            </div>
                        </div>
                    </div>
                    <div class="contEstandar p10 bWhite" style="margin-top: -1px">
                        
                        <div class="tab">
                            <div class="tabIn color999">
                                <img src="resources/img/temporal/iconopersona.png" /> <span class="vcenter">Estudiantes Beneficiados</span>
                            </div>
                            <div class="tabIn taR ff2 t20">1,528</div>
                        </div>

                    </div>
                </div>
                
                <div class="col-xs-6 col-sm-6">
                    <div class="contEstandar p10 ff2 bWhite">
                        Total Almuerzos
                    </div>
                    <div class="contEstandar p10 bWhite" style="margin-top: -1px">
                        <div class="tab">
                            <div class="tabIn">
                                <img src="resources/img/temporal/comidita2.png" />
                            </div>
                            <div class="tabIn taR">
                                <span class="ff2 t50 colorVerde2">36'210,380</span> 
                            </div>
                        </div>
                    </div>
                    <div class="contEstandar p10 bWhite" style="margin-top: -1px">
                        <div class="tab">
                            <div class="tabIn color999">
                                <img src="resources/img/temporal/iconopersona.png" /> <span class="vcenter">Estudiantes Beneficiados</span>
                            </div>
                            <div class="tabIn taR ff2 t20">1,430</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="colorfff ff2 t20 p1020 mb20 rr5" style="background-color: #585858;">
                Instituciones Educativas
            </div>

            <div class="row mb30">
                <div class="col-xs-12">

                    <?php for($ll=0; $ll<2; $ll++){ ?>
                    <div class="row mb10">
                        <div class="col-xs-4">
                            <div class="contEstandar p1020 color666 ff2 tU bWhite">Instituciones Inscritas</div>
                            <div class="contEstandar p1020 ff2 t30 bWhite" style="margin-top: -1px">
                                <div class="tab">
                                    <div class="tabIn">2,500</div>
                                    <div class="tabIn taR"><img src="resources/img/icons/v1.png" /></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4">
                            <div class="contEstandar p1020 color666 ff2 tU bWhite">Estuddiantes Activos</div>
                            <div class="contEstandar p1020 ff2 t30 bWhite" style="margin-top: -1px">
                                <div class="tab">
                                    <div class="tabIn">2'350.000</div>
                                    <div class="tabIn taR"><img src="resources/img/icons/adm1.png" /></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4">
                            <div class="contEstandar p1020 color666 ff2 tU bWhite">Personal Academico</div>
                            <div class="contEstandar p1020 ff2 t30 bWhite" style="margin-top: -1px">
                                <div class="tab">
                                    <div class="tabIn">1'836.000</div>
                                    <div class="tabIn taR"><img src="resources/img/icons/adm1.png" /></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
            
            <div class="colorfff ff2 t20 p1020 mb20 rr5" style="background-color: #585858;">
                Perfil Estudiantes
            </div>

            <div class="row mb10">
                <?php for($gg=0; $gg<4; $gg++){ ?>
                <div class="col-xs-6 mb20">
                    <div class="mb5">
                        <span class="colorAzul t16 ff2">(28%)</span> &nbsp; <span class="ff2 t30 vcenter">830.421</span> &nbsp; <span class="ff2 t18" style="vertical-align: bottom">En preescolar</span>
                    </div>
                    <div class="color666">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Estudiantes menores de 6 años</span></div>
                </div>
                <?php } ?>
            </div>

            <div class="row mb20">
                <div class="col-xs-6">
                    <div class="colorfff ff2 t20 p1020 mb20 rr5" style="background-color: #585858;">
                        Desercion Escolar
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="colorfff ff2 t20 p1020 mb20 rr5" style="background-color: #585858;">
                        Promedio Asistencua
                    </div>
                </div>
            </div>

            <div class="row mb30">
                <div class="col-xs-6">
                    <img src="resources/img/temporal/grafica2.png" />
                </div>
                <div class="col-xs-6">
                    <img src="resources/img/temporal/grafica2.png" />
                </div>
            </div>



        </div>    
    </div>
    

</div>


