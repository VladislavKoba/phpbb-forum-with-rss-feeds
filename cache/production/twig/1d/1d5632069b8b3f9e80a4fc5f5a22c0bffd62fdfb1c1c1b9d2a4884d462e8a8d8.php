<?php

/* @xaocz_menubar/event/overall_header_head_append.html */
class __TwigTemplate_8a4cdafe0508c61982e60e6caab0a09ea5391fa8bcd4e16125d226a90b405fe9 extends Twig_Template
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
        $asset_file = "@xaocz_menubar/menubar.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('41');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 2
        if (((isset($context["S_MENUBAR_STYLES"]) ? $context["S_MENUBAR_STYLES"] : null) && (isset($context["S_MENUBAR_HEAD"]) ? $context["S_MENUBAR_HEAD"] : null))) {
            echo "<style type=\"text/css\">";
            echo (isset($context["S_MENUBAR_HEAD"]) ? $context["S_MENUBAR_HEAD"] : null);
            echo "</style>";
        }
    }

    public function getTemplateName()
    {
        return "@xaocz_menubar/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@xaocz_menubar/event/overall_header_head_append.html", "");
    }
}
