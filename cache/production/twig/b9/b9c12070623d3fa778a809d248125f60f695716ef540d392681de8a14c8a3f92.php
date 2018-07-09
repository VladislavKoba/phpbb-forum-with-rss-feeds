<?php

/* @paybas_recenttopics/event/index_body_markforums_before.html */
class __TwigTemplate_ea632f423228377d846fb74ff8f96114caf4cdec04f83ec06f74ac7519126da2 extends Twig_Template
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
        if ((((isset($context["RECENT_TOPICS_DISPLAY"]) ? $context["RECENT_TOPICS_DISPLAY"] : null) &&  !(isset($context["RT_ALT_LOCATION"]) ? $context["RT_ALT_LOCATION"] : null)) && ((isset($context["recent_topics_included"]) ? $context["recent_topics_included"] : null) != true))) {
            $location = "recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("recent_topics_body.html", "@paybas_recenttopics/event/index_body_markforums_before.html", 1)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "<!-- DEFINE recent_topics_included = true -->";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_recenttopics/event/index_body_markforums_before.html";
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
        return new Twig_Source("", "@paybas_recenttopics/event/index_body_markforums_before.html", "");
    }
}
