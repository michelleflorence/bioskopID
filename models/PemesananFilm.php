<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemesanan_film".
 *
 * @property int $id_pemesanan
 * @property string $nama_pelanggan
 * @property int $id_film
 * @property int $id_jadwal
 * @property int $id_ruangan
 * @property int $id_tempat_duduk
 *
 * @property Film $film
 * @property Jadwal $jadwal
 * @property Ruangan $ruangan
 * @property TempatDuduk $tempatDuduk
 */
class PemesananFilm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan_film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pelanggan', 'id_film', 'id_jadwal', 'id_ruangan', 'id_tempat_duduk'], 'required'],
            [['nama_pelanggan'], 'string'],
            [['id_film', 'id_jadwal', 'id_ruangan', 'id_tempat_duduk'], 'integer'],
            [['id_film'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['id_film' => 'id_film']],
            [['id_jadwal'], 'exist', 'skipOnError' => true, 'targetClass' => Jadwal::className(), 'targetAttribute' => ['id_jadwal' => 'id_jadwal']],
            [['id_ruangan'], 'exist', 'skipOnError' => true, 'targetClass' => Ruangan::className(), 'targetAttribute' => ['id_ruangan' => 'id_ruangan']],
            [['id_tempat_duduk'], 'exist', 'skipOnError' => true, 'targetClass' => TempatDuduk::className(), 'targetAttribute' => ['id_tempat_duduk' => 'id_tempat_duduk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemesanan' => 'Id Pemesanan',
            'nama_pelanggan' => 'Nama Pelanggan',
            'id_film' => 'Detail Film',
            'id_jadwal' => 'Jadwal Film (Jam dan Tanggal)',
            'id_ruangan' => 'Nama Ruangan',
            'id_tempat_duduk' => 'Kode Tempat Duduk',
        ];
    }

    /**
     * Gets query for [[Film]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id_film' => 'id_film']);
    }

    /**
     * Gets query for [[Jadwal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwal()
    {
        return $this->hasOne(Jadwal::className(), ['id_jadwal' => 'id_jadwal']);
    }

    /**
     * Gets query for [[Ruangan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRuangan()
    {
        return $this->hasOne(Ruangan::className(), ['id_ruangan' => 'id_ruangan']);
    }

    /**
     * Gets query for [[TempatDuduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeat()
    {
        return $this->hasOne(TempatDuduk::className(), ['id_tempat_duduk' => 'id_tempat_duduk']);
    }
}
