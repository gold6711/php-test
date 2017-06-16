<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170615_164914_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute('SET FOREIGN_KEY_CHECKS=0');

        $this->createTable('user', [
            'id'            => $this->primaryKey()->unsigned(),
            'surname'       => $this->string(45)->notNull()->comment('фамилия'),
            'name'          => $this->string(45)->notNull()->comment('имя'),
            'middname'      => $this->string(45)->notNull()->comment('отчство'),
            'birth_date'    => $this->date()->notNull()->comment('дата рождения'),
            'age'           => $this->integer()->unsigned()->comment('djphfcn'),
            'image_id'      => $this->integer()->unsigned()->comment('ссылка на фото'),
            'last_modified' => $this->timestamp()->comment('время последнего изменения'),
        ],
            ' ENGINE = InnoDB COMMENT = \'таблица пользователей\'');

        $this->createIndex('fk_user_image1_idx', 'user', 'image_id');
        $this->addForeignKey('fk_user_image1', 'user', 'image_id', 'photo', 'id', 'NO ACTION', 'NO ACTION');

        $this->execute('SET FOREIGN_KEY_CHECKS=1');
    }

    public function safeDown()
    {
        $this->execute('SET FOREIGN_KEY_CHECKS=0');
        $this->dropTable('user');
        $this->execute('SET FOREIGN_KEY_CHECKS=1');
    }
}
