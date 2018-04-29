<?php
if (!defined ('BASEPATH')) exit ('no direct script acces allowed');

class Email extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function recuperar($new_pass)
    {
			$correos = $this->input->post("email");
  		$cuerpo = "Hola {$correos}, has solicitado una recuperación de tu contraseña.<br/><br/>
          Te hemos creado una nueva y es la siguiente: <br/><br/>
             <b>{$new_pass}</b><br/><br/>
          ¡Te recomendamos que la cambies una vez iniciada tu sesión!.";
        $asunto = utf8_decode("Restauracion de password");
  		$this->email->from('no-reply@aeurus.cl', utf8_decode('Coemco'));
      $this->email->subject($asunto);
  		$this->email->to($correos);
      $this->email->message(utf8_decode($cuerpo));
      return $this->email->send();
    }
}
