<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property string $nama_bank
 *
 * @property Penerimaanuangpendaftaran[] $penerimaanuangpendaftarans
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bank'], 'required'],
            [['nama_bank'], 'string', 'max' => 255],
            [['nama_bank'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_bank' => 'Nama Bank',
        ];
    }

    /**
     * Gets query for [[Penerimaanuangpendaftarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenerimaanuangpendaftarans()
    {
        return $this->hasMany(Penerimaanuangpendaftaran::class, ['pembayaran_ke' => 'nama_bank']);
    }
}
