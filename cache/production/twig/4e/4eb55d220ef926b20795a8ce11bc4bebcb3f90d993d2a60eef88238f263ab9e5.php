<?php

/* @apwa_adunits/event/overall_footer_content_after.html */
class __TwigTemplate_ed6054f6380ee6ffb8099b7710d5e2fbdda1907dfe4ebdd82cd9ee7173c5fc65 extends Twig_Template
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
        if (((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) && ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null) || (isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)))) {
            // line 2
            echo "\t";
            if ((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 1) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 2))) {
                // line 3
                echo "\t\t</div>
\t";
            }
            // line 5
            echo "
\t";
            // line 6
            if (((((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 1) && ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) != 2)) && (((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 4) || ((isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null) == 6)))) {
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
        // line 16
        echo "
";
        // line 17
        if (((((isset($context["S_ADUNITS_FOOTER_POSITION"]) ? $context["S_ADUNITS_FOOTER_POSITION"] : null) == 2) || (((isset($context["S_ADUNITS_FOOTER_POSITION"]) ? $context["S_ADUNITS_FOOTER_POSITION"] : null) == 1) && (isset($context["S_INDEX"]) ? $context["S_INDEX"] : null))) || (((isset($context["S_ADUNITS_FOOTER_POSITION"]) ? $context["S_ADUNITS_FOOTER_POSITION"] : null) == 3) && ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null) || (isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null))))) {
            // line 18
            echo "<div id=\"adunits-footer\" class=\"content\">";
            echo (isset($context["ADUNITS_POST_TEXT_FOOTER"]) ? $context["ADUNITS_POST_TEXT_FOOTER"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@apwa_adunits/event/overall_footer_content_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  57 => 17,  54 => 16,  45 => 11,  41 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@apwa_adunits/event/overall_footer_content_after.html", "");
    }
}
