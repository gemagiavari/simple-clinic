<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "penerimaanuangapotek".
 *
 * @property int $id_penerimaan
 * @property int $id_faktur
 * @property string $pembayaran_ke
 *
 * @property Transaksiapotek $faktur
 * @property Bank $pembayaranKe
 */
class Penerimaanuangapotek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penerimaanuangapotek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_faktur', 'pembayaran_ke'], 'required'],
            [['id_faktur'], 'integer'],
            [['pembayaran_ke'], 'string', 'max' => 255],
            [['id_faktur'], 'unique'],
            [['id_faktur'], 'exist', 'skipOnError' => true, 'targetClass' => Transaksiapotek::class, 'targetAttribute' => ['id_faktur' => 'id_faktur']],
            [['pembayaran_ke'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::class, 'targetAttribute' => ['pembayaran_ke' => 'nama_bank']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penerimaan' => 'Id Penerimaan',
            'id_faktur' => 'Id Faktur',
            'pembayaran_ke' => 'Pembayaran Ke',
        ];
    }

    //tes
    public function getTransaksiapotek()
    {
        return $this->hasOne(Transaksiapotek::class, ['id_faktur' => 'id_faktur']);
    }

    /**
     * Gets query for [[Faktur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaktur()
    {
        return $this->hasOne(Transaksiapotek::class, ['id_faktur' => 'id_faktur']);
    }

    /**
     * Gets query for [[PembayaranKe]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayaranKe()
    {
        return $this->hasOne(Bank::class, ['nama_bank' => 'pembayaran_ke']);
    }
}
