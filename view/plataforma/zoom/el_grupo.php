<div class="contEstandar bWhite rr5 p0">

    <div class="row pInt">
        <div class="col-sm-3 col-xs-3 taC vcenter">
            <img src="resources/img/demo/profesor.png" width="150">
        </div><!--
        --><div class="col-sm-8 col-xs-8 vcenter">
            <div class="mb10 tU ff2">Director del grupo</div>
            <div class="t20 colorVerde2 mb10 tU ff2">Nombre del Director del grupo</div>
            <div class="color999 mb5">
            	Profesor de tiempo completo Dpto Tecnologías de la Información DTI - Área de sistemas
            </div>
            
            <br><br>

            <a href="" class="bBasic4 p1020 dIB rr40 t20 ff2" style="width:45%;">
                Crear mensaje
                <img src="resources/img/icons/mailer.png" class="iconBrrn2" />
            </a>
            <a href="" class="bBasic5 p1020 dIB rr40 t20 ff2" style="width:45%;">
                Ver perfil
                <img src="resources/img/icons/mailerid.png" class="iconBrrn2" />
            </a>
        </div>
    </div>
    
    <hr />
    
    <div class="pLR40">
               
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th colspan="2">Estudiante</th>
                    <th>Código</th>
                    <th>Grado</th>
                    <th>Grupo</th>
                  </tr>
                </thead>
                <tbody>
                <?php for($ii=0; $ii<5; $ii++){ ?>
                                        
                      <tr>
                      	<td class="bWhite"><img src="resources/img/demo/user3.png" width="32" /></td>
                        <td class="bWhite"><a href="#/plataforma/visor/estudiante" class="aSS">Carlos Mauricio Urrego Bejarano</a></td>
                        <td class="bWhite">2012170053</td>
                        <td class="bWhite">8º</td>
                        <td class="bWhite">2B</td>
                      </tr>
                    
                      <tr>
                      	<td><img src="resources/img/demo/user3.png" width="32" /></td>
                        <td><a href="#/plataforma/visor/estudiante" class="aSS">Carlos Mauricio Urrego Bejarano</a></td>
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

