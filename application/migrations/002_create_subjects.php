<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_subjects extends CI_Migration {

        public function up()
        {
                //subjects
            $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '70',
                                'null' => FALSE
                        ),
                        'is_active' => array(
                                'type' => 'INT',
                                'constraint' => 1,
                                'null' => TRUE
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('subjects');
        }

        public function down()
        {
 
                $this->dbforge->drop_table('subjects');
        }
}