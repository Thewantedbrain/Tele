<?php 

namespace TeatroJuares\Content\helpers;

trait expReg {

	//GENERAL
	
	public $expLetras = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\ ]/';
	public $expTextos = '/^[0-9a-zA-ZÀ-ÿ\u00f1\u00d1\.\,\!\¡¿?;\ ]/';
	public $expCaracteresEspeciales = "/[0-9\.\,\!\¡¿?;\s\-]/";
	public $expId = '/^[0-9A-Z\:\-]{1,21}$/';
	public $expOneTwo = '/^[1-2]{1}$/';
	
	//USUARIO
	
	public $expCedula = '/^[0-9]\d{6,7}$/';
	public $expNombreUsuario = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\ ]{3,40}$/';
	public $expApellidoUsuario = '/^[a-zA-ZÀ-ÿ\u00f1\ \u00d1\ ]{4,30}$/';
	public $expEmail = '/^[a-zA-Z0-9_\.\-]+@[a-z0-9\-]+\.[a-zA-Z0-9\-]{2,4}$/';
	public $expNroTelefono = '/^[0-9\-]{7}$/';
	public $expTelefono = '/^04(12|24|26|14|16)[0-9]{7}$/';
	public $expPassword = '/^[a-zA-Z0-9_\.\-]{8}$/';
	public $expIdRol = '/^[0-9A-Z\-]{9,65}$/';
	public $expNombreRol = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\ \-]{4,60}$/';
	public $expDescripcionRol = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\ \-]{10,120}$/';


	//EVENTOS

	public $expIdCategoria = '/^[A-Z0-9]{7,55}$/';
	public $expNombreCategoria = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\ ]{3,30}$/';
	public $expIdEvento = '/^[A-Z0-9]{8,55}$/';
	public $expNombreEvento = '/^[a-zA-ZÀ-ÿ\u00f1\u00d10-9_\ \.\-¡!¿?]{3,60}$/';
	public $expDirector = '/^[a-zA-ZÀ-ÿ\ \u00f1\u00d1]{3,35}$/';
	public $expDescripcionEvento = '/^[0-9a-zA-ZÀ-ÿ\u00f1\u00d1\.\,\!\¡¿?;\ ]{60,240}$/';
	public $expExtensionImg = '/(.png|.jpg|.jpeg|.webp|.tiff)$/i';

	//FUNCIONES
	
	public $expIdFuncion = '/^[A-Z0-9\:\-]{8,55}$/';

	//CITA

	public $expDescripcionCita = '/^[a-zA-ZÀ-ÿ\u00f1\u00d10-9_\ \.\,\-¡!¿?]{30,300}$/';
	public $expServicio = '/^[1-6\-]{1}$/';
	public $expDescripcionServicio = '/^[a-zA-Z\ \-]{3,30}$/';
	public $expRazonSocial = '/^[a-zA-ZÀ-ÿ\u00f1\u00d10-9_\ \.]{5,30}$/';

	//BANCOS

	public $expCodBanco = '/^0((001|[1-9][0-9][0-9]|[1-9][0-9]0))$/';
	public $expNombreBanco = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\ \.\,]{3,60}$/';

	//DATOS PAGO
	public $expIdDatosPago = '/^[0-9]{1,11}$/';
	private $expNumCuenta = "/^[0-9]{20}$/";

	//NOTICIAS
	private $erNroNoticia = "/^noti+[0-9a-z.]{1,100}$/";
	private $erTitulo = "/^[a-zA-ZÀ-ÿ\u00f1\u00d10-9_\ \.\-¡!¿?:;]{10,100}$/";
	private $erDescripcion = "/^[a-zA-ZÀ-ÿ\u00f1\u00d10-9_\.\,\-¡!¿?:;\s]{20,1200}$/";
	private $erAutor = "/^[a-zA-ZÀ-ÿ\u00f1\u00d10-9_\ ]{3,40}$/";


	//SOPORTE

	public $expPregunta = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\¿\?\,\ ]{20,100}$/';
	public $expRespuesta = '/^[a-zA-ZÀ-ÿ\u00f1\u00d1\.\,\!\¡\ ]{20,300}$/';
	public $expMensaje = '/^[a-z0-9A-ZÀ-ÿ\u00f1\u00d1\.\:\,\!\¿\?\¡\ ]{2,500}$/';
	public $expModulos = '/^[0-9]{1,11}$/';

	//LOTES

	public $expColorHexa = '/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/';
	public $expCodAsientos = '/^[BGP][A-O][0-9]{1,2}$/';
	public $expPrecio = '/^\\d{1,3}(\\.\\d{1,2})?$/';
	public $expIdLote  = '/^lote:\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}:\d{2}$/';
	public $expBoleto  = '/^boleto:\d+(\.\d+)?:\d{4}$/';
}
?>