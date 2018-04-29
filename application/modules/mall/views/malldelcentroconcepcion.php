<!DOCTYPE html>
<html lang="en">

<body id="page-top" class="index" style='background-color:#c4cad0'>
		<script type='text/javascript'>mall_centro()</script>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>">
                  <img src='<?php echo base_url('img/parking.svg') ?>' width='30px' style='margin-top: 25px;'  class='img-icon'></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style='background-color:#c4cad0'>
        <div class="container">
            <div class="intro-text">
							<smal class='place-in'>Estás en Mall del centro Concepción.</smal>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">
                          <img src="<?php echo base_url('img/pay.svg') ?>" width="100px"> ?</h2>
                        <h3 class="section-subheading" style='color:#fff;padding:10px 0px'>solo <b style='color:#00afb5'>ingresa</b> tu <b style='color:#00afb5'>hora</b> de <b style='color:#00afb5'>llegada.</b></h3>
                    </div>
                </div>
                <div class="col-lg-12 form-group" style='text-align:center;margin:0 auto;'>
                    <input type="number" class="form-control" placeholder="Hora" id="hora" onkeyup='Calcular_2()' min="1" max="24">
										<input type="number" class="form-control" placeholder="Minuto" id="minu" onkeyup='Calcular_2()' min="0" max="59">
										<input type="radio" id="boleta_compra" name="minu" onclick='Calcular_2()'> Hiciste una compra sobre los $10.000?<br>
										<input type="radio" id="boleta_cine" name="minu" onclick='Calcular_2()'> Fuiste al cine?
                    <p class="help-block text-danger"></p>
										<p>Llegaste a las <b id='h'></b>:<b id='m'></b> hrs.</p>
										<p>Estuviste: <b id='tiempo'></b> minutos estacionado</p>
                    <p class="msg" id='msg'>$ -</p>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
