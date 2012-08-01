<?php

/* \views//layouts/main.twig */
class __TwigTemplate_05392f99e4ed450aed1c4e03b3c2d7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 59
        echo "

<html>
<head>
    <title>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pageTitle"), "html", null, true);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "request"), "baseUrl"), "html", null, true);
        echo "/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "request"), "baseUrl"), "html", null, true);
        echo "/css/media/mediaelementplayer.min.css\" type=\"text/css\">
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "request"), "baseUrl"), "html", null, true);
        echo "/js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "request"), "baseUrl"), "html", null, true);
        echo "/js/media/mediaelement-and-player.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "request"), "baseUrl"), "html", null, true);
        echo "/js/music.js\"></script>

</head>
<body>
<div class=\"main_wrap\">
    <div class=\"header\">
        <div class=\"main_logo\">
            <a href=\"/\"><span>VG</span>-MUSIC</a>
        </div>
        <div id=\"main_menu\">
            ";
        // line 79
        $context["home"] = $this->getAttribute((isset($context["Yii"]) ? $context["Yii"] : null), "t", array(0 => "main", 1 => "Home"), "method");
        // line 80
        echo "            ";
        $context["about"] = $this->getAttribute((isset($context["Yii"]) ? $context["Yii"] : null), "t", array(0 => "main", 1 => "About"), "method");
        // line 81
        echo "            ";
        $context["contact"] = $this->getAttribute((isset($context["Yii"]) ? $context["Yii"] : null), "t", array(0 => "main", 1 => "Contact"), "method");
        // line 82
        echo "            ";
        $context["login"] = $this->getAttribute((isset($context["Yii"]) ? $context["Yii"] : null), "t", array(0 => "main", 1 => "Login"), "method");
        // line 83
        echo "            ";
        $context["logout"] = $this->getAttribute((isset($context["Yii"]) ? $context["Yii"] : null), "t", array(0 => "main", 1 => "Logout ({username})", 2 => array("{username}" => $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "name"))), "method");
        // line 84
        echo "            ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "zii.widgets.CMenu", 1 => array("items" => array(0 => array("label" => (isset($context["home"]) ? $context["home"] : null), "url" => array(0 => "/site/index")), 1 => array("label" => (isset($context["about"]) ? $context["about"] : null), "url" => array(0 => "/site/page", "view" => "about")), 2 => array("label" => (isset($context["contact"]) ? $context["contact"] : null), "url" => array(0 => "/site/contact")), 3 => array("label" => (isset($context["login"]) ? $context["login"] : null), "url" => array(0 => "/site/login"), "visible" => $this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "isGuest")), 4 => array("label" => (isset($context["logout"]) ? $context["logout"] : null), "url" => array(0 => "/site/logout"), "visible" => (!$this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "isGuest"))))), 2 => true), "method");
        // line 92
        echo "
            ";
        // line 94
        echo "        </div>
        <div  id=\"language-selector\" style=\"float:right; margin:5px;\">
";
        // line 106
        echo "\t\t\t\t
           ";
        // line 107
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "application.components.widgets.LanguageSelector"), "method")), "html", null, true);
        // line 109
        echo "

        </div>
    </div>
    <div class=\"main\">
        <div class=\"main_content\">

            ";
        // line 116
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    <div class=\"footer\">
        ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "copyright"), "html", null, true);
        echo "
    </div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "\\views//layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 120,  95 => 116,  86 => 109,  84 => 107,  81 => 106,  77 => 94,  74 => 92,  71 => 84,  68 => 83,  65 => 82,  62 => 81,  59 => 80,  57 => 79,  44 => 69,  40 => 68,  36 => 67,  32 => 66,  28 => 65,  23 => 63,  45 => 22,  41 => 20,  39 => 19,  17 => 59,);
    }
}
