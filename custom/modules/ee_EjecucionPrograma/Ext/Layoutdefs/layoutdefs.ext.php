<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-03-12 16:43:00
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['activities'] = array (
  'order' => 10,
  'sort_order' => 'desc',
  'sort_by' => 'date_start',
  'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE',
  'type' => 'collection',
  'subpanel_name' => 'activities',
  'module' => 'Activities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateTaskButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopScheduleMeetingButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopScheduleCallButton',
    ),
    3 => 
    array (
      'widget_class' => 'SubPanelTopComposeEmailButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForActivities',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_calls',
    ),
  ),
  'get_subpanel_data' => 'activities',
);
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['history'] = array (
  'order' => 20,
  'sort_order' => 'desc',
  'sort_by' => 'date_modified',
  'title_key' => 'LBL_HISTORY',
  'type' => 'collection',
  'subpanel_name' => 'history',
  'module' => 'History',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateNoteButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopArchiveEmailButton',
    ),
    2 => 
    array (
      'widget_class' => 'SubPanelTopSummaryButton',
    ),
  ),
  'collection_list' => 
  array (
    'meetings' => 
    array (
      'module' => 'Meetings',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_meetings',
    ),
    'tasks' => 
    array (
      'module' => 'Tasks',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_tasks',
    ),
    'calls' => 
    array (
      'module' => 'Calls',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_calls',
    ),
    'notes' => 
    array (
      'module' => 'Notes',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_notes',
    ),
    'emails' => 
    array (
      'module' => 'Emails',
      'subpanel_name' => 'ForHistory',
      'get_subpanel_data' => 'ee_ejecucionprograma_activities_emails',
    ),
  ),
  'get_subpanel_data' => 'history',
);


 // created: 2012-05-10 09:17:24
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-07-03 06:04:25
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_accionesmejora'] = array (
  'order' => 100,
  'module' => 'ee_AccionesMejora',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ACCIONESMEJORA_FROM_EE_ACCIONESMEJORA_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_accionesmejora',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-07-03 05:35:53
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_encuestainstructor'] = array (
  'order' => 100,
  'module' => 'ee_EncuestaInstructor',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAINSTRUCTOR_FROM_EE_ENCUESTAINSTRUCTOR_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_encuestainstructor',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-07-03 06:30:46
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_encuestaitc'] = array (
  'order' => 100,
  'module' => 'ee_EncuestaITC',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAITC_FROM_EE_ENCUESTAITC_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_encuestaitc',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-05-21 08:03:46
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_evaluacionglobal'] = array (
  'order' => 100,
  'module' => 'ee_EvaluacionGlobal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONGLOBAL_FROM_EE_EVALUACIONGLOBAL_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_evaluacionglobal',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-07-18 15:00:18
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_evaluacionsci'] = array (
  'order' => 100,
  'module' => 'ee_EvaluacionSCI',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONSCI_FROM_EE_EVALUACIONSCI_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_evaluacionsci',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-03-12 16:43:00
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_logistica'] = array (
  'order' => 100,
  'module' => 'ee_Logistica',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_LOGISTICA_FROM_EE_LOGISTICA_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_logistica',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-03-12 16:43:00
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_participantes'] = array (
  'order' => 100,
  'module' => 'ee_Participantes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_PARTICIPANTES_FROM_EE_PARTICIPANTES_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_participantes',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-03-12 16:43:00
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_notes',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-05-10 09:45:55
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_opportunities'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['ee_EjecucionPrograma']['subpanel_setup']['ee_ejecucionprograma_ee_accionesmejora']['override_subpanel_name'] = 'ee_EjecucionPrograma_subpanel_ee_ejecucionprograma_ee_accionesmejora';


//auto-generated file DO NOT EDIT
$layout_defs['ee_EjecucionPrograma']['subpanel_setup']['ee_ejecucionprograma_ee_encuestainstructor']['override_subpanel_name'] = 'ee_EjecucionPrograma_subpanel_ee_ejecucionprograma_ee_encuestainstructor';


//auto-generated file DO NOT EDIT
$layout_defs['ee_EjecucionPrograma']['subpanel_setup']['ee_ejecucionprograma_ee_encuestaitc']['override_subpanel_name'] = 'ee_EjecucionPrograma_subpanel_ee_ejecucionprograma_ee_encuestaitc';


//auto-generated file DO NOT EDIT
$layout_defs['ee_EjecucionPrograma']['subpanel_setup']['ee_ejecucionprograma_ee_evaluacionglobal']['override_subpanel_name'] = 'ee_EjecucionPrograma_subpanel_ee_ejecucionprograma_ee_evaluacionglobal';


//auto-generated file DO NOT EDIT
$layout_defs['ee_EjecucionPrograma']['subpanel_setup']['ee_ejecucionprograma_ee_evaluacionsci']['override_subpanel_name'] = 'ee_EjecucionPrograma_subpanel_ee_ejecucionprograma_ee_evaluacionsci';


//auto-generated file DO NOT EDIT
$layout_defs['ee_EjecucionPrograma']['subpanel_setup']['ee_ejecucionprograma_ee_participantes']['override_subpanel_name'] = 'ee_EjecucionPrograma_subpanel_ee_ejecucionprograma_ee_participantes';


//auto-generated file DO NOT EDIT
$layout_defs['ee_EjecucionPrograma']['subpanel_setup']['ee_ejecucionprograma_opportunities']['override_subpanel_name'] = 'ee_EjecucionPrograma_subpanel_ee_ejecucionprograma_opportunities';

?>