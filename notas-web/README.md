##YII


### Instalacion
Compose descarga 
crear proyecto:
basico
	composer create-project yiisoft/yii2-app-basic yiirestapiby  => OK
	php composer.phar create-project yiisoft/yii2-app-basic basic => error

advanzado
	php composer.phar create-project yiisoft/yii2-app-advanced advanced
descarga de archivo template 
	https://www.yiiframework.com/download

### Verificar instalacion

		php yii serve
		ó
		php yii serve --port=8888

Verifica los requimiento que necesita el framework da ok de lo que contine y de lo que falta para el desarrollo
		
		php requirements.php
		
### Server

	utilice laragon con server y funciono
	Apache HTTP server
	Nginx HTTP server https://www.nginx.com/resources/wiki/
	facebook's HHVM. https://hhvm.com/

### Concepto 

	1. Accion agrupadas por controller. /controller
	2. Vista. /View/site/say.php
	3. Model donde se crea un modelo que puede ser direccionado con una base de datos

	#ACCION
	public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

	# VISTA
	<?php
	use yii\helpers\Html;
	?>
	<?= Html::encode($message) ?>

### Model
EntryForm => creo modelo dos campo al cual se le creo roles de validaciones para que el la vista se renderizado con su repesctiva validacion.
este framework existe widget para su qu redenriza campos de entra en la vista.

		class EntryForm extends Model{
			public $name;
			public $email;

			// validaciones    
			public function rules(){
				return [
					[['name','email'], 'required'],
					// sintaxis que valida el email
					['email','email'],
				];
			}
		}

		<?php
		use yii\helpers\Html;
		use yii\widgets\ActiveForm;
		?>
		<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($model, 'name') ?>

			<?= $form->field($model, 'email') ?>

			<div class="form-group">
				<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
			</div>

		<?php ActiveForm::end(); ?>

### Base datos
SQLite, MySQL, PostgreSQL, MSSQL or Oracle database
PDO:
https://www.php.net/manual/en/book.pdo.php
configuracion: 
/config/db.php

		return [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;port:3306;dbname=yii2basic',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		];

model codigo vacio pero se puede personalizar querys
el model esta vacio porque lee las caracteristica que contiene esa tabla en la base de datos y hace y no es necesario agregra cosido. si se puede sobreescribir metodos de consulta a esa tabla en este caso country


### GII
generador de codigo GII: Active Record Class, CRUD operacion de DB table,
http://localhost:8888/index.php?r=gii => esta url salen los distinta generacion de codigo

	Opciones:
		Model Generator
		CRUD Generator
		Controller generator
		Form Generator
		Module Generator
		Extension Generator

### Actulizar Bootstrap4
composer update : se actualiza 

cambio del nav bar en el main.php
 <?php NavBar::begin(['class' => 'navbar-default navbar-static-side'])?>

	cambios
	/assests/AppAsset.php
		public $depends = [
			'yii\web\YiiAsset',
			'yii\bootstrap4\BootstrapAsset',
		];
	main.php
		use yii\bootstrap4\Nav;
		use yii\bootstrap4\NavBar;

### Model
define siguientes funciones:

		public function attributeLabels(){
			eturn [
					'id' => 'ID',
					'nombre' => 'Nombre',
					'apellido' => 'Apellido',
			]
		} => nombres de los label

	public function rules(){
		return [
				[['nombre', 'apellido', 'direccion', 'email', 'identificacion', 'fechanacio'], 'required'],
				[['nombre', 'apellido'], 'string', 'max' => 100]
		]
	} => defines los roles html como si s requeruido 
    

