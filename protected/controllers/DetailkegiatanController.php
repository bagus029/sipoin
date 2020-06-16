<?php

class DetailkegiatanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

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
				'actions'=>array('create','update','auto','editable','validasi'),
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
		$model2 = new Groupdetailkegiatan;
		$model3 = new Uploaddatadukung;
		$model4=new Mahasiswa('search');

		$viewgroup = new CActiveDataProvider('Groupdetailkegiatan',array(
			'criteria'=>array(
				'condition'=>'iddetailkegiatan=:id',
				'params'=>array(':id'=>$id),
			),
		));

		$datadukung = new CActiveDataProvider('Uploaddatadukung',array(
			'criteria'=>array(
				'condition'=>'iddetailkeg=:id',
				'params'=>array(':id'=>$id),
			),
		));

		$validasi = new CActiveDataProvider('Validasi',array(
			'criteria'=>array(
				'condition'=>'iddetailkeg=:id',
				'params'=>array(':id'=>$id),
			),
		));

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'model2'=>$model2,
			'model3'=>$model3,
			'model4'=>$model4,
			'viewgroup'=>$viewgroup,
			'datadukung'=>$datadukung,
			'validasi'=>$validasi,
		));
	}


	public function actionEditable()
	{
		if(Yii::app()->request->isAjaxRequest)
		{
			Yii::import('booster.widgets.TbEditableSaver');
			$es=new TbEditableSaver('Uploadskripsi');
			$es->update();
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Detailkegiatan;
		$model->idkegiatan=$id;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Detailkegiatan']))
		{
			$model->attributes=$_POST['Detailkegiatan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->iddetailkeg));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


	public function actionAuto($id)
	{
		$model=new Detailkegiatan;
		$model2=new Groupdetailkegiatan;
		$model3=new Uploaddatadukung;
		$model4=new Validasi;
		$model->idkegiatan=$id;


		if($model->save()){
			$model2->iddetailkegiatan=$model->iddetailkeg;
			if($model2->save()){
					$model3->iddetailkeg=$model->iddetailkeg;
			}
			if($model3->save()){
				$model4->iddetailkeg=$model->iddetailkeg;
			};
		}
		$this->redirect(array('view','id'=>$model->iddetailkeg));
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

		if(isset($_POST['Detailkegiatan']))
		{
			$model->attributes=$_POST['Detailkegiatan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->iddetailkeg));
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
		$dataProvider=new CActiveDataProvider('Detailkegiatan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	 public function actionValidasi()
 	{

 		$nip='1';
 		$model=new Detailkegiatan('search');
 		$model->unsetAttributes();  // clear any default values

 		if(isset($_GET['Detailkegiatan']))
 			$model->attributes=$_GET['Detailkegiatan'];

 		$this->render('validasi',array(
 			'model'=>$model,
 		));
 	}


	public function actionAdmin()
	{

		$nip='1';
		$model=new Detailkegiatan('search');
		$model->unsetAttributes();  // clear any default values

		if(isset($_GET['Detailkegiatan']))
			$model->attributes=$_GET['Detailkegiatan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Detailkegiatan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Detailkegiatan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Detailkegiatan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='detailkegiatan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
