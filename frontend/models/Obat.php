<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property string $nama_obat
 * @property int $harga_jual
 *
 * @property Transaksiapotek[] $transaksiapoteks
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'harga_jual'], 'required'],
            [['harga_jual'], 'integer'],
            [['nama_obat'], 'string', 'max' => 255],
            [['nama_obat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_obat' => 'Nama Obat',
            'harga_jual' => 'Harga Jual',
        ];
    }

    /**
     * Gets query for [[Transaksiapoteks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiapoteks()
    {
        return $this->hasMany(Transaksiapotek::class, ['nama_obat' => 'nama_obat']);
    }
}
