<?php

//Thumbnails
add_theme_support('post-thumbnails');
add_image_size('member-home', 285, 285, true);
add_image_size('small-project', 285, 200, true);
add_image_size('big-project',760,400,true);


define('WP_DEBUG', true);



//Envia email - ALTERAR O EMAIL PARA A DR

add_action('wp_enqueue_scripts', 'meu_tema_enqueue_scripts');
function meu_tema_enqueue_scripts() {
	wp_enqueue_script('scripts', get_template_directory_uri()."/js/form.js", array('jquery'));
	wp_localize_script('scripts', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_ajax_envia_email', 'funcao_envia_email');
add_action('wp_ajax_nopriv_envia_email', 'funcao_envia_email');
function funcao_envia_email() {

	// Modificar o email do remetente para outro email
	add_filter( 'wp_mail_from', 'ewp_wp_mail_from' );
	function ewp_wp_mail_from() {
	    return "contato@drprojetos.com.br";
	}
	 
	// Modificar o nome do remetente
	add_filter( 'wp_mail_from_name', 'ewp_ep_mail_from_name' );
	function ewp_ep_mail_from_name() {
	    return get_bloginfo('name'); // Poderia também usar get_bloginfo( 'name' );		 
	}

	//Pega os dados 
	parse_str($_REQUEST['dados'], $array_dados);

	if (!isset($array_dados['nome']) OR empty($array_dados['nome']) OR 
		!isset($array_dados['email']) OR empty($array_dados['email']) OR
		!isset($array_dados['telefone']) OR empty($array_dados['telefone']) OR
		!isset($array_dados['msg']) OR empty($array_dados['msg'])) {
		
		echo json_encode(array('class' => 'shake', 'mensagem' => 'Digite todos os campos', 'status' => false));

	} elseif(!is_email($array_dados['email'])) {

		echo json_encode(array('class' => 'shake', 'mensagem' => 'Digite o e-mail corretamente', 'status' => false));

	} else {

		//Fazer a mensagem com uma variavel $mensagem
		$mensagem = "Nome: ".$array_dados['nome']."\n"."Email: ".$array_dados['email']."\n"."Telefone: ".$array_dados['telefone']."";

		$to = array('vitor@drprojetos.com.br','contato@drprojetos.com.br','ritadias@drprojetos.com.br');

		if (wp_mail($to, get_bloginfo('name'), $mensagem)) {
			echo json_encode(array('class' => 'flipInY', 'mensagem' => 'Mensagem enviada!', 'status' => true));
		} else {
			echo json_encode(array('class' => 'shake', 'mensagem' => 'Não foi possível enviar a mensagem', 'status' => false));
		}

	}

	wp_die();

}

// Mover os scripts para o footer
function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );