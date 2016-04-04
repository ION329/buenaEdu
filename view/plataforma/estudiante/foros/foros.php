
	        <!--<img src="resources/img/temporal/images/e-foros.jpg">-->
<div class="p20">
			
	<div class="contEstandar bWhite rr5 p10">

		<!--<img src="resources/img/temporal/4.jpg">-->
		<div class="row m0 mb15">

			<div class="col-xs-2 col-sm-2 vcenter p0">
				<span class="colorVerde2 ff2 t24 dIB">Foros</span>&nbsp;&nbsp;&nbsp;
				<a class="bAzul2 p5 rr20 dIB colorfff cP dIB">Ver todo</a>
			</div><!--

		--><div class="col-xs-5 col-sm-5 vcenter p0">

				<div class="color666 dIB taR">Por materias</div>&nbsp;&nbsp;&nbsp;
				<select class="selecStd4 rr5 ff1 t16 bGray">
					<option value="grado-6">Seleccione</option>
					<option value="grado-7">Matematicas</option>
					<option value="grado-8">Ciencias</option>
					<option value="grado-9">Musica</option>
					<option value="grado-10">Quimica</option>
					<option value="grado-11">Fisica</option>
				</select>
			</div>


		</div>

		<div class="row m0">

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

			<div class="col-xs-7 col-sm-7 p0">

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

				<div class="row m0 bS1 p20" style="margin-top:-1px;">
					<div class="col-xs-9 col-sm-9 p0 vcenter">
						<img src="resources/img/icons/arR.png" class="dIB">&nbsp;&nbsp;
						<div class="t14 ff2 dIB">Matriz simetrica y base ortogonal</div>
					</div><!--
				--><div class="col-xs-3 col-sm-3 p0 taR vcenter">
						<a class="bBasic3 rr40 t14 color000 taC cP bCambiar p510 bWhite ff2 dIB">Responder<img src="resources/img/icons/e4.png" class="dIB" width="20"></a>
					</div>
				</div>

				<div class="bGray bS1 p50" style="margin-top:-1px;">
					<div class="ff2 mb20">Andres Ospina</div>
					<div class="color999">Agrega un mensaje o adjunta un archivo</div>
				</div>	

				<div class="bGray3 p10 bS1 taR" style="margin-top:-1px;"> 
					<a class="bBasic2 rr40 colorfff bVerde" href="" style="">Enviar</a>
					<a class="bBasic2 rr40 color666 bGray3 taC" href="" style="">Cancelar</a>
					
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

	</div>

</div>

<div ng-include src=" 'view/plataforma/general/area/footer.php' "></div>