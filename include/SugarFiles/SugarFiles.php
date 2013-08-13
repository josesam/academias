<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");
require_once('include/formbase.php');
require_once('include/upload_file.php');
require_once('modules/DocumentRevisions/DocumentRevision.php');

class SugarFiles extends SugarBean {
	var $table_name = ' detalle_archivo ';
	var $datos;
        var $campos1;
        var $allowed_types=array('pdf','doc','docx','xls','xlsx');
        var $max=2000;
	/**
	 * Sole constructor
	 */
	function __construct($id='',$module='') {
		parent::SugarBean();
		$this->smarty = new Sugar_Smarty();

         }

	function save($cotizacion, $module, $in_workflow=false) {
         global $timedate;
                $ids = array();

		$datos = $_POST;
                
		foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prodf_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prodf_', '', $key);
                        if(!empty($datos['idf_' . $id]))
                        $ids[]=$datos['idf_' . $id];
                        $data=array(
                            'id'=>  $datos['idp_' . $id],
                            'archivo'=>  $_FILES['filetxt_' . $id]['name'],
                            'realarchivo'=>  $_FILES['filetxt_' . $id],
                            'oportunidad_id'=>$cotizacion,
                            'nombre_campo'=>'filetxt_' . $id
                        );
                        self::AddUpdateFiles($data);

		}
                
