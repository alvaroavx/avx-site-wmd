<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index($data = null)
  {
    $this->load->view('header');
    $this->load->view('sections/home');
    $this->load->view('sections/about_us');
    $this->load->view('sections/our_team');
    $this->load->view('sections/services');
    if(empty($data))
      $this->load->view('sections/contact_us');
    else
      $this->load->view('sections/contact_us', $data);
    $this->load->view('footer');
  }

  public function sendMail()
  {
    if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['message']))
    {
      $name = $this->input->post('name');
      $mail = $this->input->post('mail');
      $message = $this->input->post('message');
      $contact = 'contacto@wmd.cl';
      $contactName = 'Contacto WMD Consultores';
      $admin = 'msandoval@wmd.cl';
      //$admin = 'alvaro.vargasdm@gmail.com';

      $this->emailConfig();

      /* Correo a WMD */
      $this->email->reply_to('contacto@wmd.cl', $contactName);

      $this->email->from($mail, $name);
      $this->email->to($contact, $admin);
      //$this->email->bcc($admin);

      $this->email->subject($contactName . ' - ' . $name);
      $this->email->message('<link href="http://wmd.cl/assets/css/style.css" rel="stylesheet">
                            <h2 class="dark-text">Contacto WMD Consultores</h2>
                            <p>Nombre: ' . $name . '</p>
                            <p>Correo: ' . $mail . '</p>
                            <p>Mensaje: ' . $message . '</p>');

      if(!$this->email->send(TRUE)) {
        $data = [
            'correo'  => 'NOK',
            'name'    => $name,
            'mail'    => $mail,
            'message' => $message
          ];
        $this->index($data);
        //break;
      }

      /* Correo al emisor */
      $this->email->from($contact, $contactName);
      $this->email->to($mail);

      $this->email->subject($contactName);

      $message = '<link href="http://wmd.cl/assets/css/style.css" rel="stylesheet">
                  <h2 class="dark-text">Contacto WMD Consultores</h2>
                  <p>Estimad@ ' . $name . '</p>
                  <p>Su solicitud de contacto ha sido recibida exitosamente, pronto nos comunicaremos con usted.</p>
                  <p>Cordialmente,</p>
                  <p><img src="http://wmd.cl/assets/img/firmas/firma-Contacto.jpg" alt="Contacto WMD Consultores" width="445" height="95" /></p>';

      $this->email->message($message);

      if(!$this->email->send(TRUE)) {
        $data = [
            'correo'  => 'NOK',
            'name'    => $name,
            'mail'    => $mail,
            'message' => $message
          ];
        $this->index($data);
      }
    }
    $data = [
            'correo' => 'OK'
          ];
    $this->index($data);
  }

  public function emailConfig()
  {
    $config = array();
    $config['useragent']  = 'CodeIgniter';
    $config['mailpath']   = '/usr/bin/sendmail';
    $config['protocol']   = 'smtp';
    $config['smtp_host']  = 'localhost';
    $config['smtp_port']  = 25;
    $config['mailtype']   = 'html';
    $config['charset']    = 'utf-8';
    $config['newline']    = '\r\n';
    $config['wordwrap']   = TRUE;

    $this->load->library('email');

    $this->email->initialize($config);
  }
}
