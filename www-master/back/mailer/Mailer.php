<?php

require_once "mailer/phpmailer/class.phpmailer.php";
require_once "mailer/mail_templates/Templates.php";

#function debug($msg) {
#  echo "[DEBUG]".$msg."\n";
#}

class Mailer {

  // -- consts

  // -- attributes
  private $mailer;
  private $sender;
  private $host;
  private $password;
  // -- functions

  public function __construct() {
    // On récupère les paramètres du fichier INI
    $config = parse_ini_file("config/mailer.ini");
    // on récupère les paramètres de configuration en base de données.
    $this->sender   = $config["sender"];
    $this->host     = $config["host"];
    $this->password = $config["password"];
    #echo $this->sender . " " . $this->host;
    #debug("[NFO] - SMTP config (sender='".$this->sender."',host='".$this->host."',pass='".$this->password."')");
    // on initialise le mailer
    $this->mailer = new PHPMailer;
    // SMTP configuration
    $this->mailer->isSMTP();                    // Set mailer to use SMTP
    $this->mailer->Host = $this->host;          // Specify main and backup SMTP servers
    $this->mailer->SMTPAuth = true;             // Enable SMTP authentication
    $this->mailer->Username = $this->sender;    // SMTP username
    $this->mailer->Password = $this->password;  // SMTP password
    $this->mailer->SMTPSecure = 'tls';          // Enable TLS encryption, `ssl` also accepted
    $this->mailer->Port = 587;                  // TCP port to connect to
    // CHARSET configuration
    $this->mailer->CharSet = 'UTF-8'; 
  }

  public function SendMail($dest, $template, $params) {
    try {
      // on ajoute l'émetteur
      $this->mailer->setFrom($this->sender, 'Site web');
      // on ajoute les destinataires
      foreach ($dest as $to) {
        if(!$this->mailer->addAddress($to)) {
          throw new RuntimeException("At least one dest has a bad formated email.", 1);
        }
      }
      // exécuter la substitution dans le template
      if(!$template->Substitute($params)) {
        throw new RuntimeException("Substitution error.", 1);
      }  
      // on ajoute les pièces jointes associées au template si nécessaire
      foreach ($template->GetAttachments() as $filepath => $name) {
        $this->mailer->addAttachment($filepath, $name);   
      } 
      // on paramètre le mailer pour accepter de l'HTML en corps de mail si le template le requiert
      if($template->HasHTMLBody()) {
        $this->mailer->isHTML();
        $this->mailer->Body = $template->GetHTMLBody();  
      }
      // on définit le sujet, le corps et le corps alternatif
      $this->mailer->Subject = $template->GetSubject();
      $this->mailer->AltBody = $template->GetPlainTextBody();
      // on tente d'envoyer le mail
      if(!$this->mailer->send()) {
        throw new RuntimeException('Mailer Error: ' . $this->mailer->ErrorInfo, 1);
      }
    } catch (RuntimeException $e) {
	 echo $e->getMessage();
      return false;
    }
    return true;
  } // SendMail

} // Mailer
