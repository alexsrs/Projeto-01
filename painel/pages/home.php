<?php 
    $usuariosOnline = Painel::listarUsuariosOnline();
?>
<div class="box-content left w100">
    <h2><i class="fa fa-home"></i> Painel de controle - <?php echo NOME_EMPRESA ?></h2>
    <div class="box-metricas">
    <div class="box-metrica-single">
        <div class="box-metrica-wraper">
            <h2>Usuários  online</h2>
                <p><?php echo count($usuariosOnline); ?></p>
            </div><!-- box-metrica-wraper -->
        </div><!-- box-metrica-single -->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de visitas</h2>
                <p>100</p>
            </div><!-- box-metrica-wraper -->
        </div><!-- box-metrica-single -->
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas hoje</h2>
                <p>30</p>
            </div><!-- box-metrica-wraper -->
        </div><!-- box-metrica-single -->
        <div class="clear"></div><!--clear -->
    </div><!-- box-metricas -->
</div><!-- box-content -->
   



<div class="box-content left w100">
    <h2><i class="fa fa-rocket" aria-hidden="true"></i> Usuários online</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div><!-- col -->
            <div class="col">
                <span>Última ação</span>
            </div><!-- col -->
            <div class="clear"></div><!-- clear -->
        </div><!-- row -->

    <?php 
        foreach ($usuariosOnline as $key => $value) {

    ?>
        <div class="row">
            <div class="col">
                <span><?php echo $value['ip'] ?></span>
            </div><!-- col -->
            <div class="col">
                <span><?php echo date('d/m/Y H:i:s',strtotime($value['ultima_acao'])) ?></span>
            </div><!-- col -->
            <div class="clear"></div><!-- clear -->
        </div><!-- row -->
    <?php } ?>
    </div><!-- table-responsive -->

</div><!-- box-content -->
     



    <div class="box-content left w50">
        
    </div><!-- box-content -->




    <div class="box-content right w50">
        
    </div><!-- box-content -->