var menuType, myParam, general_location, end_charge=0;

var Banco = {
	init: function(){

		var bancoEmprendimiento = angular.module( 'ion' , ['ngRoute','mwl.calendar', 'ngAnimate', 'ui.bootstrap']).factory('httpInterceptor', function ($q, $rootScope, $log) {
	    var loadingCount = 0;

		    return {
		        request: function (config) {
		            if(++loadingCount === 1) $rootScope.$broadcast('loading:progress');
		            return config || $q.when(config);
		        },

		        response: function (response) {
		            if(--loadingCount === 0) $rootScope.$broadcast('loading:finish');
		            return response || $q.when(response);
		        },

		        responseError: function (response) {
		            if(--loadingCount === 0) $rootScope.$broadcast('loading:finish');
		            return $q.reject(response);
		        }
		    };

		});

		bancoEmprendimiento.config( [ '$locationProvider','$routeProvider','$httpProvider', function($locationProvider , $routeProvider, $httpProvider) {

		//$locationProvider.html5Mode(true);


//BUENA EDUCACIÓN

//////// INGRESO DEMO
			$routeProvider.when('/', {
			templateUrl: 'view/plataforma/ingreso-demo/ingreso-demo.php',
			controller: 'control_init'
//////// INGRESO DEMO
			}).when('/plataforma/demo', {
			templateUrl: 'view/plataforma/ingreso-demo/ingreso-demo.php',
			controller: 'control_init'
//////// SELECCIÓN DEMO
			}).when('/plataforma/seleccion', {
			templateUrl: 'view/plataforma/ingreso-demo/seleccion/index.php',
			controller: 'control_init'

//////// PROFESOR
			}).when('/plataforma/profesor', {
			templateUrl: 'view/plataforma/profesor/perfil/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/perfil', {
			templateUrl: 'view/plataforma/profesor/perfil/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/gestion-grados', {
			templateUrl: 'view/plataforma/profesor/gestion-grados/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/materia', {
			templateUrl: 'view/plataforma/profesor/materia/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/asignaturas', {
			templateUrl: 'view/plataforma/profesor/asignaturas/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/recursos', {
			templateUrl: 'view/plataforma/profesor/recursos/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/tabulados', {
			templateUrl: 'view/plataforma/profesor/tabulados/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/generar-tabulados', {
			templateUrl: 'view/plataforma/profesor/tabulados/generartab.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/planestudio', {
			templateUrl: 'view/plataforma/profesor/planestudio/index.php',
			controller: 'control_init'
			}).when('/plataforma/profesor/crear-actividad', {
			templateUrl: 'view/plataforma/profesor/crearactividad/index.php',
			controller: 'control_init'
			
//////// ACUDIENTE
			}).when('/plataforma/acudiente', {
			templateUrl: 'view/plataforma/acudiente/perfil-estudiante/index.php',
			controller: 'control_init'
			}).when('/plataforma/acudiente/perfil-estudiante', {
			templateUrl: 'view/plataforma/acudiente/perfil-estudiante/index.php',
			controller: 'control_init'
			}).when('/plataforma/acudiente/mensajes', {
			templateUrl: 'view/plataforma/acudiente/mensajes/index.php',
			controller: 'control_init'
			}).when('/plataforma/acudiente/asignaturas', {
			templateUrl: 'view/plataforma/acudiente/asignaturas/index.php',
			controller: 'control_init'
			}).when('/plataforma/acudiente/directorio', {
			templateUrl: 'view/plataforma/acudiente/directorio/index.php',
			controller: 'control_init'
			}).when('/plataforma/acudiente/eventos', {
			templateUrl: 'view/plataforma/acudiente/eventos/index.php',
			controller: 'control_init'
			}).when('/plataforma/acudiente/pae', {
			templateUrl: 'view/plataforma/acudiente/pae/index.php',
			controller: 'control_init'
			}).when('/plataforma/acudiente/ruta-escolar', {
			templateUrl: 'view/plataforma/acudiente/ruta/index.php',
			controller: 'control_init'
			
			
//////// ESTUDIANTE
			}).when('/plataforma/estudiante', {
			templateUrl: 'view/plataforma/estudiante/perfil/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/perfil', {
			templateUrl: 'view/plataforma/estudiante/perfil/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/notas', {
			templateUrl: 'view/plataforma/estudiante/notas/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/horario', {
			templateUrl: 'view/plataforma/estudiante/horario/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/planestudio', {
			templateUrl: 'view/plataforma/estudiante/planestudio/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/mensajes', {
			templateUrl: 'view/plataforma/estudiante/mensajes/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/foros', {
			templateUrl: 'view/plataforma/estudiante/foros/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/recursos', {
			templateUrl: 'view/plataforma/estudiante/recursos/index.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/pae', {
			templateUrl: 'view/plataforma/estudiante/pae/index.php',
			controller: 'control_init'
			

//PLATAFORMA - BUENA EDUCACIÓN [VISOR]
			}).when('/plataforma/visor', {
			templateUrl: 'view/plataforma/visor/cali/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/busqueda-avanzada', {
			templateUrl: 'view/plataforma/visor/busqueda-avanzada/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/reportes', {
			templateUrl: 'view/plataforma/visor/reportes/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/resultados', {
			templateUrl: 'view/plataforma/visor/resultados/index.php',
			controller: 'control_init'	
			}).when('/plataforma/visor/institucion', {
			templateUrl: 'view/plataforma/visor/institucion/index.php',
			controller: 'control_init'		
			}).when('/plataforma/visor/estudiantes', {
			templateUrl: 'view/plataforma/visor/busqueda-estudiantes/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/estudiante', {
			templateUrl: 'view/plataforma/visor/estudiante/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/personal', {
			templateUrl: 'view/plataforma/visor/busqueda-personal/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/planestudio2', {
			templateUrl: 'view/plataforma/visor/planestudio2.php',
			controller: 'control_init'
			}).when('/plataforma/visor/personal-acedemico', {
			templateUrl: 'view/plataforma/visor/personal/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/planestudio', {
			templateUrl: 'view/plataforma/visor/busqueda-planestudio/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/plan-estudio', {
			templateUrl: 'view/plataforma/visor/planestudio/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/directorio', {
			templateUrl: 'view/plataforma/visor/directorio/index.php',
			controller: 'control_init'
			}).when('/plataforma/visor/pae', {
			templateUrl: 'view/plataforma/visor/pae/index.php',
			controller: 'control_init'
		}).when('/plataforma/visor/mensajes', {
			templateUrl: 'view/plataforma/visor/mensajes/index.php',
			controller: 'control_init'
			
			
//PLATAFORMA - BUENA EDUCACIÓN [ADMINISTRADOR] [REGISTRO INSTITUCIÓN]
//////// INGRESO
			}).when('/plataforma', {
			templateUrl: 'view/plataforma/ingreso/ingreso.php',
			controller: 'control_init'
//////// REGISTRO NOMBRE LOGO
			}).when('/plataforma/admin/registro/', {
			templateUrl: 'view/plataforma/admin/registro/registro_institucion/index.php',
			controller: 'control_init'
//////// REGISTRO INFORMACIÓN
			}).when('/plataforma/admin/registro/registro_informacion', {
			templateUrl: 'view/plataforma/admin/registro/registro_informacion/index.php',
			controller: 'control_init'
				
//PLATAFORMA - BUENA EDUCACIÓN [ADMINISTRADOR]
//////// DIRECTORIO
			}).when('/plataforma/admin/directorio', {
			templateUrl: 'view/plataforma/admin/zonas/directorio/index.php',
			controller: 'control_init'
//////// PANEL
			}).when('/plataforma/admin/panel', {
			templateUrl: 'view/plataforma/admin/panel/index.php',
			controller: 'control_init'
//////// LOS ESTUDIANTES
			}).when('/plataforma/admin/panel/estudiantes', {
			templateUrl: 'view/plataforma/admin/panel/los-estudiantes/index.php',
			controller: 'control_init'
//////// BUSCAR - INICIO
			}).when('/plataforma/admin/inicio', {
			templateUrl: 'view/plataforma/admin/zonas/buscar-estudiante/index.php',
			controller: 'control_init'
//////// BUSCAR - INICIO
			}).when('/plataforma/admin/buscargrado', {
			templateUrl: 'view/plataforma/admin/zonas/buscar-grado/index.php',
			controller: 'control_init'
//////// CERTIFICADOS
			}).when('/plataforma/admin/certificados', {
			templateUrl: 'view/plataforma/admin/zonas/certificados/index.php',
			controller: 'control_init'			
//////// ESTUDIANTE
			}).when('/plataforma/admin/estudiante', {
			templateUrl: 'view/plataforma/admin/zonas/estudiante/index.php',
			controller: 'control_init'
//////// PROFESOR
			}).when('/plataforma/admin/profesor', {
			templateUrl: 'view/plataforma/admin/zonas/profesor/index.php',
			controller: 'control_init'
//////// Grados
			}).when('/plataforma/admin/grados', {
			templateUrl: 'view/plataforma/admin/zonas/grados/index.php',
			controller: 'control_init'
//////// Eventos
			}).when('/plataforma/admin/eventos', {
			templateUrl: 'view/plataforma/admin/zonas/eventos/index.php',
			controller: 'control_init'
//////// PAE
			}).when('/plataforma/admin/pae', {
			templateUrl: 'view/plataforma/admin/pae/index.php',
			controller: 'control_init'	
//////// PAE LICITACIÓN
			}).when('/plataforma/admin/pae/licitacion', {
			templateUrl: 'view/plataforma/admin/pae/licitacion/index.php',
			controller: 'control_init'	
//////// PAE PROGRAMA
			}).when('/plataforma/admin/pae/programa', {
			templateUrl: 'view/plataforma/admin/pae/programa/index.php',
			controller: 'control_init'	
//////// TABULADOS CREADOS
			}).when('/plataforma/admin/tabuladoscreados', {
			templateUrl: 'view/plataforma/admin/tabuladoscreados/index.php',
			controller: 'control_init'	
//////// CREAR INSPECTOR
			}).when('/plataforma/admin/pae/crear-inspector', {
			templateUrl: 'view/plataforma/admin/pae/inspector/index.php',
			controller: 'control_init'	
//////// CREAR CERTIFICADOS
			}).when('/plataforma/admin/crear-certificados', {
			templateUrl: 'view/plataforma/admin/certificados/index.php',
			controller: 'control_init'	
//////// CREAR ENCUESTAS
			}).when('/plataforma/admin/crear-encuestas', {
			templateUrl: 'view/plataforma/admin/encuestas/index.php',
			controller: 'control_init'	
//////// CREAR ACTIVIDAD
			}).when('/plataforma/admin/crear-actividad', {
			templateUrl: 'view/plataforma/admin/crearactividad/index.php',
			controller: 'control_init'		
//////// REGISTRO RUTA
			}).when('/plataforma/admin/rutas/registro-ruta', {
			templateUrl: 'view/plataforma/admin/rutas/registroruta/index.php',
			controller: 'control_init'			
//////// CREANDO RUTA
			}).when('/plataforma/admin/rutas/creando-ruta', {
			templateUrl: 'view/plataforma/admin/rutas/creandoruta/index.php',
			controller: 'control_init'		
//////// PERFIL COORDINADOR
			}).when('/plataforma/admin/rutas/perfil-coordinador', {
			templateUrl: 'view/plataforma/admin/rutas/control/index.php',
			controller: 'control_init'	
//////// INICIO RUTA
			}).when('/plataforma/admin/rutas/inicio', {
			templateUrl: 'view/plataforma/admin/rutas/detalle/inicio/index.php',
			controller: 'control_init'						
//////// DETALLE RUTA
			}).when('/plataforma/admin/rutas/historial-recorridos', {
			templateUrl: 'view/plataforma/admin/rutas/detalle/historial/index.php',
			controller: 'control_init'			
//////// ESTUDIANTES ASIGNADOS
			}).when('/plataforma/admin/rutas/estudiantes-asignados', {
			templateUrl: 'view/plataforma/admin/rutas/detalle/asignados/index.php',
			controller: 'control_init'				
//////// INFORMACION DE LA RUTA
			}).when('/plataforma/admin/rutas/informacion-ruta', {
			templateUrl: 'view/plataforma/admin/rutas/detalle/informacion/index.php',
			controller: 'control_init'		
//////// CREAR NUEVO RECORRIDO
			}).when('/plataforma/admin/rutas/crear-recorrido', {
			templateUrl: 'view/plataforma/admin/rutas/crearrecorrido/index.php',
			controller: 'control_init'	
//////// CREAR INSPECCION DE ENTREGA
			}).when('/plataforma/admin/pae/inspeccionentrega', {
			templateUrl: 'view/plataforma/admin/pae/crearinspeccion/index.php',
			controller: 'control_init'																									

//PLATAFORMA - BUENA EDUCACIÓN [OFERENTE]	
//////// PAE
			}).when('/plataforma/oferente', {
			templateUrl: 'view/plataforma/oferente/pae/index.php',
			controller: 'control_init'	
//////// PAE PROGRAMA
			}).when('/plataforma/oferente/pae/programa', {
			templateUrl: 'view/plataforma/oferente/pae/programa/index.php',
			controller: 'control_init'	
//////// PAE LICITACION
			}).when('/plataforma/oferente/pae/licitacion', {
			templateUrl: 'view/plataforma/oferente/pae/licitacion/index.php',
			controller: 'control_init'	

//PLATAFORMA - BUENA EDUCACIÓN [INSPECTOR]	
//////// INGRESO
			}).when('/plataforma/inspector', {
			templateUrl: 'view/plataforma/inspector/entrega/index.php',
			controller: 'control_init'	
//////// CREAR INSPECCION DE ENTREGA
			}).when('/plataforma/inspector/crear-inspeccion', {
			templateUrl: 'view/plataforma/inspector/crearinspeccion/index.php',
			controller: 'control_init'										
			

//PLATAFORMA - BUENA EDUCACIÓN [CONDUCTOR]	
			}).when('/plataforma/conductor', {
			templateUrl: 'view/plataforma/conductor/conductor.php',
			controller: 'control_init'	
			
//PLATAFORMA - BUENA EDUCACIÓN [CONDUCTOR]	
			}).when('/plataforma/visor-app', {
			templateUrl: 'view/plataforma/visor-app/visor.php',
			controller: 'control_init'	

//PLATAFORMA - BUENA EDUCACIÓN [PAE ADMIN]	
			}).when('/plataforma/pae-admin', {
			templateUrl: 'view/plataforma/pae-admin/programa/index.php',
			controller: 'control_init'				
			
			
			
// VACÍO
			}).otherwise({
				redirectTo: '/',
				templateUrl: 'view/plataforma/ingreso-demo/ingreso-demo.php',
				controller: 'control_init'
			});

			$httpProvider.interceptors.push('httpInterceptor');

		}]);
		
		bancoEmprendimiento.run( function ($rootScope) {

    		$rootScope.$on('loading:progress', function(){
			    console.log("Inicia la carga");
			 	//$("#preload").css('display','block');
				//$("#load_status").css('display','block');

			});

			$rootScope.$on('loading:finish', function(){

				console.log("Termina la carga");
				
				Ion.calcularAlturas();
				
				if( menuType == undefined){
					menuType = "personas";
				}
	
				setTimeout(function(){
					Banco.obtain_selected(menuType);
				}, 100);
	
				console.log(myParam);
				console.log("Url de la pagina: "+general_location);
	
	
				setTimeout(function(){	
					// $("#preload").css('display','none');
					// $("#load_status").css('display','none');
				}, 1000);
	
				end_charge++;

			});

		});

		bancoEmprendimiento.controller('control_init', ['$scope','$routeParams','$location', function($scope, $routeParams, $location) {
			menuType         = $routeParams.menuType;
			myParam          = $location.search().myParam;
			general_location = $location.path();
		}]);
		
		bancoEmprendimiento.controller('KitchenSinkCtrl', function(moment, alert) {

    var vm = this;

    //These variables MUST be set as a minimum for the calendar to work
    vm.calendarView = 'month';
    vm.viewDate = new Date();
    vm.events = [
      {
        title: 'An event',
        type: 'warning',
        startsAt: moment().startOf('week').subtract(2, 'days').add(8, 'hours').toDate(),
        endsAt: moment().startOf('week').add(1, 'week').add(9, 'hours').toDate(),
        draggable: true,
        resizable: true
      }, {
        title: '<i class="glyphicon glyphicon-asterisk"></i> <span class="text-primary">Another event</span>, with a <i>html</i> title',
        type: 'info',
        startsAt: moment().subtract(1, 'day').toDate(),
        endsAt: moment().add(5, 'days').toDate(),
        draggable: true,
        resizable: true
      }, {
        title: 'This is a really long event title that occurs on every year',
        type: 'important',
        startsAt: moment().startOf('day').add(7, 'hours').toDate(),
        endsAt: moment().startOf('day').add(19, 'hours').toDate(),
        recursOn: 'year',
        draggable: true,
        resizable: true
      }
    ];

    vm.isCellOpen = true;

    vm.eventClicked = function(event) {
      alert.show('Clicked', event);
    };

    vm.eventEdited = function(event) {
      alert.show('Edited', event);
    };

    vm.eventDeleted = function(event) {
      alert.show('Deleted', event);
    };

    vm.eventTimesChanged = function(event) {
      alert.show('Dropped or resized', event);
    };

    vm.toggle = function($event, field, event) {
      $event.preventDefault();
      $event.stopPropagation();
      event[field] = !event[field];
    };

  });

		


	},

	obtain_selected : function(id){
		$(".bUp").removeClass('seleccted');
		$("#bUp_"+id).addClass('seleccted');
	},

	sign_in_basic: function(){

	},

	sign_in_face: function(){

	},

	sign_up_basic : function(){

	},

	sign_up_face : function(){

	},

	load_slider : function(){

	},

	last_camps_all : function(){

	},

	last_camps_y : function(){

	},

	last_camps_e : function(){

	},

	last_camps_t : function(){

	},

	load_projects : function(){

	},

	last_news : function(){

	},

	last_quotes : function(){

	},

	mentors_list : function(){

	},

	courses_list : function(){

	},

	modules_list : function(){

	},

	module_detail : function(){

	},


};

Banco.init();