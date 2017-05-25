<?php

use yii\db\Migration;

/**
 * Handles the creation of table `answer`.
 */
class m170523_154712_create_answer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%student_answers}}', [
            'id' => $this->primaryKey(),
            'excercise_id' => $this->integer(),
            'student_id' => $this->integer(),
            'student_answer' => $this->char(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime()
        ]);
        
//         add foreign key for table `students`
        $this->addForeignKey(
            'fk-student_answers-student_id',
            'student_answers',
            'student_id',
            'students',
            'id',
            'CASCADE'
        );
        
        $this->addForeignKey(
            'fk-student_answers-excercise_id',
            'student_answers',
            'excercise_id',
            'excercise',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%student_answers}}');
    }
}
