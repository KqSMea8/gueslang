<?php

namespace app\controllers;

use Yii;
use app\models\Bill;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Connector;
use app\models\Flat;

/**
 * BillController implements the CRUD actions for Bill model.
 */
class BillController extends Controller
{
    public function behaviors()
    {
        return [
	        'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Bill models.
     * @return mixed
     */
    public function actionIndex()
    {

        $connections=Connector::find()->where(['tenant_id'=>Yii::$app->user->identity->id,'accept'=>'yes'])->all();
	    $flatsArray=array();

		foreach($connections as $connection){
			$flat=Flat::find()->where(['id' => $connection['flat_id'], 'delete'=>0])->one();
		    array_push($flatsArray , $flat['id']);
	    }


        $dataProvider = new ActiveDataProvider([
            'query' => Bill::find()->where(['flat_id'=>$flatsArray]),
            'pagination' => ['pageSize' => 5],
            'sort'=> ['defaultOrder' => ['status'=>SORT_ASC]]
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bill model.
     * @param integer $id
     * @return mixed
     */
/*
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
*/

    /**
     * Creates a new Bill model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
	public function actionCreate()
    {
        $model = new Bill;

        $model->created_at=date("Y-m-d H:i:s");
        $model->operation=2;

        if($model->load(Yii::$app->request->post()) && empty($model->payment_deadline))
        		$model->payment_deadline=date("Y-m-d");


        if (Yii::$app->request->post() && $model->save()) {

            $model->refresh();
            return $this->redirect(['index']);
        }

        $flats=Connector::find()->where(['tenant_id' => Yii::$app->user->identity->id , 'accept'=>'yes'])->all();

		$model->flats_array=array();

		foreach($flats as $flatId){
			$flat=Flat::find()->where(['id'=>$flatId['flat_id']])->one();
	    	$model->flats_array[$flat['id']]= $flat['city'].', '.$flat['address'];
		}


        return $this->renderAjax('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing Bill model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->id]);
        } else {

	        $flatsModel=Flat::find()->where(['landlord_id' => Yii::$app->user->identity->id , 'delete'=>0])->all();
			$model->flats_array=array();

			foreach($flatsModel as $flat){
		    	$model->flats_array[$flat['id']]= $flat['city'].', '.$flat['address'];
			}

            return $this->render('update', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Deletes an existing Bill model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bill model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bill the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bill::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
