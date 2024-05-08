<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $alamat
 * @property string $no_hp
 * @property string $email
 *
 * @property Transaksipendaftaran[] $transaksipendaftarans
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'alamat', 'no_hp', 'email'], 'required'],
            [['nama_pasien', 'alamat', 'email'], 'string', 'max' => 255],
            [['no_hp'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Transaksipendaftarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksipendaftarans()
    {
        return $this->hasMany(Transaksipendaftaran::class, ['nama_pasien' => 'nama_pasien']);
    }
}
