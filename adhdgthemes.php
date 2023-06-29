<?php
/**
*Plugin Name: ADventure
*Description: This will be our new template them grabbing plugin
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}else{



function my_template_arrays()
{
  $temps = [];

	$temps['adhdadventurehome.php'] = "ADHD HOMEPAGE";
	$temps['adhdmenus.php'] = "ADHD MENUS";
	$temps['adhdsignuppage.php'] = "SIGNUP PAGE";
	$temps['adhdlogins.php'] = "LOGIN PAGE";
	$temps['adhdhstart.php'] = "STARTING PAGE";
	$temps['adprocessdimension.php'] = "PROCESS DIMENSIONS";
	$temps['adinputdimen.php'] = "INPUT DIMENSIONS";
	$temps['perception_dimension.php'] ="PERCEPTION DIMENSION";
	$temps['understndng_dimension.php'] = "UNDERSTANDING DIMENSION";
	$temps['dashboard.php']= "DASHBOARD FOR TEACHERS";
	$temps['active_processing_dimen.php'] ="ACTIVE PROCESSING DIMEN";
	$temps['new_active_create.php']= "NEW ACTIVE CREATE";
  $temps['reflective_processing_dimen.php']= "REFLECTIVE PROCESS DIMEN";
	$temps['input_visual.php']= "INPUT VISUALS";
	$temps['input_verbal.php']= "INPUT VERBALS";
	$temps['perception_sensitive.php']= "PERCEPTION SENSITVE";
	$temps['perception_intuitive.php']= "PERCEPTION Intuitive";
	$temps['understandng_squential.php']= "UNDERSTANDING SEQUENTIAL";
	$temps['understandng_global.php']= "UNDERSTANDING GLOBAL";
	$temps['new_reflective_add.php'] ="NEW REFLECTIVE ADD";
	$temps['new_visual_input.php'] ="NEW VISUAL INPUT";
  $temps['new_verbal_input.php'] ="NEW VERBAL INPUT";
  $temps['new_perception_sensitive.php'] ="NEW PERCEPTION SENSITIVE";
  $temps['new_perception_intuitive.php'] ="NEW PERCEPTION INTUITIVE";
  $temps['new_understanding_sequential.php'] ="NEW UNDERSTAND SEQUENTIAL";
  $temps['new_understanding_global.php'] ="NEW UNDERSTAND GLOBAL";
	$temps['exit.php'] ="EXIT ONLY";
	$temps['guides.php'] ="GUIDE ONLY";
	$temps['choose_avatarp.php'] = "CHOOSE AVATAR";
	$temps['adhd_all_functions.php'] ="ALL FUNCTIONS ADHD";
	$temps['phase_1_mainpage_learning_style.php'] = "PHASE 1 MAIN PAGE";
	$temps['phase1_pdf_page.php'] = "PHASE 1 PDF PAGE";
	$temps['phase1_pptx_page.php'] = "PHASE 1 PPTX PAGE";
	$temps['phase1_youtubevid_page.php'] ="PHASE 1 YOUTUBE VIDS";
	$temps['instructional_proguides.php'] = "INSTUCTIONAL GUIDES";
	$temps['phase1_practice_question.php'] = "PRACTICE QUESTION PHASE 1";
	$temps['phase1_post_test.php'] = "POST TEST PHASE 1";
	$temps['phase1_posttest_review_answer.php'] ="POST TEST REVIEW ANSWER";
	$temps['phase1_postreview_correctanswer.php'] = "POST TEST CORRECT ANSWER";

	$temps['settings.php'] = "ADHD SETTINGS";
	$temps['leadershipboards.php'] ="ADHD LEADERSHIPBOARDS";
	$temps['development_page.php'] = "ADHD DEVELOPMENT";
  $temps['phase1_examplepage.php'] = "PHASE 1 EXAMPLE PAGE";
	$temps['phase1_experimentpage.php'] = "PHASE 1 EXPERIMENT PAGE";
	$temps['phase1_diagrampage.php'] = "PHASE 1 DIAGRAM PAGE";
	$temps['phase1_conceptmappage.php'] = "PHASE1 CONCEPT MAP";
	$temps['phase1_introduction_video.php'] ="PHASE 1 INTRO VIDEO";


	$temps['phase2_instuctional_guidevideo.php'] = "PHASE 2 INSTRUC VID GUIDE";
	$temps['phase2_developmentpage.php'] = "PHASE 2 DEVELOPMENT PAGE";
	$temps['phase2_diagrampage.php'] = "PHASE 2 DIAGRAM";
	$temps['phase2_conceptmappage.php'] = "PHASE 2 CONCEPTMAP PAGE";
	$temps['phase2_examplepage.php'] = "PHASE 2 EXAMPLE PAGSE";
	$temps['phase2_experimentpage.php'] = "PHASE 2 EXPERIMENT PAGE";
	$temps['phase2_learning_style_mainpage.php'] = "PHASE 2 LEARNING STYLE MAIN PAGE";
	$temps['phase2_pdfviewpage.php'] = "PHASE 2 PDF VIEW PAGE";
	$temps['phase2_pptx_viewpage.php'] = "PHASE 2 PPTX VIEW";
	$temps['phase2_videoplays.php'] = "PHASE 2 VIDEO PLAYS";
	$temps['phase2_practice_question.php'] = "PHASE 2 PRACTICE QUESTION";
	$temps['phase2_post_testpage.php'] = "PHASE 2 POSTED TEST PAGE";
	$temps['phase2_postreview_correctanswer.php'] = "PHASE 2 POST TEST CORRECT ANSWER";
	$temps['phase2_congratualitions_page.php'] = "PHASE 2 CONGRATS PAGE";
	$temps['phase2_introduction_video.php'] ="PHASE 2 INTRO VIDEO";


	$temps['phase3_instuctional_guidevideo.php'] = "PHASE 3 INSTRUC VID GUIDE";
	$temps['phase3_developmentpage.php'] = "PHASE 3 DEVELOPMENT PAGE";
	$temps['phase3_diagrampage.php'] = "PHASE 3 DIAGRAM";
	$temps['phase3_conceptmappage.phpp'] = "PHASE 3 CONCEPTMAP PAGE";
	$temps['phase3_examplepage.php'] = "PHASE 3 EXAMPLE PAGSE";
	$temps['phase3_experimentpage.php'] = "PHASE 3 EXPERIMENT PAGE";
	$temps['phase3_learning_style_mainpage.php'] = "PHASE 3 LEARNING STYLE MAIN PAGE";
	$temps['phase3_pdfviewpage.php'] = "PHASE 3 PDF VIEW PAGE";
	$temps['phase3_pptx_viewpage.php'] = "PHASE 3 PPTX VIEW";
	$temps['phase3_videoplays.php'] = "PHASE 3 VIDEO PLAYS";
	$temps['phase3_practice_question.php'] = "PHASE 3 PRACTICE QUESTION";
	$temps['phase3_post_testpage.php'] = "PHASE 3 POSTED TEST PAGE";
	$temps['phase3_postreview_correctanswer.php'] = "PHASE 3 POST TEST CORRECT ANSWER";
	$temps['phase3_congratualitions_page.php'] = "PHASE 3 CONGRATS PAGE";
	$temps['phase3_introduction_video.php'] ="PHASE 3 INTRO VIDEO";

	$temps['phase4_instuctional_guidevideo.php'] = "PHASE 4 INSTRUC VID GUIDE";
	$temps['phase4_developmentpage.php'] = "PHASE 4 DEVELOPMENT PAGE";
	$temps['phase4_diagrampage.php'] = "PHASE 4 DIAGRAM";
	$temps['phase4_conceptmappage.phpp'] = "PHASE 4 CONCEPTMAP PAGE";
	$temps['phase4_examplepage.php'] = "PHASE 4 EXAMPLE PAGSE";
	$temps['phase4_experimentpage.php'] = "PHASE 4 EXPERIMENT PAGE";
	$temps['phase4_learning_style_mainpage.php'] = "PHASE 4 LEARNING STYLE MAIN PAGE";
	$temps['phase4_pdfviewpage.php'] = "PHASE 4 PDF VIEW PAGE";
	$temps['phase4_pptx_viewpage.php'] = "PHASE 4 PPTX VIEW";
	$temps['phase4_videoplays.php'] = "PHASE 4 VIDEO PLAYS";
	$temps['phase4_practice_question.php'] = "PHASE 4 PRACTICE QUESTION";
	$temps['phase4_post_testpage.php'] = "PHASE 4 POSTED TEST PAGE";
	$temps['phase4_postreview_correctanswer.php'] = "PHASE 4 POST TEST CORRECT ANSWER";
	$temps['phase4_congratualitions_page.php'] = "PHASE 4 CONGRATS PAGE";
	$temps['phase1_materials_tobe_display.php'] = "PHASE 1 MATERIALS TO BE DISPALY";
	$temps['all_phase_dimension_adding_data.php'] = "ALL PHASE ADDING ALL DATA";
	$temps['phase4_introduction_video.php'] ="PHASE 4 INTRO VIDEO";

	$temps['phase5_instuctional_guidevideo.php'] = "PHASE 5 INSTRUC VID GUIDE";
	$temps['phase5_developmentpage.php'] = "PHASE 5 DEVELOPMENT PAGE";
	$temps['phase5_diagrampage.php'] = "PHASE 5 DIAGRAM";
	$temps['phase5_conceptmappage.php'] = "PHASE 5 CONCEPTMAP PAGE";
	$temps['phase5_examplepage.php'] = "PHASE 5 EXAMPLE PAGSE";
	$temps['phase5_experimentpage.php'] = "PHASE 3 EXPERIMENT PAGE";
	$temps['phase5_learning_style_mainpage.php'] = "PHASE 5 LEARNING STYLE MAIN PAGE";
	$temps['phase5_pdfviewpage.php'] = "PHASE 5 PDF VIEW PAGE";
	$temps['phase5_pptx_viewpage.php'] = "PHASE 5 PPTX VIEW";
	$temps['phase5_videoplays.php'] = "PHASE 5 VIDEO PLAYS";
	$temps['phase5_practice_question.php'] = "PHASE 5 PRACTICE QUESTION";
	$temps['phase5_post_testpage.php'] = "PHASE 5 POSTED TEST PAGE";
	$temps['phase5_postreview_correctanswer.php'] = "PHASE 5 POST TEST CORRECT ANSWER";
	$temps['phase5_congratualitions_page.php'] = "PHASE 5 CONGRATS PAGE";
	$temps['phase5_introduction_video.php'] ="PHASE 5 INTRO VIDEO";


$temps['phase1_refresherpage.php'] = "PHASE 1 REFRESHER PAGE";
$temps['phase2_refresherpage.php'] = "PHASE 2 REFRESHER PAGE";
$temps['phase3_refresherpage.php'] = "PHASE 3 REFRESHER PAGE";
$temps['phase4_refresherpage.php'] = "PHASE 4 REFRESHER PAGE";
$temps['phase5_refresherpage.php'] = "PHASE 5 REFRESHER PAGE";


$temps['all_phase_adding_post_test.php'] = "ADDING POST TEST";
$temps['all_post_test_mainpage.php'] = "ALL POST TEST PAGE";

$temps['phase2_postreview_correctanswer.php'] = "PHASE 2 POST TEST REVIEW";
$temps['phase3_postreview_correctanswer.php'] = "PHASE 3 POST TEST REVIEW";
$temps['phase4_postreview_correctanswer.php'] = "PHASE 4 POST TEST REVIEW";
$temps['phase5_postreview_correctanswer.php'] = "PHASE 5 POST TEST REVIEW";





























	return $temps;
}


function my_template_registers($page_templates, $theme, $post)
{
  $templates = my_template_arrays();

  foreach ($templates as $tk=>$tv)
  {
      $page_templates[$tk] = $tv;
  }
  return $page_templates;
}

add_filter('theme_page_templates','my_template_registers',10,3);

function my_template_selects($template)
{
  global $post, $wp_query, $wpdb;

  $page_temp_slug = get_page_template_slug( $post->ID);

  $templates = my_template_arrays();

  if(isset($templates[$page_temp_slug]))
  {
    $template = plugin_dir_path(__FILE__).'templates/' .$page_temp_slug;



  }
  return $template;

  // echo '<pre>Preformatted:';print_r($page_temp_slug); echo'</pre>';
}





add_filter('template_include','my_template_selects', 99);




} //closing tag for abspath
