<div ng-include src=" 'view/plataforma/general/menus/menuVisor-buscar.php' "></div>
<div class="pAA50"></div>



<div style="max-width:1200px; margin:0 auto;">

	<div class="mb20 colorVerde2">
    	<a href="javascript:history.back()" class="bBasic3 rr20 mb10 cP temp_search fR"><img src="resources/img/icons/arR.png" width="8"> &nbsp; Volver</a>
    	<span class="ff2 t24">Resultados de búsqueda</span>
    </div>

    <div class="">



        <div class="contEstandar bWhite rr5 p30 mb20">

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Municipio</th>
                        <th>Institución</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <!--<th></th>-->
                      </tr>
                    </thead>
                    <tbody>
                    <?php for($ii=0; $ii<5; $ii++){ ?>

                          <tr>
                            <td class="bWhite">Riofrío, Valle del Cauca</td>
                            <td class="bWhite"><a href="#/plataforma/visor/institucion" class="aSS">Institución Educativa Primitivo Crespo</a></td>
                            <td class="bWhite">Institución Educativa Primitivo Crespo</td>
                            <td class="bWhite">Institución</td>
                            <!--<td class="bWhite taR"><img src="resources/img/icons/arL.png" /></td>-->
                          </tr>


                          <tr>
                            <td>Riofrío, Valle del Cauca</td>
                            <td>Institución Educativa Primitivo Crespo</td>
                            <td><a href="#/plataforma/visor/estudiante" class="aSS">Roberta Ossa Tiberui</a></td>
                            <td>Estudiante</td>
                            <!--<td class="taR"><img src="resources/img/icons/arL.png" /></td>-->
                          </tr>

                          <tr>
                            <td>Riofrío, Valle del Cauca</td>
                            <td>Institución Educativa Primitivo Crespo</td>
                            <td><a href="#/plataforma/visor/personal-acedemico" class="aSS">Geronimo Urrea</a></td>
                            <td>Profesor</td>
                            <!--<td class="taR"><img src="resources/img/icons/arL.png" /></td>-->
                          </tr>

                          <tr>
                            <td>Riofrío, Valle del Cauca</td>
                            <td>Institución Educativa Primitivo Crespo</td>
                            <td><a href="#/plataforma/visor/plan-estudio" class="aSS">Plan de estudio 1</a></td>
                            <td>Plan de estudio</td>
                            <!--<td class="taR"><img src="resources/img/icons/arL.png" /></td>-->
                          </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="taC">
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
            </div>

        </div>

    </div>

</div>
