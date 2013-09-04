<?php

class SomainController extends Controller
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
	public function getAcctNameOfUser($id)
    {
        $modSec = new CSecurity;
        $modSec->getAcctNameOfUserInModel(Yii::app()->user->id);
        #$this->set(compact('modSec'));
        return $modSec;
    }
    public function accessRules()
	{
        $model = new Somain;
        $userNow = $model->getUserOfSpecDocNo(Yii::app()->request->getParam('id'));
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','create','print','viewapp'),
				'users'=>array('@'),
			),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','view','delete'),
				'users'=>array($userNow),
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
		$model=$this->loadModel($id);
        $layout=NULL;
        ////////////////////////////////////////////////////////////////////////////////////
        #ob_end_clean();
        $html2pdf = Yii::app()->ePdf->HTML2PDF('P', 'A4', 'en');
        $html2pdf->WriteHTML($this->renderPartial('view',array(
			'model'=>$model),true
		));
        
        $html2pdf->Output();
	}

    public function actionViewApp($id)
	{
		$model=$this->loadModel($id);
        $layout=NULL;
        #require_once('../../vendors/html2pdf/html2pdf.class.php');
        #$html2pdf = new Yii::app()->ePdf->HTML2PDF('L', 'A4', 'en');
        $html2pdf = Yii::app()->ePdf->HTML2PDF('L', 'Letter', 'en');
        $html2pdf->WriteHTML($this->renderPartial('viewapp',array(
			'model'=>$model),true
		));
        
        $html2pdf->Output();
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model =new Somain;
		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
      
		if(isset($_POST['Somain']))
		{
            
			$model->attributes=$_POST['Somain'];
            $count = $model->countAllDocNoPattern($model->DocNo);
            $count1 = sprintf('%04d', $count); 
            $newDocNo = $model->DocNo .$count1;
            $model->setAttribute('DocNo',$newDocNo);
			if($model->save()){
			    $this->redirect(array('update','id'=>$model->DocNo));
			}
            else {
                var_dump( $model->errors );
            }
				
		}

        $this->layout = 'column2';
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
        $mod = new SoDetail;
		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($mod);
        $this->performAjaxValidation($model->Classification);
        if(isset($_POST['SoDetail']))
        {
            $mod->attributes=$_POST['SoDetail'];
            if($mod->save())
            {
                Yii::app()->user->setFlash('success', "SO Item saved.");
                $this->redirect(array('update','id'=>$model->DocNo)); 
            }
            else 
            {
                var_dump( $mod->errors );
            }
        }
        
        if(isset($_POST['Update']))
        {
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);
        
		    if(isset($_POST['Somain']))
		    {
			    $model->attributes=$_POST['Somain'];
			    if($model->save()){
			        Yii::app()->user->setFlash('success', "SO Has been saved.");
			    }
				#$this->redirect(array('view','id'=>$model->DocNo));
                else {
                    var_dump( $model->errors );
                }
		    }
            
       
         }
        
        ////Code for copy function
        if(isset($_POST['New']))
        {
            $modMain = new Somain;
            $modMain->attributes=$_POST['Somain'];
            $count = $modMain->countAllDocNoPattern($_POST['Somain']['DocNo']);    
            $count1 = sprintf('%04d', $count); 
            
            $newDocNo = $_POST['Somain']['DocNo'] .$count1;   

            $SoD = new SoDetail;
            $dataSoD = $SoD->getDetails($model->DocNo);    
            
            
              

            if(isset($_POST['Somain']))
		    {
                $modMainContain = new Somain;
                $modMainContainer = $modMainContain->getDetails($model->DocNo);  
                
                foreach($modMainContainer as $key=>$values):{
                    $modelSomain = new Somain;
                    $modelSomain->setAttributes(
                                array('DocNo'=>$newDocNo,
                                'DatePlaced'=>date('Y-m-d H:i:s'),
                                'Customer'=>$values['Customer'],
                                'UserID'=>Yii::app()->user->id,
                                'AcctOf1'=>$values['AcctOf1'],
                                'Classification'=>$modMain->Classification,
                                'TelNo'=>$values['TelNo'],
                                'ContactPerson'=>$values['ContactPerson'],
                                'Address'=>$values['Address'],
                                'Instruction'=>$values['Instruction'],
                                'ForApproval'=>0,
                                'AcctOf2'=>$values['AcctOf2'],
                                'DeliverDte'=>$values['DeliverDte'],
                                'DRPeriod'=>$values['DRPeriod'],
                                'PayMode'=>$values['PayMode'],
                                'Terms'=>$values['Terms'],
                                'Faxed'=>$values['Faxed'],
                                'DeliverTo'=>$values['DeliverTo'],
                                ));
                
                    if($modelSomain->save()){

                        foreach ($dataSoD as $s => $value):
                        {
              
                            $SoSave = new SoDetail;
                            $SoSave->setAttributes(
                                array('DetailNo'=>NULL,
                                    'DocNo'=>$newDocNo,
                                    'ItemDesc'=>$value['ItemDesc'],
                                    'Qty'=>NULL,
                                    'UnitMeas'=>NULL,
                                    'War_Parts'=>$value['War_Parts'],
                                    'War_Labor'=>$value['War_Labor'],
                                    'War_Onsite'=>$value['War_Onsite'],
                                    'bold'=>$value['bold'],
                                    'FullComm'=>$value['FullComm'],
                                    'CurSign'=>$value['CurSign'],
                                    'UnitPrice'=>$value['UnitPrice'],
                                    )
                                );
                            if ($SoSave->save())
                            {}
                            else
                            {
                                var_dump( $SoSave->errors );
                            }
                        }
                        endforeach;


                        Yii::app()->user->setFlash('success', "New transaction created: $newDocNo. Only desciption column is copied.");
			            $this->redirect(array('update','id'=>$modelSomain->DocNo));
                    }
                    else {
                         Yii::app()->user->setFlash('error', "Failed to copy. Please select SO type.");
                    }
              
                }
                endforeach;
            
		    }

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
        Yii::app()->user->setFlash('success', "Item has been deleted.");
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
        {   
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Somain');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Somain('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Somain']))
			$model->attributes=$_GET['Somain'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Somain the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Somain::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
    public function getSoDetail($id)
    {
        $soMod = new SoDetail;
        $detail =  $soMod->getDetails($id);
        return $detail;
    }
   

	/**
	 * Performs the AJAX validation.
	 * @param Somain $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='somain-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
        elseif (isset($_POST['ajax']) && $_POST['ajax']==='so-detail-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
