<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Connector */

$this->title = 'Dziękujemy';
$this->params['breadcrumbs'][] = ['label' => 'Lokatorzy', 'url' => ['/tenants']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="connector-view">

			<div class="row">
                     <div class="col-md-8">
                        <div class="awidget login-reg">
                           <div class="awidget-body">
                              <!-- Page title -->
                              <div class="page-title text-center">
                                 <h2>Dziękujemy za rejestrację!</h2>
                                 <hr />
                              </div>
                              <!-- Page title -->
                              <div class="text-center">
                                 <p>Od tej chwili możesz się zalogować używając danych podanych podczas rejestracji! Mamy nadzieję, że będzie Ci się dobrze korzystać z naszego systemu!</p>
                                 <br />
                                 <a href="/login" class="btn btn-success">Zaloguj się</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


</div>