
<div class="p30">
    <div class="t30 mb20">Historial de Recorridos</div>

    <div class="row mb20">

        <div class="col-xs-6 col-sm-6">
            <div class="contEstandar p10 ff2 bWhite">
                DISTANCIA RECORRIDA
            </div>
            <div class="contEstandar p20 bWhite" style="margin-top: -1px">
                <div class="tab">
                    <div class="tabIn">
                        <img src="resources/img/icons/r-distanciab.png" />
                    </div>
                    <div class="tabIn taR">
                        <span class="ff2 t50 colorAzul">45,3 Km</span> 
                    </div>
                </div>
            </div>
            <div class="contEstandar p10 bWhite" style="margin-top: -1px">
                
                <div class="tab">
                    <div class="tabIn color999">
                        <img src="resources/img/icons/r-tiempo.png" /> <span class="vcenter">Ultimo Registro</span>
                    </div>
                    <div class="tabIn taR ff2 t20">8,23 Km</div>
                </div>

            </div>
        </div>
        
        <div class="col-xs-6 col-sm-6">
            <div class="contEstandar p10 ff2 bWhite">
                DURACIÓN RECORRIDOS
            </div>
            <div class="contEstandar p20 bWhite" style="margin-top: -1px">
                <div class="tab">
                    <div class="tabIn">
                        <img src="resources/img/icons/r-tiempob.png" />
                    </div>
                    <div class="tabIn taR">
                        <span class="ff2 t50 colorVerde2">08:36:19</span> 
                    </div>
                </div>
            </div>
            <div class="contEstandar p10 bWhite" style="margin-top: -1px">
                <div class="tab">
                    <div class="tabIn color999">
                        <img src="resources/img/icons/r-tiempo.png" /> <span class="vcenter">Último registro</span>
                    </div>
                    <div class="tabIn taR ff2 t20">02:15:28</div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="pTable">
                        <tr style="border: 0px; background-color: transparent">
                            <th style="background-color: transparent; border: 0px; vertical-align: top;">
                                <div class="vcenter"><img src="resources/img/icons/adm3.png"></div>
                                <div class="vcenter">
                                    <div class="btn-group" style="width:100px;">
                                        <button class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;" type="button"><img width="10" src="resources/img/icons/arR.png"></button>
                                        <button class="btn btn-primary bGray btn-bykr rr20" style="border-color:#ccc;" type="button"><img width="10" src="resources/img/icons/arL.png"></button>
                                    </div>
                                </div>
                                <div class="vcenter">
                                    <span class="t24 colorVirde ff2">Febrero</span>
                                    <span class="t24 color666 ff0">2016</span>
                                </div>
                            </th>
                            <th style="background-color: transparent; border: 0px; vertical-align: top;" class="taC">
                                <div class="color999">RECORRIDOS<br>REALIZADOS</div>
                            </th>
                            <th style="background-color: transparent; border: 0px; vertical-align: top;" class="taC">
                                <div class="color999">DISTANCIA<br>RECORRIDA</div>
                            </th>
                            <th style="background-color: transparent; border: 0px; vertical-align: middle;" class="taC">
                                <div class="color999">TIEMPO</div>
                            </th>
                            <th style="background-color: transparent; border: 0px; vertical-align: middle;" class="taC">
                                <div class="color999">OBSERVACIONES <img src="resources/img/icons/mE4.png"></div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="pTable">

                        <?php for($tt=0; $tt<7; $tt++){ ?>
                        <tr style="background-color: #ddd" class="tableHover cP">
                            <td class="colorAzul ff2">Lunes, 1 de Febrero</td>
                            <td class="ff2 taC">2</td>
                            <td class="ff2 taC">23 Km</td>
                            <td class="ff2 taC">02:30:17</td>
                            <td class="taC"></td>
                        </tr>
                        <tr style="background-color: #fff" class="tableHover cP">
                            <td class="colorAzul ff2">Viernes, 28 de Febrero</td>
                            <td class="ff2 taC">2</td>
                            <td class="ff2 taC">25 Km</td>
                            <td class="ff2 taC">02:30:17</td>
                            <td class="taC"></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>    
        </div>
    </div>

</div>

