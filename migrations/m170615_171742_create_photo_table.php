<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo`.
 */
class m170615_171742_create_photo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute('SET FOREIGN_KEY_CHECKS=0');

        $this->createTable('photo', [
            'id'            => $this->primaryKey()->unsigned(),
            'user_id'       => $this->integer()->unsigned()->comment('ссылка на работника'),
            'photo_pass'    => $this->string()->comment('file hash'),
            'last_modified' => $this->timestamp()->comment('время последнего изменения'),
        ],
         ' ENGINE = InnoDB COMMENT = \'таблица фотографий\'');

        $this->createIndex('fk_image_user1_idx', 'photo', 'user_id');
        $this->addForeignKey('fk_image_user1', 'photo', 'user_id', 'user', 'id', 'NO ACTION', 'NO ACTION');

        $this->execute('SET FOREIGN_KEY_CHECKS=1');
    }

    public function safeDown()
    {
        $this->execute('SET FOREIGN_KEY_CHECKS=0');
        $this->dropTable('photo');
        $this->execute('SET FOREIGN_KEY_CHECKS=1');
    }
}
