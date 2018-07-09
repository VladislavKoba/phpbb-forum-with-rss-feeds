<?php

/* @xaocz_menubar/menubar.html */
class __TwigTemplate_5ccb579294d047b290fb706e1add5e54503d1523e58a720f9d77d01447b2998f extends Twig_Template
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
        if (((isset($context["S_MENUBAR"]) ? $context["S_MENUBAR"] : null) && ((isset($context["S_MENUBAR_CONTENT"]) ? $context["S_MENUBAR_CONTENT"] : null) || (isset($context["S_MENUBAR_INDEX"]) ? $context["S_MENUBAR_INDEX"] : null)))) {
            // line 2
            echo "<div id=\"menubar\" class=\"menu-navbar\" role=\"navigation\">
\t<div id=\"tabs\" class=\"tabs inner\">

\t<ul class=\"menubar ";
            // line 5
            if (((isset($context["S_MENUBAR_NEW_CLASS"]) ? $context["S_MENUBAR_NEW_CLASS"] : null) && (isset($context["S_MENUBAR_STYLES"]) ? $context["S_MENUBAR_STYLES"] : null))) {
                echo (isset($context["S_MENUBAR_NEW_CLASS"]) ? $context["S_MENUBAR_NEW_CLASS"] : null);
            } else {
                echo "menubar-pro2";
            }
            echo "\" role=\"menubar\">

\t\t";
            // line 7
            if ((isset($context["S_MENUBAR_INDEX"]) ? $context["S_MENUBAR_INDEX"] : null)) {
                echo "<li data-skip-responsive=\"true\"><a href=\"";
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
                echo "\" data-navbar-reference=\"index\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
                echo "</a></li>";
            }
            // line 8
            echo "\t\t";
            echo (isset($context["S_MENUBAR_CONTENT"]) ? $context["S_MENUBAR_CONTENT"] : null);
            echo "

\t</ul>
\t
\t</div>
\t<div id=\"adunits-headerbar\">";
            // line 13
            echo (isset($context["ADUNITS_POST_TEXT_HEADERBAR"]) ? $context["ADUNITS_POST_TEXT_HEADERBAR"] : null);
            echo "</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@xaocz_menubar/menubar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  43 => 8,  35 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@xaocz_menubar/menubar.html", "");
    }
}
