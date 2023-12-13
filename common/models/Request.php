<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "requests".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $status
 * @property string|null $message
 * @property string|null $comment
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Request extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 'Active';
    const STATUS_RESOLVED = 'Resolved';
    const STATUS_ACTIVE_NAME = 'Активен';
    const STATUS_RESOLVED_NAME = 'Решен';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'message', 'comment'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255],
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Уникальный идентификатор',
            'name' => 'Имя пользователя',
            'email' => 'Email пользователя',
            'status' => 'Статус',
            'message' => 'Сообщение пользователя',
            'comment' => 'Ответ ответственного лица',
            'created_at' => 'Время создания заявки',
            'updated_at' => 'Время ответа на заявку',
        ];
    }

    public static function getStatuses()
    {
        return [
            self::STATUS_ACTIVE => self::STATUS_ACTIVE_NAME,
            self::STATUS_RESOLVED => self::STATUS_RESOLVED_NAME,
        ];
    }
}
