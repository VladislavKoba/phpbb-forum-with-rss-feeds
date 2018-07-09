<?php

/* @xaocz_menubar/event/overall_footer_after.html */
class __TwigTemplate_2c44fae7aeb98c5af921124502a4510d5e606b13057723cca89d4590d8124a5e extends Twig_Template
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
        if ((isset($context["S_MENUBAR_FIXED"]) ? $context["S_MENUBAR_FIXED"] : null)) {
            // line 2
            echo "<script type=\"text/javascript\">
(function(){
 
\tvar nav = \$('.menu-navbar');
 
\t\$(window).scroll(function () {
\t\tif (\$(this).scrollTop() > ";
            // line 8
            if ((isset($context["S_MENUBAR_FIXED_SCROLL"]) ? $context["S_MENUBAR_FIXED_SCROLL"] : null)) {
                echo (isset($context["S_MENUBAR_FIXED_SCROLL"]) ? $context["S_MENUBAR_FIXED_SCROLL"] : null);
            } else {
                if (((isset($context["S_MENUBAR_POSITION"]) ? $context["S_MENUBAR_POSITION"] : null) == 1)) {
                    echo "116";
                } else {
                    echo "186";
                }
            }
            echo ") {
\t\t\tnav.addClass(\"fixed-nav\");
\t\t} else {
\t\t\tnav.removeClass(\"fixed-nav\");
\t\t}
\t});
 
})();
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@xaocz_menubar/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@xaocz_menubar/event/overall_footer_after.html", "");
    }
}
