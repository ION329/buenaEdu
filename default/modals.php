<div id="iniciar-sesion" class="modal fade ff5">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><strong class="ff5 color666">x</strong></button>
         		<div class="modal-title">
                	<div class="t30 ff3 taL">Iniciar sesión</div>
                </div>
         	</div>
            <div class="modal-body">
                <br>
                <input class="inpIng mb10 rr10" type="text" placeholder="Correo electrónico" />
                <input class="inpIng mb10 rr10" type="password" placeholder="Contraseña" />
                <a data-dismiss="modal" data-toggle="modal" href="#olvide-contrasena" class="aBlue mb10">¿Olvidé mi contraseña?</a>
                <br /><br /><br />
                <input class="inpBtn1 colorfff taC mb10 rr10 t16" style="font-weight:700" type="button" value="Iniciar sesión" />
                <br><br>
                <div class="oOo t16 colorccc taC"><strong>o</strong></div>
                <br><br>
                <button class="inpBtn2 colorfff taC mb10 rr10 t16" style="font-weight:700" type="button"><img src="resources/img/icons/f.png"> &nbsp; Iniciar sesión con Facebook</button>
                <br><br>
                <div class="color999 taC">No publicaremos nada en tu Facebook<br>sin que nos des tu permiso</div>
                <br><br>
                
         	</div>
            <div class="modal-footer ff5 taC">
         		<strong>¿Eres nuevo en Invierta Ya?</strong>
                <a href="#/usuarios/registro" class="closeModalion aBlue"><strong>Regístrate Gratis</strong></a>
         	</div>
        </div>
    </div>
</div>

<div id="olvide-contrasena" class="modal fade ff5">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><strong class="ff5 color666">x</strong></button>
         		<div class="modal-title">
                	<div class="t30 ff3 taL">Recuperar contraseña</div>
                </div>
         	</div>
            <div class="modal-body">
                <br>
                <div class="color999 taL">
                	Ingresa la dirección de correo electrónico
                    que usaste para registrarte y te enviaremos
                    un enlace para restablecer tu contraseña.
                </div>                
                <br><br>                
                <input class="inpIng mb10 rr10" type="text" placeholder="Correo electrónico" />
                <br><br>
                <a data-dismiss="modal" data-toggle="modal" href="#aviso-contrasena" class="inpBtn1 colorfff taC mb10 rr10 t16"><strong>Continuar</strong></a>
            </div>
        </div>
    </div>
</div>

<div id="aviso-contrasena" class="modal fade ff5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><strong class="ff5 color666">x</strong></button>
                <br>
                <div class="color999 taL">
                	Bien - te hemos enviamos un correo electrónico
                    a ion@will.com con un enlace
                    para restablecer la contraseña.
                </div>                
                <br><br>
                <span class="color999 taL t12">
                	Si no recibes el correo electrónico en unos minutos,
                    <a data-dismiss="modal" data-toggle="modal" href="#olvide-contrasena" class="aBlue">inténtalo de nuevo.</a>
                </span>
                <br><br>
            </div>
        </div>
    </div>
</div>

