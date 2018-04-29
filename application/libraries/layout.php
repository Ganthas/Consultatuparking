<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout {
    private $obj;
    private $layout_view;
    private $title = '';
    private $titleDefault = '$';
    private $css_list = array();
    private $js_list = array();
  	private $metas = '';
  	private $navegacion = array();
  	public $current = '';
  	public $subCurrent = '';

    function __construct() {

      #Obj
      $this->obj =& get_instance();
      $this->layout_view = "layout/default.php";

  		$this->js('js/agency.js');
      $this->js('js/agency.min.js');
      $this->js('js/jquery-1.12.4.min.js');
      $this->js('bootstrap/dist/js/bootstrap.min.js');

  		$this->css('bootstrap/dist/css/bootstrap.min.css');
  		$this->css('css/agency.css');
      $this->css('css/agency.min.css');
      $this->css('css/font-awesome.css');
      $this->css('css/font-awesome.min.css');

  		$this->js('bootstrap/dist/js/bootstrap.js');

        #Layout
      if(isset($this->obj->layout_view))
		     $this->layout_view = $this->obj->layout_view;

    }

    function view($view, $data = null, $return = false) {

  		#render template
      $data['content_for_layout'] = $this->obj->load->view($view, $data, true);

      #template
      $this->block_replace = true;
      $output = $this->obj->load->view($this->layout_view, $data, $return);

      return $output;
    }

    /**
     * Agregar title a la pagina actual
     *
     * @param $title
     */
    function title($title) {
        $this->title = $title.' - '.$this->titleDefault;
    }

  	function getTitle(){
          return $this->title;
  	}

    /**
     * Agregar Javascript a la pagina actual
     * @param $item
     */
    function js($item){
        $item = base_url().$item;
        $this->js_list[] = $item;
    }

  	function getJs(){
  		$js = '';
  		if($this->js_list){
  			foreach ($this->js_list as $aux){
  				$js .= '<script type="text/javascript" src="'.$aux.'"></script>';
  			}
  		}
  		return $js;
    }

    /**
     * Agregar CSS a la pagina actual
     * @param $item
     */
    function css($item){
        $item = base_url().$item;
        $this->css_list[] = $item;
    }

  	function getCss(){
  		$css = '';
  		if($this->css_list){
  			foreach ($this->css_list as $aux){
  				$css .= '<link rel="stylesheet" type="text/css"  href="'.$aux.'" />';
  			}
  		}
  		return $css;
    }

	   /**
     * Agregar Metas a la pagina actual
     * @param $name, $content
     */
    function setMeta($name,$content) {
      $meta = new stdClass();
      $meta->name = $name;
      $meta->content = $content;
      $this->metas[] = $meta;
    }

    function headMeta() {
      $metas = '';
      if($this->metas){
      	foreach($this->metas as $aux){
      		$metas .= '<meta name="'.$aux->name.'" content="'.$aux->content.'" />';
      	}
      }
      return $metas;
    }

	   /**
     * Agregar Navegacion a la pagina actual
     * @param $nav
     */
    function nav($nav) {
      $this->navegacion = $nav;
    }

  	function getNav() {
  		$html = '';
  		if($this->navegacion){
  			$html = '<ol class="breadcrumb">';
  			$i = 1;
  			$ruta_master = '/';
  			foreach($this->navegacion as $nombre=>$ruta)
  			{
  				$ruta_master = "/".$ruta."/";
  				$html .= ($i==count($this->navegacion))? '<li class="active">'.$nombre.'</li>':'<li><a href="'.$ruta_master.'">'.$nombre.'</a></li>';
  				$i++;
  			}

  			 $html .='</ol>';
  		}
  		return $html;
  	}

}
