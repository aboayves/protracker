<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/



require_once 'modules/Calendar/Calendar.php';
require_once 'modules/iCals/iCal.php';
require_once 'modules/vCals/HTTP_WebDAV_Server_vCal.php';

    /**
     * Calendar access using WebDAV
     *
     * @access public
     */
    class HTTP_WebDAV_Server_iCal extends HTTP_WebDAV_Server_vCal
    {

        var $cal_encoding = "";
        var $cal_charset = "";
        var $http_spec = "";

        /**
        * Constructor for the WebDAV srver
        */
        public function __construct()
        {
           $this->vcal_focus = new iCal();
           $this->user_focus = new User();
        }

        /**
         * Serve a webdav request
         *
         * @access public
         * @param  string
         */
        public function ServeICalRequest($base = false)
        {
            if (empty($_REQUEST['type'])) {
              $_REQUEST['type'] = 'ics';
            }

            if (empty($_REQUEST['encoding'])) {
                $this->cal_encoding = 'utf-8';
            } else {
                $this->cal_encoding = $_REQUEST['encoding'];
            }

            if (empty($_REQUEST['cal_charset'])) {
                $this->cal_charset = 'utf-8';
            } else {
                $this->cal_charset = $_REQUEST['cal_charset'];
            }

            if (empty($_REQUEST['http_spec'])) {
                $this->http_spec = '1.1';
            } else {
                $this->http_spec = $_REQUEST['http_spec'];
            }

            // check the HTTP auth headers for a user
            if (empty($_REQUEST['user_name']) && !empty($_SERVER['PHP_AUTH_USER'])) {
              $_REQUEST['user_name'] = $_SERVER['PHP_AUTH_USER'];
              $_REQUEST['key'] = $_SERVER['PHP_AUTH_PW'];
            }

            // if username is still empty, then return 401
            if (empty($_REQUEST['user_name']) && empty($_REQUEST['email'])) {
                if ($_REQUEST['type'] == 'ics') {
                    $this->http_status("401 not authorized");
                    header('WWW-Authenticate: Basic realm="SugarCRM iCal"');
                    ob_end_clean();
                    echo 'Authorization required';
                } else {
                    $this->http_status("404 Not Found");
                    ob_end_clean();
                }
                return;
            }
            parent::ServeRequest();
        }


        /**
        * GET method handler
        *
        * @param void
        * @returns void
        */
        public function http_GET()
        {
           if ($this->vcal_type == 'vfb') {
             $this->http_status("200 OK");
             ob_end_clean();
             echo $this->vcal_focus->get_vcal_freebusy($this->user_focus);
           } else if ($this->vcal_type == 'ics') {
             // DO HTTP AUTHORIZATION for iCal:
             if ( $this->user_focus->getPreference('calendar_publish_key') &&
                $this->publish_key != $this->user_focus->getPreference('calendar_publish_key' )) {
                    $this->http_status("401 not authorized");
                    header('WWW-Authenticate: Basic realm="SugarCRM iCal"');
                    echo 'Authorization required';
                    return;
             }

             $this->http_status("200 OK");
             header('Content-Type: text/calendar; charset="' . $this->cal_charset . '"');
             $result = mb_convert_encoding(html_entity_decode($this->vcal_focus->getVcalIcal($this->user_focus, $_REQUEST['num_months']), ENT_QUOTES, $this->cal_charset), $this->cal_encoding);
                ob_end_clean();
             echo $result;
           } else {
             $this->http_status("404 Not Found");
             ob_end_clean();
           }

        }

        /**
         * set HTTP return status and mirror it in a private header
         *
         * @param  string  status code and message
         * @return void
         */
        public function http_status($status)
        {
            // simplified success case
            if($status === true) {
                $status = "200 OK";
            }

            // remember status
            $this->_http_status = $status;

            // generate HTTP status response
            header("HTTP/$this->http_spec $status");
            header("X-WebDAV-Status: $status", true);
        }

    }

?>