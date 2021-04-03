<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property int $user_id
 * @property int $summa_vkalada
 * @property int $prosent
 * @property int|null $kolvo_tek_natch
 * @property int|null $summa_natch
 * @property int|null $status_deposit
 * @property string|null $data
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'summa_vkalada', 'prosent'], 'required'],
            [['user_id', 'summa_vkalada', 'prosent', 'kolvo_tek_natch', 'summa_natch', 'status_deposit'], 'integer'],
            [['data'], 'safe'],
        ];
    }

    public function done(){
        
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'summa_vkalada' => 'Cумма вклада',
            'prosent' => 'процент',
            'kolvo_tek_natch' => 'кол-во тек начисления',
            'summa_natch' => 'сумма начисления',
            'status_deposit' => 'Status депозита',
            'data' => 'Data',
        ];
    }
}
