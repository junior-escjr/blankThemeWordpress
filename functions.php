<?php
/*
 *  Author: Junior
 *  URL: https://github.com/juniorbdb/
 */

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

// MODO DE MANUTENÇÃO
include(TEMPLATEPATH . '/functions/active-maintenace-mode.php');

// ADICIONA TAGS NAS PÁGINAS
include(TEMPLATEPATH . '/functions/add-tag-pages.php');

// CONSTA E EXIBI ACESSOS DOS POSTS
include(TEMPLATEPATH . '/functions/contar-exibir-acessos.php');

// CONSTA E EXIBI ACESSOS DOS POSTS
include(TEMPLATEPATH . '/functions/customize-login-admin.php');

// CÓDIGO PARA USO DO AJAX
include(TEMPLATEPATH . '/functions/function-ajax.php');

// CÓDIDO DO ANALYTICS
include(TEMPLATEPATH . '/functions/insert-googleanalytics.php');

// COMENTÁRIOS
include(TEMPLATEPATH . '/functions/insert-mytheme-comment.php');

// INSERIR CÓDIGOS CSS E JS
include(TEMPLATEPATH . '/functions/insert-scripts-style.php');

// LIMITA QUANTIDA DE CARACTERES A SEREM EXIBIDOS
include(TEMPLATEPATH . '/functions/limitar-quantidade-caracteres.php');

// CÓDIGO PARA NAVEGAÇÃO ENTRE PÁGINAS
include(TEMPLATEPATH . '/functions/nav-entre-paginas.php');

// PÁGINAÇÃO
include(TEMPLATEPATH . '/functions/paginacao.php');

// EXIBI A DESCRIÇÃO DO MENU
include(TEMPLATEPATH . '/functions/pegar-descricao-menu.php');

// TAMANHOS DAS THUMBS
include(TEMPLATEPATH . '/functions/post-thumbnails.php');

// COLOCA MAIS RECURSOS NO EDITOR DE TEXTO
include(TEMPLATEPATH . '/functions/recursos-editor.php');

// REGISTRA MENUS
include(TEMPLATEPATH . '/functions/register-nav-menu.php');

// REGISTRA CUSTOM POST TYPES
include(TEMPLATEPATH . '/functions/register-post-types-taxonomies.php');

// REGISTRA SIDEBARS
include(TEMPLATEPATH . '/functions/register-sidebar.php');

// REMOVE RESTO DE CÓDIGO DO HEAD
include(TEMPLATEPATH . '/functions/remove-junk-header.php');
