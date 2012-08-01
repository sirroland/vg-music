<?php

/* \views//layouts/main.twig */
class __TwigTemplate_d8266b347633280559f173b6baea0d1b extends Twig_Template
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_this_, "pageTitle"), "html", null, true);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 65
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_App_, "request"), "baseUrl"), "html", null, true);
        echo "/css/style.css\" type=\"text/css\">
    <script type=\"text/javascript\" src=\"";
        // line 66
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_App_, "request"), "baseUrl"), "html", null, true);
        echo "/js/jquery.js\"></script>

</head>
<body>
<div class=\"main_wrap\">
    <div class=\"header\">
        <div class=\"main_logo\">
            <a href=\"/\"><span>VG</span>-MUSIC</a>
        </div>
        <div id=\"main_menu\">
            ";
        // line 76
        if (isset($context["Yii"])) { $_Yii_ = $context["Yii"]; } else { $_Yii_ = null; }
        $context["home"] = $this->getAttribute($_Yii_, "t", array(0 => "main", 1 => "Home"), "method");
        // line 77
        echo "            ";
        if (isset($context["Yii"])) { $_Yii_ = $context["Yii"]; } else { $_Yii_ = null; }
        $context["about"] = $this->getAttribute($_Yii_, "t", array(0 => "main", 1 => "About"), "method");
        // line 78
        echo "            ";
        if (isset($context["Yii"])) { $_Yii_ = $context["Yii"]; } else { $_Yii_ = null; }
        $context["contact"] = $this->getAttribute($_Yii_, "t", array(0 => "main", 1 => "Contact"), "method");
        // line 79
        echo "            ";
        if (isset($context["Yii"])) { $_Yii_ = $context["Yii"]; } else { $_Yii_ = null; }
        $context["login"] = $this->getAttribute($_Yii_, "t", array(0 => "main", 1 => "Login"), "method");
        // line 80
        echo "            ";
        if (isset($context["Yii"])) { $_Yii_ = $context["Yii"]; } else { $_Yii_ = null; }
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        $context["logout"] = $this->getAttribute($_Yii_, "t", array(0 => "main", 1 => "Logout ({username})", 2 => array("{username}" => $this->getAttribute($this->getAttribute($_App_, "user"), "name"))), "method");
        // line 81
        echo "            ";
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        if (isset($context["about"])) { $_about_ = $context["about"]; } else { $_about_ = null; }
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        if (isset($context["login"])) { $_login_ = $context["login"]; } else { $_login_ = null; }
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        if (isset($context["logout"])) { $_logout_ = $context["logout"]; } else { $_logout_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CMenu", 1 => array("items" => array(0 => array("label" => $_home_, "url" => array(0 => "/site/index")), 1 => array("label" => $_about_, "url" => array(0 => "/site/page", "view" => "about")), 2 => array("label" => $_contact_, "url" => array(0 => "/site/contact")), 3 => array("label" => $_login_, "url" => array(0 => "/site/login"), "visible" => $this->getAttribute($this->getAttribute($_App_, "user"), "isGuest")), 4 => array("label" => $_logout_, "url" => array(0 => "/site/logout"), "visible" => (!$this->getAttribute($this->getAttribute($_App_, "user"), "isGuest"))))), 2 => true), "method");
        // line 89
        echo "
            ";
        // line 91
        echo "        </div>
        <div  id=\"language-selector\" style=\"float:right; margin:5px;\">
";
        // line 103
        echo "\t\t\t\t
           ";
        // line 104
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($_this_, "widget", array(0 => "application.components.widgets.LanguageSelector"), "method")), "html", null, true);
        // line 106
        echo "

        </div>
    </div>
    <div class=\"main\">
        <div class=\"main_content\">

            ";
        // line 113
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
        </div>
    </div>
    <div class=\"footer\">
        ";
        // line 117
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "copyright"), "html", null, true);
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
        return array (  108 => 117,  100 => 113,  91 => 106,  88 => 104,  85 => 103,  81 => 91,  78 => 89,  68 => 81,  63 => 80,  59 => 79,  55 => 78,  51 => 77,  48 => 76,  34 => 66,  29 => 65,  23 => 63,  17 => 59,);
    }
}
