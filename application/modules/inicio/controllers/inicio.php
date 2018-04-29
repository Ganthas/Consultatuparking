<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');
require_once("/home/u863306025/public_html/application/modules/class/persona.php");
class Inicio extends CI_Controller {

	public function index(){
		#title
		$this->layout->title('Consulta tu parking!');
		$this->layout->js('js/contact_me.js');
		$this->layout->js('js/jqBootstrapValidation.js');
		#metas
		$this->layout->setMeta('title','Consulta tu parking!');
		$this->layout->setMeta('description','El propósito de esta plataforma es calcular cuánto es lo que tienes que pagar al momento de validar tu ticket de parking en los distintos malls del país. Los pasos para calcular tu parking son sencillos!');
		$this->layout->setMeta('keywords','parking');

		$contenido['showFooter'] = false;

		$persona = new Persona();
		$persona->setName("Josias Nicolas");
		$persona->setLastname("Sanhueza Gatica");
		$persona->setAge(25);
		//echo print_r($persona);
		$this->layout->view('inicio',$contenido);
	}

	public function contact_me(){
		if(empty($this->input->post('name'))      ||
		   empty($this->input->post('email'))     ||
		   empty($this->input->post('phone'))     ||
		   empty($this->input->post('message'))   ||
		   !filter_var($this->input->post('email'),FILTER_VALIDATE_EMAIL))
		   {
		   echo "No arguments Provided!";
		   return false;
		   }

		$name = strip_tags(htmlspecialchars($this->input->post('name')));
		$email_address = strip_tags(htmlspecialchars($this->input->post('email')));
		$phone = strip_tags(htmlspecialchars($this->input->post('phone')));
		$message = strip_tags(htmlspecialchars($this->input->post('message')));

		// Create the email and send the message
		$to = 'jnsanhueza@ing.ucsc.cl'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Mensaje de $name";
		$email_body = "
		<!DOCTYPE html>
		<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
			</head>

			<body style='background-color:#ebebeb;'>
				<div style='border-radius:5px;background-color:#c4cad0'>
					<div style='background-color:#4C5B61;padding:20px;border-radius:5px 5px 0px 0px;text-align:center;font-family:Helvetica;text-transform: uppercase;font-weight: 700;color:white;font-size:20px;border-bottom:5px solid #00afb5;vertical-align:middle'>
						consulta tu parking
					</div>
					<div style='background-color:#c4cad0;padding:10px;border-radius:5px;font-family:Helvetica; color:white;font-weight:bold'>
						<p >Hola!... $name te ha enviado un mensaje:</p>
						<p style='background-color:white;padding:20px;color:#4C5B61;border-radius:5px'>$message</p>
						<p >Sus datos son los siguientes:</p>
						<ul  style='list-style-type:circle'>
							<li>Correo: $email_address</li>
							<li>Teléfono: $phone</li>
						</ul>
					</div>
					<div style='padding: 15px;font-family:Helvetica;background-color: #00afb5;border-radius: 0px 0px 5px 5px;color:white;font-weight: bold;font-size:10px'>
						-- Equipo de consultatuparking<br>
						Si tienes dudas, consultas y/o sugerencias contáctanos vía correo! contacto@consultatuparking.esy.es.
					</div>
				</div>

			</body>
		</html>
		";
		$headers= 'MIME-Version: 1.0' . "\r\n";
		$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers.= "From: noreply@yourdomine.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		$headers.= "Reply-To: $email_address";

		if(mail($to,$email_subject,$email_body,$headers)){
			return json_encode(array("result"=>true));
		}else{
			return json_encode(array("result"=>false));
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
