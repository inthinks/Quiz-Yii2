<?php

use yii\db\Migration;

/**
 * Handles the creation of table `excercise`.
 */
class m170523_144600_create_excercise_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%excercise}}', [
            'id' => $this->primaryKey(),
            'question' => $this->text(),
            'answer_a' => $this->string(),
            'answer_b' => $this->string(),
            'answer_c' => $this->string(),
            'answer_d' => $this->string(),
            'correct_answer' => $this->char(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime()
        ]);
        $jawaban = ['C', 'B', 'A', 'C', 'C', 'C', 'C', 'B', 'A', 'C', 'C', 'C', 'C', 'B', 'A', 'C', 'C', 'C', 'C', 'B', 'A', 'D', 'A', 'B'];
        $no = 1;
        foreach($jawaban as $jawab){
            $soal = [
                'question' => 'Soal ' . $no,
                'answer_a' => 'Pilihan ' . $no . '.1',
                'answer_b' => 'Pilihan ' . $no . '.2',
                'answer_c' => 'Pilihan ' . $no . '.3',
                'answer_d' => 'Pilihan ' . $no . '.4',
                'correct_answer' => $jawab,
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('y-m-d H:i:s'),
            ];
            $this->insert('{{%excercise}}', 
                $soal 
            );
            $no++;
        }
        
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%excercise}}');
    }
}
