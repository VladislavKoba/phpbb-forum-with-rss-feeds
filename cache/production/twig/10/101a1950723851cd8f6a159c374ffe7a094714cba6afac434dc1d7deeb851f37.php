<?php

/* @cece74_sidebar/event/overall_footer_page_body_after.html */
class __TwigTemplate_624f527a5da7550d37fb8793de4a29373aa910b14c900562e26ef1ba23369944 extends Twig_Template
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
        if ((isset($context["S_AD_STATUS"]) ? $context["S_AD_STATUS"] : null)) {
            // line 2
            echo "
";
            // line 3
            if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index")) {
                if ( !(isset($context["S_AD_FORUM7"]) ? $context["S_AD_FORUM7"] : null)) {
                    // line 4
                    echo "<div class=\"page-sidebar\">
";
                    // line 5
                    $location = "@cece74_sidebar/sidebar.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("@cece74_sidebar/sidebar.html", "@cece74_sidebar/event/overall_footer_page_body_after.html", 5)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 6
                    echo "</div>";
                }
            }
            // line 7
            echo "
";
            // line 8
            if ((isset($context["S_AD_FORUM7"]) ? $context["S_AD_FORUM7"] : null)) {
                // line 9
                echo "<div class=\"page-sidebar\">
";
                // line 10
                $location = "@cece74_sidebar/sidebar.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@cece74_sidebar/sidebar.html", "@cece74_sidebar/event/overall_footer_page_body_after.html", 10)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 11
                echo "</div>";
            }
            // line 12
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@cece74_sidebar/event/overall_footer_page_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  66 => 11,  54 => 10,  51 => 9,  49 => 8,  46 => 7,  42 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@cece74_sidebar/event/overall_footer_page_body_after.html", "");
    }
}
