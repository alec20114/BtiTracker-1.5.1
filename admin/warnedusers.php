<?php
/*
* BtiTracker v1.5.1 is a php tracker system for BitTorrent, easy to setup and configure.
* This tracker is a frontend for DeHackEd's tracker, aka phpBTTracker (now heavely modified). 
* Updated and Maintained by Yupy.
* Copyright (C) 2004-2015 Btiteam.org
*/
require_once(INCL_PATH . 'functions.php');

dbconn();

if (!user::$current || user::$current["admin_access"] == "no" || user::$current["edit_users"] == "no") {
	block_begin(ERROR);
	err_msg("Error", "Get a freakin' life and stop trying to hack the tracker !");
	block_end();
	stdfoot(false);
} else {
    block_begin(WARNED_USERS);

    $count = MCached::get('warnings::count');
    if ($count === MCached::NO_RESULT) {
        $numwarns = $db->query("SELECT COUNT(*) FROM warnings WHERE active = 'yes'");
        $row = $numwarns->fetch_array(MYSQLI_BOTH);
        $count = (int)$row[0];
	MCached::add('warnings::count', $count, 300);
    }
	
    $perpage = (int)$GLOBALS["warnsppage"];
    list($pagertop, $limit) = misc::pager($perpage, $count,  "admin.php?user=" . user::$current["uid"] . "&code=" . user::$current["random"] . "&action=warnedusers&" . $addparams);

    $res = $db->query("SELECT * FROM warnings WHERE active = 'yes' ORDER BY warns DESC " . $limit);
    $num = $res->num_rows;

    print("<table border='0' width='100%' cellspacing='0' cellpadding='4'>");

    if ($count > $perpage)
        print("<tr><td class='lista' align='center' colspan='10'><br />" . $pagertop . "</td></tr>");

    //Checkbox Remove Start
    print("<script type=\"text/javascript\">
    <!--
    function SetAllCheckBoxes(FormName, FieldName, CheckValue)
    {
    if(!document.forms[FormName])
    return;
    var objCheckBoxes = document.forms[FormName].elements[FieldName];
    if(!objCheckBoxes)
    return;
    var countCheckBoxes = objCheckBoxes.length;
    if(!countCheckBoxes)
    objCheckBoxes.checked = CheckValue;
    else
    // set the check value for all check boxes
    for(var i = 0; i < countCheckBoxes; i++)
    objCheckBoxes[i].checked = CheckValue;
    }
    -->
    </script>");

    print("<form method='post' name='deleteall' action='warn.php?action=admincpremovewarn'>");
    //Checkbox Remove Stop

    print("<tr><td class='header' align='center'>" . WARNED_ID . "</td><td class='header' align='center'>" . WARNED_USERNAME . "</td><td class='header' align='center'>" . WARNED_TOTAL_WARNS . "</td><td class='header' align='center'>" . WARNED_DATE_ADDED . "</td><td class='header' align='center'>" . WARNED_EXPIRATION . "</td><td class='header' align='center'>" . WARNED_DURATION . "</td><td class='header' align='center'>" . WARNED_REASON . "</td><td class='header' align='center'>" . WARNED_BY . "</td><td class='header' align='center'>" . WARNED_ACTIVE . "</td><td class='header' align='center'><input type=\"checkbox\" name=\"all\" onclick=\"SetAllCheckBoxes('deleteall','remwarn[]',this.checked)\" /></td></tr>");

    if ($num == '0')
	    print("<tr><td class='lista' align='center' colspan='10'>" . WARNED_NO_U}

?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       PTC/html/images/flag/sm.png                                                                         000644  001750  001750  00000001410 12606172330 015725  0                                                                                                    ustar 00romi                            romi                            000000  000000                                                                                                                                                                         �PNG

   IHDR         o��   gAMA  ��7��   tEXtSoftware Adobe ImageReadyq�e<  �IDATx�bܷo�iii^&ff���F��2|�����۷ ����C��������Ȇ�@��6�g���P/'''@ "�  �����.��usp'X+���Q�SYp]�J�;�M|������	����ׯ�@�op�����n�:�1�qY@����n��߿�z����@,LL�l@o� ]���6����xʔ�Ʒ����1�2�aH��b�z�ϟ�`�������/H/#@ ���s0����13�a�Q��?�0l�?���"��Aa]R��>3��gz��_``3]����@,����!��t;�10�_������o�_�!O�Ld��=� tP-����>� �?9��4��0``sfغ����/�?���?�3|������g�
$`��_`��� @,�߀@�A�����������/����zp�ڪ�5�c�|�-�ן@=!1b��@���u	0�X���r�=��;�X����w]	I`���)�A�@�0i�� 4  ��@�?� f�o?�N���_��Є���C`��př�Z 090�e ���o����8`H33�����?����@60iB]L�Ai�7P0l�&�? B���ʯ    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 