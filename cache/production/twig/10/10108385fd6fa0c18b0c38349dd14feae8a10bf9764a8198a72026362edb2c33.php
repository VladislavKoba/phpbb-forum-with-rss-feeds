<?php

/* @paybas_recenttopics/recent_topics_body.html */
class __TwigTemplate_5c22f674f0939564cf5dc80bcb4482ec545060d1124ffb14d759621b246ced25 extends Twig_Template
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
        echo "<a id=\"recent_topics\"></a>
";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) &&  !(isset($context["RT_ALT_LOCATION"]) ? $context["RT_ALT_LOCATION"] : null))) {
            // line 3
            echo "<div class=\"action-bar\">
\t<div class=\"pagination\">
\t\t";
            // line 5
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "@paybas_recenttopics/recent_topics_body.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 6
            echo "\t</div>
</div>
";
        }
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recent_topics", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recent_topics"]) {
            // line 11
            echo "\t";
            if (( !$this->getAttribute($context["recent_topics"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["recent_topics"], "S_FIRST_ROW", array()))) {
                // line 12
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 16
            echo "



\t<div id=\"recent-widget\"></div>

\t<script type=\"text/javascript\">
\thttpRequest(\"recent-widget.php\", showrecent);
\tfunction showrecent(WIDGET){
\t d = document.getElementById('recent-widget');
\t d.innerHTML = WIDGET;
\t}

\tfunction httpRequest(url, callback) {
\t  var httpObj = false;
\t  if (typeof XMLHttpRequest != 'undefined') {
\t    httpObj = new XMLHttpRequest();
\t  } else if (window.ActiveXObject) {
\t    try{
\t      httpObj = new ActiveXObject('Msxml2.XMLHTTP');
\t    } catch(e) {
\t      try{
\t        httpObj = new ActiveXObject('iMicrosoft.XMLHTTP');
\t      } catch(e) {}
\t    }
\t  }
\t  if (!httpObj) return;
\t  httpObj.onreadystatechange = function() {
\t    if (httpObj.readyState == 4) { // when request is complete
\t      callback(httpObj.responseText);
\t    }
\t  };
\t  httpObj.open('GET', url, true);
\t  httpObj.send(null);
\t}
\t</script>



\t
\t";
            // line 56
            if (($this->getAttribute($context["recent_topics"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["recent_topics"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 57
                echo "\t<div class=\"forumbg recent-topics\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"\">
\t\t\t\t\t<dt><div class=\"list-inner\">Новые Объявления</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 64
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 65
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 71
            echo "
\t\t<li class=\"row";
            // line 72
            if (($this->getAttribute($context["recent_topics"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if ($this->getAttribute($context["recent_topics"], "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t<dl class=\" ";
            // line 73
            echo $this->getAttribute($context["recent_topics"], "TOPIC_IMG_STYLE", array());
            echo "\">
\t\t\t\t<dt";
            // line 74
            if (($this->getAttribute($context["recent_topics"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                echo " style=\"background-image: url(";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["recent_topics"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t";
            // line 75
            if (($this->getAttribute($context["recent_topics"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_NEWEST_POST", array());
                echo "\" class=\"icon-link\"></a>";
            }
            // line 76
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 77
            // line 78
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["recent_topics"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_NEWEST_POST", array());
                echo "\">";
                echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                echo "</a> ";
            }
            echo "<a href=\"";
            echo $this->getAttribute($context["recent_topics"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_TITLE", array());
            echo "</a> ";
            if ($this->getAttribute($context["recent_topics"], "ATTACH_ICON_IMG", array())) {
                echo $this->getAttribute($context["recent_topics"], "ATTACH_ICON_IMG", array());
            }
            // line 79
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["recent_topics"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["recent_topics"], "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_QUEUE", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "UNAPPROVED_IMG", array());
                echo "</a> ";
            }
            // line 80
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_QUEUE", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "DELETED_IMG", array());
                echo "</a> ";
            }
            // line 81
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["recent_topics"], "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_MCP_REPORT", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "REPORTED_IMG", array());
                echo "</a>";
            }
            echo "<br />

\t\t\t\t\t\t";
            // line 83
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 84
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 85
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["recent_topics"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 86
                if (($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["recent_topics"], "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 87
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 88
                if ($this->getAttribute($context["recent_topics"], "REPLIES", array())) {
                    echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["recent_topics"], "REPLIES", array());
                    echo "</strong></span>";
                }
                // line 89
                echo "\t\t\t\t\t\t";
            }
            // line 90
            echo "
\t\t\t\t\t\t";
            // line 91
            if (twig_length_filter($this->env, $this->getAttribute($context["recent_topics"], "pagination", array()))) {
                // line 92
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["recent_topics"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 97
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 98
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 105
            echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
            // line 107
            if ($this->getAttribute($context["recent_topics"], "S_HAS_POLL", array())) {
                echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                echo " ";
            }
            // line 108
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["recent_topics"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["recent_topics"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t";
            // line 109
            if (($this->getAttribute($context["recent_topics"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["recent_topics"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 110
$context["recent_topics"], "U_VIEW_FORUM", array()) && $this->getAttribute($context["recent_topics"], "FORUM_NAME", array()))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["recent_topics"], "parent_forums", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["parent_forums"]) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["parent_forums"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["parent_forums"], "FORUM_NAME", array());
                    echo "</a> &raquo; ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["recent_topics"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 111
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 113
            // line 114
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 116
            echo $this->getAttribute($context["recent_topics"], "REPLIES", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 117
            echo $this->getAttribute($context["recent_topics"], "VIEWS", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["recent_topics"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t";
            // line 119
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a href=\"";
                echo $this->getAttribute($context["recent_topics"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                echo "</a> ";
            }
            echo "<br />";
            echo $this->getAttribute($context["recent_topics"], "LAST_POST_TIME", array());
            echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>

\t";
            // line 124
            if ($this->getAttribute($context["recent_topics"], "S_LAST_ROW", array())) {
                // line 125
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 129
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 133
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent_topics'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
";
        // line 138
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) && (isset($context["RT_ALT_LOCATION"]) ? $context["RT_ALT_LOCATION"] : null))) {
            // line 139
            echo "<div class=\"action-bar\">
\t<div class=\"pagination\">
\t\t";
            // line 141
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "@paybas_recenttopics/recent_topics_body.html", 141)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 142
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_recenttopics/recent_topics_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 142,  459 => 141,  455 => 139,  453 => 138,  450 => 137,  440 => 133,  436 => 131,  430 => 129,  424 => 125,  422 => 124,  404 => 119,  396 => 118,  390 => 117,  384 => 116,  380 => 114,  379 => 113,  375 => 111,  352 => 110,  342 => 109,  333 => 108,  328 => 107,  324 => 105,  319 => 102,  313 => 101,  303 => 99,  301 => 98,  295 => 97,  288 => 96,  285 => 95,  281 => 94,  277 => 92,  275 => 91,  272 => 90,  269 => 89,  260 => 88,  257 => 87,  245 => 86,  231 => 85,  228 => 84,  226 => 83,  214 => 81,  205 => 80,  196 => 79,  179 => 78,  178 => 77,  175 => 76,  169 => 75,  158 => 74,  154 => 73,  134 => 72,  131 => 71,  122 => 65,  118 => 64,  114 => 63,  106 => 57,  104 => 56,  62 => 16,  56 => 12,  53 => 11,  48 => 10,  45 => 9,  40 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@paybas_recenttopics/recent_topics_body.html", "");
    }
}
