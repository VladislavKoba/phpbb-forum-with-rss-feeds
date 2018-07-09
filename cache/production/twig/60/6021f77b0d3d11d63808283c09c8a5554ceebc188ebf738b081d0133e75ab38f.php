<?php

/* @apwa_adunits/event/index_body_markforums_before.html */
class __TwigTemplate_edfeef3e179ea56adafa3d5f52a073f4407818ae17078a411e4d7dc7944c4f46 extends Twig_Template
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
            if (((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 5) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 6)) && (((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 1) || ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 3)))) {
                // line 3
                echo "\t<div id=\"cp-menu\">
\t\t<div id=\"sidebar-left\" style=\"margin-right: 5px;\">
\t\t";
                // line 5
                echo (isset($context["ADUNITS_POST_TEXT_SIDEBAR_TOP"]) ? $context["ADUNITS_POST_TEXT_SIDEBAR_TOP"] : null);
                echo "
\t\t";
                // line 6
                if ((isset($context["ADUNITS_POST_TEXT_SIDEBAR"]) ? $context["ADUNITS_POST_TEXT_SIDEBAR"] : null)) {
                    echo "<hr />";
                }
                // line 7
                echo "\t\t";
                echo (isset($context["ADUNITS_POST_TEXT_SIDEBAR"]) ? $context["ADUNITS_POST_TEXT_SIDEBAR"] : null);
                echo "
\t\t</div>
\t</div>
\t";
            }
            // line 11
            echo "\t";
            if ((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 5) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 6))) {
                // line 12
                echo "\t\t<div id=\"cp-main\" class=\"panel-container\">
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@apwa_adunits/event/index_body_markforums_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  44 => 11,  36 => 7,  32 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@apwa_adunits/event/index_body_markforums_before.html", "");
    }
}
