<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Mall extends CI_Controller {

  public function index(){
    $this->mallplazaeltrebol();
	}


  public function mallplazaeltrebol(){
    #title
    $this->layout->title('Mall Plaza El Trebol');

    #metas
    $this->layout->setMeta('title','Consulta tu parking!');
    $this->layout->setMeta('description','El propósito de esta plataforma es calcular cuánto es lo que tienes que pagar al momento de validar tu ticket de parking en los distintos malls del país. Los pasos para calcular tu parking son sencillos!');
    $this->layout->setMeta('keywords','parking');

    $contenido['home_indicador'] = false;
    $contenido['showFooter'] = false;

    $this->layout->view('mallplazaeltrebol',$contenido);
  }

  public function consulta_mallplazaeltrebol(){
    if($this->input->post('cantidad_minutos')){
      // 0 - 30			= $0
      // 31 - 40		= $100
      // 41 - 50		= $200
      // 51 - 60		=	$300
      // 61 - 70		= $400
      // 71 - 80		= $500
      // 81 - 90		= $600
      // 91 - 100		= $700
      // 101 - 110	= $800
      // 111 - 120	= $900
      // 121 - 130	= $1000
      $cantidad_minutos=$this->input->post('cantidad_minutos');
      $i=1;
      $precio_pagar=0;
      $rango_precio=[0,0,100,200,300,400,500,600,700,800,900,1000];
      $rango_hora=[0,30,40,50,60,70,80,90,100,110,120,130];
      for($i=0 ; $i<12 ; $i++){
        if($cantidad_minutos>$rango_hora[$i] && $cantidad_minutos<=$rango_hora[$i+1]){
          $precio_pagar+=$rango_precio[$i+1];
          $cantidad_minutos-=$rango_hora[$i+1];
        }else if($cantidad_minutos>=130){
          $precio_pagar+=1000;
          $cantidad_minutos-=130;
        }
      }
      $precio_pagar=number_format($precio_pagar, 0, '', '.');
      $precio_final="$ ";
      $precio_final.=$precio_pagar;
      echo json_encode(array("result" => $precio_final));
      exit;
    }
  }

  public function malldelcentroconcepcion(){
    #title
    $this->layout->title('Mall del Centro Concepción');

    #metas
    $this->layout->setMeta('title','Consulta tu parking!');
    $this->layout->setMeta('description','El propósito de esta plataforma es calcular cuánto es lo que tienes que pagar al momento de validar tu ticket de parking en los distintos malls del país. Los pasos para calcular tu parking son sencillos!');
    $this->layout->setMeta('keywords','parking');

    $contenido['home_indicador'] = false;
    $contenido['showFooter'] = false;

    $this->layout->view('malldelcentroconcepcion',$contenido);
  }

  public function consulta_malldelcentroconcepcion(){
    if($this->input->post('cantidad_minutos')){
      		$cantidad_minutos=$this->input->post('cantidad_minutos');
          $precio_pagar=0;

          if($cantidad_minutos>=30){
            $precio_pagar+=350;
            $cantidad_minutos-=30;
          }
          else{
            $precio_pagar+=350;
            $cantidad_minutos-=30;
          }
          if($cantidad_minutos>0){
            $cantidad_minutos=round($cantidad_minutos/15);
            $factor=350*$cantidad_minutos;
            $precio_pagar+=$factor;
          }
            $precio_pagar=number_format($precio_pagar, 0, '', '.');
            $precio_final="$ ";
            $precio_final.=$precio_pagar;
      echo json_encode(array("result" => $precio_final));
      exit;
    }
  }
}
