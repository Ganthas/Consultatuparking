<?php if(isset($home_indicador)){ ?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="display:none;"> </nav>
<?php } else{ ?>
  <!-- Navigation -->
  <nav id='mainNav' class='navbar navbar-default navbar-custom navbar-fixed-top'>
      <div class='container'>
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class='navbar-header page-scroll'>
              <a class='navbar-brand page-scroll' href='#page-top'><img src='img/parking.svg' width='30px' style='margin-top: 25px;'  class='img-icon'></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
              <ul class='nav navbar-nav navbar-right'>
                  <li class='hidden'>
                      <a href='#page-top'></a>
                  </li>
                  <li>
                      <a class='page-scroll' href='#skip'>Pasos</a>
                  </li>
                  <li>
                      <a class='page-scroll' href='#contact'>Contactame</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>
<?php } ?>
