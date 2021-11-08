<?php
$titulo= array ("Bienvenido a Hostname.cl el mejor datcenter de Chile", "Bienvenido a Hostname.cl el mejor web hosting de Chile", "Bienvenido a Hostname.cl con el mejor servicio de Datacenter en Chile;");
$titulo_i= array_rand ($titulo,1);

$cuerpo= array ("Recuerda leer nuestro correo de activación de Servicio<br/>", "En Hostname.cl encuentras el mejor hosting de Chile<br/>", "Si posees dudas en tu servicio ll&aacute;manos<br/>","Revisa nuestros planes Vps y Servidores Dedicados para potenciar tu empresa<br/>","¿Deseas crear tu pagina web?</br>en Hostname podemos realizar tu web seg&uacute;n las necesidades de tu empresa</br> puedes solicitar tu cotizacion en Dise&ntilde;o Web");
$cuerpo_i= array_rand ($cuerpo,1);

$pie= array ("Si tienes dudas contactanos a soporte@hostname.cl </br>hostname.cl el mejor hosting Chileno.", "Tenemos un equipo de soporte personalizado 24x7<br/>", "El servicio de web hosting te 
permite mantener un sitio web en Internet, guardar información multimedia, respaldos de información y además tener acceso a crear correos electrónicos corporativos con el nombre de tu propio dominio."); 
$pie_i= array_rand ($pie,1);

$url = "http://" . $_SERVER["HTTP_HOST"];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?echo $titulo[$titulo_i]?></title>

<meta name="description" content="hostname.cl,mi IP, ver ip, <?echo $titulo[$titulo_i]?>, conocer mi direccion ip,datacenter en Chile,Como puedo conocer mi IP, cpanel, mi ip publica, ip fija,
 ip de navegacion">
<meta name="keywords" content="hostname.cl, ip, como puedo conocer, <?echo $titulo[$titulo_i]?> , saber mi ip, conexion, publica, direccion, mi ip, ip fija, web-hosting, ip dinamica,datacent
er en Chile, cpanel, ver ip, housing, conocer mi ip, hosting, vps, alojamiento web,">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="">
<meta name="Distribution" content="follow"/>

<link rel="shortcut icon" href="https://www.hostname.cl/favicon.ico" type="image/x-icon">

<style type="text/css">
body{margin:0px;padding:0px;height:0px;}
#header{background-color:#1361b6;padding:40px;/* Altura del header */        }
#body{padding:10px;padding-bottom:80px;}
#footer{background-color:#1361b6;/* Altura del footer */width: 100%;float:left;padding: 0 0 140px;overflow:hidden;text-align:center;display:table-cell;vertical-align:middle;}
.alternativo{color:#FFFFFF;}
.alternativo-url{color:#FFFFFF;font-size:20px;font-family:Georgia, "Times New Roman", Times, serif;}
h1{font-family:"Times New Roman",Times,serif;/*titulo Bienvenida*/ font-size:25px;color:#1b324b;margin-left:auto;margin-right:auto;}
a{font-family:Georgia,"Times New Roman",Times,serif;   /* letras de link*/ font-size:15px; color:#1b324b; text-decoration:none;}
p{font-family:Georgia,"Times New Roman",Times,serif;   /* letras de pie de pagina*/font-size:20px;color:#FFFFFF;text-align:center;}
.pocuer {width:700px;margin-left:auto; margin-right:auto; }
.logo{width:700px;height:100px;margin-left:auto;margin-right:auto; }
.texto{width:700px;margin-left:auto;margin-right:auto;}
.texto p {color:#000000;}
</style>
</head>     
        
<body> 
<div>
    <div id="header"></div>
        <div id="body">  
        <div align="center" class="pocuer">
                <div class="logo"><a alt="hostname.cl Web Hosting" href="https://www.hostname.cl" target="_blank"><img alt="Logo hostname.cl" src="https://www.hostname.cl/uploads/2015/02/logo.png" ></a></div>
                                        <h1>Bienvenido a hostname.cl</br>DataCenter en Chile</h1>
                                <div class="texto"><p><?echo $cuerpo[$cuerpo_i];?></br></p></div>
        </div>
        <TABLE align="center">
                    <tr>
                        <td width="50" ><a alt="Hostname Web Hosting" target="_blank"><img alt="Mejor Datacenter" src="https://www.hostname.cl/uploads/2015/07/cpanel_logo.png" width='50' height='50' target="_blank"/></a></td>
                        <td width="200" ><a alt="Hostname Web Hosting" href="<?echo $url;?>/cpanel" target="_blank">Acceso a Cpanel</a></td>
                        <td width="50" ><a alt="Hostname Web Hosting" target="_blank"><img alt="Mejor Datacenter" src="https://www.hostname.cl/uploads/2015/07/contact-support.png" width='50' height='50' target="_blank"/></a></td>
                        <td width="200" ><a alt="Hostname Web Hosting" href="https://clientes.hostname.cl/submitticket.php?step=2&deptid=1" target="_blank">Ticket de Soporte</a></td>
                    
            </tr>
                        <td><a alt="Hostname Webmail" target="_blank"><img alt="Datacenter Chile" src="https://www.hostname.cl/uploads/2015/07/webmail-icon.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Webmail" href="<?echo $url;?>/webmail" target="_blank">Acceso Webmail</a></td>
                        <td><a alt="Hostname Webmail" target="_blank"><img alt="Datacenter Chile" src="https://www.hostname.cl/uploads/2015/07/web-design-50x50.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Webmail" href="https://hostname.cl/diseno-web" target="_blank">Dise&ntilde;o Web</a></td>
                   
                   <tr>   
                    </tr> 
                    <tr>
                        <td><a alt="Hostname Blog Mejor WebHosting" target="_blank"><img alt="Datacenter Chile" src="https://www.hostname.cl/uploads/2015/07/logo-blog.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Blog Mejor WebHosting" href="https://www.hostname.cl/blog" target="_blank">Blog de Noticias Hostname</a></td>
                        <td><a alt="Reseller Hosting Cpanel vps" target="_blank"><img alt="Cpanel Chile" src="https://www.hostname.cl/uploads/2015/07/contratar_servicio.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Reseller Hosting Cpanel vps" href="https://clientes.hostname.cl/cart.php" target="_blank">Contratar Nuevos Productos</a></td>
                    </tr> 
                    <tr>
                        <td><a alt="Cpanel Correo Web" target="_blank"><img alt="Cpanel Chile" src="https://www.hostname.cl/uploads/2015/07/videos_soporte.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Cpanel Correo Web" href="https://www.hostname.cl/tutoriales" target="_blank">Videos Tutoriales</a></td>
                        <td><a alt="Hostname Datacenter en Chile" target="_blank"><img alt="Mejor Hosting Hostname" src="https://www.hostname.cl/uploads/2015/07/preguntas_frecuentes.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Datacenter en Chile" href="https://clientes.hostname.cl/knowledgebase.php " target="_blank">Preguntas Frecuentes</a></td>
                    </tr>
                    <tr>
                        <td><a alt="Hostname Hosting en Chile" target="_blank"><img alt="Mejor Hosting Hostname" src="https://www.hostname.cl/uploads/2015/07/ip.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Hosting en Chile" href="http://ip.hn.cl" target="_blank">Mi ip publica</a></td>
                        <td><a alt="Hostname Cpanel vps" target="_blank"><img alt="Mejor Hosting Hostname" src="https://www.hostname.cl/uploads/2015/07/dominio.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Cpanel vps" href="https://clientes.hostname.cl/index.php" target="_blank">Compra tu Dominio</a></td>
                    </tr>
                    <tr>
                        <td><a alt="Hostname Hosting en Chile" target="_blank"><img alt="Mejor Hosting Hostname" src="https://www.hostname.cl/uploads/2015/07/area_de_clientes.jpg" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Hosting en Chile" href="https://clientes.hostname.cl/clientarea.php" target="_blank">Area de Cliente</a></td>
                        <td><a alt="Hostname Cpanel vps" target="_blank"><img alt="Mejor Hosting Hostname" src="https://www.hostname.cl/uploads/2015/07/notificar_pago.png" width='50' height='50' target="_blank"/></a></td>
                        <td><a alt="Hostname Cpanel vps" href="https://www.hostname.cl/notificar-pago" target="_blank">Notificar Pago</a></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center"><a alt="Hostname cpanel partner" target="_blank"><img src="http://ip.hn.cl/img/qr-hostname.png" alt="Mejor Hosting Hostname" width="93"  target="_blank"/></a></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" ><a alt="Hostname Cpanel vps" href="https://www.hostname.cl" target="_blank">Hostname Web Hosting</a></td>   
                        </tr>    
          </TABLE>
         

<div class="texto"><p><?echo $pie[$pie_i]?></p></div></div>
    <div id="footer">
    <table align="center">
        <tr align="center">
                        <td><p>Pagina web alojada en <a class="alternativo-url" alt="Hostname Cpanel vps" href="https://www.hostname.cl" target="_blank">Hostname.cl</a> <br/><br/>en construcci&oacute;n</p></td>  
                </tr>
     </table> 
              <table align="center">
              <tr align="center"> 
                 <td width="300px"><a alt="Hostname cpanel partner" target="_blank"><img alt="Mejor Hosting Hostname" src="http://ip.hn.cl/img/partner_cpanel.png"  target="_blank"/></a></td>   
                 <td width="300px"><a alt="Hostname datacenter en chile" target="_blank"><img alt="Mejor Hosting Hostname" src="http://ip.hn.cl/ipblock_suspended/logo_w.png" target="_blank"/></a></td>   
                 <td width="300px"><a alt="Hostname wordpress joomla" target="_blank"><img alt="Mejor Hosting Hostname" src="https://www.hostname.cl/img/icons/softaculos.png"target="_blank"/></a></td>        
             </tr>
             <tr align="center"> 
                 <td><a class="alternativo">cPanel Partners<br/>Oficial</a></td>
                 <td><a class="alternativo">Datacenter en<br/>Chile</a></td>
                 <td><a class="alternativo">Noc Partners<br/>Softaculous</a></td>
            </tr>
        </table> 
                    
    </div>
</div>        
</body>
</html>
