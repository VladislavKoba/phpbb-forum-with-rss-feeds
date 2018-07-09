<?php

/* @apwa_adunits/event/overall_header_searchbox_before.html */
class __TwigTemplate_f40f30672dd0cc01874eccfb67e493eb054babf811969b8a67d1fd90a1d209c2 extends Twig_Template
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
        if ((isset($context["S_ADUNITS_HEADERBAR"]) ? $context["S_ADUNITS_HEADERBAR"] : null)) {
        }
    }

    public function getTemplateName()
    {
        return "@apwa_adunits/event/overall_header_searchbox_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@apwa_adunits/event/overall_header_searchbox_before.html", "");
    }
}
