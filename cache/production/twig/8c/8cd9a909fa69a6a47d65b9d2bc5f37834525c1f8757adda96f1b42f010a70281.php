<?php

/* pages_default.html */
class __TwigTemplate_05a0558f824eb44937ba956bc6b79d6f23f8854d9c7f0501f61df937b49cce85 extends Twig_Template
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
        // line 17
        echo "
";
        // line 18
        $asset_file = "@phpbb_pages/pages_controller.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('41');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 19
        $this->loadTemplate("overall_header.html", "pages_default.html", 19)->display($context);
        // line 20
        echo "
<div class=\"panel cnt\">
\t<div class=\"inner\">
\t\t<h2 class=\"pages-title\">";
        // line 23
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>
\t\t<div class=\"content pages-content\">
\t\t\t";
        // line 25
        echo (isset($context["PAGE_CONTENT"]) ? $context["PAGE_CONTENT"] : null);
        echo "
\t\t</div>
\t\t";
        // line 27
        // line 28
        echo "\t</div>
</div>

";
        // line 31
        $this->loadTemplate("overall_footer.html", "pages_default.html", 31)->display($context);
    }

    public function getTemplateName()
    {
        return "pages_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 31,  51 => 28,  50 => 27,  45 => 25,  40 => 23,  35 => 20,  33 => 19,  22 => 18,  19 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages_default.html", "");
    }
}
