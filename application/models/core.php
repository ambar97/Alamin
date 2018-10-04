<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class core extends CI_Model {
function alert_time($pesan){
	return"
	<script>
!function($) {
    \"use strict\";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
        swal({   
            title: \"Warning !\",   
            text: \"$pesan.\",   
            type: \"warning\",
            timer: 2000,   
            showConfirmButton: false 
        });
    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    \"use strict\";
    $.SweetAlert.init()
}(window.jQuery); </script>";
}

function alert_succes($pesan){
return"
	<script>
!function($) {
    \"use strict\";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
        swal(\"Good Joob!\",\"$pesan\",\"success\")
    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    \"use strict\";
    $.SweetAlert.init()
}(window.jQuery); </script>";
}
}