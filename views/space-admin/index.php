<?php

/* @var $this \humhub\modules\ui\view\components\View */
/* @var $reportedContent \humhub\modules\reportcontent\models\ReportContent[] */
/* @var $pagination \yii\data\Pagination */

?>
<div class="panel panel-default">
    <div class="panel-heading"><?= Yii::t('ReportcontentModule.base', 'Manage <strong>Reported Content</strong>') ?></div>
    <div class="panel-body">
        <p>
            <?= Yii::t('ReportcontentModule.base', 'Here you can manage reported content for this Space.') ?>
        </p>

        <?= $this->render('/reportContentAdminGrid', ['isAdmin' => 0, 'reportedContent' => $reportedContent, 'pagination' => $pagination]) ?>
    </div>
</div>