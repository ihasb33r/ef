<?php

/* AcmeUserBundle:Default:buy_new.html.twig */
class __TwigTemplate_a56a510efc2f4ad58eb7fab1111e7c85 extends Twig_Template
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
        return "AcmeUserBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/backgroundarticle.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"row article\"><div class=\"six columns offset-by-one\">
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "kod"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "<h6>Η αγορά σας πραγματοποιήθηκε επιτυχώς</h6>
<h6>Ο κωδικός αγοράς σας είναι: 000000";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</h6>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "
</form>
</div>
</div>
";
    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"three colums nava\">
\t<div class=\"art-vmenublock\">
\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublock-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"art-vmenu\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pazari\" class=\"active\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αρχική</span></a></li>
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
        return "AcmeUserBundle:Default:buy_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
