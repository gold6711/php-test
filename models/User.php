<?php

namespace app\models;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    public static function tableName(){
        return 'user';
    }

    public function rules()
    {
        return [
            [['surname', 'name'], 'required'],
            [['surname', 'name', 'middname'], 'string', 'max' => 45],
            [['age', 'birth_date'], 'safe'],
            [['image'],'file', 'skipOnEmpty'=>true,'extensions' => 'png,gif,jpg'],
            //[['image'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'       => 'ID',
            'surname'  => 'Фамилия',
            'name'     => 'Имя',
            'middname' => 'Отчество',
            'bithdate' => 'Дата рождения',
            'age'      => 'Возраст',
            'image'    => 'Фото',
        ];
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id){
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null){
        //return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username){
        return static::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey(){
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey){
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password){
        //return $this->password === $password;
        return \Yii::$app->security->validatePassword($password, $this->password);
    }

    public function generateAuthKey(){
        $this->auth_key = \Yii::$app->security->generateRandomString();
    }
}
