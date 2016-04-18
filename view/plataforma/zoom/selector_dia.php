<div class="ff2 tU">
    <div class="vcenter fv_cal">
        <img src="resources/img/icons/adm3.png">
    </div>
    <div class="vcenter">
        <div class="btn-group" style="width:105px;">
            <button type="button" class="rr50 btn btn-primary bGray fv_0202" style="border-color:#ccc;">
                <img src="resources/img/icons/izq1.png">
            </button>
            <button type="button" class="rr50 btn btn-primary bGray fv_0202" style="border-color:#ccc;">
                <img src="resources/img/icons/der1.png">
            </button>
        </div>
    </div>
    <div class="vcenter">
        <span class="t24 colorVirde ff2">Enero</span>
        <span class="t24 color666 ff0">2016</span>
        <span class="t16 fv_pper"><b>24 Clases</b></span>
    </div>
</div>

<div class="row m0 mb20">
    <div class="col-sm-12 col-xs-12 p0 ff2 colorfff">
        <div class="bloqSelDia">
            <div class="tab" style="width:1550px;"> <!-- widht: númerodíasdelmes * 50 -->
                <?php for($tt=0; $tt<31; $tt++){ ?>                    
                    <div class="tabIn bloqSelDiaIn taC color333 bGray3 cP">
						<?php
                            echo $tt+1;
                            if(rand(1,4) == 3) echo '<div class="bOrange ball rr50 mt5"></div>';
                        ?>
                    </div>                        
                <?php } ?>
            </div>
        </div>
    </div>
</div>
    


