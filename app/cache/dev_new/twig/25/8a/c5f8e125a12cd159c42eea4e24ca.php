<?php

/* AcmeUserBundle:Default:price.html.twig */
class __TwigTemplate_258ac5f8e125a12cd159c42eea4e24ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Τιμοκατάλογος
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/backgroundarticle.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"row header\">
<div class=\"twelve columns\">
<h3> Τιμοκατάλογος </h3>
</div>
</div>
<div class=\"row article\">
   <img  src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/price.jpg"), "html", null, true);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
