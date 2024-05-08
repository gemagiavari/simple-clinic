<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "transaksiapotek".
 *
 * @property int $id_faktur
 * @property string $nama_pasien
 * @property string $nama_obat
 *
 * @property Obat $namaObat
 * @property Pasien $namaPasien
 */
class Transaksiapotek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksiapotek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nama_obat'], 'required'],
            [['nama_pasien', 'nama_obat'], 'string', 'max' => 255],
            [['nama_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['nama_pasien' => 'nama_pasien']],
            [['nama_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::class, 'targetAttribute' => ['nama_obat' => 'nama_obat']],
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
            'nama_obat' => 'Nama Obat',
        ];
    }

    //tes
    public function getObat()
    {
        return $this->hasOne(Obat::class, ['nama_obat' => 'nama_obat']);
    }

    /**
     * Gets query for [[NamaObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaObat()
    {
        return $this->hasOne(Obat::class, ['nama_obat' => 'nama_obat']);
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
}
