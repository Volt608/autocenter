<?php

use app\models\Status;
use yii\bootstrap5\ActiveForm;
?>

<?php $form = ActiveForm::begin([
    'id' => 'singup_employees',
    'enableAjaxValidation' => true,
]) ?>

<div class="">

    <div class="h1 mb-4 d-flex justify-content-center">
        Внесение нового сотрудника
    </div>

    <div class="d-flex justify-content-center ">
        <div class="w-50 border border-2 rounded-2">
            <div class="py-3 px-4">
                <?= $form->field($model, 'second_name')->textInput() ?>
                <?= $form->field($model, 'name')->textInput() ?>
                <?= $form->field($model, 'last_name')->textInput() ?>
                <?= $form->field($model, 'email')->textInput() ?>
                <?= $form->field($model, 'phone')->textInput() ?>
                <?= $form->field($model, 'passhash')->passwordInput() ?>
                <?= $form->field($model, 'status_id')->dropDownList(\yii\helpers\ArrayHelper::map(Status::find()->all(), 'id', 'title'), ['prompt' => 'Выберите должность']) ?>

                <div class="form-group">
                    <div class="d-flex justify-content-end">
                        <?= \yii\helpers\Html::submitButton('Регистрация', ['class' => 'btn btn-success fw-bold mt-2']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php ActiveForm::end() ?>