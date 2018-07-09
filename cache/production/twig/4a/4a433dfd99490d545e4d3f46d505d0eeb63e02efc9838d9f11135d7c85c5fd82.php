<?php

/* acp_sidebar.html */
class __TwigTemplate_abd1933d988f8ab1880709cd642eb1187abd2ce6dc581c27302ae47998a82e08 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_sidebar.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_TITLE");
        echo "</h1>
<p>";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_EXPLAIN");
        echo "</p>


<form id=\"acp_sidebar\" method=\"post\" action=\"";
        // line 7
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_CONFIG");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label id=\"ad_status\" for=\"ad_status\">";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_STATUS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"ad_status\" value=\"1\" ";
        // line 12
        if ((isset($context["AD_STATUS"]) ? $context["AD_STATUS"] : null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp; 
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"ad_status\" value=\"0\" ";
        // line 13
        if ( !(isset($context["AD_STATUS"]) ? $context["AD_STATUS"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label id=\"ad_type\" for=\"ad_type\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_TYPE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_TYPE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"ad_type\" value=\"1\" ";
        // line 17
        if ((isset($context["AD_TYPE"]) ? $context["AD_TYPE"] : null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEFT");
        echo " &nbsp; 
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"ad_type\" value=\"0\" ";
        // line 18
        if ( !(isset($context["AD_TYPE"]) ? $context["AD_TYPE"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RIGHT");
        echo "</dd>
\t\t</dl>
\t\t
\t\t<dl>
\t\t\t<dt><label id=\"ad_forum3\" for=\"ad_forum3\">";
        // line 22
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_FORUM3");
        echo "</label></dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"ad_forum3\" value=\"1\" ";
        // line 23
        if ((isset($context["AD_FORUM3"]) ? $context["AD_FORUM3"] : null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_15");
        echo " &nbsp;
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"ad_forum3\" value=\"0\" ";
        // line 24
        if ( !(isset($context["AD_FORUM3"]) ? $context["AD_FORUM3"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_20");
        echo "</dd>
\t\t</dl>

\t<dl>
\t\t\t<dt><label id=\"ad_forum7\" for=\"ad_forum7\">";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_FORUM7");
        echo "</label></dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"ad_forum7\" value=\"1\" ";
        // line 29
        if ((isset($context["AD_FORUM7"]) ? $context["AD_FORUM7"] : null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"ad_forum7\" value=\"0\" ";
        // line 30
        if ( !(isset($context["AD_FORUM7"]) ? $context["AD_FORUM7"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</dd>
\t\t</dl>\t\t\t
\t
\t\t<dl>
\t\t\t<dt><label>";
        // line 34
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_VERSION_OLD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><strong>";
        // line 35
        echo (isset($context["S_VERSIONOLD"]) ? $context["S_VERSIONOLD"] : null);
        echo "</strong></dd>
\t\t</dl>
\t\t";
        // line 37
        if ((isset($context["S_VERSIONNEW"]) ? $context["S_VERSIONNEW"] : null)) {
            echo "<dl>
\t\t\t<dt><label>";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_VERSION_NEW");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong><a href=\"";
            // line 39
            echo (isset($context["U_VERSIONCHECK"]) ? $context["U_VERSIONCHECK"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_INFORMATION");
            echo "\" style=\"color: #228822;\" onclick=\"window.open(this.href);return false;\">";
            echo (isset($context["S_VERSIONNEW"]) ? $context["S_VERSIONNEW"] : null);
            echo "</a></strong></dd>
\t\t</dl>";
        }
        // line 41
        echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_SELECT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</legend>
\t\t
\t\t<dl>
\t\t\t<dt><label id=\"ad_facebookpage\" for=\"facebookpage\">";
        // line 47
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_FACEBOOKPAGE");
        echo "</label></dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"ad_facebookpage\" value=\"1\" ";
        // line 48
        if ((isset($context["AD_FACEBOOKPAGE"]) ? $context["AD_FACEBOOKPAGE"] : null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp;
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"ad_facebookpage\" value=\"0\" ";
        // line 49
        if ( !(isset($context["AD_FACEBOOKPAGE"]) ? $context["AD_FACEBOOKPAGE"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</dd>
\t\t</dl>

\t\t\t\t<dl>
\t\t<dt><label for=\"ad_urlpage\">";
        // line 53
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AD_URLPAGE");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AD_URLPAGE_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t<input type=\"text\" name=\"ad_urlpage\" id=\"ad_urlpage\" value=\"";
        // line 55
        echo (isset($context["AD_URLPAGE"]) ? $context["AD_URLPAGE"] : null);
        echo "\" size=\"50\" />
\t\t</dd>
\t</dl>
\t\t
<hr />\t\t
\t\t<dl>
\t\t\t<dt><label id=\"ad_firstpost\" for=\"ad_firstpost\">";
        // line 61
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AD_FIRSTPOST");
        echo "</label></dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"ad_firstpost\" value=\"1\" ";
        // line 62
        if ((isset($context["AD_FIRSTPOST"]) ? $context["AD_FIRSTPOST"] : null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo " &nbsp; 
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"ad_firstpost\" value=\"0\" ";
        // line 63
        if ( !(isset($context["AD_FIRSTPOST"]) ? $context["AD_FIRSTPOST"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</dd>
\t\t</dl>\t

\t\t\t<dl>
\t\t<dt><label for=\"ad_code_slot\">";
        // line 67
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AD_CODE_SLOT");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AD_CODE_SLOT_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t<input type=\"text\" name=\"ad_code_slot\" id=\"ad_code_slot\" value=\"";
        // line 69
        echo (isset($context["AD_CODE_SLOT"]) ? $context["AD_CODE_SLOT"] : null);
        echo "\" size=\"50\" />
\t\t</dd>
\t</dl>\t
\t\t
\t\t\t\t<dl>
\t\t<dt><label for=\"ad_code\">";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AD_CODE");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AD_CODE_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t<input type=\"text\" name=\"ad_code\" id=\"ad_code\" value=\"";
        // line 76
        echo (isset($context["AD_CODE"]) ? $context["AD_CODE"] : null);
        echo "\" size=\"50\" />
\t\t</dd>
\t</dl>
\t
\t\t\t\t\t<dl>
\t\t<dt><label for=\"sidebar_height\">";
        // line 81
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SIDEBAR_HEIGHT");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SIDEBAR_HEIGHT");
        echo "</span></dt>
\t\t<dd>
\t\t<input type=\"text\" name=\"sidebar_height\" id=\"sidebar_height\" value=\"";
        // line 83
        echo (isset($context["SIDEBAR_HEIGHT"]) ? $context["SIDEBAR_HEIGHT"] : null);
        echo "\" size=\"50\" />
\t\t</dd>
\t</dl>\t

<hr />\t
\t\t\t<dl>
\t\t\t<dt><label for=\"sidebar_text\">";
        // line 89
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SIDEBAR_TEXT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br />
\t\t\t<dd><textarea name=\"sidebar_text\" id=\"sidebar_text\" rows=\"3\" cols=\"40\">";
        // line 90
        echo (isset($context["SIDEBAR_TEXT"]) ? $context["SIDEBAR_TEXT"] : null);
        echo "</textarea></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 94
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 95
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" />
\t\t";
        // line 96
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</p>
\t</fieldset>
</form>
";
        // line 100
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_sidebar.html", 100)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 100,  317 => 96,  313 => 95,  309 => 94,  302 => 90,  297 => 89,  288 => 83,  281 => 81,  273 => 76,  266 => 74,  258 => 69,  251 => 67,  240 => 63,  232 => 62,  228 => 61,  219 => 55,  212 => 53,  201 => 49,  193 => 48,  189 => 47,  182 => 44,  177 => 41,  168 => 39,  163 => 38,  159 => 37,  154 => 35,  149 => 34,  138 => 30,  130 => 29,  126 => 28,  115 => 24,  107 => 23,  103 => 22,  92 => 18,  84 => 17,  77 => 16,  67 => 13,  59 => 12,  54 => 11,  49 => 9,  44 => 7,  38 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_sidebar.html", "");
    }
}
