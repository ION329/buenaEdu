<div class="contEstandar bWhite rr5 p10">
	
    <div class="pAA20">
    	<div class="titSep2 colorVirde ff2" style="margin:0;">
            <div class="tab">
                <div class="tabIn tU">Lista Estudiantes (28)</div>
                <div class="tabIn taR"><a class="bBasic3 rr40 colorfff bVerde5 taC ff2" href="">Crear estudiante</a></div>
            </div>
            
        </div>
    </div>
    
    <br /><br />
           
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Código</th>
                <th>Asignado a</th>
                <th>Jornada</th>
              </tr>
            </thead>
            <tbody>
            <?php for($ii=0; $ii<5; $ii++){ ?>
              <tr>
                <td class="taC"><img src="resources/img/demo/user3.png" class="rr50" width="48"></td>
                <td><a href="#/plataforma/admin/estudiante" class="aSS">Carlos Mauricio Urrego Bejarano</a></td>
                <td>Estudiante</td>
                <td>2012170053</td>
                <td>8° | 8-2B</td>
                <td>Diurna</td>
              </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    


</div>