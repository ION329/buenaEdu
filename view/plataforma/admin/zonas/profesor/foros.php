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
        --><div class="col-sm-3 col-xs-3 vcenter col-sm-offset-5 col-xs-offset-5 taC">
			<a class="bBasic2 rr40 colorfff bVerde taC" href="">Crear Nuevo Foro</a>
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

			<?php for($jj=0; $jj<5; $jj++){ ?>
                <div class="row <?php if($jj == 2) echo "bGray3"; ?> m0 bS1 p10" style="margin-top:-1px;">
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

	</div>

</div>