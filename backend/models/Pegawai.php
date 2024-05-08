<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_lengkap
 * @property string $nik
 * @property string $alamat
 * @property string $no_hp
 * @property string $email
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'nik', 'alamat', 'no_hp', 'email'], 'required'],
            [['nama_lengkap', 'alamat', 'email'], 'string', 'max' => 255],
            [['nik', 'no_hp'], 'string', 'max' => 20],
            [['nik'], 'unique'],
            [['no_hp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_lengkap' => 'Nama Lengkap',
            'nik' => 'Nik',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'email' => 'Email',
        ];
    }
}
