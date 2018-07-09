<?php

/* @apwa_adunits/event/overall_footer_copyright_prepend.html */
class __TwigTemplate_bc50ec7d77645d251caffeba4655ef244e49dae81a0e04ba1fe7e6c61950a35f extends Twig_Template
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
        if ((isset($context["S_ADUNITS_FOOTER_COPYRIGHT"]) ? $context["S_ADUNITS_FOOTER_COPYRIGHT"] : null)) {
            echo "<div id=\"adunits-copyright\">";
            echo (isset($context["ADUNITS_POST_TEXT_COPYRIGHT"]) ? $context["ADUNITS_POST_TEXT_COPYRIGHT"] : null);
            echo "</div>";
        }
        // line 2
        if (((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null) && (((isset($context["S_ADUNITS_HEADER_POSITION"]) ? $context["S_ADUNITS_HEADER_POSITION"] : null) || (isset($context["S_ADUNITS_FOOTER_POSITION"]) ? $context["S_ADUNITS_FOOTER_POSITION"] : null)) || (isset($context["S_ADUNITS_SIDEBAR_POSITION"]) ? $context["S_ADUNITS_SIDEBAR_POSITION"] : null)))) {
            // line 3
            echo "<a href=\"http://bb3.mobi/forum/viewtopic.php?t=134\">Ad Units phpBB</a> &copy; Anvar (apwa.ru)<br />
";
        }
    }

    public function getTemplateName()
    {
        return "@apwa_adunits/event/overall_footer_copyright_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@apwa_adunits/event/overall_footer_copyright_prepend.html", "");
    }
}
