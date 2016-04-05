<div class="contEstandar bWhite rr5 p10">
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
            <!--
            <a class="bBasic2 rr40 color666 bGray3 taC ff1" href="">Editar</a>
            <a class="bBasic2 rr40 color666 bGray3 taC ff1" href="">Descargar</a>
            -->
            <a href="" class="bBasic2 rr40 colorfff bVerde5 taC bAbrir1">Crear Alarma</a>
        </div>
    </div>
    
    <div class="p20">
        <div class="row bS1 cP p20 bGray dAbre1 dN" style="margin-bottom:-1px;">
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
                <label for="todo-el-dia">
                    <input type="checkbox" name="todo-el-dia" id="todo-el-dia">
                    <span class="ff1 color999">Todo el día</span>
                </label> &nbsp;&nbsp;&nbsp;&nbsp;
                <label for="repetir">
                    <input type="checkbox" name="repetir" id="repetir">
                    <span class="ff1 color999">Repetir</span>
                </label>
            </div>
            <div class="col-sm-6 col-xs-6 mb10">
                <label class="ff1 color999">Título del evento</label>
                <input class="inpSt1 rr5" type="" />
            </div>
            <div class="col-sm-6 col-xs-6 mb10">
                <div class="col-xs-9 col-sm-9 p0">
                    <label class="ff1 color999">Añadir participantes</label>
                    <input class="inpSt1 rr5" type="" />
                </div>
                <div class="col-xs-3 col-sm-3 taC p10">
                    <div class="bBasic3 p1020 color333 cP">Añadir</div>    
                </div>
            </div>    

            <div class="col-sm-12 col-xs-12 mb10">
                <div class="col-xs-6 col-sm-6 p0">
                    <label class="ff1 color999">Ubicación</label>
                    <input class="inpSt1 rr5" type="" />
                </div>
                <div class="col-xs-6 col-sm-6 p0">
                </div>
            </div>
            
            <div class="col-sm-12 col-xs-12 mb20">
                <div class="col-xs-6 col-sm-6 p0">
                    <label class="ff1 color999">Descripción</label>
                    <textarea class="inpSt1 rr5"></textarea>    
                </div>
                <div class="col-xs-6 col-sm-6 p0">
                </div>
            </div>
            
            <div class="taC">
                <a href="" class="bBasic2 rr40 colorfff bVerde2 taC bAbrir2">Crear Alarma</a>
                <a href="" class="bBasic2 rr40 color999 taC bAbrir1">Cancelar</a>
            </div>
        </div>

        
    </div>

    <div class="dCambiar1">
        
        <div class="table-responsive bWhite">      
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Evento</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php for($rr=0; $rr<4; $rr++){ ?>
              <tr>
                <td>24 Oct/16</td>
                <td>8:00 am a 4:00 pm</td>
                <td><a class="aSS cP bCambiar">Actividad de regreso a clases</a></td>
                <td><img src="resources/img/icons/arL.png" /></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

    </div>    

    <div class="dCambiar2 dN">
    
        <div class="titSep3 colorVirde ff2 tU t14">
            <div class="col-sm-1 col-xs-1 vcenter">
                <div class="btn-group">
                  <button class="btn btn-primary bGray bCambiar" style="border-color:#ccc;"><img src="resources/img/icons/arR.png" width="10"></button>
                </div>
            </div><!--
            --><div class="col-sm-11 col-xs-11 vcenter">
                <span class="t24 colorVirde ff2">Título del evento institucional</span>
            </div>
        </div>

        <div class="dateEven2 p10">
            <div class="t60 colorfff taC">29</div>
            <div class="t20 colorfff taC">Feb/16</div>
        </div>
        <img src="resources/img/demo/evento.jpg" />
        
        <br /><br /><br />
        
        <div class="row">
        
            <div class="col-sm-1 col-xs-1"></div>
            <div class="col-sm-3 col-xs-3 color999">
                <strong>Admin</strong><br />
                Fecha: 15 de Sep / 16
                <br /><br />
                <strong>Importante</strong><br />
                Solo se permite la compra de máximo 10 boletas por estudiante.
                
            </div>
            <div class="col-sm-7 col-xs-7">
                
                <strong>Lugar:</strong> Instalaciones de la institución.<br />
                <strong>Hora:</strong> de 9:30 am a 4:30 pm<br />
                <strong>Valor boleta:</strong> $4.000.<br /><br />
                
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
                <br /><br />
                Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
                <br /><br />
                
            </div>
            <div class="col-sm-1 col-xs-1"></div>
        
        </div>
        
        
    </div>

</div>



<div class="contEstandar rr5 p20 bAzul5">
    <div class="titSep3  ff2 tU colorfff">Eventos destacados</div>
    <div class="row">
        <?php for($rr=0; $rr<4; $rr++){ ?>
        <div class="col-sm-3 col-xs-3">
            
            <a href="">
                <img src="resources/img/demo/eve<?= $rr+1; ?>.jpg" />
                <div class="dateEven p5">
                    <div class="t40 colorfff taC">29</div>
                    <div class="colorfff taC">Feb/16</div>
                </div>
                <div class="bWhite color999 p10" style="min-height:70px;">Campamento Departamental en empredimiento del Grado 11</div>
            </a>
            
        </div>
        <?php } ?>
    </div>
</div>