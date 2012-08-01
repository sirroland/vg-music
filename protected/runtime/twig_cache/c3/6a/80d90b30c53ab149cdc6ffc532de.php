<?php

/* \views\photos\index.twig */
class __TwigTemplate_c36a80d90b30c53ab149cdc6ffc532de extends Twig_Template
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
        // line 20
        echo "
<div class=\"photos\">
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 23
            echo "    <div class=\"photo\">
        <a href=\"/photos/photo/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id"), "html", null, true);
            echo "\">
            <img src=\"/media/uploads/images/thumb/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "file"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "title"), "html", null, true);
            echo "\">
            <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "title"), "html", null, true);
            echo "</span>
            <!--<div class=\"description\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "description"), "html", null, true);
            echo "</div>-->
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "\\views\\photos\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 31,  42 => 27,  38 => 26,  32 => 25,  28 => 24,  25 => 23,  21 => 22,  17 => 20,);
    }
}
