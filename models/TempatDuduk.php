<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tempat_duduk".
 *
 * @property int $id_tempat_duduk
 * @property string $kode
 *
 * @property PemesananFilm[] $pemesananFilms
 */
class TempatDuduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tempat_duduk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tempat_duduk' => 'Id Tempat Duduk',
            'kode' => 'Kode Ruangan',
        ];
    }

    /**
     * Gets query for [[PemesananFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesananFilms()
    {
        return $this->hasMany(PemesananFilm::className(), ['id_tempat_duduk' => 'id_tempat_duduk']);
    }
}
