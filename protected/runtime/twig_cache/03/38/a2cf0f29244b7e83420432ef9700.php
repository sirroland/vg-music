<?php

/* \views\site\index.twig */
class __TwigTemplate_0338a2cf0f29244b7e83420432ef9700 extends Twig_Template
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
        // line 1
        echo " SiteName: \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pageTitle"), "html", null, true);
        echo "\"

 <audio id=\"player2\" src=\"http://cs1-4.userapi.com/d29/ed430561c1fa05.mp3\" type=\"audio/mp3\" controls=\"controls\">
 </audio>
 <audio id=\"player3\" src=\"http://cs1-31.userapi.com/d12/7d2789d8c451c3.mp3\" type=\"audio/mp3\" controls=\"controls\">
 </audio>
 <audio id=\"player4\" src=\"http://cs1-31.userapi.com/d13/92bee5edc9ed90.mp3\" type=\"audio/mp3\" controls=\"controls\">
 </audio>

 <video width=\"640\" height=\"360\" id=\"player1\">

     <!-- Pseudo HTML5 -->
     <source type=\"video/youtube\" src=\"http://www.youtube.com/watch?v=nOEw9iiopwI\" />

 </video>

         <div class=\"play\">Play</div>
         <div class=\"stop\">Stop</div>
 ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "checkAccess", array(0 => "administrator"), "method")) {
            // line 20
            echo "    echo \"hello, I'm administrator\";
 ";
        } else {
            // line 22
            echo "    Hello, Guest.
 ";
        }
    }

    public function getTemplateName()
    {
        return "\\views\\site\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 22,  41 => 20,  39 => 19,  17 => 1,);
    }
}
