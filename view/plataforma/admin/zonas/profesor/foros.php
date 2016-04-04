<div class="contEstandar bWhite rr5 p10">

	<!--<img src="resources/img/temporal/4.jpg">-->
	<div class="row mb10">
		<div class="col-sm-2 col-xs-2 vcenter">
			<div class="t14 ff2">RESUMEN FOROS</div>
		</div><!--
		--><div class="col-sm-2 col-xs-2 vcenter">
			<select class="selecStd2 rr5 ff2 t16 colorVirde bGray">
				<option value="grado-6">Grado 6°</option>
				<option value="grado-7">Grado 7°</option>
				<option value="grado-8">Grado 8°</option>
				<option value="grado-9">Grado 9°</option>
				<option value="grado-10">Grado 10°</option>
				<option value="grado-11">Grado 11°</option>
			</select>

		</div><!--
        --><div class="col-sm-3 col-xs-3 vcenter col-sm-offset-5 col-xs-offset-5 taR">
			<a class="bBasic3 ff2 rr40 colorfff bVerde5 taC bAsistencia" href="">Crear Nuevo Foro</a>
		</div>
	</div>

	<div class="row m0 dAsistencia1">

		<div class="col-xs-5 col-sm-5 bGray3 p0">
        
			<div class="p10 bS1 minMensaje leyendoMensaje cP">

                <div class="bAzul2 p510 rr20 dIB colorfff mb10">Unidad 1</div>
                <div class="t18 ff2 mb10" style="">Lenguaje Algebraico</div>
                <div class="color666 tab">
                    <div class="tabIn">
                        8 Temas
                    </div>
                    <div class="tabIn taR">
                        90 Respuestas
                    </div>
                </div>

			</div>

			<?php for($xx = 1; $xx<6; $xx++){ ?>

			<div class="p10 bS1 minMensaje cP" style="margin-top:-1px;">
				
				<div class="bAzul2 p510 rr20 dIB colorfff mb10">Unidad 2</div>
                <div class="t18 ff2 mb10" style="">Factorización</div>
                <div class="color666 tab">
                    <div class="tabIn">
                        8 Temas
                    </div>
                    <div class="tabIn taR">
                        90 Respuestas
                    </div>
                </div>
				
			</div>

			<?php } ?>

		</div>

		<div class="col-xs-7 col-sm-7 p0 dCambiar1">

			<div class="p10 bS1 bAzulL cP">
            
				<div class="row">

					<div class="col-xs-8 col-sm-8">
						<span class="bAzul2 p510 rr20 dIB colorfff" style="">Unidad 3</span>
						<div class="t18 ff2 p5" style="">Lenguaje Algebraico</div>
					</div>

					<div class="col-xs-4 col-sm-4 taR">
						<div class="color666 p5" style="display: inline-block">8 Temas</div>
						<div class="color666 p5" style="display: inline-block;">90 Respuestas</div>
					</div>

				</div>
			</div>

			<?php for($jj=0; $jj<7; $jj++){ ?>
                <div class="row bCambiar cP <?php if($jj % 3 == 0){ ?> bGray3 <?php } ?> m0 bS1 p10" style="margin-top:-1px;">
                    <div class="col-xs-2 col-sm-2 vcenter taC">
                        <img src="resources/img/temporal/icono.gif" width="45">
                    </div><!--
    
                    --><div class="col-xs-9 col-sm-9 vcenter">
                        <div class="aSS cP mb10">Lorem ipsum dolor sit amet elit.</div>
                        <div class="color666">
                            Iniciado por: Juan Pepito Perez
                            &nbsp;&nbsp;
                            2 Respuestas
                        </div>
                    </div><!--
    
                    --><div class="col-xs-1 col-sm-1 vcenter">
                        <img src="resources/img/icons/arL.png">
                    </div>
                </div>
			<?php } ?>
			


			
			
		</div>

		<div class="col-xs-7 col-sm-7 p0 dCambiar2 dN">

			<div class="p10 bS1 bAzulL cP">
            
				<div class="row">

					<div class="col-xs-8 col-sm-8">
						<span class="bAzul2 p510 rr20 dIB colorfff" style="">Unidad 3</span>
						<div class="t18 ff2 p5" style="">Lenguaje Algebraico</div>
					</div>

					<div class="col-xs-4 col-sm-4">
						<div class="color666 p5" style="display: inline-block">8 Temas</div>
						<div class="color666 p5" style="display: inline-block;">90 Respuestas</div>
					</div>

				</div>
			</div>	

			<div class="row m0 bS1 p10" style="margin-top:-1px;">
				<div class="col-xs-9 col-sm-9 p10 cP bCambiar vcenter">
					<img src="resources/img/icons/arR.png" class="dIB">&nbsp;&nbsp;
					<div class="t14 ff2 dIB">Matriz simetrica y base ortogonal</div>
				</div><!--
			--><div class="col-xs-3 col-sm-3 p0 taR vcenter">
					<a class="bBasic3 rr40 t14 color000 taC cP bAbrir1 p510 bWhite ff2 dIB">Responder<img src="resources/img/icons/e4.png" class="dIB" width="20"></a>
				</div>
			</div>

			<div class="dAbre1 dN">
				<div class="bGray bS1 p50" style="margin-top:-1px;">
					<div class="ff2 mb20">Andres Ospina</div>
					<!--<div class="color999">Agrega un mensaje o adjunta un archivo</div>-->
					<textarea name="mensaje" id="mensaje" rows="5" class="form-control input-bykr bGray" style="width:100%" placeholder="Agrega un mensaje o adjunta un archivo"></textarea>
				</div>	

				<div class="bGray3 p10 bS1 taR" style="margin-top:-1px;"> 
					<a class="bBasic2 rr40 colorfff bVerde" href="" style="">Enviar</a>
					<a class="bBasic2 rr40 color666 bGray3 taC bCambiar" href="" style="">Cancelar</a>
				</div>
			</div>	

			<?php for($ff=1; $ff<6; $ff++){ ?>
			<div class="p20 bS1 <?php if(($ff % 2) == 0) { ?> bGray3 <?php } ?>" style="margin-top:-1px;">
				<div class="row m0 mb20">
					<div class="col-xs-1 col-sm-1 p0 vcenter">
						<img src="resources/img/demo/user2.png">
					</div><!--

				--><div class="col-xs-11 col-sm-11 vcenter">
						<div class="color999 dB">Juanito Perez Cortes</div>
						<div class="color999 dB">>>07/01/2016, 10:24:43 pm<<</div>	
					</div>
				</div>

				<div class="row m0 mb20">
					<div class="col-xs-12 col-sm-12 p0">
						<div class="color999 dB">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint doloremque, nemo quisquam omnis quibusdam iusto ipsum sapiente, impedit unde nisi voluptate quia atque, veritatis adipisci nesciunt quis ut facilis cumque.</div>
					</div>
				</div>
				
				
			</div>

			<?php } ?>



			
		</div>

	</div>

	<div class="row m0 dAsistencia2 dN">
		<div class="col-xs-5 col-sm-5 p0">
            <div class="contEstandar">
                
                <div class="row m0">
                    <div class="col-xs-9 p0 vcenter">
                        <input type="text" name="destinatario" id="destinatario" class="form-control input-bykr" placeholder="Nombre del destinatario" />
                    </div><!--
                --><div class="col-xs-3 p0 vcenter taR">
                        <div class="bBasic3 p1020 color333 cP">Añadir</div>
                    </div>
                </div>
                <!--
                <div class="tab p5" style="border-bottom: 1px solid #ccc;">
                    <div class="tabIn t16 colorVirde ff1">Nombre del destinatario</div>
                    <div class="tabIn taR">
                        <div class="bBasic3 p1020 color333 mb10 cP">Añadir</div>
                    </div>
                </div>
                -->

                <div class="bGray p10" style="border-bottom: 1px solid #ccc">
                    <a class="aSS cP mb10 color999 dB bCambiar">Opciones Avanzadas</a>
                    <div class="dCambiar1">
                        
                    </div>

                    <div class="dCambiar2 dN">
                        <div class="row m0 mb5">
                            <div class="col-xs-7 col-sm-7 p0 vcenter">
                                <label for="t-s">
                                    <input type="checkbox" name="t-s" id="t-s"> &nbsp; 
                                    <div class="color666 dIB ff1">Para todo el salon</div>
                                </label>
                            </div><!--
                        --><div class="col-xs-3 col-sm-3 p0 vcenter">
                                <select class="selecStd2 bS1 rr5 ff2 t14 bGray  ">
                                    <option>8°-2B</option>
                                </select>
                            </div><!--
                    --></div>

                        <div class="row m0 mb5">
                            <div class="col-xs-7 col-sm-7 p0 vcenter">
                                <label for="p-p">
                                    <input type="checkbox" name="p-p" id="p-p"> &nbsp; 
                                    <div class="color666 dIB ff1">Para los profesores</div>
                                </label>
                            </div><!--
                        --><div class="col-xs-3 col-sm-3 p0 vcenter">
                                <select class="selecStd2 bS1 rr5 ff2 t14 bGray  ">
                                    <option>8°-2B</option>
                                </select>
                            </div><!--
                    --></div>

                        <div class="row m0 mb15">
                            <div class="col-xs-12 col-sm-12 p0 vcenter">
                                <label for="c-a">
                                    <input type="checkbox" name="c-a" id="c-a"> &nbsp; 
                                    <div class="color666 dIB ff1">Enviar con copia a acudientes</div>
                                </label>
                            </div>
                        </div>


                    </div>

                    
                </div>

                <?php for($dd=1; $dd<3; $dd++){ ?>
                <div class="row m0 p10" style="border-bottom: 1px solid #ccc; margin-bottom: -1px">
                    <div class="col-xs-2 col-sm-2 p0 vcenter">
                        <img src="resources/img/demo/user2.png">
                    </div><!--
                --><div class="col-xs-9 col-sm-9 vcenter">
                        <div class="colorVirde dB mb5">
                            <strong>Juanito Perez Cortes</strong>
                        </div>
                        <div class="color999 dB">Matematicas</div>
                    </div><!--
                --><div class="col-xs-1 col-sm-1 p0 vcenter taC">
                        X
                    </div><!--
            --></div>

                <?php } ?>
                


            </div>

            
        </div>
        <div class="col-xs-7 col-sm-7 p0">
            <div class="contEstandar bGray" style="margin-left: -1px">

                <div class="bGray3 p20" style="border-bottom: 1px solid #ccc">
                    <input type="text" name="tituloM" id="tituloM" class="form-control input-bykr bGray3" placeholder="Agrega un título al foro" />
                </div>

                <div class="bGray p30" style="border-bottom: 1px solid #ccc">
                    <textarea name="mensaje" id="mensaje" placeholder="Agrega un mensaje o adjunta un archivo" rows="8" style="width:100%" class="form-control input-bykr bGray"></textarea>
                    <!--<div class="color999 mb30">Agrega un mensaje o adjunta un archivo</div>-->
                    <div class="bBasic3 p1020 color333 dB cP">
                        <img width="16" src="resources/img/icons/clip.png">
                        147583874-ejempl-taller.jpg (1234 kb)
                    </div>
                </div>
                
                <div class="bGray3 p20">
                    <div class="tab">
                        <div class="tabIn">
                            <a class="bBasic3 rr40 t14 color000 taC cP bCambiar p510 ff1 dIB"><img width="16" src="resources/img/icons/clip.png">&nbsp;&nbsp;Adjuntar Archivo</a>
                        </div>
                        <div class="tabIn taR">
                            <a class="bBasic2 rr40 colorfff bVerde" style="" href="">Enviar</a>
                            <a class="bBasic2 rr40 color666 bGray3 taC bAsistencia" href="">Cancelar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>  
	</div>

</div>