<?php

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\Controller;
use app\models\TestForm;
use app\models\Timetable;
use app\models\Train;
use app\models\Reserved;
use app\models\Description;
use app\models\TrainType;
use app\models\Message;
use app\models\LoginForm;
use app\models\Stations;
use yii\data\Pagination;
use app\models\User;

class TestController extends Controller
{

    //public $layout = 'base';  

    public function actionGlav()
    {
        $model = new TestForm();


        return $this->render('glav', ['model' => $model, 'users' => $users, 'pages' => $pagination]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome(); // Redirect back to the home page
    }


    public function actionTrain()
    {
        $query = Train::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('train', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }


    public function actionIssus2()
    {
        $model = new Train();
        if ($_POST['Train']) {
            $model->attributes = $_POST['Train'];
            if ($model->validate() && $model->save()) {
                return $this->redirect(['train']); // Redirect back to the page
            }
        }
        return $this->render('issus2', compact('model'));
    }


    public function actionIssus2red($id)
    {
        $model = Train::findOne($id);
        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {
                $model->save();

            }
            return $this->redirect(['train']); // Redirect back to the page
        }
        return $this->render('issus2red', compact('model'));
    }

    public function actionDelete2($id)
    {
        if (\app\models\User::findOne(Yii::$app->user->id)->password != '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2') { // If there is a user with a certain password
            return $this->redirect(['login']); // Redirect back to the page
        }
        Train::findOne($id)->delete();
        return $this->redirect(['train']); // Redirect back to the page
    }


    public function actionStation()
    {
        return $this->render('station', [
            'model' => \app\models\Stations::find()->all()
        ]);
    }


    public function actionIssus3()
    {
        if (\app\models\User::findOne(Yii::$app->user->id)->password != '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2') { // If there is a user with a certain password
            return $this->redirect(['login']); // Redirect back to the page
        }
        $model = new Stations();
        if ($_POST['Stations']) {
            $model->attributes = $_POST['Stay'];
            if ($model->validate() && $model->save()) {
                return $this->redirect(['station']); // Redirect back to the page
            }
        }

        return $this->render('issus3', compact('model'));
    }


    public function actionIssus3red($id)
    {
        $model = Stations::findOne($id);
        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) { // If model is validated
                $model->save();

            }
            return $this->redirect(['station']); // Redirect back to the page
        }
        return $this->render('issus3red', compact('model'));
    }


    public function actionDelete3($id)
    {
        if (\app\models\User::findOne(Yii::$app->user->id)->password != '$2y$13$XcpWnuGdNTn6GoSx0FdnYeBRFwXg3HV2abWZdZOMFvLUklDFrnri2') { // If there is a user with a certain password
            return $this->redirect(['login']); // Redirect back to the page
        }
        Stations::findOne($id)->delete();
        return $this->redirect(['station']); // Redirect back to the page
    }


   
}

