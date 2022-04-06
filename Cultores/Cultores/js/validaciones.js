//VALIDACIONES DEL FORMULARIO PARA AÑADIR Y MODIFICAR UNA EXPRESION CULTURAL
	//AÑADIR TIPO DE ARTE
	$("#tarte").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			estilo: "required",
			tipo_arte: "required",
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHAç
			estilo:"Ingrese el Estilo de Arte",
			tipo_arte:"Ingrese el Tipo de Arte",
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});

	//AÑADIR GENERO O MARTERIAL DEL ARTE
	$("#tgenero").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			estilo: "required",
			genero_arte: "required"
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			estilo:"Ingrese el Estilo de Arte",
			genero_arte:"Ingrese el Genero o Material de Arte"
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FIN VALIDACIONES DEL FORMULARIO PARA AÑADIR Y MODIFICAR UNA EXPRESION CULTURAL

//VALIDACIONES DEL FORMULARIO PARA GENERAR UN REPORTE
	$("#freporte").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			rcensado: "required",
			rperiodo: "required",
			restilo: "required"
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			rcensado:"Ingrese el Tipo de Censado",
			rperiodo:"Ingrese el Periodo",
			restilo:"Ingrese el Estilo de Arte"
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FINVALIDACIONES DEL FORMULARIO PARA GENERAR UN REPORTE

//VALIDACIONES DEL FORMULARIO PARA CENSAR Y MODIFICAR A UNA AGRUPACION
	$("#cagrupacion").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			nombre: "required",
			fundacion: "required",
			activo: "required",
			estilo: "required",
			tipo_arte: "required",
			genero_arte: {
				required: true
			}
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			nombre:"Ingrese el Nombre de la Agrupación",
			fundacion:"Ingrese su Fecha de Fundación",
			activo:"Ingrese su Estatus",
			estilo:"Ingrese su Estilo de Arte",
			tipo_arte:"Ingrese su Tipo de Arte",
			genero_arte:{
				required:"Ingrese su Genero o Material de Arte"
			}
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FIN VALIDACIONES DEL FORMULARIO PARA CENSAR Y MODIFICAR A UNA AGRUPACION

//VALIDACIONES DEL FORMULARIO PARA CENSAR Y MODIFICAR A UNA PERSONA
	$("#censo").validate({	

		rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
			//PRIMERA SECCION DE DATOS PERSONALES
			nombre: "required",
			apellido: "required",
			cedula:{
				number:true,
				required:true,
				minlength: 7
			},
			profesion: "required",
			estudio: "required",
			civil: "required",
			genero: "required",
			activo: "required",
			nacimiento: "required",
			//EXPRESION CULTURAL DEL CULTOR
			estilo: "required",
			tipo_arte: "required",
			genero_arte: "required",
			agrupacion: "required",
			//DATOS EXTRA DEL CULTOR ESTAS 3 SOLO SON REQUERIDAS PORQUE CAMBIA EL DISABLED DEL INPUT, SINO NO HACEN EFECTO
			aprendizaje: "required",
			conocimiento: "required",
			condiciones: "required",
			//DATOS DE DIRECCION DE HOGAR
			municipio: "required",
			parroquia: "required",
			dir1: "required",
			//DATOS DE INFORMACION DE CONTACTO
			telefono1:{
				number:true,
				minlength:11,
				required:true
			},
			telefono2: {
				number:true,
				minlength:11
			},
			email:{
				email:true,
				required:true
			}
		},

		messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHA
			//DATOS PERSONALES DEL CULTOR
			nombre:"Ingrese su nombre",
			apellido:"Ingrese su Apellido",
			cedula:{
				number:"Ingrese solamente valores númericos",
				required:"Ingrese su Cedula de Identidad",
				minlength: "La cedula debe tener al menos 7 cifras"
			},
			profesion:"Ingrese su Profesión",
			estudio:"Ingrese su Estudio",
			civil:"Ingrese su Estado Civil",
			genero:"Ingrese su Genero Sexual",
			activo:"Ingrese su Estatus Actual",
			nacimiento:"Ingrese su Fecha de Nacimiento",
			//DATOS DE EXPRESION CULTURAL
			estilo:"Ingrese su Estilo de Arte",
			tipo_arte:"Ingrese su Tipo de Arte",
			genero_arte:"Ingrese su Genero o Material de Arte",
			agrupacion:"Ingrese una Opción",
			//DATOS EXTRA DEL CULTOR
			aprendizaje:"Ingrese su forma de Aprendizaje",
			conocimiento:"Ingrese su forma de Conocimiento",
			condiciones:"Ingrese el ¿Por qué?",
			//DATOS DE LA DIRECCION DE HOGAR
			municipio:"Ingrese el Municipio",
			parroquia:"Ingrese la Parroquia",
			dir1: "Ingrese su dirección de Hogar",
			//INFORMACION DE DATOS DE CONTACTO
			telefono1:{
				number:"Ingrese solamente valores númericos",
				minlength:"Complete el tamaño del Teléfono",
				required:"Ingrese su Teléfono"
			},
			telefono2:{
				number:"Ingrese solamente valores númericos",
				minlength:"Complete el tamaño del Teléfono"
			},
			email:{
				email:"Ingrese formato correcto (eg: persona@gmail.com)",
				required:"Ingrese su Correo Correspondiente"
			}	
		},

		errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
			error.insertAfter(element);
		}

	});
//FIN VALIDACIONES DEL FORMULARIO PARA CENSAR Y MODIFICAR A UNA PERSONA

