<?php

header('P3P: CP="NOI ADM DEV COM NAV OUR STP"');
header("Content-type: text/javascript");

$tpl = erLhcoreClassTemplate::getInstance('lhchat/getstatus.tpl.php');

if ( erLhcoreClassModelChatConfig::fetch('track_online_visitors')->current_value == 1 ) {
    // To track online users
    $visitor = erLhcoreClassModelChatOnlineUser::handleRequest(array('pages_count' => true));
    $tpl->set('visitor',$visitor);
}

$validUnits = array('pixels' => 'px','percents' => '%');

$tpl->set('click',$Params['user_parameters_unordered']['click']);
$tpl->set('position',$Params['user_parameters_unordered']['position']);
$tpl->set('leaveamessage',(string)$Params['user_parameters_unordered']['leaveamessage'] == 'true');
$tpl->set('hide_offline',$Params['user_parameters_unordered']['hide_offline']);
$tpl->set('check_operator_messages',$Params['user_parameters_unordered']['check_operator_messages']);
$tpl->set('top_pos',(!is_null($Params['user_parameters_unordered']['top']) && (int)$Params['user_parameters_unordered']['top'] >= 0) ? (int)$Params['user_parameters_unordered']['top'] : 350);
$tpl->set('units',key_exists((string)$Params['user_parameters_unordered']['units'], $validUnits) ? $validUnits[(string)$Params['user_parameters_unordered']['units']] : 'px');


$instance = (is_numeric($Params['user_parameters_unordered']['instance']) && $Params['user_parameters_unordered']['instance'] > 0) ? (int)$Params['user_parameters_unordered']['instance'] : false;
$tpl->set('instance',$instance);

$tpl->set('instance_url','');
if ($instance !== false) {
	$tpl->set('instance_url','/(instance)/'.$instance);
}

echo $tpl->fetch();
exit;