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
                            <div class="color999">Desayunos</div>
                            <div class="ff2">(10,553)</div>
                        </th>
                        <th style="background-color: transparent; border: 0px; vertical-align: top;" class="taC">
                            <div class="color999">Almuerzos</div>
                            <div class="ff2">(10,512)</div>
                        </th>
                        <th style="background-color: transparent; border: 0px; vertical-align: middle;" class="taC">
                            <div class="color999">Observaciones <img src="resources/img/icons/mE4.png"></div>
                        </th>
                    </tr>
                </thead>
                <tbody class="pTable">

                    <?php for($tt=0; $tt<7; $tt++){ ?>
                    <tr style="background-color: #ddd" class="tableHover cP bCambiar" data-toggle="modal" data-target="#visor-pae"> 
                        <td class="colorAzul ff2">Lunes, 1 de Febrero</td>
                        <td class="ff2 taC">150</td>
                        <td class="ff2 taC">145</td>
                        <td class="taC"> <div class="dIB bOrange colorfff rr50" style="padding: 3px 9px">1</div></td>
                    </tr>
                    <tr style="background-color: #fff" class="tableHover cP bCambiar" data-toggle="modal" data-target="#visor-pae">
                        <td class="colorAzul ff2">Martes, 2 de Febrero</td>
                        <td class="ff2 taC">142</td>
                        <td class="ff2 taC">150</td>
                        <td class="taC"> <div class="dIB bOrange colorfff rr50" style="padding: 3px 9px">3</div></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>    
    </div>
</div>