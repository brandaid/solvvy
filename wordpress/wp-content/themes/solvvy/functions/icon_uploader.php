<?php 

add_filter( 'acf/upload_prefilter/name=icon_files', 'icon_upload_prefilter' );
add_filter( 'acf/prepare_field/name=icon_files', 'icon_files_field_display' );

function icon_upload_prefilter( $errors ) {

  add_filter( 'upload_dir', 'icon_upload_directory' );

  return $errors;

}

function icon_upload_directory( $param ) {
        
  $folder = '/icon-picker';

  $param['path'] = $param['basedir'] . $folder;
  $param['url'] = $param['baseurl'] . $folder;
  $param['subdir'] = '/';

  return $param;

}

function icon_files_field_display( $field ) {

  // update paths accordingly before displaying link to file
  add_filter( 'upload_dir', 'icon_upload_directory' );

  return $field;


}

//hide images outside icon-picker folder
add_filter( 'posts_where', 'devplus_wpquery_where' );

function devplus_wpquery_where( $where ){
  global $current_user;

  if( isset( $_POST['action'] ) && ( $_POST['action'] == 'query-attachments' ) ){
      // here you can add some extra logic if you'd want to.
      $where .= " AND guid LIKE '%icon-picker%'";
  }

  return $where;
}


?>