<?php

/* acp_recenttopics.html */
class __TwigTemplate_63e006f6d4f9a89932faf1394fb3830df7f299bcb50a3d000992702f828f3d8d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_recenttopics.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECENT_TOPICS");
        echo "</h1>
<p>";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECENT_TOPICS_EXPLAIN");
        echo "</p>

<form id=\"acp_board\" method=\"post\" action=\"";
        // line 6
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t<fieldset>
\t\t<dl>
\t\t\t<dt><label for=\"rt_number\">";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_NUMBER");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_NUMBER_EXP");
        echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"rt_number\" name=\"rt_number\" size=\"3\" min=\"0\" max=\"999\" value=\"";
        // line 10
        echo (isset($context["RT_NUMBER"]) ? $context["RT_NUMBER"] : null);
        echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"rt_page_number\">";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_PAGE_NUMBER");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_PAGE_NUMBER_EXP");
        echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"rt_page_number\" name=\"rt_page_number\" size=\"3\" min=\"0\" max=\"999\" value=\"";
        // line 14
        echo (isset($context["RT_PAGE_NUMBER"]) ? $context["RT_PAGE_NUMBER"] : null);
        echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"rt_min_topic_level\">";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_MIN_TOPIC_LEVEL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_MIN_TOPIC_LEVEL_EXP");
        echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"rt_min_topic_level\" name=\"rt_min_topic_level\" size=\"3\" min=\"0\" max=\"3\" maxlength=\"1\" value=\"";
        // line 18
        echo (isset($context["RT_MIN_TOPIC_LEVEL"]) ? $context["RT_MIN_TOPIC_LEVEL"] : null);
        echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"rt_anti_topics\">";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_ANTI_TOPICS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_ANTI_TOPICS_EXP");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" id=\"rt_anti_topics\" name=\"rt_anti_topics\" size=\"30\" value=\"";
        // line 22
        echo (isset($context["RT_ANTI_TOPICS"]) ? $context["RT_ANTI_TOPICS"] : null);
        echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"rt_alt_location\">";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_ALT_LOCATION");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_ALT_LOCATION_EXP");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_alt_location\" value=\"1\" id=\"rt_alt_location\"";
        // line 27
        if ((isset($context["RT_ALT_LOCATION"]) ? $context["RT_ALT_LOCATION"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_alt_location\" value=\"0\"";
        // line 28
        if ( !(isset($context["RT_ALT_LOCATION"]) ? $context["RT_ALT_LOCATION"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"rt_parents\">";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_PARENTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_PARENTS_EXP");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_parents\" value=\"1\" id=\"rt_parents\"";
        // line 34
        if ((isset($context["RT_PARENTS"]) ? $context["RT_PARENTS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_parents\" value=\"0\"";
        // line 35
        if ( !(isset($context["RT_PARENTS"]) ? $context["RT_PARENTS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"rt_unread_only\">";
        // line 39
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_UNREAD_ONLY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_UNREAD_ONLY_EXP");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_unread_only\" value=\"1\" id=\"rt_unread_only\"";
        // line 41
        if ((isset($context["RT_UNREAD_ONLY"]) ? $context["RT_UNREAD_ONLY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_unread_only\" value=\"0\"";
        // line 42
        if ( !(isset($context["RT_UNREAD_ONLY"]) ? $context["RT_UNREAD_ONLY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"rt_sort_start_time\">";
        // line 46
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_SORT_START_TIME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_SORT_START_TIME_EXP");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_sort_start_time\" value=\"1\" id=\"rt_sort_start_time\"";
        // line 48
        if ((isset($context["RT_SORT_START_TIME"]) ? $context["RT_SORT_START_TIME"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_sort_start_time\" value=\"0\"";
        // line 49
        if ( !(isset($context["RT_SORT_START_TIME"]) ? $context["RT_SORT_START_TIME"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 54
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RT_VIEW_ON");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"rt_index\">";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_index\" value=\"1\" id=\"rt_index\"";
        // line 58
        if ((isset($context["RT_INDEX"]) ? $context["RT_INDEX"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_index\" value=\"0\" ";
        // line 59
        if ( !(isset($context["RT_INDEX"]) ? $context["RT_INDEX"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
        // line 62
        if ((isset($context["S_RT_NEWSPAGE"]) ? $context["S_RT_NEWSPAGE"] : null)) {
            // line 63
            echo "\t\t<dl>
\t\t\t<dt><label for=\"rt_on_newspage\">nickvergessen/newspage</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_on_newspage\" value=\"1\" id=\"rt_on_newspage\"";
            // line 66
            if ((isset($context["RT_ON_NEWSPAGE"]) ? $context["RT_ON_NEWSPAGE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo "/> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"rt_on_newspage\" value=\"0\" ";
            // line 67
            if ( !(isset($context["RT_ON_NEWSPAGE"]) ? $context["RT_ON_NEWSPAGE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
        }
        // line 71
        echo "\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 73
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 75
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 76
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" />
\t\t</p>
\t\t";
        // line 78
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>
</form>
";
        // line 81
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_recenttopics.html", 81)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_recenttopics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 81,  282 => 78,  277 => 76,  273 => 75,  268 => 73,  264 => 71,  253 => 67,  245 => 66,  240 => 63,  238 => 62,  228 => 59,  220 => 58,  215 => 56,  210 => 54,  198 => 49,  190 => 48,  182 => 46,  171 => 42,  163 => 41,  155 => 39,  144 => 35,  136 => 34,  128 => 32,  117 => 28,  109 => 27,  101 => 25,  95 => 22,  88 => 21,  82 => 18,  75 => 17,  69 => 14,  62 => 13,  56 => 10,  49 => 9,  43 => 6,  38 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_recenttopics.html", "");
    }
}
