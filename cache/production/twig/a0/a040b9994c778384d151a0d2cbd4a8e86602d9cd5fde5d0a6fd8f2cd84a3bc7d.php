<?php

/* manage_pages.html */
class __TwigTemplate_203d92badc37908f99a8a88fd77d6979df3a7dc6743ba2e5f390346def68c4b9 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "manage_pages.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (((isset($context["S_ADD_PAGE"]) ? $context["S_ADD_PAGE"] : null) || (isset($context["S_EDIT_PAGE"]) ? $context["S_EDIT_PAGE"] : null))) {
            // line 6
            echo "
\t";
            // line 7
            $asset_file = "@phpbb_pages/scripts.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('41');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 8
            echo "
\t<script>
\t\tvar form_name = 'add_edit_page';
\t\tvar text_name = 'page_content';
\t\tvar load_draft = false;
\t\tvar upload = false;
\t\tvar imageTag = false;
\t</script>

\t<a href=\"";
            // line 17
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t";
            // line 19
            if ((isset($context["S_ADD_PAGE"]) ? $context["S_ADD_PAGE"] : null)) {
                // line 20
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_CREATE_PAGE");
                echo "</h1>

\t\t<p>";
                // line 22
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_CREATE_PAGE_EXPLAIN");
                echo "</p>
\t";
            } else {
                // line 24
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_EDIT_PAGE");
                echo " :: ";
                echo (isset($context["PAGES_TITLE"]) ? $context["PAGES_TITLE"] : null);
                echo "</h1>

\t\t<p>";
                // line 26
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_EDIT_PAGE_EXPLAIN");
                echo "</p>
\t";
            }
            // line 28
            echo "
\t";
            // line 29
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 30
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 31
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 32
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 35
            echo "
\t<form id=\"add_edit_page\" method=\"post\" action=\"";
            // line 36
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_SETTINGS");
            echo "</legend>
