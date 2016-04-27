<div class="contEstandar bWhite rr5 p0">

<br /><br />
    
    <div class="dCambiar1">
      <div class="pLR40">

          <div class="row mb10">
            <div class="col-xs-10 col-sm-10">
              <a href="" data-toggle="modal" data-target="#llamado-atencion"><div class="bBasic3 dIB p510 color666 bGray3 bS1 cP rr5"><img src="resources/img/icons/mE6.png" width="35" /> <span class="vcenter">Llamado de Atención</span></div></a>
            </div>
            <div class="col-xs-2 col-sm-2"></div>
          </div>
                 
          <div class="table-responsive">
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th colspan="2">Estudiante</th>
                      <th>Código</th>
                      <th>Grado</th>
                      <th>Grupo</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php for($ii=0; $ii<5; $ii++){ ?>
                                          
                        <tr>
                          <td class="bWhite taC"><input type="checkbox" name="" id=""></td>
                        	<td class="bWhite"><img src="resources/img/demo/user3.png" width="32" /></td>
                          <td class="bWhite"><a href="" class="aSS bCambiar">Carlos Mauricio Urrego Bejarano</a></td>
                          <td class="bWhite">2012170053</td>
                          <td class="bWhite">8º</td>
                          <td class="bWhite">2B</td>
                        </tr>
                      
                        <tr>
                          <td class="taC"><input type="checkbox" name="" id=""></td>
                        	<td><img src="resources/img/demo/user3.png" width="32" /></td>
                          <td><a href="" class="aSS bCambiar">Carlos Mauricio Urrego Bejarano</a></td>
                          <td>2012170053</td>
                          <td>8º</td>
                          <td>2B</td>
                        </tr>
                      
                  <?php } ?>
                  </tbody>
              </table>
          </div>
      
      </div>
    </div>

    <div class="dCambiar2 dN">
      <div class="row m0" style="margin-top: -10px">
        <div class="col-xs-6 col-sm-6 vcenter p10">
          <a class="color666 rr20 p10 bCambiar" href="">
            <img width="8" src="resources/img/icons/arR.png"> &nbsp;&nbsp;
            <span>Volver</span>
          </a>
        </div><!--
    --><div class="col-xs-6 col-sm-6 p10 vcenter taR">
          <a class="color666 rr20 p10 bCambiar" href="">
            <span>Siguiente</span> &nbsp;&nbsp;
            <img width="8" src="resources/img/icons/arL.png">
          </a>
        </div>
      </div>
      <hr>
      <div class="col-sm-8 col-xs-8 pInt">
    
        <div ng-include src=" 'view/plataforma/zoom/perfil-estudiante.php' "></div>
          
      </div>
      <div class="col-sm-4 col-xs-4 p0">
      
        <div class="titSep2 colorVirde ff2 t14" style="margin-top:0;">
              <div class="col-sm-3 col-xs-3 vcenter">
                  <a class="bBasic3 rr40 colorfff bVerde taC">Hoy</a>
              </div><!--
              --><div class="col-sm-8 col-xs-8 vcenter">
                  <span class="t16 colorVirde ff2">Martes, Ene 13</span>
                  <span class="t16 color666 ff0">2016</span>
              </div>
          </div>
        
          <div ng-include src=" 'view/plataforma/zoom/acordeon_tema_horario.php' "></div>
      
      </div>
      <br style="clear:both;" />

 


    </div>

</div>