		return $productos;

	}

        function validaFile($file,$id=""){
//            if((in_array($file['type'],$this->allowed_types))&& ($file['size']<$this->max)){
//                if($file['error']>0){
//                    return false;
//                }
//                if (file_exists("custom/files/" . $file["name"])){
//                      return false;
//                }else{
//                      move_uploaded_file($file["tmp_name"],"custom/files/" . $file["name"]);
//                      return true;
//                      }
////            }else{
////                return false;
////            }
            return true;
           
        }

        

	function AddUpdateFiles($data=array()){
            
          if(self::validaFile($data['realarchivo'])){
            if(!empty($data['archivo'])){
		 $guid = create_guid();


                 $documento=new Document();
                 $documento->document_name=$data['realarchivo']['name'];
                 if (empty($documento->doc_type)) {
			$documento->doc_type = 'Sugar';
		}
        if (empty($documento->id) || $documento->new_with_id)
		{
            if (empty($documento->id)) {
                $documento->id = create_guid();
                $documento->new_with_id = true;
            }


                $isDuplicate = false;
        $upload_file = new UploadFile($data['nombre_campo']);
        $do_final_move = 0;


        if (isset($data['realarchivo']) && $upload_file->confirm_upload()){
            $Revision->filename = $upload_file->get_stored_file_name();
            $Revision->file_mime_type = $upload_file->mime_type;
            $Revision->file_ext = $upload_file->file_ext;

            $documento->filename = $upload_file->get_stored_file_name();
            $documento->file_mime_type = $upload_file->mime_type;
            $documento->file_ext = $upload_file->file_ext;
            $do_final_move = 1;

        }

            $Revision = new DocumentRevision();
            //save revision.
            $Revision->in_workflow = true;
            $Revision->not_use_rel_in_req = true;
            $Revision->new_rel_id = $documento->id;
            $Revision->new_rel_relname = 'Documents';
            $Revision->change_log = translate('DEF_CREATE_LOG','Documents');
            $Revision->revision = $documento->revision;
            $Revision->document_id = $documento->id;
            $Revision->filename = $documento->filename;

            if(isset($documento->file_ext))
            {
            	$Revision->file_ext = $documento->file_ext;
            }

            if(isset($documento->file_mime_type))
            {
            	$Revision->file_mime_type = $documento->file_mime_type;
            }

            $Revision->doc_type = $documento->doc_type;
            if ( isset($documento->doc_id) ) {
                $Revision->doc_id = $documento->doc_id;
            }
            if ( isset($documento->doc_url) ) {
                $Revision->doc_url = $documento->doc_url;
            }

            $Revision->id = create_guid();
            $Revision->new_with_id = true;

            $createRevision = false;
            //Move file saved during populatefrompost to match the revision id rather than document id
            if (!empty($data['realarchivo'])) {
                rename("upload://{$documento->id}", "upload://{$Revision->id}");
                $createRevision = true;
            } else if ( $isDuplicate && ( empty($documento->doc_type) || $documento->doc_type == 'Sugar' ) ) {
                // Looks like we need to duplicate a file, this is tricky
                $oldDocument = new Document();
                $oldDocument->retrieve($_REQUEST['duplicateId']);
                $old_name = "upload://{$oldDocument->document_revision_id}";
                $new_name = "upload://{$Revision->id}";
                $GLOBALS['log']->debug("Attempting to copy from $old_name to $new_name");
                copy($old_name, $new_name);
                $createRevision = true;
            }
            // For external documents, we just need to make sure we have a doc_id
            if ( !empty($documento->doc_id) && $documento->doc_type != 'Sugar' ) {
                $createRevision = true;
            }
            if ( $createRevision ) {
                $Revision->save();
                //update document with latest revision id
                $documento->process_save_dates=false; //make sure that conversion does not happen again.
                $documento->document_revision_id = $Revision->id;
                if ($do_final_move) {
                	$upload_file->final_move($Revision->id);
                }

            }
            //set relationship field values if contract_id is passed (via subpanel create)
        }
        $documento->save();





		 $query="insert into ".$this->table_name."
                         (
                           id,
                           date_entered,
                           date_modified,
                           deleted,
                           archivo,
                           type,
                           size,
                           error,
                           oportunidad_id,
                           document_id
                         )
                          values(
                          null,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0',
                          '".$data['archivo']."',
                          '".$data['realarchivo']['type']."',
                          '".$data['realarchivo']['size']."',
                          '".$data['realarchivo']['error']."',
                          '".$data['oportunidad_id']."',
                          '".$documento->id."'
                          )";

        	   	 $this->db->query($query);
            }
          }
          return;

	}
        function delete($ids=array(),$actual=array()){
            if(is_array($actual)){
                $temp=$actual;
                foreach($actual as $key =>$value){

                    if(in_array($value['id'],$ids)){
                        unset($temp[$key]);
                    }
                }
                if(count($temp)){
                    foreach($temp as $key => $data){
                        $query="Update ".$this->table_name." set deleted=1 where id =".$data['id'];
                        $this->db->query($query);
                    }
                }

            }
        }
	/**
	 * Returns all email addresses by parent's GUID
	 * @param string $id Parent's GUID
	 * @param string $module Parent's module
	 * @return array
	 */
	function getFilesByGUID($id, $module,$contexto="") {
		$return = array();

                $q = "SELECT * FROM ".$this->table_name."
                        det inner join documents d
                        on det.document_id=d.id  where d.deleted=0 and det.oportunidad_id = '{$id}' 
                        and det.deleted=0 and det.document_id is not null
                        order by det.id ";
		//$this->archivo($q);
		$r = $this->db->query($q);
		while($a = $this->db->fetchByAssoc($r)) {
			$return[] = $a;
		}

		return $return;
	}


	/**
	 * Returns the HTML/JS for the EmailAddress widget
	 * @param string $parent_id ID of parent bean, generally $focus
	 * @param string $module $focus' module
	 * @param bool asMetadata Default false
	 * @return string HTML/JS for widget
	 */
	function getFilesWidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;
                $prefillDataArr = array();
		if(!empty($id))
			$prefillDataArr = $this->getFilesByGUID ($id, $module);


                $assign=array();
                foreach($prefillDataArr as $key => $ambientes) {
			$assign[] = array('key' => $key,
		           		  'archivo' =>$ambientes['archivo'],
			        	  'id'=>$ambientes['id'],
                                          'tipo'=>$ambientes['type'],
                                          'size'=>$ambientes['size'],
                                          'document_id'=>$ambientes['documento_id']


			);
		}
                $this->smarty->assign('ambientes', $assign);
                $this->smarty->assign('module', $module);
		$this->smarty->assign('app_strings', $app_strings);
		$this->smarty->assign('prefillAmbientes', $prefill);
		$this->smarty->assign('prefillData', $prefillData);
		$this->smarty->assign('emailView', $this->view);






		$template = empty($tpl) ? "include/SugarFiles/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getFilesWidgetDetailView($focus, $tpl='') {
				global $app_strings;
		global $current_user;
                if(empty($focus->id))return '';
                    $prefillData = $this->getFilesByGUID($focus->id, $focus->module_dir);

                foreach($prefillData as $key => $ambientes) {
			$assign[] = array('key' => $key,
		           		  'archivo' =>$ambientes['archivo'],
			        	  'id'=>$ambientes['id'],
                                          'tipo'=>$ambientes['type'],
                                          'size'=>$ambientes['size'],
                                          'document_id'=>$ambientes['document_id']


			);
		}
                $this->smarty->assign('ambientes', $assign);
                $this->smarty->assign('idOportunidad', $focus->id);

		$templateFile = empty($tpl) ? "include/SugarFiles/templates/DetailView.html" : $tpl;
		$return = $this->smarty->fetch($templateFile);
		return $return;
	}

    function setView($view) {
	   $this->view = $view;
	}


} // end class def
/**
 * Convenience function for MVC (Mystique)
 * @param object $focus SugarBean
 * @param string $field unused
 * @param string $value unused
 * @param string $view DetailView or EditView
 * @return string
 */
function getFilesWidget($focus, $field, $value, $view) {
	$sea = new SugarFiles();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getFilesWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}
	return $sea->getFilesWidgetDetailView($focus);
}

?>
