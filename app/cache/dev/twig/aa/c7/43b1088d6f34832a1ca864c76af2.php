<?php

/* AcmeUserBundle:Default:sell.html.twig */
class __TwigTemplate_aac743b1088d6f34832a1ca864c76af2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/backgroundarticle.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"row article\">
  
<div class=\"fos_user_agora\">
    <div class=\"six columns offset-by-one form\">
        <form  action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sell_new"), "html", null, true);
        echo "\" method=\"post\"  class=\"nice\">
\t\t<h4>Πώληση προϊόντος</h4>
\t\t\t<table><tr>
\t\t\t<td>Ποσότητα:</td><td><input type=\"text\" name=\"quantity\" /></td><td>κιλά</td></tr>
\t\t\t<tr><td>Ελάχιστη ποσότητα αγοράς:</td><td><input type=\"text\" name=\"min_quantity\" /><td>κιλά</td></td></tr>
\t\t\t<tr><td>Τιμή:</td><td><input type=\"text\" name=\"price\" /></td><td>ευρώ</td></tr>
\t\t\t<tr><td>Προέλευση:</td><td><input type=\"text\" name=\"origin\" /></td></tr>
\t\t\t<input type=\"hidden\" name=\"agor\" value=\"0\" />
\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "id"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 23
            echo "<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "            <tr><td></td><td><input type=\"submit\" /></td></tr></table>
        </form>
    </div>
</div>
</div>
";
    }

    // line 32
    public function block_sidebar($context, array $blocks = array())
    {
        // line 33
        echo "<div class=\"three colums nava\">
\t<div class=\"art-vmenublock\">
\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublock-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"art-vmenu\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pazari\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αρχική</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Προφίλ</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"price\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Τιμοκατάλογος</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"logout\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αποσύνδεση</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:sell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
