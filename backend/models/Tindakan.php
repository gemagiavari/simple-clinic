<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property string $nama_tindakan
 * @property int $harga_jual
 *
 * @property Transaksipendaftaran[] $transaksipendaftarans
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'harga_jual'], 'required'],
            [['harga_jual'], 'integer'],
            [['nama_tindakan'], 'string', 'max' => 255],
            [['nama_tindakan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_tindakan' => 'Nama Tindakan',
            'harga_jual' => 'Harga Jual',
        ];
    }

    /**
     * Gets query for [[Transaksipendaftarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksipendaftarans()
    {
        return $this->hasMany(Transaksipendaftaran::class, ['nama_tindakan' => 'nama_tindakan']);
    }
}
