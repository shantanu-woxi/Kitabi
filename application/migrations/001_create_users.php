<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE
                        ),
                        'last_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE
                        ),
                        'email_id' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => FALSE
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => FALSE
                        ),
                        'phone_number' => array(
                                'type' => 'INT',
                                'constraint' => '13',
                                'null' => TRUE
                        ),
                        'address' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'city' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE
                        ),
                        'role' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => FALSE
                        ),                    
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');
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
                $this->dbforge->drop_table('users');
                $this->dbforge->drop_table('subjects');
        }
}