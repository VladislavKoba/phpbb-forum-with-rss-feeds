<?php

/* @phpbb_pages/event/overall_footer_timezone_after.html */
class __TwigTemplate_33599f04272db6afb3e513333e05689616c037867d989f95b5654899969e4760 extends Twig_Template
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
        // line 2
        if ((isset($context["S_OVERALL_FOOTER_TIMEZONE_BEFORE"]) ? $context["S_OVERALL_FOOTER_TIMEZONE_BEFORE"] : null)) {
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["overall_footer_timezone_before_links"]) ? $context["overall_footer_timezone_before_links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 4
                echo "\t\t<li ";
                if ( !$this->getAttribute($context["link"], "ICON_FONT", array())) {
                    echo "class=\"small-icon icon-pages icon-page-";
                    echo $this->getAttribute($context["link"], "LINK_ROUTE", array());
                    echo " rightside\"";
                    if ($this->getAttribute($context["link"], "ICON_LINK", array())) {
                        echo " style=\"background-image: url('";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/";
                        echo $this->getAttribute($context["link"], "ICON_LINK", array());
                        echo "');\"";
                    }
                } else {
                    echo "class=\"rightside\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 5
                echo $this->getAttribute($context["link"], "U_LINK_URL", array());
                echo "\" role=\"menuitem\">
\t\t\t\t";
                // line 6
                if ($this->getAttribute($context["link"], "ICON_FONT", array())) {
                    echo "<i class=\"icon fa-";
                    echo $this->getAttribute($context["link"], "ICON_FONT", array());
                    echo " fa-fw\" aria-hidden=\"true\"></i>";
                }
                echo "<span>";
                echo $this->getAttribute($context["link"], "LINK_TITLE", array());
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_pages/event/overall_footer_timezone_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  26 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbb_pages/event/overall_footer_timezone_after.html", "");
    }
}
