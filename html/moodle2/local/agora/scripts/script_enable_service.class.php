<?php

require_once('agora_script_base.class.php');

class script_enable_service extends agora_script_base{

    public $title = 'Activa el servei Àgora';
    public $info = "Fa els passos necessàris per activar Moodle2 i deixar-lo a punt per començar";
    public $cron = false;
    protected $test = false;
    public $api = true;
    public $cli = true;


    public function params(){
        $params = array();
        $params['password'] = optional_param('password', false, PARAM_TEXT);
        $params['clientName'] = optional_param('clientName', false, PARAM_TEXT);
        $params['clientCode'] = optional_param('clientCode', false, PARAM_TEXT);
        $params['clientAddress'] = optional_param('clientAddress', false, PARAM_TEXT);
        $params['clientCity'] = optional_param('clientCity', false, PARAM_TEXT);
        $params['clientDNS'] = optional_param('clientDNS', false, PARAM_TEXT);
        $params['clientId'] = optional_param('clientId', false, PARAM_TEXT);
        return $params;
    }

    protected function _execute($params = array(), $execute = true) {
        global $CFG, $DB, $OUTPUT;

        if (empty($params['password'])) {
            mtrace('El password no pot ser buit', '<br/>');
            return false;
        }

        $adminuser = $DB->get_record('user', array('username' => 'admin'));
        if (!$adminuser) {
            mtrace('No s\'ha trobat l\'usuari admin', '<br/>');
            return false;
        }
        $adminuser->password = $params['password'];
        $adminuser->firstname = 'Administrador/a';
        $adminuser->lastname = $params['clientName'];
        $adminuser->email = $params['clientCode'].'@xtec.cat';
        $adminuser->institution = $params['clientName'];
        $adminuser->address = $params['clientAddress'];
        $adminuser->city = $params['clientCity'];
        $DB->update_record('user', $adminuser);
        // Force change of password of user admin
        set_user_preference('auth_forcepasswordchange', 1, $adminuser);
        mtrace('Usuari admin configurat', '<br/>');

        // Update site name and site description
        $maincourse = $DB->get_record('course', array('id' => SITEID));
        if (!$maincourse) {
            mtrace('No s\'ha trobat el curs principal', '<br/>');
            return false;
        }
        $maincourse->fullname = $params['clientName'];
        $maincourse->shortname = $params['clientDNS'];
        $maincourse->summary = 'Moodle del centre ' . $params['clientName'];
        $DB->update_record('course', $maincourse);
        mtrace('Curs principal configurat', '<br/>');

        // Update the cookie name
        set_config('sessioncookie', 'moodle'.$params['clientId']);
        mtrace('Cookie de sessió configurada', '<br/>');

        // Extra settings
        $value = 'wrap,formatselect,wrap,bold,italic,wrap,bullist,numlist,wrap,hr,wrap,link,unlink,wrap,anchor,wrap,image

undo,redo,wrap,underline,strikethrough,sub,sup,wrap,justifyleft,justifycenter,justifyright,wrap,outdent,indent,wrap,forecolor,backcolor,wrap,ltr,rtl,wrap,nonbreaking,charmap,table

fontselect,fontsizeselect,code,search,replace,wrap,cleanup,removeformat,pastetext,pasteword,wrap,fullscreen';

        set_config('customtoolbar', $value, 'editor_tinymce');
        mtrace('Canviat barra de l\'editor HMTL', '<br/>');

        filter_set_global_state('filter/tex', TEXTFILTER_ON);
        mtrace('Activat filtre TEX', '<br/>');

        set_config('loginhttps', 1);
        mtrace('Activat login https', '<br/>');

        set_config('maxbytes', 0, 'assignsubmission_file');
        mtrace('Límit de tramesa de tasques pujat al límit de servidor', '<br/>');

        purge_all_caches();
        return true;
    }

    function is_visible() {
        if (is_agora()) {
            return true;
        }
        return false;
    }
}