<div id="ingresar-asistencia" class="modal fade ff5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                
                <div class="row m0 p10 bVerde5 ff1 colorfff t16">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><strong class="ff5 color666">x</strong></button>
                    <div class="col-xs-6 col-sm-6 p0 vcenter">
                        <img src="resources/img/icons/fv_clnd.png">
                        <span>Jueves, 25 de Febrero de 2016</span>
                    </div><!--
                --><div class="col-xs-5 col-sm-5 p0 vcenter">
                        <img src="resources/img/icons/m44.png">
                        <span>8:30 a.m. - 10:00 a.m.</span>
                    </div>
                </div>

                <div class="row m0 ff1 p10">
                    <div class="bGray3 bS1 p20">
                        <div class="col-xs-6 col-sm-6 vcenter">
                            <span class="ff2 colorAzulBE t24 dB mb5">Grado 11-D Tarde</span>
                            <span class="color333 t16 dB">Materia: Matemáticas</span>
                        </div><!--
                    --><div class="col-xs-6 col-sm-6 vcenter">
                            <img class="rr50" width="48" src="resources/img/demo/user4.png"> &nbsp;
                            <span class="color333 t16">Docente: Maria Fernanda Perlaza</span>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Apellidos y Nombres</th>
                            <th class="taC">Asistencia</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($ii=0; $ii<10; $ii++){ ?>
                        <tr>
                            <td>123456781</td>
                            <td><img src="resources/img/demo/user2.png" width="38"> &nbsp;&nbsp; Juan Pepito Perez</td>
                            <td style="padding: 0" class="taC">

                                <div class="btn-group btn-group-lg asistencia-bykr" data-toggle="buttons">
                                    <label class="btn btn-primary asistencia-p" for="test2_t" style="border-radius: 0; padding: 11px 40px" >
                                        <input type="radio" name="test2" id="test2_t" value="true" class="ff2" /> P
                                    </label>
                                    <label class="btn btn-primary asistencia-a" for="test2_f" style="border-radius: 0; padding: 11px 40px" >
                                        <input type="radio" name="test2" id="test2_f" value="false" class="ff2" /> A
                                    </label>
                                </div>
                            </td>
                            <td class="taR"><a class="aSS color333" style="text-decoration: underline" href="">Limpiar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <hr>

                <div class="row m0">
                    <div class="col-xs-12 col-sm-12 taR ff2">
                        <a class="bBasic2 rr40 colorfff taC bGray4 bAsistencia" href="">Limpiar Todo</a>
                        <a class="bBasic2 rr40 colorfff bVerde5 taC bAsistencia" href="">Guardar Asistencia</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div id="llamado-atencion" class="modal fade ff5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">

                <div class="row m0 p10 bVerde5 ff1 colorfff t16">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><strong class="ff5 color666">x</strong></button>
                    <div class="col-xs-6 col-sm-6 p0 vcenter">
                        <img src="resources/img/icons/fv_clnd.png">
                        <span>Jueves, 25 de Febrero de 2016</span>
                    </div><!--
                --><div class="col-xs-5 col-sm-5 p0 vcenter">
                        <img src="resources/img/icons/m44.png">
                        <span>8:30 a.m. - 10:00 a.m.</span>
                    </div>
                </div>
                
                <div class="row m0 ff1 p10">
                    <div class="bGray3 bS1 p20">
                        <div class="col-xs-6 col-sm-6 vcenter">
                            <span class="ff2 colorAzulBE t24 dB mb5">Llamado de Atención</span>
                            <span class="color333 t16 dB">Materia: Matemáticas</span>
                        </div><!--
                    --><div class="col-xs-6 col-sm-6 vcenter">
                            <img class="rr50" width="48" src="resources/img/demo/user4.png"> &nbsp;
                            <span class="color333 t16">Docente: Maria Fernanda Perlaza</span>
                        </div>
                    </div>
                </div>
                
                <div class="mb30">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Apellidos y Nombres</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($ii=0; $ii<5; $ii++){ ?>
                            <tr>
                                <td>123456781</td>
                                <td><img src="resources/img/demo/user2.png" width="38"> &nbsp;&nbsp; Juan Pepito Perez</td>
                                <td class="taR"><span class="aSS color000 cP" style="text-decoration: underline">Eliminar</span></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="mb10"><textarea id="" class="form-control input-bykrF" style="resize: none; width: 100%" rows="5" name="" placeholder="Escriba aqui porque haces este llamado de atención"></textarea></div>
                
                <div><label for="chk"><input type="checkbox" name="check" id="chk"> &nbsp;<span>Notificar esta copia a acudientes</span></label></div>

                <hr>

                <div class="row m0">
                    <div class="col-xs-12 col-sm-12 ff2">
                        <a class="bBasic2 rr40 colorfff taC bGray4 bAsistencia" href="">Limpiar Todo</a>
                        <a class="bBasic2 rr40 colorfff bVerde5 taC bAsistencia" href="">Crear llamado de atención</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

