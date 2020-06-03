<?php

class UploaddatadukungController extends Controller
{
	/**
	* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	* using two-column layout. See 'protected/views/layouts/column2.php'.
	*/
	public $layout='//layouts/column2';

	/**
	* @return array action filters
	*/
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	* Specifies the access control rules.
	* This method is used by the 'accessControl' filter.
	* @return array access control rules
	*/
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
			'actions'=>array('index','view'),
			'users'=>array('*'),
		),
		array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions'=>array('create','update','tambah'),
		'users'=>array('@'),
	),
	array('allow', // allow admin user to perform 'admin' and 'delete' actions
	'actions'=>array('admin','delete'),
	'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
	$this->render('view',array(
		'model'=>$this->loadModel($id),
	));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionTambah()
{
	$jiakakak = new Uploaddatadukung;
	$iddetailkegiatan=Yii::app()->request->getParam('iddetailkeg');
	//$nim=Yii::app()->request->getParam('nim');
	//$poin=Yii::app()->request->getParam('poin');

	if (isset($_POST['iddetailkeg'])) {

		$jiakakak->iddetailkeg = $iddetailkegiatan;
		$jiakakak->namadatadukung = $_POST['namadatadukung'];
		$jiakakak->filedatadukung = CUploadedFile::getInstanceByName('filedatadukung');


		//$jiakakak->save();
		if ($jiakakak->save()) {
			if (!is_dir(Yii::app()->basePath . '/../dokumen/datadukung/' . $iddetailkegiatan)) {
				mkdir(Yii::app()->basePath . '/../dokumen/datadukung/' . $iddetailkegiatan);
			}

			if (strlen($jiakakak->filedatadukung) > 0)
			$jiakakak->filedatadukung->saveAs(Yii::app()->basePath . '/../dokumen/datadukung/' . $iddetailkegiatan . '/' . $jiakakak->filedatadukung);
		}
			$this->redirect(array('detailkegiatan/view', 'id' => $iddetailkegiatan));
			$this->render('tambah');
	}
}


public function actionTambahs()
{
	$model = new Uploaddatadukung;
  $iddetailkegiatan=$model->iddetailkeg;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Uploaddatadukung'])) {

            $model->attributes = $_POST['Uploaddatadukung'];
            $model->filedatadukung = CUploadedFile::getInstance($model, 'filedatadukung');


            if ($model->save()) {
                if (!is_dir(Yii::app()->basePath . '/../dokumen/datadukung/' . $iddetailkegiatan)) {
                    mkdir(Yii::app()->basePath . '/../dokumen/datadukung/' . $iddetailkegiatan);
                }

                if (strlen($model->filedatadukung) > 0)
                    $model->filedatadukung->saveAs(Yii::app()->basePath . '/../dokumen/datadukung/' . $iddetailkegiatan . '/' . $model->filedatadukung);
		   // $model->uploadpersetujuan->saveAs(Yii::app()->basePath . '/../dokumen/skripsi/' . $model->nim . '/' . $model->uploadpersetujuan);
            }
            $this->redirect(array('detailkegiatan/view', 'id' => $iddetailkegiatan));
						$this->render('tambah');
        }


}

public function actionCreate()
{
	$model=new Uploaddatadukung;

	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);

	if(isset($_POST['Uploaddatadukung']))
	{
		$model->attributes=$_POST['Uploaddatadukung'];
		if($model->save())
		$this->redirect(array('view','id'=>$model->iddatadukung));
	}

	$this->render('create',array(
		'model'=>$model,
	));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
	$model=$this->loadModel($id);

	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);

	if(isset($_POST['Uploaddatadukung']))
	{
		$model->attributes=$_POST['Uploaddatadukung'];
		if($model->save())
		$this->redirect(array('view','id'=>$model->iddatadukung));
	}

	$this->render('update',array(
		'model'=>$model,
	));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
	$this->loadModel($id)->delete();

	// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
	if(!isset($_GET['ajax']))
	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}

/**
* Lists all models.
*/
public function actionIndex()
{
	$dataProvider=new CActiveDataProvider('Uploaddatadukung');
	$this->render('index',array(
		'dataProvider'=>$dataProvider,
	));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
	$model=new Uploaddatadukung('search');
	$model->unsetAttributes();  // clear any default values
	if(isset($_GET['Uploaddatadukung']))
	$model->attributes=$_GET['Uploaddatadukung'];

	$this->render('admin',array(
		'model'=>$model,
	));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer $id the ID of the model to be loaded
* @return Uploaddatadukung the loaded model
* @throws CHttpException
*/
public function loadModel($id)
{
	$model=Uploaddatadukung::model()->findByPk($id);
	if($model===null)
	throw new CHttpException(404,'The requested page does not exist.');
	return $model;
}

/**
* Performs the AJAX validation.
* @param Uploaddatadukung $model the model to be validated
*/
protected function performAjaxValidation($model)
{
	if(isset($_POST['ajax']) && $_POST['ajax']==='uploaddatadukung-form')
	{
		echo CActiveForm::validate($model);
		Yii::app()->end();
	}
}
}
