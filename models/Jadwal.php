<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id_jadwal
 * @property string $tanggal_film
 * @property string $jam
 *
 * @property PemesananFilm[] $pemesananFilms
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_film', 'jam'], 'required'],
            [['tanggal_film'], 'string'],
            [['jam'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'tanggal_film' => 'Tanggal Film',
            'jam' => 'Jam',
        ];
    }

    /**
     * Gets query for [[PemesananFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesananFilms()
    {
        return $this->hasMany(PemesananFilm::class, ['id_jadwal' => 'id_jadwal']);
    }
}
