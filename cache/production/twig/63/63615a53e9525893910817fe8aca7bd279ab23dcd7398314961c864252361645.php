<?php

/* @cece74_sidebar/sidebar.html */
class __TwigTemplate_2cc2d6c16c85f1bd0579177653cc7a614e744f4dd01b1b28fb4f1c8b2ef0fe31 extends Twig_Template
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
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 2
            echo "<div class=\"forabg\">
<div class=\"inner\"><span class=\"corners-top\"><span></span></span>

<ul class=\"topiclist forums\">

<div>

<div id=\"newsrss\"></div>

<script type=\"text/javascript\">
httpRequest(\"newsrss.php\", showrecent);
function showrecent(WIDGET){
 d = document.getElementById('newsrss');
 d.innerHTML = WIDGET;
}

function httpRequest(url, callback) {
  var httpObj = false;
  if (typeof XMLHttpRequest != 'undefined') {
    httpObj = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    try{
      httpObj = new ActiveXObject('Msxml2.XMLHTTP');
    } catch(e) {
      try{
        httpObj = new ActiveXObject('iMicrosoft.XMLHTTP');
      } catch(e) {}
    }
  }
  if (!httpObj) return;
  httpObj.onreadystatechange = function() {
    if (httpObj.readyState == 4) { // when request is complete
      callback(httpObj.responseText);
    }
  };
  httpObj.open('GET', url, true);
  httpObj.send(null);
}
</script>

</div>
</ul>
</div>
</div>

";
        }
        // line 47
        echo "\t";
    }

    public function getTemplateName()
    {
        return "@cece74_sidebar/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 47,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@cece74_sidebar/sidebar.html", "");
    }
}
