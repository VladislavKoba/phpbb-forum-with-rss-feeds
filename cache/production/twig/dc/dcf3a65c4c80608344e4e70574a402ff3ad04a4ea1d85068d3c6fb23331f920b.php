<?php

/* @apwa_adunits/event/index_body_forumlist_body_after.html */
class __TwigTemplate_90922513cd38fb3d692ca40f7e24907278b87bcb681b55571f0a7beb0ef5f753 extends Twig_Template
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
        if ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null)) {
            // line 2
            echo "\t";
            if ((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 5) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 6))) {
                // line 3
                echo "\t\t</div>
\t";
            }
            // line 5
            echo "
\t";
            // line 6
            if (((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 5) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 6)) && (((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 2) || ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 4)))) {
                // line 7
                echo "\t<div id=\"cp-menu\">
\t\t<div id=\"sidebar-right\" style=\"margin-left: 5px;\">
\t\t";
                // line 9
                echo (isset($context["ADUNITS_POST_TEXT_SIDEBAR_TOP"]) ? $context["ADUNITS_POST_TEXT_SIDEBAR_TOP"] : null);
                echo "
\t\t";
                // line 10
                if ((isset($context["ADUNITS_POST_TEXT_SIDEBAR"]) ? $context["ADUNITS_POST_TEXT_SIDEBAR"] : null)) {
                    echo "<hr />";
                }
                // line 11
                echo "\t\t";
                echo (isset($context["ADUNITS_POST_TEXT_SIDEBAR"]) ? $context["ADUNITS_POST_TEXT_SIDEBAR"] : null);
                echo "
\t\t</div>
\t</div>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@apwa_adunits/event/index_body_forumlist_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  41 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@apwa_adunits/event/index_body_forumlist_body_after.html", "");
    }
}
