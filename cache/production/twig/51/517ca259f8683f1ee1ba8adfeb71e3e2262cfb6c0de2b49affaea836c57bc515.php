<?php

/* @cece74_sidebar/event/overall_header_head_append.html */
class __TwigTemplate_2e31cea4cf47de06b377c81705ced52619546fb36a904ce64abeb1982a1429d9 extends Twig_Template
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
            if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index")) {
                // line 3
                if ( !(isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ((isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 4
                        $asset_file = "@cece74_sidebar/sidebar.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
                // line 6
                if ( !(isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ( !(isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 7
                        $asset_file = "@cece74_sidebar/sidebar20.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
                // line 9
                if ((isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ((isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 10
                        $asset_file = "@cece74_sidebar/sidebarleft.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
                // line 12
                if ((isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ( !(isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 13
                        $asset_file = "@cece74_sidebar/sidebarleft20.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
            }
            // line 15
            echo "
";
            // line 16
            if ((isset($context["S_AD_FORUM7"]) ? $context["S_AD_FORUM7"] : null)) {
                // line 17
                if ( !(isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ((isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 18
                        $asset_file = "@cece74_sidebar/sidebar.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
                // line 20
                if ( !(isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ( !(isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 21
                        $asset_file = "@cece74_sidebar/sidebar20.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
                // line 23
                if ((isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ((isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 24
                        $asset_file = "@cece74_sidebar/sidebarleft.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
                // line 26
                if ((isset($context["S_AD_TYPE"]) ? $context["S_AD_TYPE"] : null)) {
                    if ( !(isset($context["S_AD_FORUM3"]) ? $context["S_AD_FORUM3"] : null)) {
                        // line 27
                        $asset_file = "@cece74_sidebar/sidebarleft20.css";
                        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                            $asset_path = $asset->get_path();                            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                            if (!file_exists($local_file)) {
                                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                                $asset->set_path($local_file, true);
                            }
                            $asset->add_assets_version('41');
                        }
                        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                    }
                }
            }
            // line 30
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@cece74_sidebar/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 30,  144 => 27,  141 => 26,  128 => 24,  125 => 23,  112 => 21,  109 => 20,  96 => 18,  93 => 17,  91 => 16,  88 => 15,  74 => 13,  71 => 12,  58 => 10,  55 => 9,  42 => 7,  39 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@cece74_sidebar/event/overall_header_head_append.html", "");
    }
}
