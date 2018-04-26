<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * User: wagner
 * Date: 20/04/2018
 * Time: 08:03
 *
 * head do site
 *
 */
?>

<meta charset="utf-8" />
<title><?= $title_head; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta http-equiv="content-language" content="pt-br">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="content-script-type" content="text/php">
<meta http-equiv="content-style-type" content="text/css">
<meta name="generator" content="Notepad++">
<meta name="rating" content="general">
<meta name="robots" content="index,follow">
<meta name="author" content="Wagner">
<meta name="copyright" content="© wagner">
<meta name="description" content="Ola mundo">
<meta name="keywords" content="Olamundo">
<meta name="MSSmartTagsPreventParsing" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="<?=$this->config->config['base_url'];?>/../assets/css/bootstrap-3.3.7.min.css">
<link rel="stylesheet" href="<?=$this->config->config['base_url'];?>/../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->
<link rel="stylesheet" href="<?=$this->config->config['base_url'];?>/../assets/css/jquery-ui.min.css" />

<!-- text fonts -->
<link rel="stylesheet" href="<?=$this->config->config['base_url'];?>/../assets/css/fonts.googleapis.com.css" />

<!-- inline styles related to this page -->
<link rel="stylesheet" href="<?=$this->config->config['base_url'];?>/../assets/css/crud_com_codeigniter.css" />

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
<!--[if lte IE 8]>
<script src="<?=$this->config->config['base_url'];?>/../assets/js/html5shiv.min.js"></script>
<script src="<?=$this->config->config['base_url'];?>/../assets/js/respond.min.js"></script>
<![endif]-->