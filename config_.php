<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('DB_HOST');
$CFG->dbname    = getenv('MOODLE_MARIADB_DATABASE');
$CFG->dbuser    = getenv('MOODLE_MARIADB_USER');
$CFG->dbpass    = getenv('MOODLE_MARIADB_PASSWORD');
$CFG->prefix    = 'cocoon_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = getenv('MOODLE_URL');
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
