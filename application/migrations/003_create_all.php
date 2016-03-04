<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_all extends CI_Migration {

        public function up()
        {
                //chapters
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'sid' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'null' => FALSE,
                                'foreign_key' => array(
                                    'table' => 'subjects',
                                    'field' => 'id'
                                )
                        ),
                        'index_no' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'null' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => FALSE
                        ),                                            
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('chapters');
                //chaptercontents
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'sid' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'null' => FALSE,
                                'foreign_key' => array(
                                    'table' => 'subjects',
                                    'field' => 'id'
                                )
                        ),
                        'cid' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'null' => FALSE,
                                'foreign_key' => array(
                                    'table' => 'chapters',
                                    'field' => 'id'
                                )
                        ),
                        'chapter_location' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                                'null' => FALSE
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('chapter_contents');                
        }

        public function down()
        {
                $this->dbforge->drop_table('chapters');
                $this->dbforge->drop_table('chapter_contents');
        }
}