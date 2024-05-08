<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "transaksipendaftaran".
 *
 * @property int $id_faktur
 * @property string $nama_pasien
 * @property string $nama_tindakan
 *
 * @property Pasien $namaPasien
 * @property Tindakan $namaTindakan
 */
class Transaksipendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksipendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nama_tindakan'], 'required'],
            [['nama_pasien', 'nama_tindakan'], 'string', 'max' => 255],
            [['nama_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['nama_pasien' => 'nama_pasien']],
            [['nama_tindakan'], 'exist', 'skipOnError' => true, 'targetClass' => Tindakan::class, 'targetAttribute' => ['nama_tindakan' => 'nama_tindakan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_faktur' => 'Id Faktur',
            'nama_pasien' => 'Nama Pasien',
            'nama_tindakan' => 'Nama Tindakan',
        ];
    }

    //tes
    public function getTindakan()
    {
        return $this->hasOne(Tindakan::class, ['nama_tindakan' => 'nama_tindakan']);
    }

    /**
     * Gets query for [[NamaPasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaPasien()
    {
        return $this->hasOne(Pasien::class, ['nama_pasien' => 'nama_pasien']);
    }

    /**
     * Gets query for [[NamaTindakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaTindakan()
    {
        return $this->hasOne(Tindakan::class, ['nama_tindakan' => 'nama_tindakan']);
    }
}