\t\t\t";
            // line 39
            if ((isset($context["S_EDIT_PAGE"]) ? $context["S_EDIT_PAGE"] : null)) {
                // line 40
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                // line 41
                echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_VIEW_PAGE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
                echo "</label></dt>
\t\t\t\t\t<dd><a href=\"";
                // line 42
                echo (isset($context["U_VIEW_PAGE"]) ? $context["U_VIEW_PAGE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_VIEW");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 45
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_title\">";
            // line 46
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_TITLE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_TITLE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"page_title\" name=\"page_title\" value=\"";
            // line 47
            echo (isset($context["PAGES_TITLE"]) ? $context["PAGES_TITLE"] : null);
            echo "\" maxlength=\"200\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_description\">";
            // line 50
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_DESC") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_DESC_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"page_description\" name=\"page_description\" value=\"";
            // line 51
            echo (isset($context["PAGES_DESCRIPTION"]) ? $context["PAGES_DESCRIPTION"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_route\">";
            // line 54
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_ROUTE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_ROUTE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"page_route\" name=\"page_route\" value=\"";
            // line 55
            echo (isset($context["PAGES_ROUTE"]) ? $context["PAGES_ROUTE"] : null);
            echo "\" maxlength=\"200\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 59
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_CONTENT");
            echo "</legend>
\t\t\t";
            // line 60
            if ((isset($context["S_REPLACE_PAGES_EDITOR"]) ? $context["S_REPLACE_PAGES_EDITOR"] : null)) {
                // line 61
                echo "\t\t\t\t";
                // line 62
                echo "\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t<p>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_CONTENT_EXPLAIN");
                echo "</p>
\t\t\t\t";
                // line 64
                $this->loadTemplate("acp_posting_buttons.html", "manage_pages.html", 64)->display($context);
                // line 65
                echo "\t\t\t\t<dl class=\"responsive-columns\">
\t\t\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dt>
\t\t\t\t\t<dd style=\"margin-";
                // line 67
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ": 90px;\">
\t\t\t\t\t\t<textarea name=\"page_content\" rows=\"25\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
                // line 68
                echo (isset($context["PAGES_CONTENT"]) ? $context["PAGES_CONTENT"] : null);
                echo "</textarea>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd style=\"margin-";
                // line 70
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ": 90px; margin-top: 5px;\">
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-off\" name=\"parse_bbcode\"";
                // line 71
                if ((isset($context["S_PARSE_BBCODE_CHECKED"]) ? $context["S_PARSE_BBCODE_CHECKED"] : null)) {
                    echo " checked=\"checked\"<";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_BBCODE");
                echo "</label>
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-off\" name=\"parse_smilies\"<";
                // line 72
                if ((isset($context["S_PARSE_SMILIES_CHECKED"]) ? $context["S_PARSE_SMILIES_CHECKED"] : null)) {
                    echo " checked=\"checked\"<";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_SMILIES");
                echo "</label>
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-off\" name=\"parse_magic_url\"<";
                // line 73
                if ((isset($context["S_PARSE_MAGIC_URL_CHECKED"]) ? $context["S_PARSE_MAGIC_URL_CHECKED"] : null)) {
                    echo " checked=\"checked\"<";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_URLS");
                echo "</label>
\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio html-on\" name=\"parse_html\"";
                // line 74
                if ((isset($context["S_PARSE_HTML_CHECKED"]) ? $context["S_PARSE_HTML_CHECKED"] : null)) {
                    echo " checked=\"checked\"<";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_HTML");
                echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd style=\"margin-";
                // line 76
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ": 90px; margin-top: 10px;\"><strong>";
                echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
                echo " </strong>";
                echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
                echo " :: ";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo " :: ";
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo " :: ";
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo " :: ";
                echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
                echo "</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 79
            echo "\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 81
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_OPTIONS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_template\">";
            // line 83
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_TEMPLATE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_TEMPLATE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"page_template\" id=\"page_template\">
\t\t\t\t\t<option value=\"\">";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_TEMPLATE_SELECT");
            echo "</option>
\t\t\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["page_template_options"]) ? $context["page_template_options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 87
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["option"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["option"], "S_SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["option"], "VALUE", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t</select></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_order\">";
            // line 92
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_ORDER") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_ORDER_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input type=\"number\" id=\"page_order\" min=\"0\" max=\"999999\" name=\"page_order\" value=\"";
            // line 93
            echo (isset($context["PAGES_ORDER"]) ? $context["PAGES_ORDER"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_links\">";
            // line 96
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_LINKS") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_LINKS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"page_links[]\" id=\"page_links\" size=\"10\" multiple=\"multiple\">
\t\t\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["page_link_options"]) ? $context["page_link_options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 99
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["option"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["option"], "S_SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["option"], "LABEL", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t</select></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_icon_font\">";
            // line 104
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_ICON_FONT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_ICON_FONT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input name=\"page_icon_font\" id=\"page_icon_font\" type=\"text\" size=\"15\" maxlength=\"255\" value=\"";
            // line 105
            echo (isset($context["PAGES_ICON_FONT"]) ? $context["PAGES_ICON_FONT"] : null);
            echo "\" placeholder=\"files-o\" /><i style=\"font:16px FontAwesome;margin:0 6px;\" class=\"fa-";
            echo (isset($context["PAGES_ICON_FONT"]) ? $context["PAGES_ICON_FONT"] : null);
            echo "\"></i></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_display\">";
            // line 108
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_DISPLAY") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_DISPLAY_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"page_display\" name=\"page_display\" value=\"1\"";
            // line 109
            if ((isset($context["S_PAGES_DISPLAY"]) ? $context["S_PAGES_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"page_display\" value=\"0\"";
            // line 110
            if ( !(isset($context["S_PAGES_DISPLAY"]) ? $context["S_PAGES_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"page_guest_display\">";
            // line 113
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_GUESTS") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_FORM_GUESTS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"page_guest_display\" name=\"page_guest_display\" value=\"1\"<";
            // line 114
            if ((isset($context["S_PAGES_GUEST_DISPLAY"]) ? $context["S_PAGES_GUEST_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"page_guest_display\" value=\"0\"";
            // line 115
            if ( !(isset($context["S_PAGES_GUEST_DISPLAY"]) ? $context["S_PAGES_GUEST_DISPLAY"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 119
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 120
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t\t";
            // line 121
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t</form>

";
        } else {
            // line 126
            echo "
\t<h1>";
            // line 127
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_MANAGE");
            echo "</h1>

\t<p>";
            // line 129
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_MANAGE_EXPLAIN");
            echo "</p>

\t<form id=\"pages_purge_icons\" method=\"post\" action=\"";
            // line 131
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 133
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_OPTIONS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_purge_icon_cache\">";
            // line 135
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_PURGE_ICONS_LABEL");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_PURGE_ICONS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"button2\" type=\"submit\" id=\"action_purge_icon_cache\" name=\"action_purge_icon_cache\" value=\"";
            // line 136
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_PURGE_ICONS");
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"purge_icons\" />
\t\t</fieldset>
\t</form>

\t<table class=\"table1 zebra-table fixed-width-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 145
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_TITLE");
            echo "</th>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 146
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_DESCRIPTION");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 147
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_ROUTE");
            echo "</th>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 148
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_TEMPLATE");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 149
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_ORDER");
            echo "</th>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 150
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_STATUS");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 151
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_LINK");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 152
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 157
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><strong>";
                // line 158
                echo $this->getAttribute($context["page"], "PAGES_TITLE", array());
                echo "</strong></td>
\t\t\t\t\t<td>";
                // line 159
                echo $this->getAttribute($context["page"], "PAGES_DESCRIPTION", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 160
                echo $this->getAttribute($context["page"], "PAGES_ROUTE", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 161
                echo $this->getAttribute($context["page"], "PAGES_TEMPLATE", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 162
                echo $this->getAttribute($context["page"], "PAGES_ORDER", array());
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 164
                if (($this->getAttribute($context["page"], "S_PAGES_DISPLAY", array()) && $this->getAttribute($context["page"], "S_PAGES_GUEST_DISPLAY", array()))) {
                    // line 165
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_PUBLISHED");
                    echo "
\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 166
$context["page"], "S_PAGES_DISPLAY", array())) {
                    // line 167
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_PUBLISHED_NO_GUEST");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 169
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_PRIVATE");
                    echo "
\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td><a href=\"";
                // line 172
                echo $this->getAttribute($context["page"], "U_PAGES_ROUTE", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_VIEW");
                echo "</a></td>
\t\t\t\t\t<td><a href=\"";
                // line 173
                echo $this->getAttribute($context["page"], "U_EDIT", array());
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["page"], "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a></td>
\t\t\t\t</tr>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 176
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\" style=\"text-align: center;\">";
                // line 177
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_EMPTY");
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t</tbody>
\t</table>

\t<form id=\"pages_add_page\" method=\"post\" action=\"";
            // line 183
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"addpage\" value=\"";
            // line 185
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_PAGES_CREATE_PAGE");
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
            // line 187
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t</form>

";
        }
        // line 192
        echo "
";
        // line 193
        $this->loadTemplate("overall_footer.html", "manage_pages.html", 193)->display($context);
    }

    public function getTemplateName()
    {
        return "manage_pages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 193,  611 => 192,  603 => 187,  598 => 185,  593 => 183,  588 => 180,  579 => 177,  576 => 176,  562 => 173,  556 => 172,  553 => 171,  547 => 169,  541 => 167,  539 => 166,  534 => 165,  532 => 164,  527 => 162,  523 => 161,  519 => 160,  515 => 159,  511 => 158,  508 => 157,  503 => 156,  496 => 152,  492 => 151,  488 => 150,  484 => 149,  480 => 148,  476 => 147,  472 => 146,  468 => 145,  456 => 136,  450 => 135,  445 => 133,  440 => 131,  435 => 129,  430 => 127,  427 => 126,  419 => 121,  415 => 120,  411 => 119,  400 => 115,  392 => 114,  386 => 113,  376 => 110,  368 => 109,  362 => 108,  354 => 105,  348 => 104,  343 => 101,  328 => 99,  324 => 98,  317 => 96,  311 => 93,  305 => 92,  300 => 89,  285 => 87,  281 => 86,  277 => 85,  270 => 83,  265 => 81,  261 => 79,  243 => 76,  234 => 74,  226 => 73,  218 => 72,  210 => 71,  206 => 70,  201 => 68,  197 => 67,  193 => 65,  191 => 64,  186 => 63,  183 => 62,  181 => 61,  179 => 60,  175 => 59,  168 => 55,  162 => 54,  156 => 51,  150 => 50,  144 => 47,  138 => 46,  135 => 45,  127 => 42,  123 => 41,  120 => 40,  118 => 39,  114 => 38,  109 => 36,  106 => 35,  100 => 32,  96 => 31,  93 => 30,  91 => 29,  88 => 28,  83 => 26,  75 => 24,  70 => 22,  64 => 20,  62 => 19,  53 => 17,  42 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "manage_pages.html", "");
    }
}
