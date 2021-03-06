<?php

return [
    'allRightsReserved' => 'Todos los derechos reservados',
    'site_title'  => 'UEPRIONEGRO',
    'logout'      => 'Desconectar',
    'view'        => 'Ver',
    'edit'        => 'Editar',
    'save'        => 'Guardar',
    'cancel'      => 'Cancelar',
    'delete'      => 'Borrar',
    'show'        => 'Visualizar',
    'datatables'  => [
        'copy'          => 'Copiar',
        'csv'           => 'CSV',
        'excel'         => 'Excel',
        'pdf'           => 'PDF',
        'print'         => 'Imprimir',
        'colvis'        => 'Visibilidad de Columnas',
        'delete'        => 'Borrar seleccionadas',
        'zero_selected' => 'Sin registros seleccionados',
    ],
    'banco'        => [
        'list'      => 'Listado de Bancos',
        'create'         => 'Crear Nuevo Banco',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Bancos',
        'title_singular' => 'Banco',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre del Banco',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'departamento'   => [
        'list'      => 'Listado de Departamentos',
        'create'         => 'Crear Nuevo Departamento',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Departamentos',
        'title_singular' => 'Departamento',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre del Departamento',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'garantia'   => [
        'list'      => 'Listado de Garantías',
        'create'         => 'Crear Nueva Garantía',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Garantías',
        'title_singular' => 'Garantía',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre de la Garantía',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'figuraLegal'   => [
        'list'      => 'Listado de Figuras Legales',
        'create'         => 'Crear Nueva Figura Legal',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Figuras Legales',
        'title_singular' => 'Figura Legal',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre de la Figura Legal',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'estadoCivil'   => [
        'list'      => 'Listado de Estados Civiles',
        'create'         => 'Crear Nuevo Estado Civil',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Estados Civiles',
        'title_singular' => 'Estado Civil',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre del Estado Civil',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'destinoCredito'=> [
        'list'      => 'Listado de Destinos de los Créditos',
        'create'         => 'Crear Nuevo Destino de Crédito',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Destinos de los Créditos',
        'title_singular' => 'Destino del Crédito',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre del Destino del Crédito',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'lineasCredito'=> [
        'list'      => 'Listado de las Líneas de Crédito',
        'create'         => 'Crear Nueva Línea de Créditos',
        'save'           => 'Guardar',
        'add'            => 'Nueva',
        'title'          => 'Líneas de Crédito',
        'title_singular' => 'Línea de Crédito',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'name'                      => 'Nombre',
            'maximum_grace'             => 'Gracia (meses)',
            'maximum_grace_helper'      => 'Ingresar el máximo de Gracia permitido por la Línea de Crédito',

            'maximum_amortization'      => 'Amortización (meses)',
            'maximum_amortization_helper'=> 'Ingresar el máximo de Amortización permitido por la Línea de Crédito',

            'rate'                      => 'Tasa',
            'rate_helper'               => 'Ingresar la Tasa de la Línea de Crédito',

            'description'               => 'Descripción',
            'description_helper'        => 'Ingresar una pequeña descripción de la Línea de Crédito',

            'maximum_amount'            => 'Monto máximo',
            'maximum_amount_helper'     => 'Ingresar el Monto Máximo de la Línea de Crédito',
            'title_helper'              => '',
            'name_helper'               => 'Ingresar el nombre de la Línea de Crédito',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
        ],
    ],

    'sujetoCredito'=> [
        'list'      => 'Listado de los Sujetos de Créditos',
        'create'         => 'Crear Nuevo Suejto de Créditos',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Sujetos de Créditos',
        'title_singular' => 'Suejto de Crédito',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'project_id'                => 'Proyecto',
            'bank_branche_id'           => 'Sucural Bancaria',
            'bank_branche_id_helper'    => 'Seleccione una Sucursal Bancaria',

            'date_shipping_bank'        => 'Fecha envío Banco',
            'date_shipping_bank_helper' => 'Ingresar la Fecha de Envío de la Nota al Banco para Sujeto de Crédito',

            'bank_response_date'        => 'Fecha Respuesta Banco',
            'bank_response_date_helper' => 'Ingrese la fecha de respuesta del Banco por Sujeto de Crédito',

            'credit_subject'            => 'Es Sujeto Hábil?',
            'credit_subject_helper'     => 'Deberá seleccionar la respuesta del Banco',

            'description'               => 'Descipción',
            'description_helper'        => 'Ingrese una descripción sobre el tema',
            
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
        ],
    ],

    'desembolso'=> [
        'list'      => 'Listado de los Desembolsos de los Créditos',
        'create'         => 'Crear Nuevo Desembolso de Crédito',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Desembolsos',
        'title_singular' => 'Desembolso',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'project_id'            => 'Proyecto',

            'date'                  => 'Fecha',
            'date_helper'           => 'Ingrese una Fecha',

            'nro'                   => 'Número de Desembolso',
            'nro_helper'            => 'Ingresar el Nro del Desembolso',

            'amount'                => 'Monto',
            'amount_helper'         => 'Ingrese el Monto del Desembolso',

            'description'           => 'Descripción',
            'description_helper'    => 'Ingrese una Descripción',

            'payment'               => 'Pago',
            'payment_helper'        => 'Ingrese el pago',
            
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
        ],
    ],

    'periodicidad'=> [
        'list'      => 'Listado de Periodicidades',
        'create'         => 'Crear Nueva Periodicidad',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Periodicidades',
        'title_singular' => 'Periodicidad',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre de la Periodicidad',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'estado'=> [
        'list'      => 'Listado de Estados',
        'create'         => 'Crear Nuevo Estado',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Estados',
        'title_singular' => 'Estado',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre del Estado',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'sector'=> [
        'list'      => 'Listado de Sectores',
        'create'         => 'Crear Nuevo Sector',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Sectores',
        'title_singular' => 'Sector',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre del Sector',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'zona'=> [
        'list'      => 'Listado de Zonas',
        'create'         => 'Crear Nueva Zona',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Zonas',
        'title_singular' => 'Zona',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre de la Zona',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'auditoria'=> [
        'list'      => 'Listado de Auditorias',
        'create'         => 'Crear Nueva Auditoria',
        'save'           => 'Guardar',
        'add'            => 'Nueva',
        'title'          => 'Auditorias',
        'title_singular' => 'Auditoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'model'             => 'Modelo',
            'model_helper'      => '',
            'model_helper'      => '',

            'date'              => 'Fecha',
            'model_helper'      => '',
            'model_helper'      => '',

            'previus_value'     => 'Valor Previo',
            'model_helper'      => '',
            'model_helper'      => '',

            'user_id'           => 'Usuario',
            'model_helper'      => '',
            'model_helper'      => '',



            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'alerta'=> [
        'list'           => 'Listado de Alertas',
        'create'         => 'Crear Nueva Alerta',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Alertas',
        'title_singular' => 'Alerta',
        'fields'         => [
            'id'               => 'ID',
            'id_helper'        => '',
            'name'             => 'Nombre',
            'title_helper'     => '',
            'name_helper'      => 'Ingresar el nombre de la Alerta',
            'state'            =>'Estado',
            'state_helper'     =>'Ingresar el estado de la Alerta',

            'cod'              =>'Código',
            'cod_helper'       =>'Ingresar el código de la Alerta',

            'color'            =>'Color',
            'color_helper'     =>'Ingresar el color de la Alerta',

            'sql'               =>'SQL',
            'sql_helper'        =>'Ingresar la SQL para la Alerta',

            'message'           =>'Mensaje',
            'message_helper'    =>'Ingresar el Mensaje de la Alerta',

            'days'              =>'Días',
            'days_helper'       =>'Ingresar los días de la Alerta',


            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'provincia'=> [
        'list'           => 'Listado de Provincias',
        'create'         => 'Crear Nueva Provincia',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Provincias',
        'title_singular' => 'Provincia',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre de la Provincia',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'localidad'=> [
        'list'           => 'Listado de Localidades',
        'create'         => 'Crear Nueva Localidad',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Localidades',
        'title_singular' => 'Localidad',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre de la Localidad',
            'dpto_id'           => 'Dpto',
            'dpto_helper'       => 'Seleccione Departamento',

            'zone_id'           => 'Zona',
            'zone_helper'       => 'Seleccione Zona',

            'cp'                => 'C.P.',
            'cp_helper'         => 'Ingrese C{odigo Postal de la Localidad',

            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'sucursalBanco'=> [
        'list'           => 'Listado de Sucursales de los Bancos',
        'create'         => 'Crear Nueva Sucursal',
        'save'           => 'Guardar',
        'add'            => 'Nuevo',
        'title'          => 'Sucursales',
        'title_singular' => 'Sucursal',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'title_helper'      => '',
            'name_helper'       => 'Ingresar el nombre de la Localidad',
            'address_id'        => 'Domicilio',
            'address_helper'    => 'Ingrese el Domicilio',
            'phone'             => 'Teléfono',
            'phone_helper'      => 'Ingrese un teléfono de contacto',
            'email'             => 'E-mail',
            'email_helper'      => 'Ingrese un E-mail',
            'contact'           => 'Contacto en el Banco',
            'contact_helper'    => 'Ingrese el nombre y Apellido del Contacto',
            'manager'           => 'Gerente',
            'manager_helper'    => 'Ingrese el nombre y Apellido del Gerente',
            'location_id'       => 'Localidad',
            'location_id_helper'=> 'Seleccione la Localidad',
            'bank_id'           => 'Banco',
            'bank_id_helper'    => 'Seleccione el Banco',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'alertaProyecto'=> [
        'list'           => 'Listado de Alertas Asignadas a Proyectos',
        'create'         => 'Asignar Alerta a Proyecto',
        'save'           => 'Guardar',
        'add'            => 'Nueva Asignación',
        'title'          => 'Asignación de Alertas a Proyectos',
        'title_singular' => 'Asignación de Alerta a Proyecto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'project_id'        => 'Proyecto',
            'project_id_helper' => 'Seleccione un Proyecto',
            
            'alert_id'          => 'Alerta',
            'alert_id_helper'   => 'Seleccione una Alerta',
           
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'anexoProyecto'=> [
        'list'           => 'Listado de Alertas Asignadas a Proyectos',
        'create'         => 'Asignar Alerta a Proyecto',
        'save'           => 'Guardar',
        'add'            => 'Nueva Asignación',
        'title'          => 'Asignación de Alertas a Proyectos',
        'title_singular' => 'Asignación de Alerta a Proyecto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',

            'name'              => 'Nombre del Anexo',
            'name_helper'       => 'Ingrese el Nombre del Anexo',

            'project_id'        => 'Proyecto',
            'project_id_helper' => 'Seleccione un Proyecto',
            
            'date'              => 'Fecha del Anexo',
            'date_helper'       => 'Asigne una Fecha para el Anexo',

            'file'              => 'Nombre y Ubicación del anexo',
            'file_helper'       => '',

            'icon'              => 'Ícono del Anexo según tipo de Archivo',
            'file_helper'       => '',
           
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'movimientoProyecto'=> [
        'list'           => 'Listado de Movimientos de los Proyectos',
        'create'         => 'Nuevo Movimiento',
        'save'           => 'Guardar',
        'add'            => 'Nuevo Movimiento',
        'title'          => 'Movimientos de Proyectos',
        'title_singular' => 'Movimiento del Proyecto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',

            'project_id'        => 'Proyecto',
            'project_id_helper' => 'Seleccione un Proyecto',
            
            'date'              => 'Fecha del Anexo',
            'date_helper'       => 'Asigne una Fecha para el Anexo',

            'file'              => 'Nombre y Ubicación del anexo',
            'file_helper'       => '',

            'icon'              => 'Ícono del Anexo según tipo de Archivo',
            'file_helper'       => '',

            'description'       => 'Descripción del Movimiento',
            'file_helper'       => 'Ingrese la Descripción del Movimiento',
           
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'refinanciacionProyecto'=> [
        'list'           => 'Listado de Refinanciaciones de los Proyectos',
        'create'         => 'Nueva Refinanciación',
        'save'           => 'Guardar',
        'add'            => 'Nueva Refinanciación',
        'title'          => 'Refinanciaciones de Proyectos',
        'title_singular' => 'Refinanciación de Proyecto',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',

            'project_id'                => 'Proyecto',
            'project_id_helper'         => 'Seleccione un Proyecto',
            
            'date'                      => 'Fecha del Anexo',
            'date_helper'               => 'Asigne una Fecha para el Anexo',

            'resolution'                => 'Nro. Resolución',
            'resolution_helper'         => 'Ingrese el Número de la Resolución de la Refinanciación',

            'refinancing_amount'        => 'Monto de la Refinanciación',
            'refinancing_amount_helper' => 'Ingrese el Monto Total de la Refinanciación',

            'rate'                      => 'Tasa de Interés de la Refinanciación',
            'rate_helper'               => 'Ingrese la Nueva Tasa de Interés de la Refinanciación',

            'description'               => 'Descripción del Movimiento',
            'file_helper'               => 'Ingrese la Descripción del Movimiento',

            'grace_period'              => 'Gracia',
            'grace_period_helper'       => 'Ingrese el Nuevo período de Gracia según Refinanciación',

            'periodicity_id'            => 'Periodo de Amortización',
            'periodicity_id_helper'     => 'Ingrese el Nuevo período del Crédito (mensual, semestral, etc)',

            'amortization_period'       => 'Amortización',
            'amortization_period_helper'=> 'Ingrese el nuevo Período de Amortización según Refinanciación',

            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => '',
        ],
    ],
];
