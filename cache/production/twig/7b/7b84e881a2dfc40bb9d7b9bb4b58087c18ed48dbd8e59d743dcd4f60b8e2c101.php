<?php

/* @apwa_adunits/event/overall_header_content_before.html */
class __TwigTemplate_5cc7585ed8eee7449e155245334a5317849700171d71912baf0845c855cc6281 extends Twig_Template
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
        if (((((isset($context["S_ADUNITS_HEADER_POSITION"]) ? $context["S_ADUNITS_HEADER_POSITION"] : null) == 2) || (((isset($context["S_ADUNITS_HEADER_POSITION"]) ? $context["S_ADUNITS_HEADER_POSITION"] : null) == 1) && (isset($context["S_INDEX"]) ? $context["S_INDEX"] : null))) || (((isset($context["S_ADUNITS_HEADER_POSITION"]) ? $context["S_ADUNITS_HEADER_POSITION"] : null) == 3) && ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null) || (isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null))))) {
            // line 2
            echo "<div id=\"adunits-header\">";
            echo (isset($context["ADUNITS_POST_TEXT_HEADER"]) ? $context["ADUNITS_POST_TEXT_HEADER"] : null);
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 5
        if (((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) && ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null) || (isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)))) {
            // line 6
            echo "\t";
            if (((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 1) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 2)) && (((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 3) || ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 5)))) {
                // line 7
                echo "\t<div id=\"cp-menu\">
\t\t<div id=\"sidebar-left\" style=\"margin-right: 5px;\">
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
            // line 15
            echo "\t";
            if ((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 1) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 2))) {
                // line 16
                echo "\t\t<div id=\"cp-main\" class=\"panel-container\">
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@apwa_adunits/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  55 => 15,  47 => 11,  43 => 10,  39 => 9,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@apwa_adunits/event/overall_header_content_before.html", "");
    }
}
