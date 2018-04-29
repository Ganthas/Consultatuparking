<!DOCTYPE html>
<html lang="es" xml:lang="es">
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="es-ES">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="es-ES">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="es-ES">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]>
<html dir="ltr" lang="es-ES">
<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Josías Sanhueza Gatica">
  <!-- Metas -->
  <?php echo $this->layout->headMeta(); ?>
  <!-- title -->
  <title><?php echo $this->layout->getTitle(); ?></title>
  <!-- CSS -->
  <?php echo $this->layout->getCss(); ?>
  <?php echo $this->layout->getJs(); ?>
  <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon.png') ?>" sizes="32x32">
  <?php if($this->layout->current){ ?>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#menu > ul.side-nav > li:nth-child(<?php echo $this->layout->current ?>)").addClass("active");
      <?php if($this->layout->subCurrent){ ?>
        $("#menu > ul.side-nav > li:nth-child(<?php echo $this->layout->current ?>) > .dropdown-menu > li:nth-child(<?php echo $this->layout->subCurrent ?>)").addClass("active");
        $("#menu > ul.side-nav > li:nth-child(<?php echo $this->layout->current ?>)").addClass("open");
      <?php } ?>
    });
    </script>
  <?php } ?>
</head>
<?php if(isset($home_indicador)){ ?>
  <body class="login-wrapper">
<?php } else{ ?>
  <body>
<?php } ?>
<!-- Top -->
<?php echo $this->load->view('top'); ?>
<!-- Contenido -->
<?php if(isset($home_indicador)){ ?>
  <?=$content_for_layout?>
<?php } else{ ?>
  <div id="wrapper">
    <div id="page-wrapper">
      <?=$this->layout->getNav();?>
      <?=$content_for_layout?>
    </div>
  </div>
<?php } ?>

<?php if(null != $showFooter && isset($showFooter)){
  echo $this->load->view('footer');
 } ?>
</body>
</html>
