<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $id_film
 * @property string $nama_film
 *
 * @property PemesananFilm[] $pemesananFilms
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_film'], 'required'],
            [['nama_film'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_film' => 'Id Film',
            'nama_film' => 'Nama Film',
        ];
    }

    /**
     * Gets query for [[PemesananFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesananFilms()
    {
        return $this->hasMany(PemesananFilm::class, ['id_film' => 'id_film']);
    }
}
